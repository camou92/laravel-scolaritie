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
            <x-label value="{{ __('Code') }}" />
            <input type="text"
                class="block mt-1 rounded-md border-gray-300 w-full @error('code') border-red-500 bg-red-100 animate-bounce @enderror"
                wire:model="code">

            @error('code')
                <div class="text text-red-500 mt-1">{{$message}}</div>
            @enderror
        </div>
        <div class="p-5">
            <x-label value="{{ __('Libelle') }}" />
            <input type="text"
                class="block mt-1 rounded-md border-gray-300 w-full @error('libelle') border-red-500 bg-red-100 animate-bounce @enderror"
                wire:model="libelle">

            @error('libelle')
                <div class="text text-red-500 mt-1">{{$message}}</div>
            @enderror
        </div>
        <div class="p-5">
            <x-label value="{{ __('Montant de la scolarite') }}" />
            <input type="text"
                class="block mt-1 rounded-md border-gray-300 w-full @error('scolarite') border-red-500 bg-red-100 animate-bounce @enderror"
                wire:model="scolarite">

            @error('scolarite')
                <div class="text text-red-500 mt-1">{{$message}}</div>
            @enderror
        </div>

        <div class="p-5 flex justify-between items-center">
            <button class="bg-red-600 p-3 rounded-sm text-white text-sm">Annuler</button>
            <button type="submit" class="bg-green-600 p-3 rounded-sm text-white text-sm">Mettre à jour</button>
        </div>
    </form>
</div>