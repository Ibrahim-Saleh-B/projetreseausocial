<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Saryo') }}
        </h2>
    </x-slot>

    <div class="row offset-2">
        <div class="col-md-6">
            <form action="{{ route('publication.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
               <input type="text" name="description" size="40" autocomplete="off"  placeholder="Votre publication...">
               <input type="file" name="imagePublications">
               <input type="submit" name="envoiPublications" value="Publier">
            </form>
        </div>

        <div class="col-md-6 border-left py">
            <form action="{{ route('profile.outilDeRecherche') }}" method="GET" enctype="multipart/form-data">
            @csrf
               <input type="text" name="nomRechercher" size="40" autocomplete="off" placeholder="Rechercher un utilisateur...">
               <input type="submit" id="rechercherUtilisateur" value="Rechercher">
            </form>
            <div id="utilisateurInexistant"></div>
        </div>
    </div>


    @foreach($usersPublications as $usersPublication)
    <div class="row offset-2 mt-5">
        <div class="col-md-6">
            Posté par : <b>{{ $usersPublication->prenom }}</b> <br>
            Description : {{ $usersPublication->description }} <br>
            <img src="{{ asset('storage/images/'.$usersPublication->image_path)}}" height="450" width="500"> <br>

            Commentaires : <input type="text" name="commentaires" size="45" class="mt-3">
        </div>
    </div>
    @endforeach

</x-app-layout>

<script>

    // $.ajaxSetup({
    //     headers: {

    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // })

    // /**
    //  * Outil de recherche (gestion de lorsqu'un utilisateur n'a pas été trouver)
    // */
    // $('#rechercherUtilisateur').click(function () {

    //     gestionErreurOutilDeRecherche()
    // })

    // function gestionErreurOutilDeRecherche() {

    //     $.ajax({

    //             url: ('/profile'),
    //             type: 'get',
    //         })
    //         .done(function(reponse) {
    //             console.log(reponse)
    //         })
    //         .fail()
    // }

</script>

