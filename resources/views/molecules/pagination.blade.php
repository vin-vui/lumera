<div class="pagination">
    <ul>
        @if ($paginator->onFirstPage())
            <li class="disabled"><span>Précédent</span></li>
        @else
            <li><button wire:click="previousPage('page')" rel="prev" data-scroll-to="#list">Précédent</button></li>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><span>{{ $page }}</span></li>
                    @else
                        <li><button wire:click="gotoPage({{ $page }}, 'page')" aria-label="Aller à la page {{ $page }}" data-scroll-to="#list">{{ $page }}</button></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li><button wire:click="nextPage('page')" rel="next" aria-label="Aller à la page suivante" data-scroll-to="#list">Suivant</button></li>
        @else
            <li class="disabled"><span>Suivant</span></li>
        @endif
    </ul>
</div>



{{-- <nav role="navigation" aria-label="Pagination Navigation">
    <div class="flex justify-between flex-1 sm:hidden">
        <span>
            <span>
                « Précédent
            </span>
        </span>

        <span>
            <button type="button" wire:click="nextPage('page')" wire:loading.attr="disabled" dusk="nextPage.before">
                Suivant »
            </button>
        </span>
    </div>

    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
        <div>
            <span class="relative z-0 inline-flex rounded-md shadow-sm">
                <span wire:key="paginator-page-1-page1">
                    <span aria-current="page">
                        <span
                            class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 select-none">1</span>
                    </span>
                </span>
                <span wire:key="paginator-page-1-page2">
                    <button type="button" wire:click="gotoPage(2, 'page')"
                        class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                        aria-label="Aller à la page 2">
                        2
                    </button>
                </span>
                <span wire:key="paginator-page-1-page3">
                    <button type="button" wire:click="gotoPage(3, 'page')"
                        class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                        aria-label="Aller à la page 3">
                        3
                    </button>
                </span>
                <span wire:key="paginator-page-1-page4">
                    <button type="button" wire:click="gotoPage(4, 'page')"
                        class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                        aria-label="Aller à la page 4">
                        4
                    </button>
                </span>
                <span wire:key="paginator-page-1-page5">
                    <button type="button" wire:click="gotoPage(5, 'page')"
                        class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                        aria-label="Aller à la page 5">
                        5
                    </button>
                </span>

                <span>

                    <button type="button" wire:click="nextPage('page')" dusk="nextPage.after" rel="next"
                        class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-r-md leading-5 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150"
                        aria-label="Suivant &amp;raquo;">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </span>
            </span>
        </div>
    </div>
</nav> --}}
