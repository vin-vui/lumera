<div class="bg-gray-50 p-2">
    <x-jet-label value="Gérer les domaines" />

    <div class="flex flex-wrap gap-2 my-1">
        @foreach ($this->specialties as $specialty)
        <div class="">
            <input type=radio wire:model='selected_specialty' value="{{ $specialty->id }}" id="specialty_{{ $specialty->id }}" class="hidden peer">
            <label for="specialty_{{ $specialty->id }}" class="transition border border-gray-900 duration-200 inline-flex first-line:justify-center text-md items-center font-extrabold px-3 py-2 whitespace-nowrap text-gray-900 cursor-pointer bg-gray-50 peer-checked:border-cyan-400 peer-checked:bg-cyan-400 peer-checked:text-gray-50">
                <div class="block">
                    <div class="text-sm font-semibold">{{ $specialty->label }}</div>
                </div>
            </label>
        </div>
        @endforeach
    </div>

    @if($isOpen)
    <div class="flex gap-2 mt-2">
        <div class="grow">
            <div class="flex flex-col justify-center">
                @if($this->selected_specialty)
                <x-jet-label for="description" value="Modifier le domaine" />
                @else
                <x-jet-label for="description" value="Nouveau domaine" />
                @endif
                <x-jet-input id="label" class="block mt-1 w-full" type="text" name="label" wire:model="label" />
                @error('label') <span class="text-sm text-red-600">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="flex items-end gap-1 mb-0.5">
            <button wire:click="cancel" class="bg-gray-100 text-king rounded-full p-2">
                <svg width="22" height="22" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.758 17.243L12.001 12m5.243-5.243L12 12m0 0L6.758 6.757M12.001 12l5.243 5.243" /></svg>
            </button>
            <button wire:click="store" class="bg-green-600 text-white rounded-full p-2">
                <svg width="22" height="22" viewBox="0 0 512 512">
                    <path d="M448 71.9c-17.3-13.4-41.5-9.3-54.1 9.1L214 344.2l-99.1-107.3c-14.6-16.6-39.1-17.4-54.7-1.8-15.6 15.5-16.4 41.6-1.7 58.1 0 0 120.4 133.6 137.7 147 17.3 13.4 41.5 9.3 54.1-9.1l206.3-301.7c12.6-18.5 8.7-44.2-8.6-57.5z" fill="currentColor" /></svg>
            </button>
        </div>
    </div>
    @else
    <div class="flex justify-between">
        <button wire:click="new" class="bg-green-600 text-white py-2 px-2 flex items-center gap-1">
            <svg width="22" height="22" viewBox="0 0 24 24">
                <path fill="currentColor" d="m21.41 11.58l-9-9C12.04 2.21 11.53 2 11 2H4a2 2 0 0 0-2 2v7c0 .53.21 1.04.59 1.41l.41.4c.9-.54 1.94-.81 3-.81a6 6 0 0 1 6 6c0 1.06-.28 2.09-.82 3l.4.4c.37.38.89.6 1.42.6c.53 0 1.04-.21 1.41-.59l7-7c.38-.37.59-.88.59-1.41c0-.53-.21-1.04-.59-1.42M5.5 7A1.5 1.5 0 0 1 4 5.5A1.5 1.5 0 0 1 5.5 4A1.5 1.5 0 0 1 7 5.5A1.5 1.5 0 0 1 5.5 7M10 19H7v3H5v-3H2v-2h3v-3h2v3h3v2Z" />
            </svg>
            Ajouter un domaine
        </button>
        @if($this->selected_specialty)
        <div class="">
            <button wire:click="edit" class="bg-orange-600 text-white rounded-full py-2 px-2">
                <svg width="22" height="22" viewBox="0 0 24 24">
                    <path fill="currentColor" d="m19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575q.837 0 1.412.575l1.4 1.4q.575.575.6 1.388q.025.812-.55 1.387ZM17.85 10.4L7.25 21H3v-4.25l10.6-10.6Z" />
                </svg>
            </button>
            <button wire:click="delete" class="bg-red-600 text-white rounded-full py-2 px-2">
                <svg width="22" height="22" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M7 21q-.825 0-1.412-.587Q5 19.825 5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413Q17.825 21 17 21ZM17 6H7v13h10ZM9 17h2V8H9Zm4 0h2V8h-2ZM7 6v13Z" />
                </svg>
            </button>
        </div>
        @endif
    </div>
    @endif

</div>
