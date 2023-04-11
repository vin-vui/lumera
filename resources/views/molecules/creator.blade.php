
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

<div id="creator-{{ $creator->id }}" role="dialog" aria-modal="true" aria-hidden="true" class="m-popin" data-module-popin>
    <div class="m-popin__container t-creator" data-popin="container">
        <button class="m-popin__close" type="button" data-popin="close">
            <span class="a-button -round -small -white"><span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-left" /></svg></span></span>
        </button>
        <div class="m-popin__content">
            <div class="a-ratio" data-ratio="3/4">
                <img src="{{ Storage::disk('uploads')->url($creator->image) }}" alt="{{ $creator->first_name }} {{ $creator->last_name }}">
            </div>
            <div class="t-creator__content">
                <h2 class="a-h2">{{ $creator->first_name }} {{ $creator->last_name }}</h2>
                <p class="text-cgraydark -small">&#x40;{{ $creator->nick_name }}</p>
                <ul class="no-bullet m-tags">
                    @if ($creator->specialty_id != null && $creator->specialty()->exists())
                        <li class="m-tags__item">
                            <span class="a-tag">{{ $creator->specialty->label }}</span>
                        </li>
                    @endif
                </ul>
                <div>
                    <p class="a-h5 mgb-1">Résumé de notre créateur</p>
                    <div class="a-text -small text-cgraydark">
                        <p>{{ $creator->description }}</p>
                    </div>
                </div>
                <ul class="no-bullet t-creator__socials">
                    @if ($creator->sn_tiktok)
                        <li><a href="{{ $creator->sn_tiktok }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small"><span>Tiktok</span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-diag" /></svg></a></li>
                    @endif
                    @if ($creator->sn_facebook)
                        <li><a href="{{ $creator->sn_facebook }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small"><span>Facebook</span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-diag" /></svg></a></li>
                    @endif
                    @if ($creator->sn_instagram)
                        <li><a href="{{ $creator->sn_instagram }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small"><span>Instagram</span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-diag" /></svg></a></li>
                    @endif
                    @if ($creator->sn_youtube)
                        <li><a href="{{ $creator->sn_youtube }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small"><span>Youtube</span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-diag" /></svg></a></li>
                    @endif
                    @if ($creator->sn_linkedin)
                        <li><a href="{{ $creator->sn_linkedin }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small"><span>Linkedin</span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-diag" /></svg></a></li>
                    @endif
                    @if ($creator->sn_pinterest)
                        <li><a href="{{ $creator->sn_pinterest }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small"><span>Pinterest</span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-diag" /></svg></a></li>
                    @endif
                </ul>
                {{-- TODO EMAIL --}}
                <a href="mailto:" class="a-button -round"><span>Contact</span></a>
            </div>
        </div>
    </div>
    <div class="m-popin__overlay" tabindex="-1" data-popin="close"></div>
</div>

