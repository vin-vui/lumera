<div class="pb-24">
    <header class="bg-white shadow sticky top-16 -mt-1">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-6">
                <h2 class="font-semibold text-xl text-purple-800 leading-tight">
                    Marques partenaires
                </h2>
                <div class="">
                    <button wire:click="create" type="button" class="inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                        Ajouter une marque
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-md sm:rounded-3xl grid grid-cols-4 sm:my-12 my-6 py-8 px-6 gap-4">
            @foreach ($marks as $mark)
            <div class="">
                <div wire:click="edit({{ $mark->id }})" class="w-full rounded-3xl mx-auto hover:bg-yellow-100 cursor-pointer transition-all p-8">
                    <img src="{{ Storage::disk('uploads')->image($mark->image) }}" class="mx-auto" alt="">
                </div>
                @if($mark->label)
                <div class="mt-2 text-center">
                    <span class="bg-yellow-400 text-purple-900 rounded-full py-1 px-3">{{ $mark->label }}</span>
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>

    {{-- MODALE --}}
    @if($isOpen)
    <div class="fixed inset-0 z-10 overflow-y-auto transition ease-out duration-400">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

            <div class="inline-block w-full overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-2xl" role="dialog" aria-modal="true" aria-labelledby="modal-headline">

                <div class="px-4 py-5 bg-yellow-100 sm:px-6">
                    <h3 class="text-lg font-medium leading-6 text-purple-900">
                        @if ($this->mark_id == '')
                        Ajouter une marque
                        @else
                        Modifier une marque
                        @endif
                    </h3>
                </div>

                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="">
                            <x-jet-label value="Image" />
                            @if (!is_string($this->image) && $this->image != null)
                            <img src="{{ $this->image->temporaryUrl() }}" alt="" class="mt-2 h-64 rounded-2xl border-2 border-purple-50">
                            @else
                            <img src="{{ Storage::disk('uploads')->image($this->image) }}" alt="" class="mt-2 h-64 rounded-2xl border-2 border-purple-50">
                            @endif
                        </div>
                        <div x-data="{photoName: null, photoPreview: null}">
                            <input type="file" class="hidden" wire:model="image" x-ref="photo" />
                            <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                                <span class="py-1">sélectionner une nouvelle image</span>
                                <div wire:loading wire:target="image" wire:key="image">
                                    <svg class="ml-3 text-green-600 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2">
                                            <path stroke-dasharray="2 4" stroke-dashoffset="6" d="M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3">
                                                <animate attributeName="stroke-dashoffset" dur="0.6s" repeatCount="indefinite" values="6;0" />
                                            </path>
                                            <path stroke-dasharray="30" stroke-dashoffset="30" d="M12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21">
                                                <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.1s" dur="0.3s" values="30;0" />
                                            </path>
                                            <path stroke-dasharray="10" stroke-dashoffset="10" d="M12 16v-7.5">
                                                <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.5s" dur="0.2s" values="10;0" />
                                            </path>
                                            <path stroke-dasharray="6" stroke-dashoffset="6" d="M12 8.5l3.5 3.5M12 8.5l-3.5 3.5">
                                                <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.2s" values="6;0" />
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                            </x-jet-secondary-button>
                            @error('image') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="my-4">
                            <x-jet-label for="label" value="Label" />
                            <x-jet-input id="label" class="block mt-1 w-full" type="text" name="label" placeholder="" wire:model="label" />
                            @error('label') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between px-4 py-4 sm:py-4 sm:px-6 bg-purple-50">
                    <div class="">
                        @if($this->mark_id != '')
                        @if($confirming === $this->mark_id)
                        <button wire:click="delete({{ $this->mark_id }})" class="text-red-600">
                            Etes-vous sûr ?
                        </button>
                        @else
                        <button wire:click="confirmDelete({{ $this->mark_id }})" class="text-red-600">
                            Supprimer
                        </button>
                        @endif
                        @endif
                    </div>
                    <div class="flex gap-2">
                        <button wire:click="closeModal" type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white rounded-full hover:bg-gray-50 focus:outline-none focus:ring-1 transition-all">
                            Annuler
                        </button>
                        <button wire:click.prevent="store" type="button" class="inline-flex justify-center px-8 py-2 font-medium text-white bg-green-600 border border-transparent rounded-full shadow-sm transition-all hover:bg-green-700 focus:outline-none focus:ring-1">
                            Valider
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endif
</div>
