
@include('components.country_city_modal') 

    <header id="header-container" class="transparent">
        <!-- Header -->
        <div id="header">
            <div class="container">
                <div class="left-side">
                    <div id="logo">
                        <a href="index.html"><img src="{{ asset('images/logo/classic-theme_logo.png') }} " alt="Quickad"></a>
                    </div>
                    <nav class="navigation">
                        <ul>
                            <li>
                            <a href="#countryModal" class="country-flag popup-with-zoom-anim" title="Change Country" data-tippy-placement="right">
                                    <img src="{{ asset('images/flags/in.png') }} "/>
                                </a>
                            </li>

                            <li class="d-none d-lg-block">
                                <a href="index2.html"><i class="icon-feather-home"></i> Home with map</a>
                            </li>

                            <li class="d-none d-lg-block">
                                <a href="listing.html"><i class="icon-feather-list"></i> Find Ads</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="clearfix"></div>
                    <!-- Mobile Navigation -->
                    <nav class="mmenu-init">
                        <ul class="mm-listview">
                            <li><a href="listing.html">Find Ads</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Register</a></li>
                            <li><a href="login1912.html" class="button ripple-effect">Post Free Ad</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="right-side">
                    <div class="header-widget d-none d-lg-block">
                        <nav class="navigation">
                            <ul>
                                <li>
                                    <a href="#sign-in-dialog" class="popup-with-zoom-anim"><i
                                                class="icon-feather-log-in"></i> Login</a>
                                </li>
                                <li><a href="signup.html">Register</a></li>
                                <li><a href="login1912.html" class="button ripple-effect post-job">Post Free Ad</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="header-widget">
                        <div class="btn-group bootstrap-select language-switcher">
                            <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown"
                                    title="English">
                                <span class="filter-option pull-left" id="selected_lang">en</span>&nbsp;
                                <span class="caret"></span>
                            </button>
                            <div class="dropdown-menu open">
                                <ul class="dropdown-menu inner">
                                    
                                        <li data-lang="Arabic">
                                            <a role="menuitem" tabindex="-1" rel="alternate"
                                               href="home/ar.html">Arabic</a>
                                        </li>
                                    
                                        <li data-lang="English">
                                            <a role="menuitem" tabindex="-1" rel="alternate"
                                               href="home/en.html">English</a>
                                        </li>
                                    
                                        <li data-lang="French">
                                            <a role="menuitem" tabindex="-1" rel="alternate"
                                               href="home/fr.html">French</a>
                                        </li>
                                    
                                        <li data-lang="Italian">
                                            <a role="menuitem" tabindex="-1" rel="alternate"
                                               href="home/it.html">Italian</a>
                                        </li>
                                    
                                        <li data-lang="Russian">
                                            <a role="menuitem" tabindex="-1" rel="alternate"
                                               href="home/ru.html">Russian</a>
                                        </li>
                                    
                                        <li data-lang="Spanish">
                                            <a role="menuitem" tabindex="-1" rel="alternate"
                                               href="home/es.html">Spanish</a>
                                        </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                 <span class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </span>
                </div>
            </div>
        </div>
    </header>
    <div class="clearfix"></div>
   