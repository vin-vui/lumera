<div class="pb-24">
    <header class="bg-white shadow-ùd sticky top-0">
        <div class="mx-auto py-4 px-4 sm:px-6 lg:px-12">
            <div class="flex items-center justify-between h-6">
                <h2 class="font-semibold text-xl text-indigo-800 leading-tight">
                    Études de cas
                </h2>
                <div class="">
                    <button wire:click="create" type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-4 font-medium shadow-lg text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Ajouter une étude de cas
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div class="mx-auto sm:px-6 lg:px-12">
        <div class="bg-white overflow-hidden flex flex-col sm:flex-row flex-wrap items-center sm:my-12 my-6 p-0 gap-4">
            <table class="w-full divide-y divide-gray-300">
                <thead class="bg-gray-900">
                    <tr>
                        <th scope="col" class="px-4 py-3.5 text-center text-md font-semibold text-gray-50">Logo</th>
                        <th scope="col" class="px-4 py-3.5 text-center text-md font-semibold text-gray-50">Type</th>
                        <th scope="col" class="px-4 py-3.5 text-left text-md font-semibold text-gray-50">Titre</th>
                        <th scope="col" class="px-4 py-3.5 text-left text-md font-semibold text-gray-50">Description</th>
                        <th scope="col" class="px-4 py-3.5 text-left text-md font-semibold text-gray-50">Tags</th>
                        <th scope="col" class="px-4 py-3.5 whitespace-nowrap text-center text-md font-semibold text-gray-50">Publié ?</th>
                    </tr>
                </thead>
                <tbody class=" bg-white">
                    @foreach ($cases as $case)
                    <tr wire:click="edit({{ $case->id }})" class="cursor-pointer hover:bg-yellow-50 transition-all">
                        <td class="p-4 whitespace-nowrap">
                            <img class="h-10 object-cover mx-auto" src="{{ Storage::disk('uploads')->url($case->logo) }}" alt="">
                        </td>
                        <td class="px-4 whitespace-nowrap text-center py-4 text-sm font-medium text-gray-900">
                            @switch($case->type)
                            @case('tiktok')
                            <span class="bg-gray-900 text-white py-1 px-2 font-extrabold">TikTok</span>
                            @break
                            @case('instagram')
                            <span class="text-white bg-gradient-to-tr from-amber-500 to-pink-500 py-1 px-2 font-extrabold">Réel</span>
                            @break
                            @case('twitch')
                            <span class="bg-indigo-600 text-white py-1 px-2 font-extrabold">Twitch</span>
                            @break
                            @endswitch
                        </td>
                        <td class="px-4 py-4 text-sm font-extrabold text-gray-900">{{ $case->title }}</td>
                        <td class="px-4 py-4 text-sm font-medium text-gray-900">{{ $case->description }}</td>
                        <td class="px-4 py-4 text-sm font-medium text-gray-900">
                            <div class="flex gap-2">
                                @foreach ($case->tags as $tag)
                                <span class="text-md items-center font-semibold px-2.5 py-0.5 whitespace-nowrap rounded-full bg-blue-900 text-gray-50">
                                    {{ $tag->label }}
                                </span>
                                @endforeach
                            </div>
                        </td>
                        <td class="px-4 whitespace-nowrap text-center py-4 text-sm font-medium text-gray-900">
                            @if($case->display)
                            <span class="bg-green-600 text-white py-1 px-2 font-mono">oui</span>
                            @else
                            <span class="bg-red-600 text-white py-1 px-2 font-mono">non</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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

                <div class="px-4 py-5 bg-yellow-400 sm:px-6">
                    <h3 class="text-lg font-extrabold leading-6 text-gray-900">
                        @if ($this->case_id == '')
                        Ajouter une étude de cas
                        @else
                        Modifier une étude de cas
                        @endif
                    </h3>
                </div>

                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <div class="mb-4">
                        <label class="block">
                            <x-jet-label for="logo" value="Image" />
                            <input wire:model="logo" type="file" class="block w-full cursor-pointer text-sm mt-2 border-indigo-50 focus:border-indigo-200 focus:ring-indigo-200 focus:outline-none text-gray-500 file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                        </label>
                        @error('logo') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div wire:loading wire:target="logo" wire:key="logo">Téléversement</div>
                    <div class="flex mb-4 gap-4">
                        @if ($this->case_id != '')
                        <div class="">
                            <x-jet-label value="Image actuelle" />
                            <img wire:ignore src="{{ Storage::disk('uploads')->url($this->logo) }}" alt="" class="mt-2 h-24">
                        </div>
                        @endif
                        @if (!is_string($this->logo))
                        <div class="">
                            @if ($this->case_id != '')
                            <x-jet-label value="Remplacée par" />
                            @else
                            <x-jet-label value="Apreçu" />
                            @endif
                            <img src="{{ $this->logo->temporaryUrl() }}" alt="" class="mt-2 h-24">
                        </div>
                        @endif
                    </div>
                    <div class="mb-4">
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
                        <x-jet-label for="type" value="Type" />
                        <select name="type" wire:ignore wire:model.lazy="type" class="block w-full mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 shadow-sm">
                            <option @if (!$this->type) selected="selected" @endif> - </option>
                            <option @if ($this->type === 'tiktok') selected="selected" @endif>tiktok</option>
                            <option @if ($this->type === 'instagram') selected="selected" @endif>instagram</option>
                            <option @if ($this->type === 'twitch') selected="selected" @endif>twitch</option>
                        </select>
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
                        <div class="relative inline-block w-12 mr-2 align-middle select-none transition duration-200 ease-in">
                            <input wire:model="display" type="checkbox" name="display" id="toggle" class="toggle-checkbox text-green-600 absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" />
                            <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between px-4 py-4 sm:py-4 sm:px-6 bg-gray-900">
                    <div class="">
                        @if($this->case_id != '')
                        @if($confirming === $this->case_id)
                        <button wire:click="delete({{ $this->case_id }})" class="px-4 py-2 text-sm font-medium border border-red-600 bg-red-600 text-white">
                            Etes-vous sûr ?
                        </button>
                        @else
                        <button wire:click="confirmDelete({{ $this->case_id }})" class="px-4 py-2 text-sm font-medium border border-red-600 text-red-600">
                            Supprimer
                        </button>
                        @endif
                        @endif
                    </div>
                    <div class="flex gap-2">
                        <button wire:click="closeModal" type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white hover:bg-gray-100 focus:outline-none focus:ring-1 transition-all">
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
