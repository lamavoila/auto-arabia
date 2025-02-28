@extends("website.layouts.app")

@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset($solution->image) }})">
        </div>

        <div class="container">
            <div class="page-header__inner">
                <h2>{{ $solution->title }}</h2>
                <div class="thm-breadcrumb__box">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ url("/") }}">{{ __("home") }}</a></li>
                        <li><span>/</span></li>
                        <li><a href="{{ url("solutions") }}">{{ __("solutions") }}</a></li>
                        <li><span>/</span></li>
                        <li><a href="{{ url("solutions/".$solution->slug) }}">{{ $solution->title }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Services Details Start-->
    <section class="services-details">
        <div class="container">
            <div class="project-three__top">
                <div class="container">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">{{ __("solutions_title") }}</span>
                        <h2 class="section-title__title">{!! __("solutions_sub_title") !!}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="services-details__left">
                        <div class="service-details__category">
                            <ul class="service-details__category-list list-unstyled">
                                @foreach ($mainSolutions as $item)
                                    <li class="{{ ($item->slug == $solution->slug ? "active" : "") }}">
                                        <a href="{{ url("solutions/" . $item->slug) }}">{{ $item->title}}<span
                                                class="icon-{{$right}}-arrow"></span></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="service-details__need-help">
                            <div class="service-details__need-help-bg"
                                style="background-image: url(assets/images/backgrounds/service-details-need-help-bg.jpg)">
                            </div>
                            <div class="service-details__need-help-icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <h2 class="service-details__need-help-title">{{ __("contact") }}</h2>
                            <div style="direction: ltr;" class="service-details__need-help-contact">
                                <a style="direction: ltr;" href="tel:966112781951">+966 11 278 1951</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="services-details__right">
                        <br>
                        <div class="row" style="row-gap: 15px">
                            @foreach ($solution->child_solutions as $childSolution)
                                <!--Services Two Single Start-->
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="services-two__single">
                                        <div class="services-two__img-box">
                                            <div class="services-two__img">
                                                <img width="370" height="220" style="object-fit: cover;"
                                                    src="{{ asset($childSolution->image) }}" alt="">
                                            </div>
                                            {{-- <div class="services-two__icon">
                                                <span class="icon-power-plant"></span>
                                            </div> --}}
                                        </div>
                                        <div class="services-two__content">
                                            <p class="services-two__sub-title">{{ $solution->title }}</p>
                                            <h3 class="services-two__title"><a
                                                    href="javascript:void(0)">{{ $childSolution->title }}</a>
                                            </h3>
                                            <p class="services-two__text">{{$childSolution->description}}</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Services Two Single Start-->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Services Details End-->

@endsection
