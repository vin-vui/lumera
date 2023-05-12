<footer class="o-footer" data-scroll>
    <div class="g-row">
        <div class="sm-column-12 md-column-7 mlg-column-6 mlg-offset-1 no-width">
            <div data-module-split="tf1">
                <div data-scroll data-scroll-call="enter, Split, tf1">
                    <p class="a-h2 mgb-3 js-split">Créons des campagnes marquantes <strong>ensemble</strong></p>
                </div>
            </div>
            <div data-module-split="cf1" data-delay="250" data-duration="800">
                <div data-scroll data-scroll-call="enterText, Split, cf1">
                    <p class="lg-size-90 js-split">Et si vous nous faisiez part de vos projets ? L’équipe de Lumera se fera un plaisir de vous accompagner dans leur réalisation afin de co-construire des campagnes de communication qui se démarquent et qui vous ressemblent.</p>
                </div>
            </div>
        </div>
        <div class="sm-column-12 md-column-5 mlg-column-4 o-footer__contact">
            @include('molecules.contact')
        </div>
    </div>
    <div class="g-row lg-align-center-start">
        <div class="sm-column-12 mlg-column-10">
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
                    @include('molecules.colors', ['el' => 'footer'])
                </nav>
                <ul class="no-bullet m-socials">
                    <li>
                        <a href="https://www.tiktok.com/@lumera_social" target="_blank" rel="noopener nofollow" title="TikTok" class="-primary"><svg class="icon -medium" aria-hidden="true" focusable="false"><use xlink:href="#icon-tiktok" /></svg></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/profile.php?id=100088318867735" target="_blank" rel="noopener nofollow" title="Facebook" class="-primary"><svg class="icon -medium" aria-hidden="true" focusable="false"><use xlink:href="#icon-facebook" /></svg></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/lumerasocial/" target="_blank" rel="noopener nofollow" title="Linkedin" class="-primary"><svg class="icon -medium" aria-hidden="true" focusable="false"><use xlink:href="#icon-linkedin" /></svg></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/lumera.social/?hl=fr" target="_blank" rel="noopener nofollow" title="Instagram" class="-primary"><svg class="icon -medium" aria-hidden="true" focusable="false"><use xlink:href="#icon-instagram" /></svg></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="g-row align-start-center o-footer__down">
        <div class="sm-column-12 md-column-4 mlg-column-3 lg-order-1">
            <div class="text-right">
                <button type="button" class="a-button -tertiary" data-scroll-to="#top">Revenir en haut de page</button>
            </div>
        </div>
        <div class="sm-column-12 md-column-8 mlg-column-7 mlg-offset-1">
            <div class="o-footer__logo lg-dp-none"><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-logo-full" /></svg></div>
            <div class="o-footer__mentions text-cgraydark">
                <p>© LMR - Lumera {{ now()->year }}</p>
                <a href="/conditions-generales" class="-no-underline">Conditions générales</a>
            </div>
        </div>
    </div>
</footer>
