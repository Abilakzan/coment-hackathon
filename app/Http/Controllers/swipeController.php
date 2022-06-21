<?php

namespace App\Http\Controllers;

use App\Models\joueur_question as JoueurQuestion;
use App\Models\Question;
use Dotenv\Util\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class swipeController extends Controller
{
    public function index() {

        $allQuestion = Question::all();
        if(JoueurQuestion::where("id_question", 1)->exists()) {
            if(JoueurQuestion::where("reponse", "null")->exists()){
                $getIDActualQuestion = JoueurQuestion::where('reponse', 'null')->firstOrFail();
                $getActualQuestion = Question::where("id", $getIDActualQuestion->id_question)->firstOrFail();
                return view("games.swipe", ['question' => $getActualQuestion]);
            }
            //placer les résultats ici;
            dd("ici");
        } else {
            foreach($allQuestion as $question) {
                $joueurquestion = new JoueurQuestion;
                $joueurquestion->id_question = $question->id;
                $joueurquestion->id_joueur = Auth::id();
                $joueurquestion->reponse = 'null';
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
}
