<article>
    <a href="#" class="m-case" title="{{ $case->title }}">
        <div class="a-ratio m-case__thumb" data-ratio="1/1">
            <img src="{{asset('uploads/placeholder.jpg')}}" alt="{{ $case->title }}">
        </div>
        <div class="m-case__content">
            <p class="a-h3">{{ $case->title }}</p>
            <p class="text-cgraydark -small">Une petite phrase de description de l’aperçu</p>
            <span class="m-case__arrow">
                <svg class="icon" aria-hidden="true" focusable="false">
                    <use xlink:href="#icon-add" />
                </svg>
            </span>
        </div>
    </a>
</article>

