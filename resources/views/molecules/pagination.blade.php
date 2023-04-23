
<div class="g-row">
    <div class=" sm-column-12 md-column-12 lg-column-9 no-width m-pagination">
        <ul class="no-bullet">
            @if ($paginator->onFirstPage())
                <li><span class="a-button -tertiary">Précédent</span></li>
            @else
                <li><button wire:click="previousPage('page')" rel="prev" data-scroll-to="#list" class="a-button -tertiary">Précédent</button></li>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li><span>{{ $element }}</span></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><span class="a-button -secondary">{{ $page }}</span></li>
                        @else
                            <li><button wire:click="gotoPage({{ $page }}, 'page')" aria-label="Aller à la page {{ $page }}" data-scroll-to="#list" class="a-button -tertiary">{{ $page }}</button></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li><button wire:click="nextPage('page')" rel="next" aria-label="Aller à la page suivante" data-scroll-to="#list" class="a-button -tertiary">Suivant</button></li>
            @else
                <li><span class="a-button -tertiary">Suivant</span></li>
            @endif
        </ul>
    </div>
</div>
