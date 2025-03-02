<!--Main Slider Start-->
<section class="main-slider-four">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
        "effect": "fade",
        "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
        "delay": 5000
        }}'>
        <div class="swiper-wrapper">

            @foreach ($highlights as $highlight)
                <div class="swiper-slide">
                    <div class="image-layer-four" style="background-image: url({{ asset($highlight->image) }});"></div>

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-four__content">
                                    <h2 class="main-slider-four__title">{!! $highlight->title !!}</h2>
                                    <div class="main-slider-four__text">{!! $highlight->sub_title !!}</div>
                                    <div class="main-slider-four__btn-box">
                                        @if($highlight->link)
                                            <a href="#" class="thm-btn main-slider-four__btn">Discover
                                                more</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="swiper-pagination" id="main-slider-pagination"></div>
        <!-- If we need navigation buttons -->
        <div class="main-slider-four__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="icon-{{$left}}-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="icon-{{$right}}-arrow"></i>
            </div>
        </div>

    </div>
</section>
<!--Main Slider End-->
