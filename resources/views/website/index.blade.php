@extends('website.layouts.app')
@section('content')

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->

    <div class="page-wrapper">

        @include("website.sections.highlight")

        @include("website.sections.about")

        @include("website.sections.services")

        @include("website.sections.statics")

        @include("website.sections.solutions")

        @include("website.sections.brands")

        @include("website.sections.projects")

    </div><!-- /.page-wrapper -->


@endsection
