<?php

namespace App\Http\Controllers;

use App\Models\admin_collaborator;
use App\Models\Collaborator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CollaboratorController extends Controller
{
    public function index() {
        $AllUser = admin_collaborator::where('admin_id',Auth::id())->get();
        foreach ($AllUser as $user){
            $tabUser[] = User::where("id", $user->collaborator_id)->get();
        }
        dd($tabUser);
        return view("lives.index", compact("lives"));
     }
}
