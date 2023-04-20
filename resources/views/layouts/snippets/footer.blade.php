<footer class="o-footer">
    <div class="g-row">
        <div class="sm-column-12 lg-column-6 lg-offset-1 no-width">
            <p class="a-h2">Créons des campagnes marquantes <strong>ensemble</strong></p>
            <p class="lg-size-90 -small">Et si vous nous faisiez part de vos projets ? L’équipe de Lumera se fera un plaisir de vous accompagner dans leur réalisation et de co-construire des campagnes de communication qui se démarquent et qui vous ressemblent.</p>
        </div>
        <div class="sm-column-12 lg-column-4">
            @include('molecules.contact')
        </div>
    </div>
    <div class="g-row lg-align-center-start">
        <div class="sm-column-12 lg-column-10">
            <div class="o-footer__bottom">
                <div class="o-footer__logo dp-none lg-dp-block"><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-logo-full" /></svg></div>
                <div class="o-header__nav">
                    <nav class="o-menu">
                        <ul class="no-bullet">
                            <li>
                                <a href="{{ route('front.creators') }}" class="a-button -secondary">Nos créateurs</a>
                            </li>
                            <li>
                                <a href="{{ route('front.cases') }}" class="a-button -secondary">Nos campagnes</a>
                            </li>
                        </ul>
                    </nav>
                    <button>
                        {{-- TODO UPDATE COLOR --}}
                        clr
                    </button>
                </div>
                {{-- TODO SOCIALS --}}
                <ul class="no-bullet m-socials">
                    <li>
                        <a href="#" target="_blank" rel="noopener" title="Twitter" class="-primary">TW</a>
                    </li>
                    <li>
                        <a href="#" target="_blank" rel="noopener" title="Facebook" class="-primary">FB</a>
                    </li>
                    <li>
                        <a href="#" target="_blank" rel="noopener" title="Linkedin" class="-primary">LI</a>
                    </li>
                    <li>
                        <a href="#" target="_blank" rel="noopener" title="Instagram" class="-primary">IN</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="g-row align-start-center">
        <div class="sm-column-12 lg-column-3 lg-order-1">
            <div class="text-right">
                <a href="#top" class="a-button -tertiary" data-scroll data-scroll-to>Revenir en haut de page</a>
            </div>
        </div>
        <div class="sm-column-12 lg-column-7 lg-offset-1">
            <div class="o-footer__logo lg-dp-none"><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-logo-full" /></svg></div>
            <div class="o-footer__mentions text-cgraydark">
                <p>© LMR - Lumera {{ now()->year }}</p>
                <a href="/conditions-generales" class="-no-underline">Conditions générales</a>
            </div>
        </div>
    </div>
</footer>



<div id="about" role="dialog" aria-modal="true" aria-hidden="true" class="m-popin" data-module-popin>
    <div class="m-popin__container t-about" data-popin="container">
        <button class="m-popin__close" type="button" data-popin="close">
            <span class="a-button -round -small -white"><span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-left" /></svg></span></span>
        </button>
        <div class="m-popin__content">
            <div class="a-ratio" data-ratio="4/3">
                <img src="{{asset('uploads/placeholder.jpg')}}" alt="Lumera">
            </div>
            <div class="t-about__content">
                <h2 class="mgb-3">L'agence qui vous fait <strong>briller</strong></h2>
                <p>Lumera est une <strong>agence de créateurs de contenu et d’influence marketing</strong> basée à Montpellier et spécialisée dans le <strong>contenu à but éducatif et divertissant.</strong><p>
                <p>En 2022 nous avons décidé de créer l’agence avec l’ambition d’être <strong>la première agence d’influence marketing spécialisée dans les domaines de la tech, du business et de l’éducation</strong>. Chez nous on parle entreprenariat, apprentissage, finances, outils de développement personnel… tout autant de sujets passionnants que nos créateurs de contenu maîtrisent à la perfection et partagent à leur communauté sur les réseaux sociaux.</p>
                <p>Aujourd’hui, on accompagne <strong>plus de 100 créateurs de contenu</strong> dans la mise en place de leur stratégie de communication digitale et le développement de leur communauté. En parallèle, nous accompagnons les marques dans la <strong>création de leurs campagnes d’influence marketing</strong> et les mettons en relation avec nos créateurs de contenu pour créer des campagnes innovantes et performantes.</p>
            </div>
        </div>
    </div>
    <div class="m-popin__overlay" tabindex="-1" data-popin="close"></div>
</div>

<div id="contact" role="dialog" aria-modal="true" aria-hidden="true" class="m-popin" data-module-popin>
    <div class="m-popin__container t-contact" data-popin="container">
        <button class="m-popin__close" type="button" data-popin="close">
            <span class="a-button -round -small -white"><span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-left" /></svg></span></span>
        </button>
        <div class="m-popin__content t-contact__content">
            <div>
                <p class="a-h2 mgb-1">Créons des campagnes marquantes <strong>ensemble</strong></p>
                <p class="lg-size-90 -small">Et si vous nous faisiez part de vos projets ? L’équipe de Lumera se fera un plaisir de vous accompagner dans leur réalisation et de co-construire des campagnes de communication qui se démarquent et qui vous ressemblent.</p>
            </div>
            <div>
                @include('molecules.contact')
            </div>
        </div>
    </div>
    <div class="m-popin__overlay" tabindex="-1" data-popin="close"></div>
</div>


@foreach (App\Models\Creator::where('display', true)->get() as $creator)
    <div id="creator-{{ $creator->id }}" role="dialog" aria-modal="true" aria-hidden="true" class="m-popin -up" data-module-popin>
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
                        <p class="a-h5 mgb-1">Résumé de notre créateur</p>
                        <div class="a-text -small text-cgraydark">
                            <p>{{ $creator->description }}</p>
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
            </div>
        </div>
        <div class="m-popin__overlay" tabindex="-1" data-popin="close"></div>
    </div>
@endforeach

@foreach (App\Models\CaseStudy::all() as $case)
    <div id="case-{{ $case->id }}" role="dialog" aria-modal="true" aria-hidden="true" class="m-popin" data-module-popin>
        <div class="m-popin__container t-case" data-popin="container">
            <button class="m-popin__close" type="button" data-popin="close">
                <span class="a-button -round -small -white"><span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-left" /></svg></span></span>
            </button>
            <div class="m-popin__content">
                <div class="a-ratio" data-ratio="20/7">
                    <img src="{{ Storage::disk('uploads')->url($case->image) }}" alt="{{ $case->client }}">
                </div>
                <div class="t-case__inner">
                    <div class="t-case__content">
                        <div class="m-caseInfos">
                            <div>
                                <p class="a-h5 mgb-1">Client</p>
                                <p class="-small text-cgraydark">{{ $case->client }}</p>
                            </div>
                            <div>
                                <p class="a-h5 mgb-1">Année</p>
                                <p class="-small text-cgraydark">{{ $case->year }}</p>
                            </div>
                            <div>
                                <p class="a-h5 mgb-1">Créateurs associés</p>
                                <ul class="no-bullet">
                                    {{-- TODO NBR ? --}}
                                    @foreach ($case->creators as $creator)
                                        <li>
                                            <button data-module-popin-button data-popin="creator-{{ $creator->id }}" class="a-button -inline -xsmall"><span>{{ $creator->first_name }} {{ $creator->last_name }}</span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-diag" /></svg></button>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div>
                                <p class="a-h5 mgb-1">Plateformes activées</p>
                                <ul class="no-bullet">
                                    @foreach ($case->tags as $tag)
                                        <li>
                                            <span class="a-text -small text-cgraydark">{{ $tag->label }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="m-caseContent m-content">
                            {!! $case->bloc_wysiwyg !!}
                            <div class="m-videos">
                                {{-- {!! $case->video_1 !!}
                                {!! $case->video_2 !!} --}}
                            </div>
                        </div>
                        <div class="m-caseInfos">
                            <div>
                                <p class="a-h5 mgb-1">Client</p>
                                <p class="-small text-cgraydark">{{ $case->client }}</p>
                            </div>
                            <div>
                                <p class="a-h5 mgb-1">Année</p>
                                <p class="-small text-cgraydark">{{ $case->year }}</p>
                            </div>
                            <div>
                                <p class="a-h5 mgb-1">Créateurs associés</p>
                                <ul class="no-bullet">
                                    @foreach ($case->creators as $creator)
                                        <li>
                                            <button data-module-popin-button data-popin="creator-{{ $creator->id }}" class="a-button -inline -xsmall"><span>{{ $creator->first_name }} {{ $creator->last_name }}</span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-diag" /></svg></button>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div>
                                <p class="a-h5 mgb-1">Plateformes activées</p>
                                <ul class="no-bullet">
                                    @foreach ($case->tags as $tag)
                                        <li>
                                            <span class="a-text -small text-cgraydark">{{ $tag->label }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="t-case__share">
                        <a href="{{ route('front.case', $case->id) }}" class="a-button -round -medium"><span>Partager</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-popin__overlay" tabindex="-1" data-popin="close"></div>
    </div>
@endforeach
