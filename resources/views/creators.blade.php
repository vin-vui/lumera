<main class="t-creators" data-module-website>
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
        <div class="g-row t-creators__filters">
            <div class="sm-column-12 lg-column-5" data-module-filters>
                <div class="m-filters">
                    <button type="button" data-filters="button" class="a-buttonFilter"><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-filters" /></svg><span>Filtrer</span></button>
                    <div class="m-filters__panel" data-filters="panel">
                        <button type="button" data-filters="button" class="m-filters__close"><span>Fermer les filtres</span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-close" /></svg></button>
                        <div class="m-filters__sort">
                            <p class="-small">Trier par</p>
                            <select name="" id="" class="a-select">
                                <option value="" selected>Ordre alphabétique A-Z</option>
                                <option value="">Ordre alphabétique Z-A</option>
                            </select>
                        </div>
                        <div class="m-filters__tags">
                            <p class="-small">Domaines</p>
                            <ul class="no-bullet">
                                <li>
                                    <label for="tag-1" class="a-filterTag">
                                        <input type="checkbox" name="tags[]" value="1" id="tag-1">
                                        <span>Tag 1</span>
                                    </label>
                                </li>
                                <li>
                                    <label for="tag-2" class="a-filterTag">
                                        <input type="checkbox" name="tags[]" value="2" id="tag-2">
                                        <span>Tag 2</span>
                                    </label>
                                </li>
                                <li>
                                    <label for="tag-3" class="a-filterTag">
                                        <input type="checkbox" name="tags[]" value="3" id="tag-3">
                                        <span>Tag 3</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{-- search by nick_name, last_name, first_name --}}
            <div class="sm-column-12 lg-column-3 lg-offset-1" data-module-filters>
                <div class="text-right">
                    <input wire:model="search" type="search" placeholder="Rechercher un créateur..." class="a-input a-inputSearch">
                </div>
            </div>
            <div class="sm-column-12 mgt-2 mgb-2">
                <p class="-small">{{ $creators->count() }} Créateur{{ $creators->count() > 1 ? 's' : '' }}</p>
            </div>
        </div>
        <div class="g-row js-relaunch-modules">
            <ul class="no-bullet sm-column-12 lg-column-9 no-width t-creators__list" data-module-creator>
                @foreach ($creators as $creator)
                <li class="m-slider__slide">
                    @include('molecules.creator')
                </li>
                @endforeach
            </ul>
            {{-- TODO PAGINATION (on est en 2003 ?) --}}
        </div>
    </section>
    <section class="g-section m-slider__ow">
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
                            @foreach ($cases as $case)
                                <li class="m-slider__slide">@include('molecules.case')</li>
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

                        <a href="{{ route('front.cases') }}" class="a-button -round -small"><span>Voir tous</span></a>
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
