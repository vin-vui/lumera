<main class="no-bg">
    <section class="t-creator">
        <div class="a-ratio" data-ratio="3/4">
            <img src="{{ Storage::disk('uploads')->url($creator->image) }}" alt="{{ $creator->first_name }} {{ $creator->last_name }}">
        </div>
        <div class="t-creator__content">
            <h2 class="a-h2">{{ $creator->first_name }} {{ $creator->last_name }}</h2>
            <p class="text-cgraydark -small">{{ '@'.$creator->nick_name }}</p>
            <ul class="no-bullet m-tags">
                @foreach ($creator->specialties as $specialty)
                <li class="m-tags__item">
                    <span class="a-tag">{{ $specialty->label }}</span>
                </li>
                @endforeach
            </ul>
            <div>
                <p class="a-h5 mgb-1">Résumé de notre créateur</p>
                <div class="a-text -small text-cgraydark">
                    {{ $creator->description }}
                </div>
            </div>
            <ul class="no-bullet t-creator__socials">
                @if ($creator->sn_tiktok)
                    <li>
                        <a href="{{ $creator->sn_tiktok }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small">
                            <span>Tiktok</span>
                            <span>{{ short_number($creator->tn_tiktok) }}</span>
                            <svg class="icon" aria-hidden="true" focusable="false">
                                <use xlink:href="#icon-arrow-diag" />
                            </svg>
                        </a>
                    </li>
                @endif
                @if ($creator->sn_snapchat)
                    <li>
                        <a href="{{ $creator->sn_snapchat }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small">
                            <span>Snapchat</span>
                            <span>{{ short_number($creator->tn_snapchat) }}</span>
                            <svg class="icon" aria-hidden="true" focusable="false">
                            <use xlink:href="#icon-arrow-diag" />
                        </svg>
                        </a>
                    </li>
                @endif
                @if ($creator->sn_instagram)
                    <li>
                        <a href="{{ $creator->sn_instagram }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small">
                            <span>Instagram</span>
                            <span>{{ short_number($creator->tn_instagram) }}</span>
                            <svg class="icon" aria-hidden="true" focusable="false">
                            <use xlink:href="#icon-arrow-diag" />
                        </svg>
                        </a>
                    </li>
                @endif
                @if ($creator->sn_youtube)
                    <li>
                        <a href="{{ $creator->sn_youtube }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small">
                            <span>Youtube</span>
                            <span>{{ short_number($creator->tn_youtube) }}</span>
                            <svg class="icon" aria-hidden="true" focusable="false">
                            <use xlink:href="#icon-arrow-diag" />
                        </svg>
                        </a>
                    </li>
                @endif
                @if ($creator->sn_linkedin)
                    <li>
                        <a href="{{ $creator->sn_linkedin }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small">
                            <span>Linkedin</span>
                            <span>{{ short_number($creator->tn_linkedin) }}</span>
                            <svg class="icon" aria-hidden="true" focusable="false">
                            <use xlink:href="#icon-arrow-diag" />
                        </svg>
                        </a>
                    </li>
                @endif
                @if ($creator->sn_facebook)
                    <li>
                        <a href="{{ $creator->sn_facebook }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small">
                            <span>Facebook</span>
                            <span>{{ short_number($creator->tn_facebook) }}</span>
                            <svg class="icon" aria-hidden="true" focusable="false">
                            <use xlink:href="#icon-arrow-diag" />
                        </svg>
                        </a>
                    </li>
                @endif
                @if ($creator->sn_twitter)
                    <li>
                        <a href="{{ $creator->sn_twitter }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small">
                            <span>Twitter</span>
                            <span>{{ short_number($creator->tn_twitter) }}</span>
                            <svg class="icon" aria-hidden="true" focusable="false">
                            <use xlink:href="#icon-arrow-diag" />
                        </svg>
                        </a>
                    </li>
                @endif
                @if ($creator->sn_twitch)
                    <li>
                        <a href="{{ $creator->sn_twitch }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small">
                            <span>Twitch</span>
                            <span>{{ short_number($creator->tn_twitch) }}</span>
                            <svg class="icon" aria-hidden="true" focusable="false">
                            <use xlink:href="#icon-arrow-diag" />
                        </svg>
                        </a>
                    </li>
                @endif
            </ul>
            <a href="mailto:{{ $creator->email }}" class="a-button -round"><span>Contact</span></a>
        </div>
    </section>
</main>
