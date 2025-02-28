<!--Brand One Start-->
<section class="brand-two">
    <div class="container">
        <h4 class="brand-two__title">The Brands</h4>
        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
            "0": {
                "spaceBetween": 30,
                "slidesPerView": 2
            },
            "375": {
                "spaceBetween": 30,
                "slidesPerView": 2
            },
            "575": {
                "spaceBetween": 30,
                "slidesPerView": 3
            },
            "767": {
                "spaceBetween": 50,
                "slidesPerView": 4
            },
            "991": {
                "spaceBetween": 50,
                "slidesPerView": 5
            },
            "1199": {
                "spaceBetween": 100,
                "slidesPerView": 5
            }
        }}'>
            <div class="swiper-wrapper">
                @foreach ($brands as $brand)
                    <div class="swiper-slide">
                        <img width="100%" height="100" style="object-fit: contain" src="{{ asset($brand->image) }}" alt="{{ $brand->title }}" title="{{ $brand->title }}">
                    </div><!-- /.swiper-slide -->
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--Brand One End-->
