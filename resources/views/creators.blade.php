<x-guest-layout>
    <main class="t-creators">
        <section class="g-section -small">
            <div class="g-row">
                <div class="sm-column-12 lg-column-9 mgb-2">
                    <h1>Lumière sur <br>nos créateurs</h1>
                </div>
                <div class="sm-column-12 lg-column-9">
                    <p class="-big">Finances, nouvelles technologies, développement personnel... nos créateurs de contenu maîtrisent l'art et la manière d'en parler ! Découvrez leurs profils et leurs passions.</p>
                </div>
            </div>
        </section>
        <section class="g-section t-creators__page">
            {{-- TODO FILTERS --}}
            <div class="g-row">
                <ul class="no-bullet sm-column-12 lg-column-9 no-width t-creators__list">
                    @foreach (App\Models\Creator::where('display', true)->get() as $creator)
                        <div class="m-slider__slide">
                            @include('molecules.creator', ['item' => $creator])
                        </div>
                    @endforeach
                </ul>
                {{-- TODO PAGINATION --}}
            </div>
        </section>
        <section class="g-section">
            <div class="g-row">
                <div class="sm-column-12 lg-column-5">
                    <h2>Découvrez toutes <strong>nos campagnes</strong></h2>
                </div>
                <div class="sm-column-12 lg-column-5 lg-offset-1">
                    <p>Lumera consolide les relations entre des marques ambitieuses et des créateurs de contenu passionnés pour créer ensemble des campagnes de communication performantes qui s’adressent à des cibles en constante évolution.</p>
                </div>
            </div>
            <div class="g-row">
                <div class="sm-column-12">
                    <div class="m-slider -bg" data-module-slider data-controls="true" data-size="5">
                        <div class="m-slider__viewport" data-slider="viewport">
                            <ul class="no-bullet m-slider__container">
                                {{-- TODO LIMIT NBR ?? --}}
                                @foreach (App\Models\CaseStudy::all() as $case)
                                    <li class="m-slider__slide">@include('molecules.case', ['item' => $case])</li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="m-slider__footer">
                            <div class="m-slider__arrows">
                                <button type="button" class="m-slider__button" data-slider="prevBtn" title="Précédent">
                                    <svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-left" /></svg>
                                </button>
                                <button type="button" class="m-slider__button" data-slider="nextBtn" title="Suivant">
                                    <svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-right" /></svg>
                                </button>
                            </div>

                            <a href="/campagnes" class="a-button -round -small"><span>Voir tous</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="g-row mgb-6">
                <div class="sm-column-12 lg-column-7 lg-offset-1">
                    <h2 class="a-h2">Les avis des créateurs <br>qui <strong>illuminent</strong></h2>
                </div>
            </div>
            <div class="g-row align-center-start">
                <div class="sm-column-12 lg-column-8">
                    <div class="o-testimonies m-slider -vertical" data-module-slider data-controls="true" data-axis="y">
                        <div class="o-testimonies__arrows">
                            <button type="button" class="m-slider__button" data-slider="nextBtn" title="Suivant">
                                <svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-right" /></svg>
                            </button>
                            <button type="button" class="m-slider__button" data-slider="prevBtn" title="Précédent">
                                <svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-left" /></svg>
                            </button>
                        </div>
                        <div class="o-testimonies__slider">
                            <div class="m-slider__viewport" data-slider="viewport">
                                <div class="m-slider__container">
                                    <div class="m-slider__slide">
                                        <figure class="a-blockquote">
                                            <blockquote>
                                                <p>Un commentaire d’une marque expliquant que Lumera les a accompagné dans la création de leur campagne et qu’aujourd’hui encore ils font appel à leurs créateurs de contenus</p>
                                            </blockquote>
                                            <figcaption>Odoo</figcaption>
                                        </figure>
                                    </div>
                                    <div class="m-slider__slide">
                                        <figure class="a-blockquote">
                                            <blockquote>
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, iure maxime! Magni, esse praesentium!</p>
                                            </blockquote>
                                            <figcaption>Odoo</figcaption>
                                        </figure>
                                    </div>
                                    <div class="m-slider__slide">
                                        <figure class="a-blockquote">
                                            <blockquote>
                                                <p>Excepturi, iure maxime! Magni, esse praesentium!</p>
                                            </blockquote>
                                            <figcaption>Odoo</figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-guest-layout>
