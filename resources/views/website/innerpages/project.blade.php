@extends("website.layouts.app")

@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset($project->image) }})">
        </div>

        <div class="container">
            <div class="page-header__inner">
                <h2>{{ $project->title }}</h2>
                <div class="thm-breadcrumb__box">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ url("/") }}">{{ __("home") }}</a></li>
                        <li><span>/</span></li>
                        <li><a href="{{ url("/projects") }}">{{ __("projects") }}</a></li>
                        <li><span>/</span></li>
                        <li>{{ $project->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--project Details Start-->
    <section class="project-details">
        <div class="container">
            <div class="project-details__content">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="project-details__content-left">
                            <h3 class="project-details__title-1">{{ $project->title }}</h3>
                            <h6>
                                {!! $project->sub_title !!}
                            </h6>
                            {!! $project->content !!}

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="project-details__content-right">
                            <div class="project-details__info">
                                <ul class="list-unstyled project-details__info-list">
                                    <li>
                                        <p>{{ __("project_num") }}</p>
                                        <h4>{{ $project->number }}</h4>
                                    </li>
                                    <li>
                                        <p>{{ __("solution") }}</p>
                                        <h4>{{ $project->solution->title }}</h4>
                                    </li>
                                    <li>
                                        <p>{{ __("services") }}</p>
                                        <h4 style="display: flex;">
                                            @foreach ($project->services as $service)
                                                <a class="p-1" href="{{ url("services")."/".$service->slug }}">{{ $service->title }}</a>

                                            @endforeach
                                        </h4>
                                    </li>
                                    <li>
                                        <p>{{ __("date") }}</p>
                                        <h4>{{ date($project->date) }}</h4>
                                    </li>
                                    <li>
                                        <p>{{ __("client") }}</p>
                                        <h4>{!! $project->client !!}</h4>
                                    </li>
                                    <li>
                                        <p>{{__("brands")}}</p>
                                        <h4 style="display: flex; flex-wrap: wrap;">
                                            @if($project->brands)
                                                @foreach ($project->brands as $brand)
                                                    <img width="100px" height="auto" style="object-fit: contain"
                                                        src="{{ asset($brand->image) }}" alt="{{ $brand->title }}"
                                                        title="{{ $brand->title }}">
                                                @endforeach
                                            @endif
                                        </h4>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection