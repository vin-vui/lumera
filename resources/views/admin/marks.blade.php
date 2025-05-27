<div class="pb-24" x-data="{ open: false }">
    <header class="bg-transparent">
        <div class="mx-auto py-4 px-4 sm:px-6 lg:px-12">
            <div class="flex items-center justify-between h-6 border-l-2 border-white">
                <h2 class="font-semibold text-xl text-white leading-tight ml-4">
                    Marques partenaires
                </h2>
                <div class="">
                    <button wire:click="create" type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-4 font-medium shadow-lg text-white bg-indigo-500 hover:bg-indigo-600 transition-all focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Ajouter une marque
                    </button>
                </div>
            </div>
        </div>
    </header>
    <div class="mx-auto sm:px-6 lg:px-12 mt-4">
        <div class="overflow-hidden grid grid-cols-4 gap-4">
            @foreach ($marks as $mark)
            <div class="">
                <div wire:click="edit({{ $mark->id }})" class="w-full mx-auto hover:bg-white hover:shadow-md cursor-pointer transition-all p-8">
                    <img src="{{ Storage::disk('uploads')->url($mark->image) }}" class="mx-auto" alt="">
                    @if($mark->label)
                    <div class="mt-2">
                        <span class="bg-white text-gary-900 py-1 px-3">{{ $mark->label }}</span>
                    </div>
                    @endif
                </div>
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

            <div class="inline-block w-full overflow-hidden text-left align-bottom transition-all transform bg-white shadow-xl sm:my-8 sm:align-middle sm:max-w-2xl" role="dialog" aria-modal="true" aria-labelledby="modal-headline">

                <div class="px-4 py-5 bg-gradient-to-r from-indigo-300 via-rose-200 to-orange-300 sm:px-6">
                    <h3 class="text-lg font-medium leading-6 text-white">
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
                            <x-jet-label value="Visuel" />
                            @if($this->image != null)
                                <img src="{{ Storage::disk('uploads')->url($this->image) }}" alt="" class="mt-2 h-64 object-cover w-full">
                            @endif
                        </div>
                        <div id="file-upload-section" x-data="{photoName: null, photoPreview: null}">
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

                <div class="flex items-center justify-between px-4 py-4 sm:py-4 sm:px-6 bg-gray-50 sticky bottom-0 z-20">
                    <div class="">
                        @if($this->mark_id != '')
                        @if($confirming === $this->mark_id)
                        <button wire:click="delete({{ $this->mark_id }})" class="px-4 py-2 text-sm font-medium border border-red-600 bg-red-600 text-white">
                            Etes-vous sûr ?
                        </button>
                        @else
                        <button wire:click="confirmDelete({{ $this->mark_id }})" class="px-4 py-2 text-sm font-medium border bg-white border-red-600 text-red-600 hover:bg-red-600 hover:text-white transition-all">
                            Supprimer
                        </button>
                        @endif
                        @endif
                    </div>
                    <div class="flex gap-2">
                        <button wire:click="closeModal" type="button" class="px-4 py-2 text-sm font-medium text-gray-700 border border-gray-200 bg-white hover:bg-gray-100 focus:outline-none focus:ring-1 transition-all">
                            Annuler
                        </button>
                        <button wire:click.prevent="store" type="button" class="inline-flex justify-center px-8 py-2 font-extrabold text-white bg-green-600 border border-transparent shadow-sm transition-all hover:bg-green-700 focus:outline-none focus:ring-1">
                            Valider
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endif
</div>
