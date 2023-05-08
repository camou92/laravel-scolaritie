<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editer un éléve') }}
        </h2>
    </x-slot>

    <div class="py-12 px-12">
        @livewire('edit-eleve', ['students'=>$student])
    </div>
</x-app-layout>
