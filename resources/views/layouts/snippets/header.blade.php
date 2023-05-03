<header class="o-header" id="top" data-module-menu>
    <div class="g-row align-start-center">
        <div class="sm-column-6 lg-column-2 o-header__logo" data-module-logo="logo-main">
            <a href="{!! url('/') !!}">
                <svg class="icon" width="176" height="31" viewBox="0 0 176 31" xmlns="http://www.w3.org/2000/svg">
                    <g class="js-mini">
                        <path d="M0 30.8567H4.8788L0 15.3574L0 30.8567Z" fill="currentColor"/>
                        <path d="M9.58752 28.7835L3.09737 8.40864C2.89371 7.76625 2.50654 7.0131 1.87767 6.81152H0L0 11.2684L5.50991 28.5664C5.94408 29.9309 7.22421 30.8613 8.66995 30.8613L11.0713 30.8613C10.3865 30.354 9.85832 29.6407 9.58528 28.7879L9.58752 28.7835Z" fill="currentColor"/>
                        <path d="M25.2643 6.80957L20.5713 6.80957L25.2733 21.5801L25.2643 6.80957Z" fill="currentColor"/>
                        <path d="M8.25786 8.33997C7.96469 7.42512 7.11873 6.81152 6.14968 6.81152H4.17578C4.36153 7.10614 4.52491 7.42069 4.63457 7.76403L11.4201 29.118C11.7514 30.1591 12.7159 30.8591 13.8193 30.8591L15.6186 30.8591C15.3769 30.5046 15.1777 30.1192 15.0434 29.6983L8.25786 8.33997Z" fill="currentColor"/>
                        <path d="M16.5902 6.80957H14.209C14.8871 7.31462 15.413 8.02568 15.6816 8.87186L22.2635 29.4992C22.4649 30.135 22.823 30.5559 23.3847 30.8527L25.2736 30.8571V26.4003L19.7681 9.11996C19.3317 7.74657 18.0449 6.80957 16.588 6.80957H16.5902Z" fill="currentColor"/>
                        <path d="M13.7328 8.53933C13.4038 7.50486 12.4459 6.81152 11.3493 6.81152H9.54102C9.77824 7.1593 9.97518 7.5403 10.1095 7.95675L16.9555 29.3195C17.2486 30.2366 18.0968 30.8524 19.0659 30.8546L21.0331 30.8591C20.8518 30.5689 20.6929 30.261 20.5855 29.9243L13.7328 8.53933Z" fill="currentColor"/>
                    </g>
                    <g class="js-anime">
                        <path d="M40.7031 0L42.8426 0L42.8426 30.5955H40.7031L40.7031 0Z" fill="currentColor"/>
                        <path d="M65.1443 6.77832H67.286V30.5955H65.8605L65.3838 27.4411C61.0555 32.9945 48.0752 31.9135 48.1222 23.2058V6.77832H50.2617V24.145C50.2617 33.2293 65.1465 32.0996 65.1465 23.2036V6.77832H65.1443Z" fill="currentColor"/>
                        <path d="M74.7538 30.5952H72.6143V6.77806H74.0399L74.4673 9.79065C77.8444 5.22525 86.4025 5.31828 89.0657 10.5438C92.0623 4.94393 101.952 4.70691 104.521 12.8498L110.181 30.5952H107.945L101.858 11.6735C99.5282 4.37685 89.8758 5.74359 89.8758 14.1678V30.5952H87.7341V13.2263C87.7341 4.0468 74.7515 5.31828 74.7515 14.1678V30.5952H74.7538Z" fill="currentColor"/>
                        <path d="M132.297 25.2283V28.0061C130.109 29.7006 127.161 30.8304 123.357 30.8304C105.571 30.8304 105.571 6.49707 123.357 6.49707C129.587 6.49707 133.199 10.4046 134.531 14.5447L113.037 14.5447C110.895 21.416 114.322 30.4073 123.357 30.4073C127.542 30.4073 130.538 28.0061 132.297 25.2305V25.2283ZM132.107 14.1194C131.013 10.3071 128.159 6.91795 123.357 6.91795C117.983 6.91795 114.606 10.1188 113.18 14.1194L132.107 14.1194Z" fill="currentColor"/>
                        <path d="M139.336 30.5957H137.196V6.77851H138.622L139.052 9.7911C141.856 6.16713 148.183 5.79056 151.748 7.53166V10.1212C147.516 5.41399 139.336 5.83708 139.336 14.1682V30.5957Z" fill="currentColor"/>
                        <path d="M170.343 12.8499L176.001 30.5953H173.767L171.625 24.0053C170.58 27.7245 167.062 30.8301 161.163 30.8301C146.231 30.8301 146.231 12.1454 161.163 12.1454C164.303 12.1454 166.776 13.0404 168.582 14.4514L167.68 11.6736C166.489 7.95441 163.922 6.96645 161.116 6.96645C158.882 6.96645 156.503 8.70755 155.458 9.64899V7.24778C156.599 6.91994 159.357 6.49463 161.116 6.49463C164.683 6.54115 168.868 8.28446 170.343 12.8499ZM161.163 12.5663C149.418 12.5663 149.418 30.4048 161.163 30.4048C172.908 30.4048 173.387 12.5663 161.163 12.5663Z" fill="currentColor"/>
                    </g>
                </svg>
            </a>
        </div>
        <div class="sm-column-6 lg-dp-none o-header__menu no-width">
            @include('molecules.colors', ['el' => 'header-mobile'])
            <button type="button" class="a-button -secondary" data-menu="btn" data-close="Fermer" data-open="Menu">Menu</button>
        </div>
        <div class="sm-column-12 lg-column-10">
            <div class="o-menu" data-menu="menu">
                <div class="o-menu__inner" data-title="Menu">
                    <nav class="o-menu__nav">
                        <ul class="no-bullet">
                            <li>
                                <a href="{{ route('front.creators') }}" class="a-button -secondary">Nos créateurs</a>
                            </li>
                            <li>
                                <a href="{{ route('front.cases') }}" class="a-button -secondary">Nos campagnes</a>
                            </li>
                        </ul>
                        @include('molecules.colors', ['el' => 'header'])
                    </nav>
                    <div class="o-menu__contact">
                        <ul class="no-bullet m-socials">
                            <li>
                                <a href="https://www.tiktok.com/@lumera_social" target="TikTok" rel="noopener nofollow" title="Twitch" class="-primary">TK</a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=100088318867735" target="_blank" rel="noopener nofollow" title="Facebook" class="-primary">FB</a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/lumerasocial/" target="_blank" rel="noopener nofollow" title="Linkedin" class="-primary">LI</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/lumera.social/?hl=fr" target="_blank" rel="noopener nofollow" title="Instagram" class="-primary">IN</a>
                            </li>
                        </ul>
                        <button data-module-popin-button data-popin="contact" class="a-button -primary">Nous contacter</button>
                    </div>
                </div>
                {{-- <button class="o-menu__close" type="button" data-menu="close">
                    <span class="a-button -round -small -white"><span><svg class="icon" aria-hidden="true" focusable="false"><use xlink:href="#icon-arrow-left" /></svg></span></span>
                </button> --}}
            </div>
        </div>
    </div>
    <div class="o-menu__overlay" data-menu="overlay"></div>
</header>

