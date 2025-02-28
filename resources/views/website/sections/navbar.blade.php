<header class="main-header-four">
    <nav class="main-menu main-menu-four">
        <div class="main-menu-four__wrapper">
            <div class="container">
                <div class="main-menu-four__wrapper-inner">
                    <div class="main-menu-four__left">
                        <div class="main-menu-four__logo">
                            <a href="{{ url("/") }}"><img width="165px"
                                    src="{{ asset("assets/images/resources/logo-4.png") }}" alt=""></a>
                        </div>
                    </div>
                    <div class="main-menu-four__right">
                        <div class="main-menu-four__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="dropdown">
                                    <a href="{{ url("/") }}">Home </a>
                                </li>
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Services</a>
                                    <ul>
                                        @foreach ($services as $service)
                                            <li><a
                                                    href="{{ url("services/") . "/" . $service->slug }}">{{ $service->title  }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Projects</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">News</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="main-menu-four__search-cart-box">
                            <div class="main-menu-four__cart-box">
                                <a href="{{ url("changeLang/ar") }}" class="main-menu-four__cart">العربية</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="stricky-header stricked-menu main-menu main-menu-four">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
