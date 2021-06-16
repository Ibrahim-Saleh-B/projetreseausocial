<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

class PublicationController extends Controller
{

    public function index() {

        $usersPublications = $this->affichagePublication();

        return view('dashboard')->with([

            'usersPublications' => $usersPublications,
        ]);
    }

    public function postPubilcaiton(Request $request) {

        $description = $request->description;
        $image_path = $request->file('imagePublications')->getClientOriginalName();

        $request->file('imagePublications')->storeAs('public/images/', $image_path);

        Publication::create([

            'description' => $description,
            'image_path' => $image_path,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('dashboard');
    }

    public function affichagePublication() {

        $usersPublications = Publication::join('users', 'publications.user_id', 'users.id')
                                        ->where('user_id', Auth::user()->id)
                                        ->select('users.prenom', 'publications.description', 'publications.image_path')
                                        ->orderBy('publications.id', 'desc')
                                        ->get();

        return $usersPublications;
    }
}
