
<article class="m-creator" data-module-popin-button data-popin="creator">
    <div class="a-ratio" data-ratio>
        <img src="{{asset('uploads/placeholder.jpg')}}" alt="Romain Talon">
    </div>
    <div class="m-creator__content">
        <p class="a-h3">Romain Talon</p>
        <p class="text-cgraydark -small">@talonnade</p>
        <ul class="no-bullet m-tags">
            {{-- @if ($item->specialty_id != null && $item->specialty()->exists())
                <li class="m-tags__item">
                    <span class="a-tag">{{ $item->specialty->label }}</span>
                </li>
            @endif --}}
            <li class="m-tags__item">
                <span class="a-tag">Divertissement</span>
            </li>
            <li class="m-tags__item">
                <span class="a-tag">Business</span>
            </li>
            <li class="m-tags__item">
                <span class="a-tag">Conseil</span>
            </li>
        </ul>
    </div>
</article>

