<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == "en" ? "ltr" : "rtl" }}">

@include('website.layouts.head')

<body>
    @include("website.sections.navbar")
    <div class="page-wrapper">
        @yield("content")

    </div>
    @include("website.sections.footer")


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content LAMA">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="{{url('/') }}" aria-label="logo image"><img src="assets/images/resources/logo-4.png"
                        width="130" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>

            <div class="mobile-nav__top">
                <a href="{{ url("changeLang/ar") }}" class="main-menu-four__cart">{{ app()->getLocale() == "en"?"العربية":"English" }}</a>
            </div>
            <!-- /.mobile-nav__container -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    @include("website.layouts.scripts")
</body>


</html>
