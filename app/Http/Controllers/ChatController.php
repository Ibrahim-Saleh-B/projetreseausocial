<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\ChatReseauSocial;
use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function envoiMessage(Request $request) {

        //Vérifie si une conversation existe déjà
        $nouvelleConversation = false;

        if ($nouvelleConversation) {

        $conversation = Conversation::create([
                'nom_ami' => $request->idClient,
                'ami_id' => "$request->prenomClient $request->nomClient",
                'user_id' => Auth::user()->id
            ]);

        }

        Message::create([
            'type' => 'Q',
            'libelle' => $request->message,
            'conversation_id' => $conversation->id,
        ]);

        if ($nouvelleConversation) {

            $premierMessage = Message::create([
                                    'type' => 'R',
                                    'libelle' => 'Bonjour, un conseiller va vous répondre dans quelques instants',
                                    'conversation_id' => $conversation->id,
                                ]);
        }
        // broadcast(new ChatReseauSocial())

    }
}
