<div class="mt-5">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
        {{-- Titre et Button crée --}}
        <div class="flex justify-between items-center">
            <div class="w-1/3">
                <input type="text" class="block mt-1 rounded-md border-gray-300 w-full" placeholder="Rechercher"
                    wire:model="search">
            </div>
            <a href="{{ route('settings.create_school_year') }}" class="bg-blue-500 rounded-md p-2 text-sm text-white">
                Nouvelle Année Scolaire
            </a>
        </div>

        <div class="flex flex-col">
            {{-- Message qui apparaitra aprés opération --}}


            @if (Session::get('success'))
                <div class="p-5">
                    <div class="block p-2 bg-green-500 text-white rounded-sm shadow-sm mt-2">
                        {{ Session::get('success') }}
                    </div>
                </div>
            @endif
        </div>

        <div class="overflow-x-auto">
            <div class="py-4 inline-block min-w-full">
                <div class="overflow-hidden">
                    <table class="min-w-full text-center">
                        <thead class="border-b bg-gray-50">
                            <tr>
                                <th class="text-sm font-medium text-gray-900 px-6 py-6">Id</th>
                                <th class="text-sm font-medium text-gray-900 px-6 py-6">Année Scolaire</th>
                                <th class="text-sm font-medium text-gray-900 px-6 py-6">Statut</th>
                                <th class="text-sm font-medium text-gray-900 px-6 py-6">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($schoolYearList as $item)
                                <tr class="border-b-2 border-gray-100">
                                    <td class="text-sm font-medium text-gray-900 px-6 py-6">{{ $item->id }}</td>
                                    <td class="text-sm font-medium text-gray-900 px-6 py-6">{{ $item->shool_year }}</td>
                                    <td class="text-sm font-medium text-gray-900 px-6 py-6">
                                        @if ($item->active >= 1)
                                            <span class="p-1 bg-green-400 text-sm text-white rounded-sm">Actif</span>
                                        @else
                                            <span class="p-1 bg-red-400 text-sm text-white rounded-sm">Inactif</span>
                                        @endif
                                    </td>
                                    <td class="text-sm font-medium text-gray-900 px-6 py-6">
                                            <button class="p-2 text-white {{ $item->active == 1 ? 'bg-red-400' : 'bg-green-400'}} rounded-sm" wire:click='toggleStatus({{ $item->id}})'>
                                                {{ $item->active == 1 ? 'Rendre inactif' : 'Rendre actif'}}
                                            </button>
                                    </td>
                                </tr>
                            @empty
                                <tr class="w-full">
                                    <td class="flex-1 w-full items-center justify-center" colspan="4">
                                        <p class="flex justify-center content-center p-4">
                                            <img src="{{ asset('no-data.png')}}" alt="" class="w-20 h-20">
                                        <div>Aucun élément trouvé !</div>
                                        </p>
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>

                    {{-- Pagination --}}
                    <div class="mt-3">
                        {{ $schoolYearList->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
