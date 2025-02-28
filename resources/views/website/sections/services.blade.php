<!--Services Page One Start-->
<section class="services-page-one">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">{{ __("services_title") }}</span>
            <h2 class="section-title__title">{{ __("services_sub_title") }}</h2>
        </div>


        <div class="row">
            @foreach ($services as $service)
                <!--Services One Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="services-one__single">
                        <div class="services-one__img-box">
                            <div class="services-one__img">
                                <img width="370" height="470" style="object-fit: cover" src="{{ asset($service->image) }}"
                                    alt="">
                            </div>

                            <a href="{{ url("services/" . $service->slug) }}" class="services-one__arrow"><i
                                    class="icon-{{ $right }}-arrow"></i></a>
                        </div>
                        <div class="services-one__content">
                            <h3 class="services-one__title"><a
                                    href="{{ url("services/" . $service->slug) }}">{{ $service->title }}</a>
                            </h3>
                            <div class="services-two__learn-more">
                                <a href="{{ url("services/" . $service->slug) }}">{{ __("read_more") }} </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services One Single End-->
            @endforeach
        </div>
    </div>
</section>
<!--Services Page One End-->
