<x-guest-layout>
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
        <section class="g-section t-cases__page">
            <div class="g-row">
                <ul class="no-bullet sm-column-12 lg-column-9 no-width t-cases__list">
                    @foreach (App\Models\CaseStudy::all() as $case)
                        <li>@include('molecules.case', ['item' => $case, 'complete' => true])</li>
                        <li>@include('molecules.case', ['item' => $case, 'complete' => true])</li>
                        <li>@include('molecules.case', ['item' => $case, 'complete' => true])</li>
                        <li>@include('molecules.case', ['item' => $case, 'complete' => true])</li>
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
                <ul>
                    {{-- TODO LIMIT NBR ?? --}}
                    {{-- TODO SLIDER --}}
                    <li>@include('molecules.creator')</li>
                    <li>@include('molecules.creator')</li>
                    <li>@include('molecules.creator')</li>
                </ul>
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
