@extends('frontend.layout.master')

@section('title', 'Our Apps')

@section('content')

<section class="p-0 top-space-margin position-relative overflow-hidden">
    <div class="container-fluid p-0 h-100 position-relative">
        <div class="row g-0">
            <div class="col-xl-4 col-lg-5 d-flex justify-content-center align-items-center ps-10 xxl-ps-6 xl-ps-4 md-ps-4 sm-ps-0 position-relative order-2 order-lg-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="vertical-title-center align-items-center justify-content-center flex-shrink-0 sm-w-50px">
                </div>
                <div class="border-start border-color-extra-medium-gray ps-40px sm-ps-20px position-relative z-index-9">
                    <h2 class="text-dark-gray fw-600 alt-font outside-box-right-10 xl-outside-box-right-15 lg-outside-box-right-20 md-me-0 sm-mb-0 ls-minus-3px">Budget-Friendly Strategies for Your E-commerce Success.</h2>
                </div>

            </div>

            <div class="col-xl-8 col-lg-7 position-relative one-half-screen order-1 order-lg-2 md-mb-50px">
                <div class="overflow-hidden position-relative">
                    <div class="w-100" data-anime='{ "effect": "slide", "direction": "lr", "color": "#f7f7f7", "duration": 1000, "delay": 0 }'>
                        <img src="https://craftohtml.themezaa.com/images/demo-branding-agency-about-title-bg.jpg" alt="" class="w-100 liquid-parallax" data-parallax-liquid="true" data-parallax-position="top" data-parallax-scale="1.05">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="position-relative pt-0">
    <div class="container position-relative z-index-1">
        <h2 class="fw-700 mt-5 ls-minus-1px text-dark-gray mb-10px" style="text-align: center">Our Apps</h2>
        <div class="row row-cols-1 mt-5 row-cols-lg-3 row-cols-md-2 justify-content-center mb-6 sm-mb-9" data-anime='{ "el": "childs", "perspective": [1200,1200], "scale": [1.05, 1], "rotateY": [30, 0], "translateX": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>


            <!-- start features box item -->
            <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                <div class="feature-box bg-white text-start justify-content-start h-100 border-radius-6px p-8 lg-p-13 box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                    <div class="feature-box-icon">
                        <img src="https://cdn.shopify.com/app-store/listing_images/c205d3f08d94faa2cbc4f286637480eb/icon/CLyo_8f46oEDEAE=.jpeg" class="w-85px" alt="">
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-inline-block text-dark-gray fw-700 fs-18 mb-5px">Reviews  Junction</span>
                        <p>Reviews Junction is a customer feedback and product review solution that focuses on user-generated content.</p>
                        <a href="{{route('rj')}}" class="btn mt-3 btn-large btn-switch-text btn-round-edge btn-transparent-light-gray d-table d-lg-inline-block lg-mb-15px md-mx-auto">
                            <span>
                            <span class="btn-double-text" data-text="Learn more">Learn more</span>
                            </span>
                            </a>
                            <a href="https://apps.shopify.com/reviews-junction?search_id=83fcaa35-67dd-4bc3-9313-b86c893818cc&surface_detail=reviews&surface_inter_position=4&surface_intra_position=24&surface_type=search" target="_blank" style="border-radius: 10px !important;"  class="btn mt-3 btn-extra-large btn-rounded btn-transparent-dark-gray d-table d-lg-inline-block lg-mb-15px md-mx-auto">Install now</a>
                    </div>
                </div>
            </div>
            <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                <div class="feature-box bg-white text-start justify-content-start h-100 border-radius-6px p-8 lg-p-13 box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                    <div class="feature-box-icon">
                        <img src="https://cdn.shopify.com/app-store/listing_images/817038f6aeb5ba4dae3ddfa1a69e7738/icon/CImJ8q2o2oEDEAE=.jpeg" class="w-85px" alt="">
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-inline-block text-dark-gray fw-700 fs-18 mb-5px">RJ: Loyalty & Rewards</span>
                        <p>Increase loyalty with our app: points, rewards, referrals for engagement.</p>
                        <a href="{{route('rj-loyalty')}}" class="btn mt-3 btn-large btn-switch-text btn-round-edge btn-transparent-light-gray d-table d-lg-inline-block lg-mb-15px md-mx-auto">
                            <span>
                            <span class="btn-double-text" data-text="Learn more">Learn more</span>
                            </span>
                            </a>
                            <a href="https://apps.shopify.com/rj-loyalty-rewards?surface_intra_position=2&surface_type=partners&surface_version=redesign" target="_blank" style="border-radius: 10px !important;"  class="btn mt-3 btn-extra-large btn-rounded btn-transparent-dark-gray d-table d-lg-inline-block lg-mb-15px md-mx-auto">Install now</a>
                    </div>
                </div>
            </div>

            <!-- end features box item -->
        </div>

    </div>
    <div class="container-fluid position-absolute top-50 translate-middle-y z-index-minus-1 d-none d-md-block overflow-hidden">
        <div class="row position-relative">
            <div class="col swiper swiper-width-auto text-center pb-30px feather-shadow" data-slider-options='{ "slidesPerView": "auto", "spaceBetween":50, "speed": 10000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                <div class="swiper-wrapper marquee-slide">
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="fw-800 fs-200 opacity-1">Reviews</div>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="fw-800 fs-200 opacity-1">Junction</div>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="fw-800 fs-200 opacity-1">Reviews</div>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="fw-800 fs-200 opacity-1">Junction</div>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="fw-800 fs-200 opacity-1">Reviews</div>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="fw-800 fs-200 opacity-1">Junction</div>
                    </div>
                    <!-- end client item -->
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
