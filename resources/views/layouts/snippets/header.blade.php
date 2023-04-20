<header class="o-header" data-module-menu>
    <div class="g-row align-start-center">
        <div class="sm-column-6 lg-column-2 o-header__logo">
            <a href="{!! url('/') !!}"><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-logo" /></svg></a>
        </div>
        <div class="sm-column-6 lg-dp-none">
            <button type="button" class="a-button -secondary" data-menu="btn">Menu</button>
        </div>
        <div class="sm-column-12 lg-column-10">
            <div class="o-menu" data-menu="menu">
                <div class="o-menu__inner">
                    <nav class="o-menu__nav">
                        <ul class="no-bullet">
                            <li>
                                <a href="{{ route('front.creators') }}" class="a-button -secondary">Nos créateurs</a>
                            </li>
                            <li>
                                <a href="{{ route('front.cases') }}" class="a-button -secondary">Nos campagnes</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="o-menu__contact">
                        <button data-module-popin-button data-popin="contact" class="a-button -primary">Nous contacter</button>
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
                <button class="o-menu__close" type="button" data-menu="close">
                    <span class="a-button -round -small -white"><span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-left" /></svg></span></span>
                </button>
            </div>
        </div>
    </div>
    <div class="o-menu__overlay" data-menu="overlay"></div>
</header>

