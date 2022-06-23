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
        if(JoueurQuestion::where("id_question", 1)->exists()) {
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
        return view("games.result", ['nboui' => count($numberYes)]);
    }

}
