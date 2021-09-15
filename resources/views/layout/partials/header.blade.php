
@include('components.country_city_modal') 

    <header id="header-container" class="transparent">
        <!-- Header -->
        <div id="header">
            <div class="container">
                <div class="left-side">
                    <div id="logo">
                        <a href="/"><img src="{{ asset('images/logo/classic-theme_logo.png') }} " alt="Quickad"></a>
                    </div>
                    <nav class="navigation">
                        <ul>
                            <li>
                            <a href="#countryModal" class="country-flag popup-with-zoom-anim" title="Change Country" data-tippy-placement="right">
                                    <img src="{{ asset('images/flags/in.png') }} "/>
                                </a>
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
                            <li><a href="{{ url('signup') }}">Register</a></li>
                            <li><a href="{{ route('post-add') }}" class="button ripple-effect">Post Free Ad</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="right-side">
                    <div class="header-widget d-none d-lg-block">
                        <nav class="navigation">
                            <ul>
                                <li>
                                    <a href="#sign-in-dialog" class="popup-with-zoom-anim"><i class="icon-feather-log-in"></i> Login</a>
                                </li>
                                <li><a href="{{ url('signup') }}">Register</a></li>
                                <li><a href="{{ route('post-add') }}" class="button ripple-effect post-job">Post Free Ad</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div> 

                <!-- @include('components.navbar') -->

            </div>
        </div>
    </header>
    <div class="clearfix"></div>
   