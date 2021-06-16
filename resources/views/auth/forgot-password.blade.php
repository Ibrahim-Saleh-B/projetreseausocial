<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <center><img class="mb-3" src="{{ asset('storage/images/Saryo.png')}}" height="300" width="300"></center>
        </x-slot>

        <div class="card-body">

            <div class="mb-3">
                {{ __('Mot de passe oublié ? Aucun problème. Entrez votre email et nous vous enverrons un lien de réinitialisation de mot de passe pour que vous puissez en choisir un autre.') }}
            </div>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <x-jet-validation-errors class="mb-3" />

            <form method="POST" action="/forgot-password">
                @csrf

                <div class="form-group">
                    <x-jet-label value="Email" />
                    <x-jet-input type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="d-flex justify-content-end mt-4">
                    <x-jet-button>
                        {{ __('Envoyer') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
