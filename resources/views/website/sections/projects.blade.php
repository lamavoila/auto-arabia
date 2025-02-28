<!--Project Two Start-->
<section class="project-two">
    <div class="project-two__shape-1 float-bob-x">
        <img src="assets/images/shapes/project-two-shape-1.png" alt="">
    </div>
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Featured Project</span>
            <h2 class="section-title__title">Let's checkout our all <br> latest project</h2>
        </div>
        <div class="project-two__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
            "items": 1,
            "margin": 30,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": 6000,
            "nav":false,
            "dots":true,
            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
            "responsive":{
                "0":{
                    "items":1
                },
                "768":{
                    "items":1
                },
                "992":{
                    "items": 1
                },
                "1200":{
                    "items": 1
                }
            }

        }'>
            @foreach ($projects as $project)
                <!--Project Two Single Start-->
                <div class="item">
                    <div class="project-two__single">
                        <div class="project-two__img">
                            <img width="370" height="460" style="object-fit: cover" src="{{ asset($project->image) }}" alt="">
                            <div class="project-two__arrow">
                                <a href="{{ url("projects/") . "/" . $project->slug }}"><span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                        <div class="project-two__content">
                            <p class="project-two__sub-title">{{ $project->solution->title }}</p>
                            <h3 class="project-two__title"><a href="project-details.html">{{ $project->title }}</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <!--Project Two Single End-->
            @endforeach
        </div>
    </div>
</section>
<!--Project Two End-->
