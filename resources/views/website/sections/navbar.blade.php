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
                                @foreach($headerMenu as $item)
                                    <li class="dropdown">
                                        <a href="{{ strpos("#",$item->link) === 0? url("/").$item->link:url($item->link) }}">{{ $item->name }} </a>
                                        @if($item->link == "services")
                                        <ul>
                                            @foreach ($services as $service)
                                                <li><a
                                                        href="{{ url("services/") . "/" . $service->slug }}">{{ $service->title  }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                        @elseif($item->link == "solutions")
                                        <ul>
                                            @foreach ($solutions_menu as $solution)
                                                <li class="dropdown">
                                                    <a href="{{ url("solutions/") . "/" . $solution->slug }}">{{ $solution->title  }}</a>
                                                    <ul>
                                                        @foreach($solution->child_solutions as $child)
                                                            <li><a href="{{ url("solutions/") . "/" . $child->slug }}">{{ $child->title  }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @endforeach
                                        </ul>
                                        @elseif($item->link == "projects")
                                        <ul>
                                            @foreach ($projects as $project)
                                                <li><a
                                                        href="{{ url("projects/") . "/" . $project->slug }}">{{ $project->title  }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                @endforeach
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
