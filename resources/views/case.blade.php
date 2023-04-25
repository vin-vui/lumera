<main class="no-bg t-case">
    <section>
        <div class="g-row">
            <div class="sm-column-12">
                <div class="a-ratio t-case__image" data-ratio="20/7">
                    <img src="{{ Storage::disk('uploads')->url($case->image) }}" alt="">
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
                                @php
                                    $limitDisplay = 3;
                                    $countOffset = $case->creators->count() - $limitDisplay;
                                @endphp
                                <ul class="no-bullet t-case__creators">
                                    @foreach ($case->creators as $creator)
                                        @if ($loop->index < $limitDisplay)
                                        <li>
                                            <button data-module-popin-button data-popin="creator-{{ $creator->id }}" class="a-button -inline -xsmall"{{ $creator->display == 0 ? ' disabled' : '' }}>
                                                <span>{{ $creator->first_name }} {{ $creator->last_name }}</span>
                                                @if ($creator->display == 1)
                                                <svg class="icon" aria-hidden="true" focusable="false">
                                                    <use xlink:href="#icon-arrow-diag" />
                                                </svg>
                                                @endif
                                            </button>
                                        </li>
                                        @endif
                                    @endforeach
                                </ul>
                                @if ($case->creators->count() > $limitDisplay)
                                <div class="m-accordion -creators" data-module-accordion>
                                    <button type="button" class="m-accordion__title" data-accordion="button" aria-expanded="false" aria-controls="accordion-creators1">
                                        <span>+{{ $countOffset == 1 ? $countOffset . ' autre' : $countOffset . ' autres' }}</span>
                                    </button>
                                    <div class="m-accordion__scroll" data-accordion="scroll" id="accordion-creators1">
                                        <div class="m-accordion__content">
                                            <ul class="no-bullet t-case__creators">
                                                @foreach ($case->creators as $creator)
                                                    @if ($loop->index >= $limitDisplay)
                                                    <li>
                                                        <button data-module-popin-button data-popin="creator-{{ $creator->id }}" class="a-button -inline -xsmall"{{ $creator->display == 0 ? ' disabled' : '' }}>
                                                            <span>{{ $creator->first_name }} {{ $creator->last_name }}</span>
                                                            @if ($creator->display == 1)
                                                            <svg class="icon" aria-hidden="true" focusable="false">
                                                                <use xlink:href="#icon-arrow-diag" />
                                                            </svg>
                                                            @endif
                                                        </button>
                                                    </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div>
                                <p class="a-h5 mgb-1">Plateformes activées</p>
                                <ul class="no-bullet">
                                    @foreach ($case->tags as $tag)
                                    <li class="a-text -small text-cgraydark">{{ $tag->label }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="m-caseContent m-content">
                            {!! $case->bloc_wysiwyg !!}
                            <div class="m-videos">
                                {!! $case->video_1 !!}
                                {!! $case->video_2 !!}
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
                                @php
                                    $limitDisplay = 3;
                                    $countOffset = $case->creators->count() - $limitDisplay;
                                @endphp
                                <ul class="no-bullet t-case__creators">
                                    @foreach ($case->creators as $creator)
                                        @if ($loop->index < $limitDisplay)
                                        <li>
                                            <button data-module-popin-button data-popin="creator-{{ $creator->id }}" class="a-button -inline -xsmall"{{ $creator->display == 0 ? ' disabled' : '' }}>
                                                <span>{{ $creator->first_name }} {{ $creator->last_name }}</span>
                                                @if ($creator->display == 1)
                                                <svg class="icon" aria-hidden="true" focusable="false">
                                                    <use xlink:href="#icon-arrow-diag" />
                                                </svg>
                                                @endif
                                            </button>
                                        </li>
                                        @endif
                                    @endforeach
                                </ul>
                                @if ($case->creators->count() > $limitDisplay)
                                <div class="m-accordion -creators" data-module-accordion>
                                    <button type="button" class="m-accordion__title" data-accordion="button" aria-expanded="false" aria-controls="accordion-creators1">
                                        <span>+{{ $countOffset == 1 ? $countOffset . ' autre' : $countOffset . ' autres' }}</span>
                                    </button>
                                    <div class="m-accordion__scroll" data-accordion="scroll" id="accordion-creators1">
                                        <div class="m-accordion__content">
                                            <ul class="no-bullet t-case__creators">
                                                @foreach ($case->creators as $creator)
                                                    @if ($loop->index >= $limitDisplay)
                                                    <li>
                                                        <button data-module-popin-button data-popin="creator-{{ $creator->id }}" class="a-button -inline -xsmall"{{ $creator->display == 0 ? ' disabled' : '' }}>
                                                            <span>{{ $creator->first_name }} {{ $creator->last_name }}</span>
                                                            @if ($creator->display == 1)
                                                            <svg class="icon" aria-hidden="true" focusable="false">
                                                                <use xlink:href="#icon-arrow-diag" />
                                                            </svg>
                                                            @endif
                                                        </button>
                                                    </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div>
                                <p class="a-h5 mgb-1">Plateformes activées</p>
                                <ul class="no-bullet">
                                    @foreach ($case->tags as $tag)
                                    <li class="a-text -small text-cgraydark">{{ $tag->label }}</li>
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
    </section>
</main>
