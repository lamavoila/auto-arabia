@extends("website.layouts.app")

@section("content")
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset("assets/bg-images/contact-us.jpg") }})">
    </div>

    <div class="container">
        <div class="page-header__inner">
            <h2>{{ __("contact") }}</h2>
            <div class="thm-breadcrumb__box">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index-2.html">{{ __("home") }}</a></li>
                    <li><span>/</span></li>
                    <li>{{ __("contact") }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Contact Page Form Start-->
<section class="contact-page-form">
    <div class="contact-page-form__shape-1 float-bob-x">
        <img src="assets/images/shapes/contact-page-form-shape-1.png" alt="">
    </div>
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">{{ __("contact_with_us") }}</span>
            <h2 class="section-title__title">{{ __("contact_title") }}</h2>
        </div>
        <div class="result m-4"></div>
        <form action="{{ url("save-contact") }}" method="POST" class="contact-page-form__form-box contact-form-validated"
            novalidate="novalidate">
            @csrf
            <div class="row">
                <div class="col-xl-6">
                    <div class="contact-page-form__input-box">
                        <input type="text" placeholder="{{ __("your_name") }}" name="name">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="contact-page-form__input-box">
                        <input type="email" placeholder="{{ __("email") }}" name="email">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact-page-form__input-box text-message-box">
                        <textarea name="message" placeholder="{{ __("message") }}"></textarea>
                    </div>
                    <div class="col-xl-12 mt-5 mb-2">
                        <div class="g-recaptcha" data-sitekey="{{ config("app.recaptcha_site_key") }}"></div>
                    </div>
                    <div class="contact-page-form__btn-box">
                        <button type="submit" class="thm-btn contact-page-form__btn">{{ __("send_message") }}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!--Contact Page Form End-->

@endsection
