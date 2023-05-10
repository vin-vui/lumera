<article data-module-popin-button data-popin="case-{{ $case->id }}" class="m-case{{ empty($complete) ? ' -small' : '' }}">
    <div class="a-ratio m-case__thumb" data-ratio="1/1">
        <img src="{{ Storage::disk('uploads')->url($case->image) }}" alt="{{ $case->client }}">
    </div>
    <div class="m-case__content">
        <p class="a-h3">{{ $case->client }}</p>
        @if (isset($complete))
            <div class="m-case__content--cols mgt-1">
                <p class="text-cgraydark -small">{{ $case->description }}</p>
                <div>
                    <p class="a-h5 mgb-1">Plateformes activées</p>
                    <ul class="no-bullet">
                        @foreach ($case->tags as $tag)
                            <li class="a-text -small text-cgraydark">{{ $tag->label }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @else
            <p class="text-cgraydark -small">{{ substr($case->description, 0, strpos($case->description, '.') + 1 ) }}</p>
        @endif
        <span class="m-case__arrow">
            <svg class="icon -small" aria-hidden="true" focusable="false">
                <use xlink:href="#icon-arrow-diag" />
            </svg>
        </span>
    </div>
</article>
