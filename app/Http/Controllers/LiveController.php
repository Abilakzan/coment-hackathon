<?php

namespace App\Http\Controllers;

use App\Models\Live;
use Illuminate\Http\Request;

class LiveController extends Controller
{
    public function index() {
        $lives = Live::latest()->get();
        return view("lives.index", compact("lives"));
     }

    public function create() {
        return view("lives.edit");
    }

    public function store(Request $request) {

        Live::create([
            "date_debut" => "2022-06-17 06:00:00",
            "date_fin" => "2022-06-17 09:00:00",
            "titre" => $request->title,
            "description" => $request->content,
        ]);

        return redirect(route("lives.index"));
     }

    public function show(Live $live) {
        return view("lives.show", compact("live"));
     }

    public function edit(Live $live) {
        return view("lives.edit", compact("live"));

     }

    public function update(Request $request, Live $live) {
        $live->update([
            "titre" => $request->title,
            "description" => $request->content
        ]);
     }

    public function destroy(Live $live) {
        dd($live->get());
            // On les informations du $post de la table "posts"
    $live->delete();

    // Redirection route "lives.index"
    return redirect(route('lives.index'));
    }
}
