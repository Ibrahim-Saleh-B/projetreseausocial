<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Saryo') }}
        </h2>
    </x-slot>

    <div class="row float-left">
        <div class="col">
            <a href="{{ route('dashboard') }}">Retour à l'accueil</a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="height: 600px; width: 600px;">
                <div class="card-header">{{ __('Chat') }}</div>

                <div class="card-body">
                    <div id="recuperationMessages"></div>
                </div>

            </div>
            {{ Form::text('', '',array(
                'name' => 'message',
                'id' => 'champMessage',
                'class' => 'mt-3',
                'autocomplete' => 'off',
                'size' => '50'
                )) }}
            <input type="submit" value="Envoyer">
        </div>
    </div>
</x-app-layout>
