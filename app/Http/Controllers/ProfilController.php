<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function profil(Request $request) {
        $userProfil = User::where("id", Auth::id())->firstOrFail();
        return view("profil", ['profil' => $userProfil]);
    }

    public function updateProfil(Request $request) {
        if ($request->hasFile('file')) {
            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('profilPicture', 'public');
            dd("entre dedans");
            User::where('id', Auth::id())->update(['photo' => $request->file->hashname]);
            // Store the record, using the new file hashname which will be it's new filename identity.
            // $product = new Product([
            //     "name" => $request->get('name'),
            //     "file_path" => $request->file->hashName()
            // ]);
            // $product->save(); // Finally, save the record.
        }

        return view('products.create');

    }


}
