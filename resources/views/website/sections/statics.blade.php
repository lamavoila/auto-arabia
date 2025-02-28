<!--Counter three Start-->
<section class="counter-three">
    <div class="container">
        <div class="row">
            @foreach ($statics as $item)
                <!--Counter Three Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="counter-three__single {{ $loop->iteration % 2 == 0 ?"counter-three__single-2":""}}">
                        <div class="counter-three__count-box">
                            <h3 class="odometer" data-count="{{ $item->value }}">00</h3>
                            <span class="counter-three__plus">+</span>
                        </div>
                        <h3 class="counter-three__title">{{ $item->title }}</h3>
                        <div class="counter-three__icon">
                            <span class="{{ $item->icon }}"></span>
                        </div>
                    </div>
                </div>
                <!--Counter Three Single End-->
            @endforeach


        </div>
    </div>
</section>
<!--Counter three End-->
