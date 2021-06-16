<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function outilDeRecherche(Request $request) {

        $utilisateurRechercher = User::where('name', '=', $request->nomRechercher)
                                        ->get();

        return view('profilRechercher.rechercherUtilisateur')->with([
            'utilisateurRechercher' => $utilisateurRechercher
        ]);
    }
}
