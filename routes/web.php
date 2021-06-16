<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ProfileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('dashboard');
// });



Route::middleware('web', 'auth')->group(function () {

    Route::get('/', [PublicationController::class, 'index']);
    Route::get('/dashboard', [PublicationController::class, 'index'])->name('dashboard');

    /**
     * Publications
     */
    Route::post('/dashboard/publication', [PublicationController::class, 'postPubilcaiton'])->name('publication.post');
    Route::get('/dashboard/affichagePublication', [PublicationController::class, 'affichagePublication'])->name('publication.affichage');

    /**
     * Chat
     */
    Route::get('/chat', function () {
            return view('chat');
        });

    /**
     * Profil
     */
    Route::get('/profile', [ProfileController::class, 'outilDeRecherche'])->name('profile.outilDeRecherche');



});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
