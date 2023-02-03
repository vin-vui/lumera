<div class="pb-24" x-data="{ open: false }">
    <header class="bg-transparent">
        <div class="mx-auto py-4 px-4 sm:px-6 lg:px-12">
            <div class="flex items-center justify-between h-6 border-l-2 border-white">
                <h2 class="font-semibold text-xl text-white leading-tight ml-4">
                    Témoignages
                </h2>
                <div class="">
                    <button wire:click="create" type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-4 font-medium shadow-lg text-white bg-indigo-500 hover:bg-indigo-600 transition-all focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Ajouter un témoignage
                    </button>
                </div>
            </div>
        </div>
    </header>
    <div class="mx-auto sm:px-6 lg:px-12 mt-4">
        <div class="overflow-hidden grid grid-cols-4 gap-4">
            @foreach ($testimonials as $testimonial)
            <div wire:click="edit({{ $testimonial->id }})" class="flex flex-col bg-white shadow-md hover:bg-gray-50 cursor-pointer p-4">
                <div class="font-bold text-xl">{{ $testimonial->label }}</div>
                <div class="my-4 grow">{{ $testimonial->text }}</div>
                <div class="">
                    @switch($testimonial->type)
                        @case('Créateur')
                            <span class="py-1 px-2 bg-orange-300 text-white">Créateur</span>
                            @break
                        @case('Entreprise')
                            <span class="py-1 px-2 bg-purple-400 text-white">Entreprise</span>
                            @break
                    @endswitch
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
                        @if ($this->testimonial_id == '')
                        Ajouter un témoignage
                        @else
                        Modifier un témoignage
                        @endif
                    </h3>
                </div>

                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="my-4">
                            <x-jet-label for="label" value="Créateur / Entreprise" />
                            <x-jet-input id="label" class="block mt-1 w-full" type="text" name="label" placeholder="" wire:model="label" />
                            @error('label') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <x-jet-label for="text" value="Message" />
                            <textarea rows="5" id="text" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 shadow-sm" type="text" name="text" wire:model="text"></textarea>
                            @error('text') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <x-jet-label for="type" value="Type" />
                            <select id="type" wire:ignore wire:model.lazy="type" class="text-gray-900 placeholder:text-gray-200 w-full border-b-1 border-gray-300 bg-transparent border-t-0 border-x-0 focus:border-b-1 focus:border-orange-300 focus:ring-0 focus:border-t-0 focus:border-x-0 active:border-t-0 active:border-x-0">
                                <option @if ($this->type === 'Créateur') selected="selected" @endif>Créateur</option>
                                <option @if ($this->type === 'Entreprise') selected="selected" @endif>Entreprise</option>
                            </select>
                            @error('text') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between px-4 py-4 sm:py-4 sm:px-6 bg-gray-50 sticky bottom-0 z-20">
                    <div class="">
                        @if($this->testimonial_id != '')
                        @if($confirming === $this->testimonial_id)
                        <button wire:click="delete({{ $this->testimonial_id }})" class="px-4 py-2 text-sm font-medium border border-red-600 bg-red-600 text-white">
                            Etes-vous sûr ?
                        </button>
                        @else
                        <button wire:click="confirmDelete({{ $this->testimonial_id }})" class="px-4 py-2 text-sm font-medium border bg-white border-red-600 text-red-600 hover:bg-red-600 hover:text-white transition-all">
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
