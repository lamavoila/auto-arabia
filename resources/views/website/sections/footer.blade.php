<!--Site Footer Start-->
<footer class="site-footer">
    <div class="site-footer__img">
        <img src="assets/images/resources/site-footer-img-1.jpg" alt="">
    </div>
    <div class="container">
        <div class="site-footer__top">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__logo">
                            <a href="{{ url("/") }}">
                                <img width="165px" height="60"
                                src="{{ asset("assets/images/resources/logo-4.png") }}" alt=""></a>
                        </div>
                        <div class="footer-widget__about-text-box">
                            <p class="footer-widget__about-text">{{ __("footer_text") }}</p>
                        </div>
                        <div class="footer-widget__about-btn-box">
                            <a href="#" class="footer-widget__about-btn thm-btn">{{ __("contact") }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__links">
                        <div class="footer-widget__title-box">
                            <h4 class="footer-widget__title">{{ __("links") }}</h4>
                        </div>
                        <ul class="footer-widget__links-list list-unstyled">
                            @foreach($headerMenu as $item)
                                <li class="dropdown">
                                    <a href="{{ strpos("#",$item->link) === 0? url("/").$item->link:url($item->link) }}">{{ $item->name }} </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__links">
                        <div class="footer-widget__title-box">
                            <h4 class="footer-widget__title">{{ __("services") }}</h4>
                        </div>
                        <ul class="footer-widget__links-list list-unstyled">
                            @foreach($services as $item)
                                <li class="dropdown">
                                    <a href="{{ url("services")."/".$item->slug }}">{{ $item->title }} </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget__contact">
                        <div class="footer-widget__title-box">
                            <h4 class="footer-widget__title">{{ __("contact") }}</h4>
                        </div>
                        <p class="footer-widget__contact-text">Rawdah, Khalid Bin Al-Walid Street
                            Office#10, First floor, Riyadh 13211, KSA.
                        </p>
                        <ul class="footer-widget__Contact-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:Abdullah@Delta-Stars.Com">Abdullah@Delta-Stars.Com</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-telephone"></span>
                                </div>
                                <div class="text">
                                    <p style="direction: ltr;"><a style="direction: ltr;" href="tel:966112781951">+966 11 278 1951</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer__bottom">
            <p class="site-footer__bottom-text">© Copyright 2023 by <a href="#">Auto Arabia</a></p>
            <ul class="list-unstyled site-footer__bottom-menu">
                <li><a href="#">Help</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>
    </div>
</footer>
<!--Site Footer End-->
