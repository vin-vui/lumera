<main class="no-bg">
    <section class="t-creator">
        <div class="a-ratio" data-ratio="3/4">
            <img src="{{ Storage::disk('uploads')->url($creator->image) }}" alt="{{ $creator->first_name }} {{ $creator->last_name }}">
        </div>
        <div class="t-creator__content">
            <h2 class="a-h2">{{ $creator->first_name }} {{ $creator->last_name }}</h2>
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
            <div>
                <p class="a-h5 mgb-1">Présentation de notre créateur</p>
                <div class="a-text -small text-cgraydark">
                    <p>{{ $creator->description }}</p>
                </div>
            </div>
            <ul class="no-bullet t-creator__socials">
                <li>
                    @if ($creator->sn_tiktok)
                        <a href="{{ $creator->sn_tiktok }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small">
                    @else
                        <span class="a-button -inline -small" disabled>
                    @endif
                            <span>Tiktok</span>
                    @if ($creator->sn_tiktok)
                            <span class="a-number">{{ short_number($creator->tn_tiktok) }}</span>
                            <svg class="icon" aria-hidden="true" focusable="false">
                                <use xlink:href="#icon-arrow-diag" />
                            </svg>
                        </a>
                    @else
                        </span>
                    @endif
                </li>
                <li>
                    @if ($creator->sn_snapchat)
                        <a href="{{ $creator->sn_snapchat }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small">
                    @else
                        <span class="a-button -inline -small" disabled>
                    @endif
                            <span>Snapchat</span>
                    @if ($creator->sn_snapchat)
                            <span class="a-number">{{ short_number($creator->tn_snapchat) }}</span>
                            <svg class="icon" aria-hidden="true" focusable="false">
                                <use xlink:href="#icon-arrow-diag" />
                            </svg>
                        </a>
                    @else
                        </span>
                    @endif
                </li>
                <li>
                    @if ($creator->sn_instagram)
                        <a href="{{ $creator->sn_instagram }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small">
                    @else
                        <span class="a-button -inline -small" disabled>
                    @endif
                            <span>Instagram</span>
                    @if ($creator->sn_instagram)
                            <span class="a-number">{{ short_number($creator->tn_instagram) }}</span>
                            <svg class="icon" aria-hidden="true" focusable="false">
                                <use xlink:href="#icon-arrow-diag" />
                            </svg>
                        </a>
                    @else
                        </span>
                    @endif
                </li>
                <li>
                    @if ($creator->sn_youtube)
                        <a href="{{ $creator->sn_youtube }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small">
                    @else
                        <span class="a-button -inline -small" disabled>
                    @endif
                            <span>Youtube</span>
                    @if ($creator->sn_youtube)
                            <span class="a-number">{{ short_number($creator->tn_youtube) }}</span>
                            <svg class="icon" aria-hidden="true" focusable="false">
                                <use xlink:href="#icon-arrow-diag" />
                            </svg>
                        </a>
                    @else
                        </span>
                    @endif
                </li>
                <li>
                    @if ($creator->sn_linkedin)
                        <a href="{{ $creator->sn_linkedin }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small">
                    @else
                        <span class="a-button -inline -small" disabled>
                    @endif
                            <span>Linkedin</span>
                    @if ($creator->sn_linkedin)
                            <span class="a-number">{{ short_number($creator->tn_linkedin) }}</span>
                            <svg class="icon" aria-hidden="true" focusable="false">
                                <use xlink:href="#icon-arrow-diag" />
                            </svg>
                        </a>
                    @else
                        </span>
                    @endif
                </li>
                <li>
                    @if ($creator->sn_facebook)
                        <a href="{{ $creator->sn_facebook }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small">
                    @else
                        <span class="a-button -inline -small" disabled>
                    @endif
                            <span>Facebook</span>
                    @if ($creator->sn_facebook)
                            <span class="a-number">{{ short_number($creator->tn_facebook) }}</span>
                            <svg class="icon" aria-hidden="true" focusable="false">
                                <use xlink:href="#icon-arrow-diag" />
                            </svg>
                        </a>
                    @else
                        </span>
                    @endif
                </li>
                <li>
                    @if ($creator->sn_twitter)
                        <a href="{{ $creator->sn_twitter }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small">
                    @else
                        <span class="a-button -inline -small" disabled>
                    @endif
                            <span>Twitter</span>
                    @if ($creator->sn_twitter)
                            <span class="a-number">{{ short_number($creator->tn_twitter) }}</span>
                            <svg class="icon" aria-hidden="true" focusable="false">
                                <use xlink:href="#icon-arrow-diag" />
                            </svg>
                        </a>
                    @else
                        </span>
                    @endif
                </li>
                <li>
                    @if ($creator->sn_twitch)
                        <a href="{{ $creator->sn_twitch }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small">
                    @else
                        <span class="a-button -inline -small" disabled>
                    @endif
                            <span>Twitch</span>
                    @if ($creator->sn_twitch)
                            <span class="a-number">{{ short_number($creator->tn_twitch) }}</span>
                            <svg class="icon" aria-hidden="true" focusable="false">
                                <use xlink:href="#icon-arrow-diag" />
                            </svg>
                        </a>
                    @else
                        </span>
                    @endif
                </li>
            </ul>
            <a href="mailto:{{ $creator->email }}" class="a-button -round"><span>Contact</span></a>
        </div>
    </section>
</main>
