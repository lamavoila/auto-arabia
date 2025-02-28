@extends("website.layouts.app")

@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset("assets/bg-images/services.jpg") }})">
    </div>

    <div class="container">
        <div class="page-header__inner">
            <h2>{{ __("services") }}</h2>
            <div class="thm-breadcrumb__box">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url("/") }}">{{ __("home") }}</a></li>
                    <li><span>/</span></li>
                    <li><a href="{{ url("services") }}">{{ __("services") }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

    @include("website.sections.services");
@endsection
