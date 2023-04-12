
<article class="m-creator" data-module-popin-button data-popin="creator-{{ $creator->id }}">
    <div class="a-ratio" data-ratio>
        <img src="{{ Storage::disk('uploads')->url($creator->image) }}" alt="{{ $creator->first_name }} {{ $creator->last_name }}">
    </div>
    <div class="m-creator__content">
        <p class="a-h3">{{ $creator->first_name }} {{ $creator->last_name }}</p>
        <p class="text-cgraydark -small">&#x40;{{ $creator->nick_name }}</p>
        <ul class="no-bullet m-tags">
            @if ($creator->specialty_id != null && $creator->specialty()->exists())
                <li class="m-tags__item">
                    <span class="a-tag">{{ $creator->specialty->label }}</span>
                </li>
            @endif
        </ul>
    </div>
</article>

