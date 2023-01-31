<div class="relative z-10" x-ref="dialog" aria-modal="true">

    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

    <div class="fixed inset-0 overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
            <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">

                <div class="pointer-events-auto w-screen max-w-5xl">

                    <div class="h-full overflow-y-auto bg-white" x-description="Slide-over panel, show/hide based on slide-over state.">

                        <div class="px-4 py-5 bg-gradient-to-r from-indigo-300 via-rose-200 to-orange-300 sm:px-6 sticky top-0">
                            <h3 class="text-lg font-extrabold leading-6 text-white">
                                @if ($this->case_id == '')
                                Ajouter une étude de cas
                                @else
                                Modifier une étude de cas
                                @endif
                            </h3>
                        </div>

                        <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                            <div class="">
                                <x-jet-label value="Visuel" />
                                @if($this->image != null)
                                @if (!is_string($this->image))
                                <img src="{{ $this->image->temporaryUrl() }}" alt="" class="mt-2 h-64 object-cover w-full">
                                @else
                                <img src="{{ Storage::disk('uploads')->url($this->image) }}" alt="" class="mt-2 h-64 object-cover w-full">
                                @endif
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
                                <x-jet-label for="title" value="Titre" />
                                <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title" wire:model="title" />
                                @error('title') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-4">
                                <x-jet-label for="description" value="Description" />
                                <textarea rows="5" id="description" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 shadow-sm" type="text" name="description" wire:model="description"></textarea>
                                @error('description') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-4">
                                <x-jet-label for="selected_creators" value="Créateurs" />
                                <div class="relative">
                                    <x-jet-input class="block mt-1 w-full placeholder:italic" type="text" wire:model="search" placeholder="Rechercher un créateur..." />
                                    <div class="bg-white border border-t-0 border-gray-300 h-52 overflow-y-auto">
                                        <ul class="">
                                            @foreach($case_creators as $creator)
                                            <li class="px-3 py-2 hover:bg-gray-50">
                                                <input type="checkbox" wire:model="selected_creators" value="{{ $creator->id }}" class="form-checkbox" id="creator-{{ $loop->index }}" />
                                                <label for="option-{{ $loop->index }}" class="pl-2">
                                                    <span>@</span>{{ $creator->nick_name }}
                                                    @if($creator->first_name != null)
                                                        <span class="text-sm text-gray-400">{{ $creator->first_name }} {{ $creator->last_name }}</span>
                                                    @endif
                                                </label>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4" x-data="{ tagManager: false }">
                                <x-jet-label value="Tags" />
                                <div class="flex flex-wrap gap-2 mt-1">
                                    @foreach($this->case_tags as $tag)
                                    <div class="">
                                        <input type="checkbox" wire:model='selected_tags' id="selected_tag_{{ $tag->id }}" value="{{ $tag->id }}" class="hidden peer" required="">
                                        <label for="selected_tag_{{ $tag->id }}" class="transition duration-200 inline-flex first-line:justify-center text-md items-center font-extrabold px-3 py-2 whitespace-nowrap text-gray-900 cursor-pointer bg-gray-50 peer-checked:bg-blue-900 peer-checked:text-gray-50">
                                            <div class="block">
                                                <div class="text-sm font-semibold">{{ $tag->label }}</div>
                                            </div>
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="flex items-end justify-end mt-4 -mb-4 relative z-20">
                                    <button @click="tagManager= !tagManager" class="flex items-center gap-1 bg-white text-sm text-cyan-400 py-1 px-2 border-cyan-400 border-2 rounded-3xl shadow-sm">
                                        Gérer les tags
                                        <svg width="22" height="22" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="m21.41 11.58l-9-9C12.04 2.21 11.53 2 11 2H4a2 2 0 0 0-2 2v7c0 .53.21 1.04.59 1.41l.41.4c.9-.54 1.94-.81 3-.81a6 6 0 0 1 6 6c0 1.06-.28 2.09-.82 3l.4.4c.37.38.89.6 1.42.6c.53 0 1.04-.21 1.41-.59l7-7c.38-.37.59-.88.59-1.41c0-.53-.21-1.04-.59-1.42M5.5 7A1.5 1.5 0 0 1 4 5.5A1.5 1.5 0 0 1 5.5 4A1.5 1.5 0 0 1 7 5.5A1.5 1.5 0 0 1 5.5 7M10 19H7v3H5v-3H2v-2h3v-3h2v3h3v2Z" />
                                        </svg>
                                    </button>
                                </div>
                                <div x-transition.duration.200ms x-cloak x-show="tagManager" class="relative z-10">
                                    @livewire('tags-manager')
                                </div>
                            </div>
                            <div class="space-x-2 flex items-center">
                                <x-jet-label for="display" value="Publier ?" />
                                <button id="display" type="button" wire:click="changeDisplay" class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 bg-gray-200" x-data="{ on: {{ $display ? 'true' : 'false' }} }" role="switch" aria-checked="{{ $display ? 'true' : 'false' }}" :aria-checked="on.toString()" @click="on = !on" x-state:on="Enabled" x-state:off="Not Enabled" :class="{ 'bg-green-600': on, 'bg-gray-200': !(on) }">
                                    <span class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out translate-x-0" x-state:on="Enabled" x-state:off="Not Enabled" :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }">
                                        <span class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-100 ease-in duration-200" aria-hidden="true" x-state:on="Enabled" x-state:off="Not Enabled" :class="{ 'opacity-0 ease-out duration-100': on, 'opacity-100 ease-in duration-200': !(on) }">
                                            <svg class="h-3 w-3 text-gray-400" fill="none" viewBox="0 0 12 12">
                                                <path d="M4 8l2-2m0 0l2-2M6 6L4 4m2 2l2 2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        <span class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-0 ease-out duration-100" aria-hidden="true" x-state:on="Enabled" x-state:off="Not Enabled" :class="{ 'opacity-100 ease-in duration-200': on, 'opacity-0 ease-out duration-100': !(on) }">
                                            <svg class="h-3 w-3 text-green-600" fill="currentColor" viewBox="0 0 12 12">
                                                <path d="M3.707 5.293a1 1 0 00-1.414 1.414l1.414-1.414zM5 8l-.707.707a1 1 0 001.414 0L5 8zm4.707-3.293a1 1 0 00-1.414-1.414l1.414 1.414zm-7.414 2l2 2 1.414-1.414-2-2-1.414 1.414zm3.414 2l4-4-1.414-1.414-4 4 1.414 1.414z"></path>
                                            </svg>
                                        </span>
                                    </span>
                                </button>
                            </div>
                        </div>

                        <div class="flex items-center justify-between px-4 py-4 sm:py-4 sm:px-6 bg-gray-50 sticky bottom-0 z-20">
                            <div class="">
                                @if($this->case_id != '')
                                @if($confirming === $this->case_id)
                                <button wire:click="delete({{ $this->case_id }})" class="px-4 py-2 text-sm font-medium border border-red-600 bg-red-600 text-white">
                                    Etes-vous sûr ?
                                </button>
                                @else
                                <button wire:click="confirmDelete({{ $this->case_id }})" class="px-4 py-2 text-sm font-medium border bg-white border-red-600 text-red-600 hover:bg-red-600 hover:text-white transition-all">
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
        </div>
    </div>
</div>
