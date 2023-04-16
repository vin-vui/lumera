<article class="m-creator" data-module-popin-button data-popin="creator-{{ $creator->id }}" data-module-creator>
    <div class="m-cursorThumb" data-creator="thumb">
        <div class="a-ratio" data-ratio>
            <img src="{{ Storage::disk('uploads')->url($creator->image) }}" alt="{{ $creator->first_name }} {{ $creator->last_name }}">
        </div>
        <div class="m-cursorThumb__cursor" data-creator="circle">Voir</div>
    </div>
    <div class="m-creator__content">
        <p class="a-h3">{{ $creator->first_name }} {{ $creator->last_name }}</p>
        <p class="text-cgraydark -small">&#x40;{{ $creator->nick_name }}</p>
        @if ($creator->specialties->count())
            <ul class="no-bullet m-tags">
                @foreach ($creator->specialties as $specialty)
                    <li class="m-tags__item">
                        <span class="a-tag">{{ $specialty->label }}</span>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</article>

