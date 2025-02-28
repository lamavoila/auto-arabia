<!--Project Three Start-->
<div class="project-three">
    <div class="section-title text-center">
        <span class="section-title__tagline">{{ __("solutions_title") }}</span>
        <h2 class="section-title__title pb-4">{!! __("solutions_sub_title") !!}</h2>
    </div>
    <div class="project-three__bottom">
        <div class="container">
            <div class="project-three__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                "items": 1,
                "margin": 30,
                "smartSpeed": 700,
                "loop":true,
                "autoplay": true,
                "nav":true,
                "dots":false,
                "rtl":true,
                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                "responsive":{
                    "0":{
                        "items":1
                    },
                    "768":{
                        "items":2
                    },
                    "992":{
                        "items": 3
                    },
                    "1200":{
                        "items": 4
                    }
                }
            }'>
                @foreach ($solutions as $solution)
                    <!--Project Three Single Start-->
                    <div class="item">
                        <div class="project-three__single">
                            <div class="project-three__img-box">
                                <div class="project-three__img">
                                    <img width="350" height="600" style="object-fit: cover" src="{{ asset($solution->image) }}" alt="">
                                </div>
                                <div class="project-three__arrow-box">
                                    <a href="{{ url("solutions/".$solution->slug) }}" class="project-three__arrow"><i
                                            class="icon-{{$right}}-arrow"></i></a>
                                </div>
                                <div class="project-three__content">
                                    <p class="project-three__sub-title">{{ $solution->parent_solution->title }}</p>
                                    <h3 class="project-three__title"><a href="{{ url("solutions/".$solution->slug) }}">{{ $solution->title }}</a></h3>
                                    <div class="project-three__arrow-box-2">
                                        <a href="{{ url("solutions/".$solution->slug) }}" class="project-three__arrow-2"><i
                                                class="icon-{{$right}}-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project Three Single End-->
                @endforeach
            </div>
            <div class="project-three__more-project-and-btn">
                <p class="project-three__more-project-text">{{ __("solutions_more") }}</p>
                <div class="project-three__more-project-btn-box">
                    <a href="{{ url("solutions") }}" class="project-three__more-project-btn thm-btn">{{ __("discover_more") }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Project Three End-->
