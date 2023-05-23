@include('popins.contact')
@include('popins.about')

@foreach (App\Models\Creator::where('display', true)->get() as $creator)
    <div id="creator-{{ $creator->id }}" role="dialog" aria-modal="true" aria-hidden="true" class="m-popin -up" data-module-popin>
        <div class="m-popin__container t-creator" data-popin="container">
            <button class="m-popin__close" type="button" data-popin="close">
                <span class="a-button -round -small -white"><span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-left" /></svg></span></span>
            </button>
            <div class="m-popin__content">
                <div class="m-popin__inner">
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
                </div>
            </div>
        </div>
        <div class="m-popin__overlay" tabindex="-1" data-popin="close"></div>
    </div>
@endforeach

@if (App\Models\CaseStudy::count() > 0)
    @foreach (App\Models\CaseStudy::all() as $case)
        @php
            $limitDisplay = 3;
            $allCreators = array();

            foreach ($case->creators as $key => $value) {
                $newCreator = array(
                    'id' => $value->id,
                    'first_name' => $value->first_name,
                    'last_name' => $value->last_name,
                    'display' => $value->display
                );

                $allCreators[] = $newCreator;
            }

            if ($case->others) {
                $othersSplit = explode(',', $case->others);
                foreach ($othersSplit as $key => $value) {
                    $newCreator = array(
                        'id' => $key,
                        'first_name' => $value,
                        'last_name' => '',
                        'display' => 0
                    );

                    $allCreators[] = $newCreator;
                }
            }

            $countOffset = count($allCreators) - $limitDisplay;
        @endphp
        <div id="case-{{ $case->id }}" role="dialog" aria-modal="true" aria-hidden="true" class="m-popin" data-module-popin>
            <div class="m-popin__container t-case" data-popin="container">
                <button class="m-popin__close" type="button" data-popin="close">
                    <span class="a-button -round -small -white"><span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-left" /></svg></span></span>
                </button>
                <div class="m-popin__content">
                    <div class="m-popin__inner">
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
                                        <ul class="no-bullet t-case__creators">
                                            @foreach ($allCreators as $creator)
                                                @if ($loop->index < $limitDisplay)
                                                <li>
                                                    <button data-module-popin-button data-popin="creator-{{ $creator['id'] }}" class="a-button -inline -xsmall"{{ $creator['display'] == 0 ? ' disabled' : '' }}>
                                                        <span>{{ $creator['first_name'] }} {{ $creator['last_name'] }}</span>
                                                        @if ($creator['display'] == 1)
                                                        <svg class="icon" aria-hidden="true" focusable="false">
                                                            <use xlink:href="#icon-arrow-diag" />
                                                        </svg>
                                                        @endif
                                                    </button>
                                                </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                        @if (count($allCreators) > $limitDisplay)
                                        <div class="m-accordion -creators" data-module-accordion>
                                            <button type="button" class="m-accordion__title" data-accordion="button" aria-expanded="false" aria-controls="accordion-creators1">
                                                <span>+{{ $countOffset == 1 ? $countOffset . ' autre' : $countOffset . ' autres' }}</span>
                                            </button>
                                            <div class="m-accordion__scroll" data-accordion="scroll" id="accordion-creators1">
                                                <div class="m-accordion__content">
                                                    <ul class="no-bullet t-case__creators">
                                                        @foreach ($allCreators as $creator)
                                                            @if ($loop->index >= $limitDisplay)
                                                            <li>
                                                                <button data-module-popin-button data-popin="creator-{{ $creator['id'] }}" class="a-button -inline -xsmall"{{ $creator['display'] == 0 ? ' disabled' : '' }}>
                                                                    <span>{{ $creator['first_name'] }} {{ $creator['last_name'] }}</span>
                                                                    @if ($creator['display'] == 1)
                                                                    <svg class="icon" aria-hidden="true" focusable="false">
                                                                        <use xlink:href="#icon-arrow-diag" />
                                                                    </svg>
                                                                    @endif
                                                                </button>
                                                            </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                    <button type="button" class="m-accordion__title" data-accordion="button" aria-expanded="false" aria-controls="accordion-creators1">
                                                        <span>Voir moins</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
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
                                        @if ($case->video_1)
                                            <a href="{{ $case->video_1 }}" target="_blank" rel="noopener nofollow" class="a-button -primary">Voir la première vidéo</a>
                                        @endif
                                        @if ($case->video_2)
                                            <a href="{{ $case->video_2 }}" target="_blank" rel="noopener nofollow" class="a-button -primary">Voir la deuxième vidéo</a>
                                        @endif
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
                                        <ul class="no-bullet t-case__creators">
                                            @foreach ($allCreators as $creator)
                                                @if ($loop->index < $limitDisplay)
                                                <li>
                                                    <button data-module-popin-button data-popin="creator-{{ $creator['id'] }}" class="a-button -inline -xsmall"{{ $creator['display'] == 0 ? ' disabled' : '' }}>
                                                        <span>{{ $creator['first_name'] }} {{ $creator['last_name'] }}</span>
                                                        @if ($creator['display'] == 1)
                                                        <svg class="icon" aria-hidden="true" focusable="false">
                                                            <use xlink:href="#icon-arrow-diag" />
                                                        </svg>
                                                        @endif
                                                    </button>
                                                </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                        @if (count($allCreators) > $limitDisplay)
                                        <div class="m-accordion -creators -bottom" data-module-accordion>
                                            <button type="button" class="m-accordion__title" data-accordion="button" aria-expanded="false" aria-controls="accordion-creators2">
                                                <span>+{{ $countOffset == 1 ? $countOffset . ' autre' : $countOffset . ' autres' }}</span>
                                            </button>
                                            <div class="m-accordion__scroll" data-accordion="scroll" id="accordion-creators2">
                                                <div class="m-accordion__content">
                                                    <ul class="no-bullet t-case__creators">
                                                        @foreach ($allCreators as $creator)
                                                            @if ($loop->index >= $limitDisplay)
                                                            <li>
                                                                <button data-module-popin-button data-popin="creator-{{ $creator['id'] }}" class="a-button -inline -xsmall"{{ $creator['display'] == 0 ? ' disabled' : '' }}>
                                                                    <span>{{ $creator['first_name'] }} {{ $creator['last_name'] }}</span>
                                                                    @if ($creator['display'] == 1)
                                                                    <svg class="icon" aria-hidden="true" focusable="false">
                                                                        <use xlink:href="#icon-arrow-diag" />
                                                                    </svg>
                                                                    @endif
                                                                </button>
                                                            </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                    <button type="button" class="m-accordion__title" data-accordion="button" aria-expanded="false" aria-controls="accordion-creators2">
                                                        <span>Voir moins</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
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
                                <button data-module-copy data-link="{{ route('front.case', $case->id) }}" class="a-button -round -medium"><span>Partager</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-popin__overlay" tabindex="-1" data-popin="close"></div>
        </div>
    @endforeach
@endif
