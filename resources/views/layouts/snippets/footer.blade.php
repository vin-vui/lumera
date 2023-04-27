<footer class="o-footer" data-scroll>
    <div class="g-row">
        <div class="sm-column-12 md-column-7 lg-column-6 lg-offset-1 no-width">
            <div data-module-split="tf1">
                <div data-scroll data-scroll-call="enter, Split, tf1">
                    <p class="a-h2 js-split">Créons des campagnes marquantes <strong>ensemble</strong></p>
                </div>
            </div>
            <div data-module-split="cf1" data-delay="250" data-duration="800">
                <div data-scroll data-scroll-call="enterText, Split, cf1">
                    <p class="lg-size-90 js-split">Et si vous nous faisiez part de vos projets ? L’équipe de Lumera se fera un plaisir de vous accompagner dans leur réalisation et de co-construire des campagnes de communication qui se démarquent et qui vous ressemblent.</p>
                </div>
            </div>
        </div>
        <div class="sm-column-12 md-column-5 lg-column-4 o-footer__contact">
            @include('molecules.contact')
        </div>
    </div>
    <div class="g-row lg-align-center-start">
        <div class="sm-column-12 lg-column-10">
            <div class="o-footer__bottom">
                <div class="o-footer__logo dp-none lg-dp-block"><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-logo-full" /></svg></div>
                <nav class="o-menu__nav">
                    <ul class="no-bullet">
                        <li>
                            <a href="{{ route('front.creators') }}" class="a-button -secondary">Nos créateurs</a>
                        </li>
                        <li>
                            <a href="{{ route('front.cases') }}" class="a-button -secondary">Nos campagnes</a>
                        </li>
                    </ul>
                    <div class="m-accordion" data-module-accordion>
                        <button type="button" class="m-accordion__title" data-accordion="button" aria-expanded="false" aria-controls="accordion-colors">
                            <span class="a-color -active"></span>
                        </button>
                        <div class="m-accordion__scroll" data-accordion="scroll" id="accordion-colors">
                            <div class="m-accordion__content" data-module-color>
                                <span data-color="button" data-id="3.72" class="a-color__wrap"><span class="a-color -red"></span></span>
                                <span data-color="button" data-id="216" class="a-color__wrap"><span class="a-color -blue"></span></span>
                                <span data-color="button" data-id="237.76" class="a-color__wrap"><span class="a-color -violet"></span></span>
                                <span data-color="button" data-id="27" class="a-color__wrap"><span class="a-color -orange"></span></span>
                            </div>
                        </div>
                    </div>
                </nav>
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
    <div class="g-row align-start-center o-footer__down">
        <div class="sm-column-12 lg-column-3 lg-order-1">
            <div class="text-right">
                <button type="button" class="a-button -tertiary" data-scroll-to="#top">Revenir en haut de page</button>
            </div>
        </div>
        <div class="sm-column-12 lg-column-7 lg-offset-1">
            <div class="o-footer__logo lg-dp-none"><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-logo-full" /></svg></div>
            <div class="o-footer__mentions text-cgraydark">
                <p>© LMR - Lumera {{ now()->year }}</p>
                <a href="/conditions-generales" class="-no-underline">Conditions générales</a>
            </div>
        </div>
    </div>
</footer>
