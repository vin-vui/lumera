<footer class="o-footer">
    <div class="g-row">
        <div class="sm-column-12 lg-column-6 lg-offset-1 no-width">
            <p class="a-h2">Créons des campagnes marquantes <strong>ensemble</strong></p>
            <p class="lg-size-90 -small">Et si vous nous faisiez part de vos projets ? L’équipe de Lumera se fera un plaisir de vous accompagner dans leur réalisation et de co-construire des campagnes de communication qui se démarquent et qui vous ressemblent.</p>
        </div>
        <div class="sm-column-12 lg-column-4">
            @include('molecules.contact')
        </div>
    </div>
    <div class="g-row lg-align-center-start">
        <div class="sm-column-12 lg-column-10">
            <div class="o-footer__bottom">
                <div class="o-footer__logo"><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-logo-full" /></svg></div>
                {{-- TODO LINKS --}}
                <div class="o-header__nav">
                    <nav class="o-menu">
                        <ul class="no-bullet">
                            <li>
                                <a href="/createurs" class="a-button -secondary">Nos créateurs</a>
                            </li>
                            <li>
                                <a href="/campagnes" class="a-button -secondary">Nos campagnes</a>
                            </li>
                        </ul>
                    </nav>
                    <button>
                        {{-- TODO UPDATE COLOR --}}
                        clr
                    </button>
                </div>
                {{-- TODO SOCIALS --}}
                <ul class="no-bullet m-socials">
                    <li>
                        <a href="#" target="_blank" rel="noopener" title="Twitter" class="-primary">TW</a>
                    </li>
                    <li>
                        <a href="#" target="_blank" rel="noopener" title="Facebook" class="-primary">FB</a>
                    </li>
                    <li>
                        <a href="#" target="_blank" rel="noopener" title="Linkedin" class="-primary">LI</a>
                    </li>
                    <li>
                        <a href="#" target="_blank" rel="noopener" title="Instagram" class="-primary">IN</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="g-row align-start-center">
        <div class="sm-column-12 lg-column-7 lg-offset-1">
            <div class="o-footer__mentions text-cgraydark">
                <p>© LMR - Lumera {{ now()->year }}</p>
                {{-- TODO LINK --}}
                <a href="/conditions-generales" class="-no-underline">Conditions générales</a>
            </div>
        </div>
        <div class="sm-column-12 lg-column-3">
            <div class="text-right">
                <a href="#top" class="a-button -tertiary" data-scroll data-scroll-to>Revenir en haut de page</a>
            </div>
        </div>
    </div>
</footer>



<div id="about" role="dialog" aria-modal="true" aria-hidden="true" class="m-popin" data-module-popin>
    <div class="m-popin__container t-about" data-popin="container">
        <button class="m-popin__close" type="button" data-popin="close">
            <span class="a-button -round -small -white"><span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-left" /></svg></span></span>
        </button>
        <div class="m-popin__content">
            <div class="a-ratio" data-ratio="4/3">
                <img src="{{asset('uploads/placeholder.jpg')}}" alt="Lumera">
            </div>
            <div class="t-about__content">
                <h2 class="mgb-3">L'agence qui vous fait <strong>briller</strong></h2>
                <p>Lumera est une <strong>agence de créateurs de contenu et d’influence marketing</strong> basée à Montpellier et spécialisée dans le <strong>contenu à but éducatif et divertissant.</strong><p>
                <p>En 2022 nous avons décidé de créer l’agence avec l’ambition d’être <strong>la première agence d’influence marketing spécialisée dans les domaines de la tech, du business et de l’éducation</strong>. Chez nous on parle entreprenariat, apprentissage, finances, outils de développement personnel… tout autant de sujets passionnants que nos créateurs de contenu maîtrisent à la perfection et partagent à leur communauté sur les réseaux sociaux.</p>
                <p>Aujourd’hui, on accompagne <strong>plus de 100 créateurs de contenu</strong> dans la mise en place de leur stratégie de communication digitale et le développement de leur communauté. En parallèle, nous accompagnons les marques dans la <strong>création de leurs campagnes d’influence marketing</strong> et les mettons en relation avec nos créateurs de contenu pour créer des campagnes innovantes et performantes.</p>
            </div>
        </div>
    </div>
    <div class="m-popin__overlay" tabindex="-1" data-popin="close"></div>
</div>

<div id="creator" role="dialog" aria-modal="true" aria-hidden="true" class="m-popin" data-module-popin>
    <div class="m-popin__container t-creator" data-popin="container">
        <button class="m-popin__close" type="button" data-popin="close">
            <span class="a-button -round -small -white"><span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-left" /></svg></span></span>
        </button>
        <div class="m-popin__content">
            <div class="a-ratio" data-ratio="3/4">
                <img src="{{asset('uploads/placeholder.jpg')}}" alt="{{ $item->first_name }} {{ $item->last_name }}">
            </div>
            <div class="t-creator__content">
                <h2 class="a-h2">{{ $item->first_name }} {{ $item->last_name }}</h2>
                <p class="text-cgraydark -small">{{ $item->nick_name }}</p>
                <ul class="no-bullet m-tags">
                    @if ($item->specialty_id != null && $item->specialty()->exists())
                        <li class="m-tags__item">
                            <span class="a-tag">{{ $item->specialty->label }}</span>
                        </li>
                    @endif
                </ul>
                <div>
                    <p class="a-h5 mgb-1">Résumé de notre créateur</p>
                    <div class="a-text -small text-cgraydark">
                        {{ $creator->description }}
                    </div>
                </div>
                <ul class="no-bullet t-creator__socials">
                    <li><a href="#" target="_blank" rel="noopener nofollow" class="a-button -inline -small"><span>Tiktok</span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-diag" /></svg></a></li>
                    <li><a href="#" target="_blank" rel="noopener nofollow" class="a-button -inline -small"><span>Facebook</span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-diag" /></svg></a></li>
                    <li><a href="#" target="_blank" rel="noopener nofollow" class="a-button -inline -small"><span>Instagram</span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-diag" /></svg></a></li>
                    <li><a href="#" target="_blank" rel="noopener nofollow" class="a-button -inline -small"><span>Youtube</span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-diag" /></svg></a></li>
                    <li><a href="#" target="_blank" rel="noopener nofollow" class="a-button -inline -small"><span>Linkedin</span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-diag" /></svg></a></li>
                    <li><a href="#" target="_blank" rel="noopener nofollow" class="a-button -inline -small"><span>Pinterest</span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-diag" /></svg></a></li>
                </ul>
                <a href="mailto:" class="a-button -round"><span>Contact</span></a>
            </div>
        </div>
    </div>
    <div class="m-popin__overlay" tabindex="-1" data-popin="close"></div>
</div>

<div id="case" role="dialog" aria-modal="true" aria-hidden="true" class="m-popin" data-module-popin>
    <div class="m-popin__container t-case" data-popin="container">
        <button class="m-popin__close" type="button" data-popin="close">
            <span class="a-button -round -small -white"><span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-left" /></svg></span></span>
        </button>
        <div class="m-popin__content">
            <div class="a-ratio" data-ratio="20/7">
                <img src="{{asset('uploads/placeholder.jpg')}}" alt="">
            </div>
            <div class="t-case__inner">
                <div class="t-case__content">
                    <div class="m-caseInfos">
                        <div>
                            <p class="a-h5 mgb-1">Client</p>
                            <p class="-small text-cgraydark">Google</p>
                        </div>
                        <div>
                            <p class="a-h5 mgb-1">Année</p>
                            <p class="-small text-cgraydark">2020</p>
                        </div>
                        <div>
                            <p class="a-h5 mgb-1">Créateurs associés</p>
                            <ul class="no-bullet">
                                <li><a href="#" target="_blank" rel="noopener nofollow" class="a-button -inline -xsmall"><span>Nom du créateur</span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-diag" /></svg></a></li>
                                <li><a href="#" target="_blank" rel="noopener nofollow" class="a-button -inline -xsmall"><span>Nom du créateur</span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-diag" /></svg></a></li>
                            </ul>
                        </div>
                        <div>
                            <p class="a-h5 mgb-1">Plateformes activées</p>
                            <ul class="no-bullet">
                                <li>
                                    <span class="a-text -small text-cgraydark">Tiktok</span>
                                </li>
                                <li>
                                    <span class="a-text -small text-cgraydark">Instagram</span>
                                </li>
                                <li>
                                    <span class="a-text -small text-cgraydark">Youtube</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="m-caseContent m-content">
                        <h1>Titre contextuel de la problématique</h1>
                        <p>Lorem ipsum dolor sit amet consectetur. Massa lacinia facilisis urna convallis aliquam egestas fringilla. Tempor sit vitae id morbi sit mauris lorem leo orci. Sit vehicula pharetra pellentesque adipiscing ipsum tellus consequat diam et. Aliquet urna pulvinar suscipit neque orci sed natoque.</p>
                        <p>Morbi faucibus eget adipiscing volutpat duis pellentesque commodo integer. Aliquam in nec interdum scelerisque et augue nisi.</p>
                        <h2>Titre contextuel de la problématique</h2>
                        <p>Lorem ipsum dolor sit amet consectetur. Massa lacinia facilisis urna convallis aliquam egestas fringilla. Tempor sit vitae id morbi sit mauris lorem leo orci. Sit vehicula pharetra pellentesque adipiscing ipsum tellus consequat diam et. Aliquet urna pulvinar suscipit neque orci sed natoque.</p>
                        <p>Morbi faucibus eget adipiscing volutpat duis pellentesque commodo integer. Aliquam in nec interdum scelerisque et augue nisi.</p>
                    </div>
                    <div class="m-caseInfos">
                        <div>
                            <p class="a-h5 mgb-1">Client</p>
                            <p class="-small text-cgraydark">Google</p>
                        </div>
                        <div>
                            <p class="a-h5 mgb-1">Année</p>
                            <p class="-small text-cgraydark">2020</p>
                        </div>
                        <div>
                            <p class="a-h5 mgb-1">Créateurs associés</p>
                            <ul class="no-bullet">
                                <li><a href="#" target="_blank" rel="noopener nofollow" class="a-button -inline -xsmall"><span>Nom du créateur</span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-diag" /></svg></a></li>
                                <li><a href="#" target="_blank" rel="noopener nofollow" class="a-button -inline -xsmall"><span>Nom du créateur</span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-diag" /></svg></a></li>
                            </ul>
                        </div>
                        <div>
                            <p class="a-h5 mgb-1">Plateformes activées</p>
                            <ul class="no-bullet">
                                <li>
                                    <span class="a-text -small text-cgraydark">Tiktok</span>
                                </li>
                                <li>
                                    <span class="a-text -small text-cgraydark">Instagram</span>
                                </li>
                                <li>
                                    <span class="a-text -small text-cgraydark">Youtube</span>
                                </li>
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

<div id="contact" role="dialog" aria-modal="true" aria-hidden="true" class="m-popin" data-module-popin>
    <div class="m-popin__container t-contact" data-popin="container">
        <button class="m-popin__close" type="button" data-popin="close">
            <span class="a-button -round -small -white"><span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-left" /></svg></span></span>
        </button>
        <div class="m-popin__content t-contact__content">
            <div>
                <p class="a-h2 mgb-1">Créons des campagnes marquantes <strong>ensemble</strong></p>
                <p class="lg-size-90 -small">Et si vous nous faisiez part de vos projets ? L’équipe de Lumera se fera un plaisir de vous accompagner dans leur réalisation et de co-construire des campagnes de communication qui se démarquent et qui vous ressemblent.</p>
            </div>
            <div>
                @include('molecules.contact')
            </div>
        </div>
    </div>
    <div class="m-popin__overlay" tabindex="-1" data-popin="close"></div>
</div>
