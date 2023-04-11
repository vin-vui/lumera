<article data-module-popin-button data-popin="case-{{ $case->id }}" class="m-case{{ empty($complete) ? ' -small' : '' }}">
    <div class="a-ratio m-case__thumb" data-ratio="1/1">
        <img src="{{ Storage::disk('uploads')->url($case->image) }}" alt="{{ $case->client }}">
    </div>
    <div class="m-case__content">
        <p class="a-h3">{{ $case->client }}</p>
        @if (isset($complete))
            <div class="m-case__content--cols mgt-1">
                <p class="text-cgraydark -small">{{ $case->description }}</p>
                <div>
                    <p class="a-h5 mgb-1">Plateformes activées</p>
                    <ul class="no-bullet">
                        @foreach ($case->tags as $tag)
                            <li class="a-text -small text-cgraydark">{{ $tag->label }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @else
            <p class="text-cgraydark -small">{{ \Illuminate\Support\Str::limit($case->description, 50, $end='...') }}</p>
        @endif
        <span class="m-case__arrow">
            <svg class="icon -medium" aria-hidden="true" focusable="false">
                <use xlink:href="#icon-arrow-diag" />
            </svg>
        </span>
    </div>
</article>

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
                                {{-- TODO CREATOR LINK --}}
                                @foreach ($case->creators as $creator)
                                    <li>
                                        <a href="#" target="_blank" rel="noopener nofollow" class="a-button -inline -xsmall"><span>{{ $creator->first_name }} {{ $creator->last_name }}</span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-diag" /></svg></a>
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
                                {{-- TODO CREATOR LINK --}}
                                @foreach ($case->creators as $creator)
                                    <li>
                                        <a href="#" target="_blank" rel="noopener nofollow" class="a-button -inline -xsmall"><span>{{ $creator->first_name }} {{ $creator->last_name }}</span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-diag" /></svg></a>
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
                    <a href="#" class="a-button -round -medium"><span>Partager</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="m-popin__overlay" tabindex="-1" data-popin="close"></div>
</div>
