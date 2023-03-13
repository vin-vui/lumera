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
                    {{-- TODO CREATORS --}}
                    <li>@include('molecules.creator')</li>
                    <li>@include('molecules.creator')</li>
                    <li>@include('molecules.creator')</li>
                    <li>@include('molecules.creator')</li>
                    <li>@include('molecules.creator')</li>
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
                <ul>
                    {{-- TODO LIMIT NBR ?? --}}
                    {{-- TODO SLIDER --}}
                    @foreach (App\Models\CaseStudy::all() as $case)
                        <li>@include('molecules.case', ['item' => $case])</li>
                        <li>@include('molecules.case', ['item' => $case])</li>
                        <li>@include('molecules.case', ['item' => $case])</li>
                        <li>@include('molecules.case', ['item' => $case])</li>
                    @endforeach
                </ul>
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
                    {{-- TODO SLIDER --}}
                    <div class="o-testimonies">
                        <div class="o-testimonies__arrows">
                            <button>icon</button>
                        </div>
                        <figure class="a-blockquote">
                            <blockquote>
                                <p>Agence et équipe au top ! J'y suis depuis plusieurs mois et ils sont toujours là en cas de besoin et très sympathiques. Ce que j'adore c'est les appels mensuels d'un spécialiste des réseaux sociaux qui me donne des astuces, de l'aide et de nouveaux objectifs chaque mois qui te donne encore plus envie d'évoluer ! Je ne regrette pas du tout d'avoir signer dans cette agence bien au contraire, c'est un tremplin pour moi</p>
                            </blockquote>
                            <figcaption>Anthony RDN</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-guest-layout>
