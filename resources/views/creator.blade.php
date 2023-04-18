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
                <li>
                    <a href="{{ $creator->sn_tiktok }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small">
                        <span>Tiktok</span>
                        <svg class="icon" aria-hidden="true" focusable="false">
                            <use xlink:href="#icon-arrow-diag" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ $creator->sn_snapchat }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small">
                        <span>Snapchat</span>
                        <svg class="icon" aria-hidden="true" focusable="false">
                            <use xlink:href="#icon-arrow-diag" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ $creator->sn_instagram }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small">
                        <span>Instagram</span>
                        <svg class="icon" aria-hidden="true" focusable="false">
                            <use xlink:href="#icon-arrow-diag" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ $creator->sn_youtube }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small">
                        <span>Youtube</span>
                        <svg class="icon" aria-hidden="true" focusable="false">
                            <use xlink:href="#icon-arrow-diag" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ $creator->sn_linkedin }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small">
                        <span>Linkedin</span>
                        <svg class="icon" aria-hidden="true" focusable="false">
                            <use xlink:href="#icon-arrow-diag" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ $creator->sn_facebook }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small">
                        <span>Facebook</span>
                        <svg class="icon" aria-hidden="true" focusable="false">
                            <use xlink:href="#icon-arrow-diag" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ $creator->sn_twitter }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small">
                        <span>Twitter</span>
                        <svg class="icon" aria-hidden="true" focusable="false">
                            <use xlink:href="#icon-arrow-diag" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ $creator->sn_twitch }}" target="_blank" rel="noopener nofollow" class="a-button -inline -small">
                        <span>Twitch</span>
                        <svg class="icon" aria-hidden="true" focusable="false">
                            <use xlink:href="#icon-arrow-diag" />
                        </svg>
                    </a>
                </li>
            </ul>
            <a href="mailto:" class="a-button -round"><span>Contact</span></a>
        </div>
    </section>
</main>
