<header class="o-header" id="top" data-module-menu>
    <div class="g-row align-start-center">
        <div class="sm-column-6 lg-column-2 o-header__logo" data-module-logo="logo-main">
            <a href="{!! url('/') !!}"  data-scroll data-scroll-call="enterMain, Logo, logo-main" data-scroll-offset="0, 0">
                <svg class="icon" viewBox="0 0 169 39" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0H2.6637V38.3984H0V0Z" fill="currentColor"/>
                    <path d="M30.4352 8.50977H33.0989V38.3983H31.3196L30.7265 34.4443C25.3367 41.4182 9.16724 40.0587 9.22967 29.1307V8.50977H11.8934V30.3035C11.8934 41.7088 30.4248 40.287 30.4248 29.1204V8.50977H30.4352Z" fill="currentColor"/>
                    <path d="M42.401 38.3986H39.7373V8.51015H41.5166L42.0472 12.2877C46.2509 6.5591 56.9161 6.67325 60.2249 13.2321C63.9603 6.20624 76.2695 5.90528 79.4743 16.1276L86.5185 38.3986H83.7299L76.1446 14.6539C73.2416 5.50054 61.2238 7.21291 61.2238 17.788V38.3986H58.5601V16.5946C58.5601 5.07505 42.3906 6.67325 42.3906 17.7777V38.3883L42.401 38.3986Z" fill="currentColor"/>
                    <path d="M114.06 31.6633V35.1503C111.334 37.2777 107.661 38.6891 102.927 38.6891C80.7744 38.6891 80.7744 8.15723 102.927 8.15723C110.689 8.15723 115.184 13.0556 116.849 18.255H90.0869C87.4232 26.879 91.6893 38.1599 102.937 38.1599C108.15 38.1599 111.886 35.1503 114.071 31.6633H114.06ZM113.821 17.7257C112.458 12.9415 108.91 8.6865 102.927 8.6865C96.2363 8.6865 92.0327 12.7028 90.2534 17.7257H113.821Z" fill="currentColor"/>
                    <path d="M122.832 38.3984H120.168V8.50995H121.947L122.478 12.2875C125.974 7.74198 133.851 7.26459 138.294 9.45434V12.7026C133.029 6.79759 122.832 7.32686 122.832 17.7775V38.3881V38.3984Z" fill="currentColor"/>
                    <path d="M161.445 16.1275L168.49 38.3986H165.711L163.048 30.1273C161.747 34.7974 157.367 38.6891 150.021 38.6891C131.427 38.6891 131.427 15.2454 150.021 15.2454C153.933 15.2454 157.013 16.3662 159.26 18.1408L158.137 14.6538C156.659 9.98374 153.454 8.74877 149.958 8.74877C147.18 8.74877 144.215 10.9385 142.914 12.1112V9.10162C144.339 8.6865 147.773 8.15723 149.958 8.15723C154.401 8.21949 159.614 10.3989 161.445 16.1275ZM150.01 15.7746C135.381 15.7746 135.381 38.1599 150.01 38.1599C164.64 38.1599 165.233 15.7746 150.01 15.7746Z" fill="currentColor"/>
                </svg>
            </a>
        </div>
        <div class="sm-column-6 lg-dp-none">
            <button type="button" class="a-button -secondary" data-menu="btn">Menu</button>
        </div>
        <div class="sm-column-12 lg-column-10">
            <div class="o-menu" data-menu="menu" data-scroll>
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

