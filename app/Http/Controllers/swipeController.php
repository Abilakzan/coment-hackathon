<?php

namespace App\Http\Controllers;

use App\Models\joueur_question as JoueurQuestion;
use App\Models\Question;
use App\Models\User;
use Dotenv\Util\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class swipeController extends Controller
{
    public function index() {

        $allQuestion = Question::all();
        // dd(count($allQuestion));
        if(JoueurQuestion::where("id_question", 1)->where("id_joueur", Auth::id())->exists()) {
            if(JoueurQuestion::where("reponse", "null")->exists()){
                $getIDActualQuestion = JoueurQuestion::where('reponse', 'null')->firstOrFail();
                $getActualQuestion = Question::where("id", $getIDActualQuestion->id_question)->firstOrFail();
                JoueurQuestion::where('id_question', $getIDActualQuestion->id_question)->update(['avancement' => ($getIDActualQuestion->id_question / count($allQuestion))*100]);
                return view("games.swipe", ['question' => $getActualQuestion,
                'idallquestion' => count($allQuestion),
                'idquestion' => $getIDActualQuestion->id_question,
                'calculProgress' => $getIDActualQuestion->id_question / count($allQuestion)
            ]);
            }
            //placer les résultats ici;
            $my_user = User::where("id", Auth::id())->firstOrFail();
            // $avancementJoueur = $my_user->avancement + 25;
            // User::where("id", Auth::id())->update(['avancement' => $avancementJoueur]);
            return redirect(route("gamesresult"));
        } else {
            foreach($allQuestion as $question) {
                $joueurquestion = new JoueurQuestion;
                $joueurquestion->id_question = $question->id;
                $joueurquestion->id_joueur = Auth::id();
                $joueurquestion->reponse = 'null';
                // $joueurquestion->avancement = 'null';
                $joueurquestion->save();
            }
            return redirect(route("gamesswipe"));
        }
    }

    public function postResult(Request $request){
        $response = $request->reponse;
        $idQuestion = $request->question;
        JoueurQuestion::where("id_question", $idQuestion)->update(['reponse' => $response]);
        return redirect(route("gamesswipe"));
    }
    public function result(){
       $numberYes = JoueurQuestion::where("reponse", "oui")->get();
       if(count($numberYes) > 5) {
        $text = "Vous faites partie des personnes qui contribuent encore au sexisme en France, mais rien n’est perdu encore, l’objectif
        de cette auto-évaluation est de vous faire prendre conscience de l’impact de votre communication sexiste. Il est temps de
        changer dès à présent! Consultez point par point le mode d’emploi afin de mieux comprendre l’importance de véhiculer une
        communication non sexiste et d’apprendre à vous poser les bonnes questions.";
    } else if (count($numberYes) > 1 && count($numberYes) < 6){
        $text = "Des progrès s’imposent, mais le sexisme est tellement ancré dans les usages et le langage qu’il est facile de déraper!
        Analysez attentivement les messages et les images utilisés dans votre communication, puis réenvisagez vos objectifs et
        vos cibles en vous aidant de l’ensemble du kit de communication non sexiste. Vous allez certainement voir les choses
        autrement…";
    } else if (count($numberYes) == 1) {
        $text = "Votre communication n’est pas exempte de stéréotype de sexe. Courage, le but est proche… Un « OUI » de moins, et votre
        communication sera progressiste ! Faites un tour dans le document « Check-list: pour aller plus loin » pour voir comment
        vous auriez pu améliorer votre score et éviter ce OUI si décevant.";
    } else {
        $text = "Bravo ! Vous êtes attentif.ve à l’information que vous véhiculez au travers de votre communication. Non seulement le résultat
        ne véhicule pas de représentations dégradantes ou stigmatisantes, mais vous contribuez également à promouvoir l’égalité
        entre les femmes et les hommes dans la société par une communication juste et non sexiste.";
    }
       if(count($numberYes) <= 4) {
        $diplome = 'oui';
       } else {
        $diplome = 'non';
       }
        return view("games.result", ['texteFinal' => $text, 'diplome' => $diplome]);
    }
    public function formation() {
        $valueInitial = 50;
        $myuser = JoueurQuestion::where('id_joueur', Auth::id())->where('avancement', '!=', 'null')->orderBy('updated_at','DESC')->first();
        $scorefinal = $myuser->avancement/2 + $valueInitial;
        return view('formation', ['value' => $scorefinal]);
    }
}
