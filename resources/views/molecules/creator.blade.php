<article class="m-creator" data-module-popin-button data-popin="creator-{{ $creator->id }}">
    <div class="m-creator__thumb">
        <div class="m-cursorThumb" data-creator="thumb">
            <div class="a-ratio" data-ratio>
                <img src="{{ Storage::disk('uploads')->url($creator->image) }}" alt="{{ $creator->first_name }} {{ $creator->last_name }}">
            </div>
            <div class="m-cursorThumb__cursor" data-creator="circle">Voir</div>
        </div>
    </div>
    <div class="m-creator__content">
        <p class="a-h3"><span class="line"><span class="word">{{ $creator->first_name }}</span></span> <span class="line"><span class="word">{{ $creator->last_name }}</span></span></p>
        <p class="text-cgraydark -small line"><span class="word">&#x40;{{ $creator->nick_name }}</span></p>
        <ul class="no-bullet m-tags">
            <li class="m-tags__item">
                <span class="a-tag">tag</span>
            </li>
            <li class="m-tags__item">
                <span class="a-tag">tag</span>
            </li>
            <li class="m-tags__item">
                <span class="a-tag">tag</span>
            </li>
        </ul>
        {{-- @if ($creator->specialties->count())
            <ul class="no-bullet m-tags">
                @foreach ($creator->specialties as $specialty)
                    <li class="m-tags__item">
                        <span class="a-tag">{{ $specialty->label }}</span>
                    </li>
                @endforeach
            </ul>
        @endif --}}
    </div>
</article>

