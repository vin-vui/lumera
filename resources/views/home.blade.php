<main class="t-home">
    <section class="g-section" wire:ignore>
        <div class="g-row o-hero">
            <div class="sm-column-12 md-column-11 lg-column-10">
                <div class="o-hero__title" data-module-logo="logo-mini">
                    <span class="a-logo" data-scroll data-scroll-call="enter, Logo, logo-mini" data-logo="logo"><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-logo-mini" /></svg></span>
                    <div data-module-split="th1" data-delay="500">
                        <div data-scroll data-scroll-call="enter, Split, th1">
                            <h1 class="a-bigTitle js-split">Mettre <br>en lumière <br>votre talent</h1>
                        </div>
                    </div>
                    <div data-module-split="th2" data-delay="500">
                        <div data-scroll data-scroll-call="enter, Split, th2">
                            <span aria-hidden="true" focusable="false" class="-fake a-bigTitle js-split">Mettre <br>en lumière <br>votre talent</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sm-column-12 md-column-6 lg-offset-1 md-order-1" data-module-split="ch1" data-delay="850" data-duration="800">
                <div data-scroll data-scroll-offset="10%, 0" data-scroll-call="enterText, Split, ch1">
                    <p class="-big js-split">Chez Lumera, nous accompagnons les créateurs de contenu et les entreprises dans la création de campagnes d'influence marketing performantes</p>
                </div>
            </div>
            <div class="sm-column-12 md-column-6 lg-column-5 o-hero__slider" data-scroll>
                <div class="m-slider -creators" data-module-slider="slider-hero" data-controls="true" data-pagination="true" data-scroll data-scroll-offset="50%, 0" data-scroll-call="enterHero, Slider, slider-hero" data-creator>
                    <div class="m-slider__nav">
                        <p class="m-slider__pagination"><span data-slider="pagination">1</span><span>&nbsp;—&nbsp;{{ $creators_header->count() }}</span></p>
                        <div class="o-hero__arrows">
                            <button type="button" class="m-slider__button" data-slider="nextBtn" title="Suivant">
                                <svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-right" /></svg>
                            </button>
                            <button type="button" class="m-slider__button" data-slider="prevBtn" title="Précédent">
                                <svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-left" /></svg>
                            </button>
                        </div>
                    </div>
                    <div class="m-slider__viewport" data-slider="viewport">
                        <ul class="no-bullet m-slider__container" data-module-cursor>
                            @foreach ($creators_header as $creator)
                            <li class="m-slider__slide" data-index="{{ $loop->index }}">
                                @include('molecules.creator')
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="g-section" wire:ignore>
        <div class="g-row align-start-start">
            <div class="sm-column-12 md-column-5 t-home__about" data-scroll data-scroll-offset="30%, 0">
                <div class="a-ratio" data-ratio="9/10">
                    <img src="{{asset('assets/img/about.jpg')}}" srcset="{{asset('assets/img/about.jpg')}} 1x, {{asset('assets/img/about@2x.jpg')}} 2x" alt="">
                </div>
                <button type="button" data-module-popin-button data-popin="about" class="a-button -round"><span>Pourquoi Lumera ?</span></button>
            </div>
            <div class="sm-column-12 md-column-7 lg-column-6 lg-offset-1 t-home__about--content" data-module-split="ta1">
                <div data-scroll data-scroll-offset="30%, 0" data-scroll-call="enter, Split, ta1">
                    <h2 class="a-h2 js-split">Raviver la flamme entre les créateurs de contenu et les marques pour <strong>les</strong> <strong>faire</strong> <strong>rayonner</strong></h2>
                </div>
                <div class="mgt-6 o-cards" data-module-cards>
                    <div class="m-card" data-cards="item" data-scroll data-scroll-offset="30%, 0">
                        <div class="m-card__inner">
                            <div class="mgb-4">
                                <p class="a-h5 mgb-1">Des créateurs accompagné.es</p>
                                <p>Lumera redéfini et valorise le marketing d’influence en proposant un accompagnement personnalisé et complet à nos créateurs de contenus : définition de leur ligne éditoriale, développement de l’audience, mise en relation avec des marques pertinentes… Notre Social Media manager les aide à mettre en place un plan d'action clé en main pour des résultats à la hauteur de leur talent !</p>
                            </div>
                            <svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-user" /></svg>
                        </div>
                    </div>
                    <div class="m-card" data-cards="item" data-scroll data-scroll-offset="30%, 0">
                        <div class="m-card__inner">
                            <div class="mgb-4">
                                <p class="a-h5 mgb-1">Conseils affûtés pour les entreprises</p>
                                <p>Maîtrisant parfaitement le milieu du marketing d’influence et ayant déjà été à la place du client, on sait à quel point il est important d’être bien accompagné dans la mise en place d’une campagne d’influence marketing. C’est pourquoi Lumera vous guide du début à la fin de vos projets et sélectionne pour chacune de vos problématiques les créateurs de contenu qui vous correspondent le mieux.</p>
                            </div>
                            <svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-compass" /></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="g-section">
        <div class="g-row mgb-5" wire:ignore>
            <div class="sm-column-12 lg-column-8 mlg-column-7 mlg-offset-1" data-module-split="tc1">
                <div data-scroll data-scroll-call="enter, Split, tc1">
                    <h2 class="a-h2 js-split">Nos créateurs de contenu sont <span class="a-changeTitle js-change"><strong>talentueux</strong><strong>cultivés</strong><strong>brillants</strong><strong>passionnés</strong><strong>drôles</strong><strong>autodidactes</strong><strong>pédagogues</strong></span></h2>
                </div>
            </div>
            <div class="sm-column-12 lg-column-4 mlg-column-3 pgy-1" data-module-split="cc1" data-delay="350" data-delay="800">
                <div data-scroll data-scroll-call="enterText, Split, cc1">
                    <p class="js-split">Quel que soit leur secteur de prédilection, nos créateurs de contenu ont tout compris du monde dans lequel ils évoluent et de la complexité de communiquer à une cible 100% digitale.</p>
                </div>
            </div>
        </div>
        <div class="g-row o-creators" data-scroll wire:ignore.self>
            <div class="sm-column-12 lg-column-1 mlg-offset-1">
                <div class="o-creators__buttons">
                    {{-- RANDOMIZER --}}
                    <button wire:click="randomizer" class="a-button -round -small -white">
                        <span>
                            <svg class="icon" aria-hidden="true" focusable="false">
                                <use xlink:href="#icon-random" />
                            </svg>
                        </span>
                    </button>
                    <a href="{{ route('front.creators') }}" class="a-button -round -small"><span>Voir tous</span></a>
                </div>
            </div>
            <div class="sm-column-12 lg-column-11 mlg-column-9 smo-nest" data-module-creators="creators-random" data-module-cursor>
                <ul class="no-bullet o-creators__list" data-scroll data-scroll-offset="50%, 0" data-scroll-call="enter, Creators, creators-random">
                    {{-- GET 3 CREATORS RANDOM --}}
                    @foreach ($allCreators as $creator)
                    <li>
                        @include('molecules.creator')
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <section class="g-section" wire:ignore>
        <div class="g-row align-center-start">
            <div class="sm-column-12 md-column-10">
                <ul class="no-bullet o-logos">
                    @foreach ($marks as $mark)
                    <li data-scroll data-scroll-offset="30%, 0">
                        <img src="{{ Storage::disk('uploads')->url($mark->image) }}" alt="{{ $mark->label }}">
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <section class="g-section t-home__case" data-scroll data-scroll-offset="30%, 0" wire:ignore>
        <div class="g-row">
            <div class="sm-column-12 lg-column-5">
                <div data-module-split="te1">
                    <div data-scroll data-scroll-call="enter, Split, te1">
                        <h2 class="a-h2 mgb-2 js-split">
                            Le perfect <strong>match</strong> entre votre projet et son audience
                        </h2>
                    </div>
                </div>
                <div data-module-split="ce1" data-delay="250" data-duration="800">
                    <div data-scroll data-scroll-call="enterText, Split, ce1">
                        <p class="js-split">De la compréhension des objectifs de l’entreprise à la fine connaissance de nos créateurs de contenus, Lumera sait très bien comment associer au mieux ses talents et ses clients. Pour chaque projet, nos équipes veillent à ce que le message de la marque, la personnalité des créateurs et les attentes de leurs communautés correspondent parfaitement pour une campagne performante.</p>
                    </div>
                </div>
                <div class="t-home__case--cta mgt-4">
                    <a href="{{ route('front.cases') }}" class="a-button -round -small"><span>Voir plus</span></a>
                    {{-- DISPLAY REAL COUNT --}}
                    {{-- <p>Plus de {{ $count }} autres clients et projets</p> --}}
                </div>
            </div>
            <div class="sm-column-12 lg-column-6 lg-offset-1 smo-relative">
                <ul class="no-bullet t-home__case--list">
                    {{-- GET 4 CASES RANDOM --}}
                    @foreach ($cases as $case)
                    <li>@include('molecules.case')</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <section wire:ignore>
        <div class="g-row mgb-6">
            <div class="sm-column-12 lg-column-7 lg-offset-1" data-module-split="tt1">
                <div data-scroll data-scroll-call="enter, Split, tt1">
                    <h2 class="a-h2 js-split">Imaginer, construire et <br><strong>créer</strong> ensemble l'influence marketing de demain</h2>
                </div>
            </div>
        </div>
        <div class="g-row align-center-start">
            <div class="sm-column-12 lg-column-8">
                <div class="o-testimonies m-slider -vertical" data-scroll data-module-slider data-controls="true" data-axis="y">
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
