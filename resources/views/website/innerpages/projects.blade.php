@extends("website.layouts.app")

@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset("assets/bg-images/services.jpg") }})">
        </div>

        <div class="container">
            <div class="page-header__inner">
                <h2>{{ __("projects") }}</h2>
                <div class="thm-breadcrumb__box">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ url("/") }}">{{ __("home") }}</a></li>
                        <li><span>/</span></li>
                        <li><a href="{{ url("projects") }}">{{ __("projects") }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Project Two Start-->
    <section class="project-two">
        <div class="project-two__shape-1 float-bob-x">
            <img src="assets/images/shapes/project-two-shape-1.png" alt="">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">{{ __("projects_title") }}</span>
                <h2 class="section-title__title">
                    {{ __("projects_sub_title") }}
                </h2>
            </div>
            <div class="row">
                @foreach ($projects as $project)
                    <!--Project Two Single Start-->
                    <div class="item col-lg-4 col-sm-12">
                        <div class="project-two__single">
                            <div class="project-two__img">
                                <img width="370" height="300" style="object-fit: cover" src="{{ asset($project->image) }}"
                                    alt="">
                                <div class="project-two__arrow">
                                    <a href="{{ url("projects/") . "/" . $project->slug }}"><span
                                            class="icon-{{$right}}-arrow"></span></a>
                                </div>
                            </div>
                            <div class="project-two__content">
                                <p class="project-two__sub-title">{{ $project->solution->title }}</p>
                                <h3 class="project-two__title"><a
                                        href="{{ url("projects/") . "/" . $project->slug }}">{{ $project->title }}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!--Project Two Single End-->
                @endforeach
            </div>
        </div>
    </section>
    <!--Project Two End-->
@endsection