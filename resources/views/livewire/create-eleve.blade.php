<div class="p-2 bg-white shadow-sm">
    <form method="POST" wire:submit.prevent="store">
        @csrf
        @method('post')

        @if (Session::get('error'))
            <div class="p-5">
                <div class="p-4 border-red-500 bg-red-400 animate-bounce text-white">
                    {{ Session::get('error') }}
                </div>
            </div>
        @endif
        <div class="p-5">
            <x-label value="{{ __('Matricule') }}" />
            <input type="text"
                class="block mt-1 rounded-md border-gray-300 w-full @error('matricule') border-red-500 bg-red-100 animate-bounce @enderror"
                wire:model="matricule">

            @error('matricule')
                <div class="text text-red-500 mt-1">{{$message}}</div>
            @enderror
        </div>
        <div class="p-5">
            <x-label value="{{ __('Nom') }}" />
            <input type="text"
                class="block mt-1 rounded-md border-gray-300 w-full @error('nom') border-red-500 bg-red-100 animate-bounce @enderror"
                wire:model="nom">

            @error('nom')
                <div class="text text-red-500 mt-1">{{$message}}</div>
            @enderror
        </div>
        <div class="p-5">
            <x-label value="{{ __('Prénom') }}" />
            <input type="text"
                class="block mt-1 rounded-md border-gray-300 w-full @error('prenom') border-red-500 bg-red-100 animate-bounce @enderror"
                wire:model="prenom">

            @error('prenom')
                <div class="text text-red-500 mt-1">{{$message}}</div>
            @enderror
        </div>
        <div class="p-5">
            <x-label value="{{ __('Date de Naissance') }}" />
            <input type="date"
                class="block mt-1 rounded-md border-gray-300 w-full @error('naissance') border-red-500 bg-red-100 animate-bounce @enderror"
                wire:model="naissance">

            @error('naissance')
                <div class="text text-red-500 mt-1">{{$message}}</div>
            @enderror
        </div>
        <div class="p-5">
            <x-label value="{{ __('Contact du parent') }}" />
            <input type="text"
                class="block mt-1 rounded-md border-gray-300 w-full @error('contact_parent	') border-red-500 bg-red-100 animate-bounce @enderror"
                wire:model="contact_parent">

            @error('contact_parent	')
                <div class="text text-red-500 mt-1">{{$message}}</div>
            @enderror
        </div>

        <div class="p-5 flex justify-between items-center">
            <button class="bg-red-600 p-3 rounded-sm text-white text-sm">Annuler</button>
            <button type="submit" class="bg-green-600 p-3 rounded-sm text-white text-sm">Ajouter</button>
        </div>
    </form>
</div>
