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
        $tabUser = [];
        $my_User = User::where('id', Auth::id())->firstOrFail();
        $AllUser = admin_collaborator::where('admin_id',Auth::id())->get();
        foreach ($AllUser as $user){
            $tabUser[] = User::where("id", $user->collaborator_id)->get();
        }
        return view("collaborator", ['collaborator' => $tabUser, 'my_user' => $my_User]);
     }
}
