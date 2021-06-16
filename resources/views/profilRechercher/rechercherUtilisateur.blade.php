<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Saryo') }}
        </h2>
    </x-slot>

    <div class="row text-center">
        <div class="col">
            @foreach($utilisateurRechercher as $user)
                 <img class="rounded-circle mx-auto d-block" width="250" height="250" src="{{ $user->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                 <div class="mt-5">
                    Nom : <b>{{ $user->name }}</b> <br>
                    Prenom : <b> {{ $user->prenom }} </b> <br>
                    Centres d'intérêts : <b> {{ $user->centre_interets }} </b>
                 </div>
           @endforeach
        </div>
    </div>

    <div class="row text-center mt-5">
        <div class="col">
            <input type="submit" value="Envoyer une demande d'ami">
        </div>
    </div>


</x-app-layout>


