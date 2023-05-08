<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editer Niveau') }}
        </h2>
    </x-slot>

    <div class="py-12 px-12">
        @livewire('edit-level', ['level'=>$level])
    </div>
</x-app-layout>
