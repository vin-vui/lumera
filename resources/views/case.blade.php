<main class="no-bg t-case">
    <section>
        <div class="a-ratio" data-ratio="20/7">
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
                        <ul class="no-bullet">
                            @foreach ($case->creators as $creator)
                            <li>
                                <a href="#" target="_blank" rel="noopener nofollow" class="a-button -inline -xsmall">
                                    <span>{{ $creator->first_name }} {{ $creator->last_name }}</span>
                                    <svg class="icon" aria-hidden="true" focusable="false">
                                        <use xlink:href="#icon-arrow-diag" />
                                    </svg>
                                </a>
                            </li>
                            @endforeach
                        </ul>
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
                                <a href="#" target="_blank" rel="noopener nofollow" class="a-button -inline -xsmall">
                                    <span>{{ $creator->first_name }} {{ $creator->last_name }}</span>
                                    <svg class="icon" aria-hidden="true" focusable="false">
                                        <use xlink:href="#icon-arrow-diag" />
                                    </svg>
                                </a>
                            </li>
                            @endforeach
                        </ul>
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
                <a href="{{ route('front.case', $case->id) }}" class="a-button -round -medium"><span>Partager</span></a>
            </div>
        </div>
    </section>
</main>
