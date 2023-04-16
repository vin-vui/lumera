<header class="o-header">
    <div class="g-row align-start-center">
        <div class="sm-column-12 lg-column-2 o-header__logo">
            <a href="{!! url('/') !!}"><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-logo" /></svg></a>
        </div>
        <div class="sm-column-12 lg-column-6">
            {{-- TODO LINKS --}}
            <div class="o-header__nav">
                <nav class="o-menu">
                    <ul class="no-bullet">
                        <li>
                            <a href="{!! url('/createurs'); !!}" class="a-button -secondary">Nos créateurs</a>
                        </li>
                        <li>
                            <a href="{!! url('/campagnes'); !!}" class="a-button -secondary">Nos campagnes</a>
                        </li>
                    </ul>
                </nav>
                <button>
                    {{-- TODO UPDATE COLOR --}}
                    clr
                </button>
            </div>
        </div>
        <div class="sm-column-12 lg-column-4">
            <div class="o-header__contact">
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
                <button data-module-popin-button data-popin="contact" class="a-button -primary">Nous contacter</button>
            </div>
        </div>
    </div>
</header>

