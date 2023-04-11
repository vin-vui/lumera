<x-guest-layout>
    <main class="t-home">
        <section class="g-section">
            <div class="g-row o-hero">
                <div class="sm-column-12 lg-column-10">
                    <div class="o-hero__title">
                        <h1 class="a-bigTitle">Mettre <span>en lumière</span> votre talent</h1>
                        <span aria-hidden="true" focusable="false" class="-fake a-bigTitle">Mettre <span>en lumière</span> votre talent</span>
                    </div>
                </div>
                <div class="sm-column-12 lg-column-5 o-hero__slider">
                    <div class="m-slider" data-module-slider data-controls="true" data-pagination="true">
                        <div class="m-slider__nav">
                            <p class="m-slider__pagination"><span data-slider="pagination">1</span>&nbsp;—&nbsp;12</p>
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
                            <ul class="no-bullet m-slider__container">
                                @foreach (App\Models\Creator::where('display', true)->get() as $creator)
                                    <li class="m-slider__slide">
                                        @include('molecules.creator')
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="sm-column-12 lg-column-6 lg-offset-1">
                    <p class="-big">Chez Lumera, nous accompagnons les créateurs de contenu et les entreprises dans la création de campagnes d'influence marketing performantes</p>
                </div>
            </div>
        </section>
        <section class="g-section">
            <div class="g-row align-start-start">
                <div class="sm-column-12 lg-column-5 t-home__about">
                    <div class="a-ratio" data-ratio="9/10">
                        <img src="{{asset('assets/img/about.jpg')}}" srcset="{{asset('assets/img/about.jpg')}} 1x, {{asset('assets/img/about@2x.jpg')}} 2x" alt="">
                    </div>
                    <button type="button" data-module-popin-button data-popin="about" class="a-button -round"><span>Pourquoi Lumera ?</span></button>
                </div>
                <div class="sm-column-12 lg-column-6 lg-offset-1 t-home__about--content">
                    <h2>Raviver la flamme entre les créateurs de contenu et les marques pour <strong>les faire rayonner</strong></h2>
                    <div class="g-grid -c2 mgt-6 o-cards" data-module-cards>
                        <div class="m-card" data-cards="item">
                            <div class="mgb-4">
                                <p class="a-h5 mgb-1">Des créateurs accompagné.es</p>
                                <p>Lumera redéfini et valorise le marketing d’influence en proposant un accompagnement personnalisé et complet à nos créateurs de contenus : définition de leur ligne éditoriale, développement de l’audience, mise en relation avec des marques pertinentes… Notre Social Media manager les aide à mettre en place un plan d'action clé en main pour des résultats à la hauteur de leur talent !</p>
                            </div>
                            <svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-user" /></svg>
                        </div>
                        <div class="m-card" data-cards="item">
                            <div class="mgb-4">
                                <p class="a-h5 mgb-1">Conseils affûtés pour les entreprises</p>
                                <p>Maîtrisant parfaitement le milieu du marketing d’influence et ayant déjà été à la place du client, on sait à quel point il est important d’être bien accompagné dans la mise en place d’une campagne d’influence marketing. C’est pourquoi Lumera vous guide du début à la fin de vos projets et sélectionne pour chacune de vos problématiques les créateurs de contenu qui vous correspondent le mieux.</p>
                            </div>
                            <svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-compass" /></svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="g-section">
            <div class="g-row mgb-5">
                <div class="sm-column-12 lg-column-7 lg-offset-1">
                    <h2>Nos créateurs de contenu sont <strong>talentueux</strong></h2>
                </div>
                <div class="sm-column-12 lg-column-3 pgy-1">
                    <p class="-small">Quel que soit leur secteur de prédilection, nos créateurs de contenu ont tout compris du monde dans lequel ils évoluent et de la complexité de communiquer à une cible 100% digitale.</p>
                </div>
            </div>
            <div class="g-row o-creators">
                <div class="sm-column-12 lg-column-1 lg-offset-1">
                    {{-- TODO LINK PAGE --}}
                    <a href="/createurs" class="a-button -round -small"><span>Voir tous</span></a>
                    {{-- TODO RANDOM --}}
                    <button class="a-button -round -small -white"><span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-random" /></svg></span></button>
                </div>
                <div class="sm-column-12 lg-column-9">
                    <ul class="no-bullet o-creators__list">
                        {{-- TODO GET 3 CREATORS RANDOM --}}
                        @foreach (App\Models\Creator::where('display', true)->get()->slice(0, 3) as $creator)
                            <li>
                                @include('molecules.creator')
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
        <section class="g-section">
            <div class="g-row align-center-start">
                <div class="sm-column-10">
                    <ul class="no-bullet o-logos">
                        <li>
                            <img src="{{asset('assets/img/logo/logo-notion.svg')}}" alt="Notion">
                        </li>
                        <li>
                            <img src="{{asset('assets/img/logo/logo-odoo.svg')}}" alt="Odoo">
                        </li>
                        <li>
                            <img src="{{asset('assets/img/logo/logo-babbel.svg')}}" alt="Babbel">
                        </li>
                        <li>
                            <img src="{{asset('assets/img/logo/logo-etudiant.svg')}}" alt="L'Étudiant">
                        </li>
                        <li>
                            <img src="{{asset('assets/img/logo/logo-google.svg')}}" alt="Google">
                        </li>
                        <li>
                            <img src="{{asset('assets/img/logo/logo-paypal.svg')}}" alt="Paypal">
                        </li>
                        <li>
                            <img src="{{asset('assets/img/logo/logo-samsung.svg')}}" alt="Samsung">
                        </li>
                        <li>
                            <img src="{{asset('assets/img/logo/logo-nordvpn.svg')}}" alt="NordVPN">
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="g-section t-home__case">
            <div class="g-row">
                <div class="sm-column-12 lg-column-5">
                    <h2 class="a-h2 mgb-2">
                        Le perfect <strong>match</strong> entre votre projet et son audience
                    </h2>
                    <p class="-small">De la compréhension des objectifs de l’entreprise à la fine connaissance de nos créateurs de contenus, Lumera sait très bien comment associer au mieux ses talents et ses clients. Pour chaque projet, nos équipes veillent à ce que le message de la marque, la personnalité des créateurs et les attentes de leurs communautés correspondent parfaitement pour une campagne performante.</p>
                    <div class="t-home__case--cta mgt-4">
                        {{-- TODO LINK PAGE --}}
                        <a href="/campagnes" class="a-button -round -small"><span>Voir plus</span></a>
                        <p>Plus de 40 autres clients et projets</p>
                    </div>
                </div>
                <div class="sm-column-12 lg-column-6 lg-offset-1">
                    <ul class="no-bullet t-home__case--list">
                        {{-- TODO LIMIT NBR ?? --}}
                        @foreach (App\Models\CaseStudy::all()->slice(0, 4) as $case)
                            <li>@include('molecules.case')</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
        <section>
            <div class="g-row mgb-6">
                <div class="sm-column-12 lg-column-7 lg-offset-1">
                    <h2 class="a-h2">Imaginer, construire et <br><strong>créer</strong> ensemble l'influence marketing de demain</h2>
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
