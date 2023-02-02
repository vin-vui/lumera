<div class="relative z-10" x-ref="dialog" aria-modal="true">

    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

    <div class="fixed inset-0 overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
            <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">

                <div class="pointer-events-auto w-screen max-w-5xl">

                    <div class="h-full overflow-y-auto bg-white" x-description="Slide-over panel, show/hide based on slide-over state.">

                        <div class="px-4 py-5 bg-gradient-to-r from-indigo-300 via-rose-200 to-orange-300 sm:px-6 sticky top-0">
                            <h3 class="text-lg font-extrabold leading-6 text-white">
                                @if ($this->creator_id == '')
                                Ajouter un créateur
                                @else
                                Modifier un créateur
                                @endif
                            </h3>
                        </div>

                        <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4 min-h-screen">
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
                                <x-jet-label for="first_name" value="Prénom" />
                                <x-jet-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" wire:model="first_name" />
                                @error('first_name') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-4">
                                <x-jet-label for="last_name" value="Nom" />
                                <x-jet-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" wire:model="last_name" />
                                @error('last_name') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-4">
                                <x-jet-label for="nick_name" value="Pseudo" />
                                <x-jet-input id="nick_name" class="block mt-1 w-full" type="text" name="nick_name" wire:model="nick_name" />
                                @error('nick_name') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-4">
                                <x-jet-label for="description" value="Description" />
                                <textarea rows="5" id="description" class="block mt-1 w-full border-gray-300 focus:border-orange-300 focus:ring-0" type="text" name="description" wire:model="description"></textarea>
                                @error('description') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-4">
                                <x-jet-label for="location" value="Localisation" />
                                <x-jet-input id="location" class="block mt-1 w-full" type="text" name="location" wire:model="location" />
                                @error('location') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>

                            <div class="mb-4">
                                <x-jet-label for="sn_tiktok" value="Réseaux" />
                                <div class="flex gap-2 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28.25" height="32" viewBox="0 0 256 290" class="w-8 h-8">
                                        <path fill="#FF004F" d="M189.72 104.421c18.678 13.345 41.56 21.197 66.273 21.197v-47.53a67.115 67.115 0 0 1-13.918-1.456v37.413c-24.711 0-47.59-7.851-66.272-21.195v96.996c0 48.523-39.356 87.855-87.9 87.855c-18.113 0-34.949-5.473-48.934-14.86c15.962 16.313 38.222 26.432 62.848 26.432c48.548 0 87.905-39.332 87.905-87.857v-96.995h-.002Zm17.17-47.952c-9.546-10.423-15.814-23.893-17.17-38.785v-6.113h-13.189c3.32 18.927 14.644 35.097 30.358 44.898ZM69.673 225.607a40.008 40.008 0 0 1-8.203-24.33c0-22.192 18.001-40.186 40.21-40.186a40.313 40.313 0 0 1 12.197 1.883v-48.593c-4.61-.631-9.262-.9-13.912-.801v37.822a40.268 40.268 0 0 0-12.203-1.882c-22.208 0-40.208 17.992-40.208 40.187c0 15.694 8.997 29.281 22.119 35.9Z" />
                                        <path d="M175.803 92.849c18.683 13.344 41.56 21.195 66.272 21.195V76.631c-13.794-2.937-26.005-10.141-35.186-20.162c-15.715-9.802-27.038-25.972-30.358-44.898h-34.643v189.843c-.079 22.132-18.049 40.052-40.21 40.052c-13.058 0-24.66-6.221-32.007-15.86c-13.12-6.618-22.118-20.206-22.118-35.898c0-22.193 18-40.187 40.208-40.187c4.255 0 8.356.662 12.203 1.882v-37.822c-47.692.985-86.047 39.933-86.047 87.834c0 23.912 9.551 45.589 25.053 61.428c13.985 9.385 30.82 14.86 48.934 14.86c48.545 0 87.9-39.335 87.9-87.857V92.85h-.001Z" />
                                        <path fill="#00F2EA" d="M242.075 76.63V66.516a66.285 66.285 0 0 1-35.186-10.047a66.47 66.47 0 0 0 35.186 20.163ZM176.53 11.57a67.788 67.788 0 0 1-.728-5.457V0h-47.834v189.845c-.076 22.13-18.046 40.05-40.208 40.05a40.06 40.06 0 0 1-18.09-4.287c7.347 9.637 18.949 15.857 32.007 15.857c22.16 0 40.132-17.918 40.21-40.05V11.571h34.643ZM99.966 113.58v-10.769a88.787 88.787 0 0 0-12.061-.818C39.355 101.993 0 141.327 0 189.845c0 30.419 15.467 57.227 38.971 72.996c-15.502-15.838-25.053-37.516-25.053-61.427c0-47.9 38.354-86.848 86.048-87.833Z" />
                                    </svg>
                                    <x-jet-input id="sn_tiktok" class="block mt-1 w-full" type="url" placeholder="https://www.tiktok.com/@example" pattern="https://.*" name="sn_tiktok" wire:model="sn_tiktok" />
                                    @error('sn_tiktok') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                                <div class="flex gap-2 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 1536 1536" class="w-8 h-8 text-yellow-300">
                                        <path fill="currentColor" d="M1280 1020q0-22-22-27q-67-14-118-58t-80-109q-7-14-7-25q0-15 19.5-26t42.5-17t42.5-20.5T1177 701q0-19-18.5-31.5T1120 657q-11 0-31 8t-32 8q-4 0-12-2q5-63 5-115q0-78-17-114q-36-78-102.5-121.5T778 277q-198 0-275 165q-18 38-18 115q0 38 6 114q-10 2-15 2q-11 0-31.5-8t-30.5-8q-20 0-37.5 12.5T359 702q0 21 19.5 35.5T421 758t42.5 17t19.5 26q0 11-7 25q-64 138-198 167q-22 5-22 27q0 47 138 69q2 5 6 26t11 30.5t23 9.5q13 0 38.5-5t38.5-5q35 0 67.5 15t54.5 32.5t57.5 32.5t76.5 15q43 0 79-15t57.5-32.5t54-32.5t67.5-15q13 0 39 4.5t39 4.5q15 0 22.5-9.5t11.5-31t5-24.5q138-22 138-69zm256-732v960q0 119-84.5 203.5T1248 1536H288q-119 0-203.5-84.5T0 1248V288Q0 169 84.5 84.5T288 0h960q119 0 203.5 84.5T1536 288z" />
                                    </svg>
                                    <x-jet-input id="sn_snapchat" class="block mt-1 w-full" type="url" placeholder="https://www.snapchat.com/example" pattern="https://.*" name="sn_snapchat" wire:model="sn_snapchat" />
                                    @error('sn_snapchat') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                                <div class="flex gap-2 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256" class="w-8 h-8">
                                        <g fill="none">
                                            <rect width="256" height="256" fill="url(#skillIconsInstagram0)" rx="60" />
                                            <rect width="256" height="256" fill="url(#skillIconsInstagram1)" rx="60" />
                                            <path fill="#fff" d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604h.031Zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396c0 26.688-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413c0-26.704.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5c3.5-3.5 6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563v.025Zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12v.004Zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355c0 28.361 22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355h.002Zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334c-18.41 0-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334Z" />
                                            <defs>
                                                <radialGradient id="skillIconsInstagram0" cx="0" cy="0" r="1" gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FD5" />
                                                    <stop offset=".1" stop-color="#FD5" />
                                                    <stop offset=".5" stop-color="#FF543E" />
                                                    <stop offset="1" stop-color="#C837AB" />
                                                </radialGradient>
                                                <radialGradient id="skillIconsInstagram1" cx="0" cy="0" r="1" gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#3771C8" />
                                                    <stop offset=".128" stop-color="#3771C8" />
                                                    <stop offset="1" stop-color="#60F" stop-opacity="0" />
                                                </radialGradient>
                                            </defs>
                                        </g>
                                    </svg>
                                    <x-jet-input id="sn_instagram" class="block mt-1 w-full" type="url" placeholder="https://www.instagram.com/example" pattern="https://.*" name="sn_instagram" wire:model="sn_instagram" />
                                    @error('sn_instagram') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                                <div class="flex gap-2 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="45.52" height="32" viewBox="0 0 256 180" class="w-8 h-8">
                                        <path fill="red" d="M250.346 28.075A32.18 32.18 0 0 0 227.69 5.418C207.824 0 127.87 0 127.87 0S47.912.164 28.046 5.582A32.18 32.18 0 0 0 5.39 28.24c-6.009 35.298-8.34 89.084.165 122.97a32.18 32.18 0 0 0 22.656 22.657c19.866 5.418 99.822 5.418 99.822 5.418s79.955 0 99.82-5.418a32.18 32.18 0 0 0 22.657-22.657c6.338-35.348 8.291-89.1-.164-123.134Z" />
                                        <path fill="#FFF" d="m102.421 128.06l66.328-38.418l-66.328-38.418z" />
                                    </svg>
                                    <x-jet-input id="sn_youtube" class="block mt-1 w-full" type="url" placeholder="https://www.youtube.com/@example" pattern="https://.*" name="sn_youtube" wire:model="sn_youtube" />
                                    @error('sn_youtube') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                                <div class="flex gap-2 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256" class="w-8 h-8">
                                        <path fill="#0A66C2" d="M218.123 218.127h-37.931v-59.403c0-14.165-.253-32.4-19.728-32.4c-19.756 0-22.779 15.434-22.779 31.369v60.43h-37.93V95.967h36.413v16.694h.51a39.907 39.907 0 0 1 35.928-19.733c38.445 0 45.533 25.288 45.533 58.186l-.016 67.013ZM56.955 79.27c-12.157.002-22.014-9.852-22.016-22.009c-.002-12.157 9.851-22.014 22.008-22.016c12.157-.003 22.014 9.851 22.016 22.008A22.013 22.013 0 0 1 56.955 79.27m18.966 138.858H37.95V95.967h37.97v122.16ZM237.033.018H18.89C8.58-.098.125 8.161-.001 18.471v219.053c.122 10.315 8.576 18.582 18.89 18.474h218.144c10.336.128 18.823-8.139 18.966-18.474V18.454c-.147-10.33-8.635-18.588-18.966-18.453" />
                                    </svg>
                                    <x-jet-input id="sn_linkedin" class="block mt-1 w-full" type="url" placeholder="https://www.linkedin.com/in/example" pattern="https://.*" name="sn_linkedin" wire:model="sn_linkedin" />
                                    @error('sn_linkedin') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                            </div>

                            <div class="mb-4" x-data="{ specialtyManager: false }">
                                <x-jet-label value="Domaine" />
                                <div class="flex flex-wrap gap-2 mt-1">
                                    @foreach($this->creator_specialties as $specialty)
                                    <div class="">
                                        <input type="radio" wire:model='specialty_id' id="selected_specialty_{{ $specialty->id }}" value="{{ $specialty->id }}" class="hidden peer" required="">
                                        <label for="selected_specialty_{{ $specialty->id }}" class="transition duration-200 inline-flex first-line:justify-center text-md items-center font-extrabold px-3 py-2 whitespace-nowrap text-gray-900 cursor-pointer bg-gray-50 peer-checked:bg-blue-900 peer-checked:text-gray-50">
                                            <div class="block">
                                                <div class="text-sm font-semibold">{{ $specialty->label }}</div>
                                            </div>
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                                @error('specialty_id') <span class="text-red-500">{{ $message }}</span>@enderror
                                <div class="flex items-end justify-end mt-4 -mb-4 relative z-20">
                                    <button @click="specialtyManager= !specialtyManager" class="flex items-center gap-1 bg-white text-sm text-cyan-400 py-1 px-2 border-cyan-400 border-2 rounded-3xl shadow-sm">
                                        Gérer les domaines
                                        <svg width="22" height="22" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="m21.41 11.58l-9-9C12.04 2.21 11.53 2 11 2H4a2 2 0 0 0-2 2v7c0 .53.21 1.04.59 1.41l.41.4c.9-.54 1.94-.81 3-.81a6 6 0 0 1 6 6c0 1.06-.28 2.09-.82 3l.4.4c.37.38.89.6 1.42.6c.53 0 1.04-.21 1.41-.59l7-7c.38-.37.59-.88.59-1.41c0-.53-.21-1.04-.59-1.42M5.5 7A1.5 1.5 0 0 1 4 5.5A1.5 1.5 0 0 1 5.5 4A1.5 1.5 0 0 1 7 5.5A1.5 1.5 0 0 1 5.5 7M10 19H7v3H5v-3H2v-2h3v-3h2v3h3v2Z" />
                                        </svg>
                                    </button>
                                </div>
                                <div x-transition.duration.200ms x-cloak x-show="specialtyManager" class="relative z-10">
                                    @livewire('specialties-manager')
                                </div>
                            </div>
                            <div class="space-x-2 flex items-center">
                                <x-jet-label for="display" value="Afficher ?" />
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
                                @if($this->creator_id != '')
                                @if($confirming === $this->creator_id)
                                <button wire:click="delete({{ $this->creator_id }})" class="px-4 py-2 text-sm font-medium border border-red-600 bg-red-600 text-white">
                                    Etes-vous sûr ?
                                </button>
                                @else
                                <button wire:click="confirmDelete({{ $this->creator_id }})" class="px-4 py-2 text-sm font-medium border bg-white border-red-600 text-red-600 hover:bg-red-600 hover:text-white transition-all">
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
