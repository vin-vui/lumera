
<article class="m-creator" data-module-popin-button data-popin="creator">
    <div class="a-ratio" data-ratio>
        <img src="{{ Storage::disk('uploads')->url($creator->image) }}" alt="{{ $item->first_name }} {{ $item->last_name }}">
    </div>
    <div class="m-creator__content">
        <p class="a-h3">{{ $item->first_name }} {{ $item->last_name }}</p>
        <p class="text-cgraydark -small">{{ $item->nick_name }}</p>
        <ul class="no-bullet m-tags">
            @if ($item->specialty_id != null && $item->specialty()->exists())
                <li class="m-tags__item">
                    <span class="a-tag">{{ $item->specialty->label }}</span>
                </li>
            @endif
        </ul>
    </div>
</article>

