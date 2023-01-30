<div class="pb-24" x-data="{ open: false }" >
    <header class="bg-transparent">
        <div class="mx-auto py-4 px-4 sm:px-6 lg:px-12">
            <div class="flex items-center justify-between h-6 border-l-2">
                <h2 class="font-semibold text-xl text-white leading-tight ml-4">
                    Études de cas
                </h2>
                <div class="">
                    <button wire:click="create" type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-4 font-medium shadow-lg text-white bg-indigo-500 hover:bg-indigo-600 transition-all focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Ajouter une étude de cas
                    </button>
                </div>
            </div>
        </div>
    </header>
    <div class="mx-auto sm:px-6 lg:px-12">
        <div class="overflow-hidden flex flex-col sm:flex-row flex-wrap items-center sm:my-12 my-6 p-0 gap-4">
            <table class="w-full">
                <thead class="bg-transparent">
                    <tr>
                        <th scope="col" class="px-4 py-3.5 text-center text-md font-semibold text-gray-50">Logo</th>
                        <th scope="col" class="px-4 py-3.5 text-center text-md font-semibold text-gray-50">Type</th>
                        <th scope="col" class="px-4 py-3.5 text-left text-md font-semibold text-gray-50">Titre</th>
                        <th scope="col" class="px-4 py-3.5 text-left text-md font-semibold text-gray-50">Description</th>
                        <th scope="col" class="px-4 py-3.5 text-left text-md font-semibold text-gray-50">Tags</th>
                        <th scope="col" class="px-4 py-3.5 text-center text-md font-semibold text-gray-50">Publié</th>
                    </tr>
                </thead>
                <tbody class="shadow-md bg-white">
                    @foreach ($cases as $case)
                    <tr wire:click="edit({{ $case->id }})" class="cursor-pointer hover:bg-gray-50 transition-all">
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
                                <span class="text-md items-center font-semibold px-2.5 py-0.5 whitespace-nowrap rounded-full bg-orange-400 text-white">
                                    {{ $tag->label }}
                                </span>
                                @endforeach
                            </div>
                        </td>
                        <td class="p-4 whitespace-nowrap">
                            @if($case->display)
                            <svg class="text-green-600 mx-auto" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="currentColor" d="m10.6 16.6l7.05-7.05l-1.4-1.4l-5.65 5.65l-2.85-2.85l-1.4 1.4ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" />
                            </svg>
                            @else
                            <svg class="text-red-600 mx-auto" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M7.7 16.3q.275.275.7.275q.425 0 .7-.275l2.9-2.9l2.925 2.925q.275.275.688.262q.412-.012.687-.287q.275-.275.275-.7q0-.425-.275-.7L13.4 12l2.925-2.925q.275-.275.262-.688q-.012-.412-.287-.687q-.275-.275-.7-.275q-.425 0-.7.275L12 10.6L9.075 7.675Q8.8 7.4 8.388 7.412q-.413.013-.688.288q-.275.275-.275.7q0 .425.275.7l2.9 2.9l-2.925 2.925q-.275.275-.262.687q.012.413.287.688ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" />
                            </svg>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @if ($isOpen)
    @include('admin.cases._slider')
    @endif

</div>
