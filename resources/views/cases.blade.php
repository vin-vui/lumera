<main class="t-cases">
    <section class="g-section -small">
        <div class="g-row">
            <div class="sm-column-12 lg-column-9 mgb-2">
                <h1>Des campagnes d’influence qui visent juste</h1>
            </div>
            <div class="sm-column-12 lg-column-9">
                <p class="-big">Innovante, créative, percutante, ludique... nous construisons ensemble la communication qui vous ressemble</p>
            </div>
        </div>
    </section>
    <iframe src="https://www.tiktok.com/@maniraj_en3d/video/7216354494223830277?is_from_webapp=1&sender_device=pc" frameborder="0"></iframe>
    <section class="g-section t-cases__page">
        <div class="g-row">
            <ul class="no-bullet sm-column-12 lg-column-9 no-width t-cases__list">
                @foreach ($cases as $case)
                <li>@include('molecules.case', ['complete' => true])</li>
                @endforeach
            </ul>
        </div>
    </section>
    <section class="g-section">
        <div class="g-row">
            <div class="sm-column-12 lg-column-5">
                <h2>Découvrez tous <br><strong>nos créateurs</strong></h2>
            </div>
            <div class="sm-column-12 lg-column-5 lg-offset-1">
                <p>Nous sommes très fiers d’accompagner ces créateurs de contenu au quotidien dans leur prise de parole, de leur donner les clés pour se démarquer et devenir les personnalités les plus influentes de leur secteur.</p>
            </div>
        </div>
        <div class="g-row">
            <div class="sm-column-12">
                <div class="m-slider -bg" data-module-slider data-controls="true" data-size="3">
                    <div class="m-slider__viewport" data-slider="viewport">
                        <ul class="no-bullet m-slider__container" data-module-creator>
                            {{-- TODO LIMIT NBR ?? --}}
                            @foreach ($creators as $creator)
                            <li class="m-slider__slide">
                                @include('molecules.creator')
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="m-slider__footer">
                        <div class="m-slider__arrows">
                            <button type="button" class="m-slider__button" data-slider="prevBtn" title="Précédent">
                                <svg class="icon" aria-hidden="true" focusable="false">
                                    <use xlink:href="#icon-arrow-left" /></svg>
                            </button>
                            <button type="button" class="m-slider__button" data-slider="nextBtn" title="Suivant">
                                <svg class="icon" aria-hidden="true" focusable="false">
                                    <use xlink:href="#icon-arrow-right" /></svg>
                            </button>
                        </div>

                        <a href="{{ route('front.creators') }}" class="a-button -round -small"><span>Voir tous</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="g-row mgb-6">
            <div class="sm-column-12 lg-column-7 lg-offset-1">
                <h2 class="a-h2">Ils ont<strong>flashé</strong> sur nous et ils ont eu raison !</h2>
            </div>
        </div>
        <div class="g-row align-center-start">
            <div class="sm-column-12 lg-column-8">
                <div class="o-testimonies m-slider -vertical" data-module-slider data-controls="true" data-axis="y">
                    <div class="o-testimonies__arrows">
                        <button type="button" class="m-slider__button" data-slider="nextBtn" title="Suivant">
                            <svg class="icon" aria-hidden="true" focusable="false">
                                <use xlink:href="#icon-arrow-right" /></svg>
                        </button>
                        <button type="button" class="m-slider__button" data-slider="prevBtn" title="Précédent">
                            <svg class="icon" aria-hidden="true" focusable="false">
                                <use xlink:href="#icon-arrow-left" /></svg>
                        </button>
                    </div>
                    <div class="o-testimonies__slider">
                        <div class="m-slider__viewport" data-slider="viewport">
                            <div class="m-slider__container">
                                @foreach ($testimonials as $testimonial)
                                <div class="m-slider__slide">
                                    <figure class="a-blockquote">
                                        <blockquote>
                                            <p>{{ $testimonial->text }}</p>
                                        </blockquote>
                                        <figcaption>{{ $testimonial->label }}</figcaption>
                                    </figure>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
