@extends("website.layouts.app")

@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset($service->image) }})">
        </div>

        <div class="container">
            <div class="page-header__inner">
                <h2>{{ $service->title }}</h2>
                <div class="thm-breadcrumb__box">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ url("/") }}">{{ __("home") }}</a></li>
                        <li><span>/</span></li>
                        <li><a href="{{ url("/services") }}">{{ __("services") }}</a></li>
                        <li><span>/</span></li>
                        <li>{{ $service->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Service Details Start-->
    <section class="project-details">
        <div class="container">
            <div class="project-details__content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="project-details__content-left">
                            <h3 class="project-details__title-1">{{ $service->title }}</h3>
                            <h6>
                                {!! $service->sub_title !!}
                            </h6>
                            {!! $service->content !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Service Details End-->
    @include("website.sections.projects")

@endsection
