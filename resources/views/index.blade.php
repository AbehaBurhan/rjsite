@extends('frontend.layout.master')

@section('title', 'Home')

<style>
    img.h-40px.md-h-30px.sm-h-40px {
     filter: grayscale(1)
    }
</style>

@section('content')
  <!-- start banner -->
  <section class="p-0 top-space-margin position-relative overflow-hidden">
<div class="container-fluid p-0 h-100 position-relative">
        <div class="row g-0">
            <div class="col-xl-4 col-lg-5 d-flex justify-content-center align-items-center ps-10 xxl-ps-6 xl-ps-4 md-ps-4 sm-ps-0 position-relative order-2 order-lg-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="vertical-title-center align-items-center justify-content-center flex-shrink-0 w-75px sm-w-50px">
                    <h1 class="title fs-15 alt-font text-dark-gray fw-700 text-uppercase ls-1px text-uppercase d-flex w-auto align-items-center m-0" data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["Reviews Junction"], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'></h1>
                </div>
                <div class="border-start border-color-extra-medium-gray ps-40px sm-ps-20px position-relative z-index-9">
                    <h2 class="text-dark-gray fw-600 alt-font outside-box-right-10 xl-outside-box-right-15 lg-outside-box-right-20 md-me-0 sm-mb-0 ls-minus-3px">Elevating Sales Through Social Proof.</h2>
                    <a href="https://apps.shopify.com/reviews-junction?search_id=83fcaa35-67dd-4bc3-9313-b86c893818cc&surface_detail=reviews&surface_inter_position=4&surface_intra_position=24&surface_type=search" target="_blank" class="btn btn-extra-large btn-rounded with-rounded btn-dark-gray d-table d-lg-inline-block lg-mb-15px md-mx-auto">Install Now<span class="bg-base-color text-white"><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>

            </div>

            <div class="col-xl-8 col-lg-7 position-relative one-half-screen order-1 order-lg-2 md-mb-50px">
                <div class="overflow-hidden position-relative">
                    <div class="w-100" data-anime='{ "effect": "slide", "direction": "lr", "color": "#f7f7f7", "duration": 1000, "delay": 0 }'>
                        <img src="{{asset('images/rjproducts.png')}}" alt="" class="w-80 liquid-parallax" style="display: block; margin: auto;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->
<!-- start section  -->
<section>
    <div class="container">
        <div class="row mb-6 sm-mb-50px">
            <div class="col-md-12 text-center text-md-start" data-anime='{"opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="fs-140 xxl-fs-100 sm-fs-60 fw-600 text-dark-gray alt-font ls-minus-8px sm-ls-minus-2px" data-bottom-top="transform: translate3d(-50px, 0px, 0px);" data-top-bottom="transform: translate3d(50px, 0px, 0px);">SMART WAY TO</div>
            </div>
            <div class="col-12">
                <div class="row align-items-center align-items-lg-end" data-bottom-top="transform: translate3d(-30px, 0px, 0px);" data-top-bottom="transform: translate3d(30px, 0px, 0px);">
                    <div class="col-lg-3 col-md-4 text-md-end text-center md-mt-30px md-mb-20px" data-anime='{"opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="position-relative">
                            <img src="images/demo-branding-agency-about-01.png" class="animation-rotation position-relative z-index-2" alt="">
                            <div class="absolute-middle-center w-100 z-index-1"><img src="images/demo-branding-agency-about-02.png" alt=""></div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 text-center text-md-start" data-anime='{"opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="fs-140 xxl-fs-100 sm-fs-60 fw-600 text-dark-gray alt-font ls-minus-8px sm-ls-minus-2px">GROW</div>
                    </div>
                    <div class="col-lg-4 last-paragraph-no-margin md-mt-30px" data-anime='{"opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <p class="w-95 md-w-80 mx-auto text-center text-lg-start sm-w-100">Accelerate Growth and Enhance Efficiency Through a Dedicated Community of Devoted Customers.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-0 counter-style-04" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col-lg-3 col-md-6 feature-box text-start hover-box border-start sm-border border-color-extra-medium-gray ps-35px pe-35px pt-25px pb-25px lg-ps-25px lg-pe-25px md-ps-35px md-pe-35px md-mb-50px sm-mb-30px">
                <div class="feature-box-content">
                    <p class="text-dark-gray mb-20 sm-mb-10 fw-500 w-90 fs-17 lh-28">Discover what over customers have to say in their reviews</p>
                    <h2 class="vertical-counter d-inline-flex text-dark-gray fw-700 ls-minus-2px mt-25 alt-font mb-0" data-text="" data-to=""><sup class="text-dark-gray top-0"><i class="feather icon-feather-arrow-up icon-small"></i>12k+</sup></h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 feature-box text-start hover-box border-start sm-border border-color-extra-medium-gray md-border-end ps-35px pe-35px pt-25px pb-25px lg-ps-25px lg-pe-25px md-mb-50px sm-mb-30px">
                <div class="feature-box-content">
                    <p class="text-dark-gray mb-20 sm-mb-10 fw-500 w-90 fs-17 lh-28">Satisfaction rate from our valued clients.</p>
                    <h2 class="vertical-counter d-inline-flex text-dark-gray fw-700 ls-minus-2px mt-25 alt-font mb-0" data-text="%" data-to="100"><sup class="text-dark-gray top-0"><i class="feather icon-feather-arrow-up icon-small"></i></sup></h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 feature-box text-start hover-box border-start sm-border border-color-extra-medium-gray ps-35px pe-35px pt-25px pb-25px lg-ps-25px lg-pe-25px sm-mb-30px">
                <div class="feature-box-content">
                    <p class="text-dark-gray mb-20 sm-mb-10 fw-500 w-90 fs-17 lh-28">Monthly visitors on our Reviews Junction platform.</p>
                    <h2 class="vertical-counter d-inline-flex text-dark-gray fw-700 ls-minus-2px mt-25 alt-font mb-0" data-text="+" data-to="1000"><sup class="text-dark-gray top-0"><i class="feather icon-feather-arrow-up icon-small"></i></sup></h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 feature-box text-start hover-box border-start sm-border border-color-extra-medium-gray md-border-end ps-35px pe-35px pt-25px pb-25px lg-ps-25px lg-pe-25px">
                <div class="feature-box-content">
                    <p class="text-dark-gray mb-20 sm-mb-10 fw-500 w-90 fs-17 lh-28">Onboarding conversions growth increased.</p>
                    <h2 class="vertical-counter d-inline-flex text-dark-gray fw-700 ls-minus-2px mt-25 alt-font mb-0" data-text="%" data-to="90"><sup class="text-dark-gray top-0"><i class="feather icon-feather-arrow-up icon-small"></i></sup></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pt-0">
    <div class="container">
        <div class="row mb-17 sm-mb-30px">
            <div class="col-lg-6 position-relative">
                <div class="row align-items-center position-relative md-mb-15" data-anime='{ "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col-md-5 sm-mb-30px" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                       <img src="{{asset('images/product1.svg')}}" alt="" />
                    </div>
                    <div class="col-lg-7 col-md-7 sm-mb-30px text-end" data-bottom-top="transform: translateY(-30px)" data-top-bottom="transform: translateY(30px)">
                        <img src="{{asset('images/product3.svg')}}" alt="" class="box-shadow-quadruple-large md-w-80 sm-w-100" />
                    </div>
                    <div class="w-50 sm-w-100 overflow-hidden position-absolute sm-position-relative left-140px bottom-minus-200px sm-bottom-0px sm-left-0px p-0 sm-ps-15px sm-pe-15px" data-shadow-animation="true" data-animation-delay="100" data-bottom-top="transform: translateY(20px)" data-top-bottom="transform: translateY(-20px)">
                        <img src="{{asset('images/product2.svg')}}" alt="" class="box-shadow-quadruple-large w-100" />
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 offset-xl-1 md-mt-20 sm-mt-0" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="mb-10px">
                    <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                    <span class="text-gradient-base-color fs-15 alt-font fw-700 ls-05px text-uppercase d-inline-block align-middle">Why Reviews Junction</span>
                </div>
                <h4 class="text-dark-gray alt-font fw-600 ls-minus-2px mb-20px">INSTALL & CUSTOMIZE WIDGETS & Easy To Use</h4>
                <p class="w-90 md-w-100 mb-35px sm-mb-20px">We help Install user-friendly widgets to display reviews and Q&A. Customize the design to match your store's theme.</p>
                <a href="{{route('contact')}}" class="btn btn-large btn-dark-gray btn-switch-text btn-box-shadow border-1 left-icon me-10px sm-mb-15px sm-mt-15px">
                    <span>
                        <span><i class="feather icon-feather-send"></i></span>
                        <span class="btn-double-text" data-text="Let's talk now">Let's talk now</span>
                    </span>
                </a>
                <a href="{{route('pricing')}}" class="btn btn-large btn-transparent-light-gray border-1 btn-switch-text left-icon sm-mb-15px sm-mt-15px">
                    <span>
                        <span><i class="feather icon-feather-briefcase"></i></span>
                        <span class="btn-double-text" data-text="Check Benefits">Check Benefits</span>
                    </span>
                </a>
            </div>
        </div>

    </div>
</section>
<!-- end section -->

<section id="down-section" style="padding-top: 0px !important">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-4 row-cols-sm-2 clients-style-04" data-anime='{"el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <!-- start client item -->
            <div class="col text-center border-end border-bottom border-color-light-medium-gray xs-border-end-0 transition-inner-all pt-7 pb-7 ps-5 pe-5 sm-pt-12 sm-pb-12">
                <div class="client-box">
                    <a href="https://www.calza.com.pk/" target="_blank"><img src="images/calza logo.png" class="md-h-30px sm-h-40px" alt="" /></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center border-end border-bottom border-color-light-medium-gray sm-border-end-0 transition-inner-all pt-7 pb-7 ps-5 pe-5 sm-pt-12 sm-pb-12">
                <div class="client-box">
                    <a href="https://alita.pk/" target="_blank"><img src="images/alita.png" class="md-h-30px sm-h-40px" alt="" /></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center border-end border-bottom border-color-light-medium-gray xs-border-end-0 transition-inner-all pt-7 pb-7 ps-5 pe-5 sm-pt-12 sm-pb-12">
                <div class="client-box">
                    <a href="https://fabihafatima.com/" target="_blank"><img src="images/fabiha.png" class="md-h-30px sm-h-40px" alt="" /></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center border-bottom border-color-light-medium-gray sm-border-end-0 transition-inner-all pt-7 pb-7 ps-5 pe-5 sm-pt-12 sm-pb-12">
                <div class="client-box">
                    <a href="https://heelsshoes.pk/" target="_blank"><img src="images/heels_logo_final2-min.png" class="md-h-30px sm-h-40px" alt="" /></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center border-end border-color-light-medium-gray xs-border-end-0 sm-border-bottom transition-inner-all pt-7 pb-7 ps-5 pe-5 sm-pt-12 sm-pb-12">
                <div class="client-box">
                    <a href="https://bodynbody.com/" target="_blank"><img src="images/logo_body_and_body.png" class="md-h-30px sm-h-40px" alt="" /></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center border-end border-color-light-medium-gray sm-border-end-0 sm-border-bottom transition-inner-all pt-7 pb-7 ps-5 pe-5 sm-pt-12 sm-pb-12">
                <div class="client-box">
                    <a href="https://eleshia.pk/" target="_blank"><img src="images/elishiya.png" class="md-h-30px sm-h-40px" alt="" /></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center border-end border-color-light-medium-gray xs-border-end-0 xs-border-bottom transition-inner-all pt-7 pb-7 ps-5 pe-5 sm-pt-12 sm-pb-12">
                <div class="client-box">
                    <a href="https://www.craftcanvases.com/"><img src="images/craftcan.png" class="md-h-30px sm-h-40px" alt="" /></a>
                </div>
            </div>
            <!-- end client item -->

        </div>
        <div class="row mt-7 sm-mt-9" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 300, "staggervalue": 250, "easing": "easeOutQuad" }'>
            <div class="col-12 text-center">
                <div class="d-inline-block bg-dark-gray fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px sm-m-5px">trust</div>
                <div class="d-inline-block align-middle"><span class="fs-24 alt-font text-dark-gray d-block fw-600 ls-minus-1px mb-0">Join the 40+ Brands trusting Reviews Junction.</span></div>
            </div>
        </div>
    </div>
</section>

<!-- start section -->
<section class="py-0">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="col-lg-6">
                <div class="outside-box-left-20 md-outside-box-left-0 overflow-hidden position-relative" data-parallax-liquid="true" data-parallax-transition="2" data-parallax-position="top">
                    <div class="liquid-parallax" data-parallax-liquid="true" data-parallax-position="bottom" data-parallax-scale="1.1" data-parallax-scale-fraction="0.0001">
                        <img class="w-100" src="images/4.png" alt="" >
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 offset-xl-1 z-index-9 md-mt-50px" data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                <h1 class="text-dark-gray alt-font mb-50px fw-600 ls-minus-2px md-mb-25px outside-box-left-15 md-outside-box-left-0 word-break-normal md-w-80 sm-w-100">Dedicated to Delivering Measurable Success.</h1>
                <p class="fs-20 fw-500 ls-minus-05px text-dark-gray mb-15px">At the heart of our ethos lies a steadfast dedication to delivering concrete results and achieving tangible success.</p>
                <p class="w-90 md-w-100 mb-35px"> With a relentless focus on measurable outcomes, our team strives to exceed expectations and drive impactful change. Trust in our commitment to excellence as we work tirelessly to achieve your goals and elevate your success to new heights.</p>
                <div class="progress-bar-style-02 mb-40px">
                    <!-- start progress bar item -->
                    {{-- <div class="progress mb-15px border-radius-50px fw-600 fs-11 lh-12 text-white bg-white">
                        <div class="progress-bar bg-gradient-orange-transparent m-0" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" aria-label="business-growth">
                            <span class="progress-bar-percent text-orange fw-600">98%</span>
                        </div>
                        <div class="progress-bar-title text-uppercase">Business growth</div>
                    </div> --}}
                    <!-- end progress bar item -->
                    <!-- start progress bar item -->
                    {{-- <div class="progress border-radius-50px fw-600 fs-11 lh-12 text-white bg-white">
                        <div class="progress-bar bg-gradient-blue-transparent m-0" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" aria-label="new-technology">
                            <span class="progress-bar-percent text-blue fw-600">85%</span>
                        </div>
                        <div class="progress-bar-title text-uppercase">New technology</div>
                    </div> --}}
                    <!-- end progress bar item -->
                </div>
                <div class="pt-20px pb-20px ps-30px pe-30px xs-p-15px border border-color-extra-medium-gray border-radius-6px mb-15px icon-with-text-style-08 w-90 lg-w-100">
                    <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                        <div class="feature-box-icon me-10px">
                            <i class="bi bi-people icon-very-medium text-dark-gray"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="alt-font fs-19 ls-minus-05px fw-600 text-dark-gray d-block lh-26">10k+ people trusting the agency.</span>
                        </div>
                    </div>
                </div>
                <p class="fs-13 mb-0">We are excited for our work and how it <span class="text-dark-gray text-decoration-line-bottom">positively</span> impacts For Customers.</p>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 md-mb-20px sm-mb-0" data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h3 class="text-dark-gray fw-600 ls-minus-2px alt-font">We work with brands and businesses to ensure they shine.</h3>
            </div>
            <div class="col-lg-7" data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="row">
                    <div class="col-md-5">
                        <div class="fs-19 fw-600 text-dark-gray w-90 xl-w-100 sm-mb-10px">Increase repeat purchases
                        </div>
                    </div>
                    <div class="col-md-7 last-paragraph-no-margin">
                        <p>Maximize customer lifetime value and drive repeat purchases with precisely timed incentives personalized for each customer.</p>
                    </div>
                </div>
                <div class="separator-line-1px border-bottom border-color-extra-medium-gray mt-35px mb-35px"></div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="fs-19 fw-600 text-dark-gray w-90 xl-w-100 sm-mb-10px">Drive repeat shopper sales                        </div>
                    </div>
                    <div class="col-md-7 last-paragraph-no-margin">
                        <p>Reviews-Junction offers diverse revenue growth strategies, from increasing Average Order Value to fostering recurring revenue. Our aim is to help you achieve a 50% sales contribution from repeat customers</p>
                    </div>
                </div>
                <div class="separator-line-1px border-bottom border-color-extra-medium-gray mt-35px mb-35px"></div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="fs-19 fw-600 text-dark-gray w-90 xl-w-100 sm-mb-10px">Maximize conversion rates
                        </div>
                    </div>
                    <div class="col-md-7 last-paragraph-no-margin">
                        <p>Drive conversions by leveraging genuine content to address shopper concerns, enticing rewards for motivation, and compelling messaging to instill a sense of urgency.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end section -->

<!-- start section -->
<section class="bg-gradient-solitude-blue-transparent">
    <div class="container">
        <div class="row align-items-center justify-content-center" data-anime='{ "el": "childs", "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <div class="col-xl-5 col-lg-7 col-md-10 position-relative pe-xl-0 text-center text-xl-start lg-mb-10px">
                <span class="fs-19 lh-20 ls-0px fw-600 text-base-color d-inline-block text-decoration-line-bottom-medium border-color-charcoal-grey mb-20px">Reviews Junction</span>
                <h2 class="fw-700 ls-minus-1px text-dark-gray mb-10px">Reviews App on the Market, at the Lowest Price.</h2>
                <p class="w-90 md-w-100 mb-35px">We are the most affordable reviews app on the market. We offer a free plan and a 14-day free trial on all our paid plans. We also offer a 30-day money-back guarantee on all our paid plans.</p>
                <div class="d-flex justify-content-center justify-content-xl-start">
                    <!-- start slider navigation -->
                    <div class="slider-one-slide-prev-02 text-dark-gray swiper-button-prev slider-navigation-style-04 border border-1 border-color-transparent-dark-very-light" tabindex="0" role="button" aria-label="Previous slide"><i class="bi bi-arrow-left-short icon-very-medium"></i></div>
                    <div class="slider-one-slide-next-02 text-dark-gray swiper-button-next slider-navigation-style-04 border border-1 border-color-transparent-dark-very-light" tabindex="0" role="button" aria-label="Next slide"><i class="bi bi-arrow-right-short icon-very-medium"></i></div>
                    <!-- end slider navigation -->
                </div>
            </div>
            <div class="col-xl-7 col-lg-10 overflow-hidden">
                <div class="outside-box-right-15 xl-outside-box-right-20 sm-outside-box-right-0">
                    <div class="swiper slider-one-slide slider-shadow-right sm-slider-shadow-none magic-cursor overflow-visible ps-25px sm-p-0" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 35, "loop": true, "pagination": { "el": ".slider-one-slide-pagination", "clickable": true, "dynamicBullets": false }, "navigation": { "nextEl": ".slider-one-slide-next-02", "prevEl": ".slider-one-slide-prev-02" }, "autoplay": { "delay": 6000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 2 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper pt-30px">
                            <!-- start review item -->
                            <div class="swiper-slide review-style-06">
                                <div class="d-flex justify-content-center h-100 flex-column bg-white box-shadow-medium p-45px md-p-35px border-radius-6px last-paragraph-no-margin">
                                    <div class="d-flex align-items-center">
                                        {{-- <img class="rounded-circle w-90px h-90px me-20px" src="https://via.placeholder.com/200x200" alt=""> --}}
                                        <div class="d-inline-block align-middle last-paragraph-no-margin">
                                            <h3 class="fs-28 fw-600 text-dark-gray" style="margin-bottom: 0px !important">Review App</h3>
                                        </div>
                                        {{-- <div class="border-radius-30px bg-yellow ps-15px pe-15px fs-14 fw-700 text-dark-gray d-inline-block align-middle ms-auto md-position-absolute md-right-15px md-top-15px"><i class="fa-solid fa-star me-5px"></i>5.0</div> --}}
                                    </div>
                                    <p>Our team of has developed a fully-featured review app that always keeps improving. Compare us with the competition and see why we are the best.
                                    </p>
                                    <a href="https://apps.shopify.com/reviews-junction?st_source=autocomplete" target="_blank" class="btn btn-large btn-switch-text btn-round-edge btn-transparent-light-gray d-table d-lg-inline-block lg-mb-15px md-mx-auto">
                                        <span>
                                            <span class="btn-double-text" data-text="Install Reviews Junction">Install Reviews Junction</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- end review item -->
                            <!-- start review item -->
                            <div class="swiper-slide review-style-06">
                                <div class="d-flex justify-content-center h-100 flex-column bg-white box-shadow-medium p-45px md-p-35px border-radius-6px last-paragraph-no-margin">
                                    <div class="d-flex align-items-center">
                                        {{-- <img class="rounded-circle w-90px h-90px me-20px" src="https://via.placeholder.com/200x200" alt=""> --}}
                                        <div class="d-inline-block align-middle last-paragraph-no-margin">
                                            <h3 class="fs-28 fw-600 text-dark-gray" style="margin-bottom: 0px !important">The Lowest Price                                            </h3>
                                        </div>
                                        {{-- <div class="border-radius-30px bg-yellow ps-15px pe-15px fs-14 fw-700 text-dark-gray d-inline-block align-middle ms-auto md-position-absolute md-right-15px md-top-15px"><i class="fa-solid fa-star me-5px"></i>5.0</div> --}}
                                    </div>
                                    <p>At Reviews Junction, we strongly believe software should become more affordable at scale. We have never raised our price and never will.
                                    </p>

                                    <a href="{{route('reviews-junction-pricing')}}" class="btn btn-large btn-switch-text btn-round-edge btn-transparent-light-gray d-table d-lg-inline-block lg-mb-15px md-mx-auto">
                                        <span>
                                            <span class="btn-double-text" data-text="check Pricing & Plans">Check Pricing & Plans</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- end review item -->

                            <!-- start review item -->
                            <div class="swiper-slide review-style-06">
                                <div class="d-flex justify-content-center h-100 flex-column bg-white box-shadow-medium p-45px md-p-35px border-radius-6px last-paragraph-no-margin">
                                    <div class="d-flex align-items-center">
                                        {{-- <img class="rounded-circle w-90px h-90px me-20px" src="https://via.placeholder.com/210x210" alt=""> --}}
                                        <div class="d-inline-block align-middle last-paragraph-no-margin">
                                            <h3 class="fs-28 fw-600 text-dark-gray" style="margin-bottom: 0px !important" >24/7 Customer Service
                                            </h3>
                                        </div>
                                        {{-- <div class="border-radius-30px bg-yellow ps-15px pe-15px fs-14 fw-700 text-dark-gray d-inline-block align-middle ms-auto md-position-absolute md-right-15px md-top-15px"><i class="fa-solid fa-star me-5px"></i>5.0</div> --}}
                                    </div>
                                    <p>We offer true 24/7 customer support. This includes help with installation, troubleshooting and customizations so our widgets look great.
                                    </p>

                                    <a href="mailto:info@reviewsjunction.app" class="btn btn-large btn-switch-text btn-round-edge btn-transparent-light-gray d-table d-lg-inline-block lg-mb-15px md-mx-auto">
                                        <span>
                                            <span class="btn-double-text" data-text="Contact Support">Contact Support</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- end review item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--
<section class="pt-4 pb-0">
    <div class="container">
        <h2 class="fw-700 ls-minus-1px text-dark-gray mb-10px" style="text-align: center">Our Plans</h2>

        <div class="row align-items-end pricing-table-style-05 g-0 mb-6 justify-content-center">
            <p class="w-90 md-w-100 mb-35px" style="    text-align: center;
            font-size: 23px;
            font-weight: 500;
            color: black;">We stand out as the exclusive reviews app offering limitless review requests alongside complimentary photos and videos within reviews for all users.</p>
    <div class="col-lg-4 col-md-8 md-mb-30px appear anime-complete" data-anime="{ &quot;translateX&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }" style="">
    <div class="border-radius-6px position-relative overflow-hidden">
    <div class="pricing-header pt-45px pb-10px border-radius-6px text-center position-relative top-minus-3px">
    <span class="ps-25px pe-25px mb-15px text-uppercase text-dark-gray fs-14 lh-34 fw-600 border-radius-100px bg-white border border-color-extra-medium-gray box-shadow-medium-bottom d-inline-block">Free</span>
    <h5 class="fw-700 mb-0 text-dark-gray alt-font">Plan</h5>
    <div class="pricing-body pt-35px">
    <ul class="p-0 m-0 list-style-02">
    <li class="pt-15px pb-15px ps-12 pe-12 border-top border-color-extra-medium-gray text-dark-gray lg-ps-10 lg-pe-10"><span class="d-flex align-self-center justify-content-center bg-green h-20px w-20px border-radius-100 me-10px"><i class="bi bi-check align-self-center text-white fs-14"></i></span>500 Orders processing </li>
    <li class="pt-15px pb-15px ps-12 pe-12 border-top border-color-extra-medium-gray text-dark-gray lg-ps-10 lg-pe-10"><span class="d-flex align-self-center justify-content-center bg-green h-20px w-20px border-radius-100 me-10px"><i class="bi bi-check align-self-center text-white fs-14"></i></span>Question & Answers</li>
    <li class="pt-15px pb-15px ps-12 pe-12 border-top border-color-extra-medium-gray text-dark-gray lg-ps-10 lg-pe-10"><span class="d-flex align-self-center justify-content-center bg-green h-20px w-20px border-radius-100 me-10px"><i class="bi bi-check align-self-center text-white fs-14"></i></span>Email Follow-ups</li>
    <li class="pt-15px pb-15px ps-12 pe-12 border-top border-color-extra-medium-gray text-dark-gray lg-ps-10 lg-pe-10"><span class="d-flex align-self-center justify-content-center bg-green h-20px w-20px border-radius-100 me-10px"><i class="bi bi-check align-self-center text-white fs-14"></i></span>24/7 Support</li>
    <li class="pt-15px pb-15px ps-12 pe-12 border-top border-color-extra-medium-gray text-dark-gray lg-ps-10 lg-pe-10"><span class="d-flex align-self-center justify-content-center bg-green h-20px w-20px border-radius-100 me-10px"><i class="bi bi-check align-self-center text-white fs-14"></i></span>All features included*</li>

    </ul>
    </div>
    </div>
    <div class="row align-items-center pt-25px pb-25px">
    <div class="col text-center last-paragraph-no-margin d-flex align-items-center justify-content-center">
    <h3 class="alt-font text-dark-gray mb-0 me-15px fw-700 ls-minus-2px">$0</h3>
    <p class="w-120px fs-15 lh-22 text-start">/month</p>
    </div>
    </div>

    </div>
    </div>
    <div class="col-lg-4 col-md-8 md-mb-30px appear anime-complete" data-anime="{ &quot;translateX&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }" style="">
    <div class="bg-dark-gray border-radius-6px overflow-hidden position-relative box-shadow-double-large z-index-9">
    <div class="p-10px fw-700 fs-14 text-white bg-dark-gray text-uppercase text-center">Popular</div>
    <div class="pricing-header pt-45px pb-10px bg-white border-radius-6px text-center position-relative top-minus-3px">
    <span class="ps-25px pe-25px mb-15px text-uppercase text-dark-gray fs-14 lh-34 fw-600 border-radius-100px bg-white border border-color-extra-medium-gray box-shadow-medium-bottom d-inline-block">Enterprise</span>
    <h5 class="fw-700 mb-0 text-dark-gray alt-font">Plan</h5>
    <div class="pricing-body pt-35px">
    <ul class="p-0 m-0 list-style-02 text-center text-md-start">
        <li class="pt-15px pb-15px ps-12 pe-12 border-top border-color-extra-medium-gray text-dark-gray lg-ps-10 lg-pe-10"><span class="d-flex align-self-center justify-content-center bg-green h-20px w-20px border-radius-100 me-10px"><i class="bi bi-check align-self-center text-white fs-14"></i></span>Unlimited Orders processing</li>
        <li class="pt-15px pb-15px ps-12 pe-12 border-top border-color-extra-medium-gray text-dark-gray lg-ps-10 lg-pe-10"><span class="d-flex align-self-center justify-content-center bg-green h-20px w-20px border-radius-100 me-10px"><i class="bi bi-check align-self-center text-white fs-14"></i></span>Question & Answers</li>
        <li class="pt-15px pb-15px ps-12 pe-12 border-top border-color-extra-medium-gray text-dark-gray lg-ps-10 lg-pe-10"><span class="d-flex align-self-center justify-content-center bg-green h-20px w-20px border-radius-100 me-10px"><i class="bi bi-check align-self-center text-white fs-14"></i></span>Email Follow-ups</li>
        <li class="pt-15px pb-15px ps-12 pe-12 border-top border-color-extra-medium-gray text-dark-gray lg-ps-10 lg-pe-10"><span class="d-flex align-self-center justify-content-center bg-green h-20px w-20px border-radius-100 me-10px"><i class="bi bi-check align-self-center text-white fs-14"></i></span>24/7 Support</li>
        <li class="pt-15px pb-15px ps-12 pe-12 border-top border-color-extra-medium-gray text-dark-gray lg-ps-10 lg-pe-10"><span class="d-flex align-self-center justify-content-center bg-green h-20px w-20px border-radius-100 me-10px"><i class="bi bi-check align-self-center text-white fs-14"></i></span>All features included*</li>
    </ul>
    </div>
    </div>
    <div class="row align-items-center pt-25px pb-25px">
    <div class="col text-center last-paragraph-no-margin d-flex align-items-center justify-content-center">
    <h3 class="alt-font text-white mb-0 me-15px fw-700 ls-minus-2px">$79</h3>
    <p class="w-120px text-white opacity-5 fs-15 lh-22 text-start">/month</p>
    </div>
    </div>
    </div>
    </div>

    <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 justify-content-center align-items-center appear anime-child anime-complete" style="margin-top: 20px" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

    <div class="col icon-with-text-style-08 text-center text-sm-start md-mb-25px" style="">
    <div class="d-flex justify-content-center">
    <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
    <div class="feature-box-icon me-10px">
    <i class="bi bi-calendar-check icon-extra-medium text-dark-gray"></i>
    </div>
    <div class="feature-box-content">
    <span class="fw-500 text-dark-gray">Get 30 day free trial</span>
    </div>
    </div>
    </div>
    </div>


    <div class="col icon-with-text-style-08 text-center text-sm-start md-mb-25px" style="">
    <div class="d-flex justify-content-center">
    <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
    <div class="feature-box-icon me-10px">
    <i class="bi bi-wallet2 icon-extra-medium text-dark-gray"></i>
    </div>
    <div class="feature-box-content">
    <span class="fw-500 text-dark-gray">No any hidden fees pay</span>
    </div>
    </div>
    </div>
    </div>


    <div class="col icon-with-text-style-08 text-center text-sm-start" style="">
    <div class="d-flex justify-content-center">
    <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
    <div class="feature-box-icon me-10px">
    <i class="bi bi-clock icon-extra-medium text-dark-gray"></i>
    </div>
    <div class="feature-box-content">
    <span class="fw-500 text-dark-gray">You can cancel anytime</span>
    </div>
    </div>
    </div>

    </div>

    </div>
    <a href="{{route('pricing')}}" class="btn btn-extra-large btn-rounded mt-4 with-rounded btn-dark-gray d-table d-lg-inline-block lg-mb-15px md-mx-auto">Check All Benefits<span class="bg-base-color text-white"><i class="fa-solid fa-arrow-right"></i></span></a>
    </div>
    </section> --}}


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

<!-- start section -->
<section style="padding-top: 0px !important">
    <div class="container">

        <div class="row mt-5">
            <div class="col-12 text-center" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <i class="bi bi-envelope text-dark-gray d-inline-block align-middle icon-extra-medium me-5px"></i>
                <div class="fs-18 text-dark-gray d-inline-block align-middle fw-500">Save your precious time and effort spent for finding a solution. <a href="{{route('contact')}}" class="text-dark-gray text-decoration-line-bottom fw-600">Contact us now</a></div>
            </div>
        </div>
    </div>
</section>
<section class="background-position-center-top sm-background-image-none" style="background-image: url('images/vertical-line-bg.svg')">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-xl-5 col-lg-6 last-paragraph-no-margin md-mb-30px" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h3 class="alt-font fw-600 ls-minus-2px text-dark-gray"><span class="fw-800 d-inline-block">Our Partners.</span></h3>
                <p class="w-90 sm-w-100 d-inline-block">Utilize data aggregation and integration across your technology infrastructure to gain deeper insights into customer behaviors and preferences, driving business growth and development.
                </p>
            </div>

        </div>
    </div>
</section>
<!-- end section -->

<section class="background-position-center-top p-0 sm-background-image-none mb-5" style="background-image: url('images/vertical-line-bg.svg')">
    <div class="container">
        <div class="row position-relative clients-style-08">
            <div class="col swiper text-center feather-shadow" data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 4000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 4 }, "768": { "slidesPerView": 3 } }, "effect": "slide" }'>
                <div class="swiper-wrapper marquee-slide">
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="https://www.shopify.com/plus" target="_blank"><img src="shopify-plus-logo--black.jpg" class="h-40px xs-h-30px" alt="" /></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="https://www.bazaarvoice.com/" target="_blank"><img src="bazaarvoice-logo.png" class="h-40px xs-h-30px" alt="" /></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="https://www.klaviyo.com/" target="_blank"><img src="klaviyo-logo.jpg" class="h-40px xs-h-30px" alt="" /></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="https://mailchimp.com/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="brandLogo brandLogo--lockup--animated" aria-label="Mailchimp" width="185" height="60" viewBox="0 0 185 60" role="img">
                                <g class="brandLogo__freddie">
                                    <g class="brandLogo__freddie-outline">
                                        <path d="M11.54563,30.98028a5.04364,5.04364,0,0,0-1.182.08,4.96029,4.96029,0,0,0-4.09341,5.76638c.28318,2.67235,3.13228,4.92584,5.76978,4.99292a4.42784,4.42784,0,0,0,.80886-.05371c2.85409-.462,3.60136-3.4031,3.13091-6.292C15.44835,32.21207,13.12358,31.06224,11.54563,30.98028Zm2.79659,7.728a1.19693,1.19693,0,0,1-1.11341.52628A1.50034,1.50034,0,0,1,11.847,37.72026a3.6991,3.6991,0,0,1,.28727-1.47809,1.34249,1.34249,0,0,0-.55068-1.66273,1.55527,1.55527,0,0,0-1.13523-.201,1.45893,1.45893,0,0,0-.92909.6091,3.14563,3.14563,0,0,0-.34045.75986c-.01546.04681-.02773.08347-.03705.10741-.12932.32979-.33568.4262-.47522.4083a.27226.27226,0,0,1-.215-.20145,2.799,2.799,0,0,1,.78977-2.44028,2.55945,2.55945,0,0,1,2.12682-.72794,2.51848,2.51848,0,0,1,1.93113,1.33294,2.91819,2.91819,0,0,1-.23636,2.70255c-.03227.0688-.06182.13179-.08705.18808a1.06609,1.06609,0,0,0-.02727,1.03335.76345.76345,0,0,0,.63341.30477,1.45938,1.45938,0,0,0,.34591-.04616c.14659-.03235.29818-.06578.39045.044A.21685.21685,0,0,1,14.34222,38.70832Z" fill="#fff"></path>
                                        <path d="M48.018,44.18839a14.89179,14.89179,0,0,0,1.01912-4.73159c0-1.99448-1.12925-2.82117-1.84831-2.82117-.022-.077-.16421-.59707-.36008-1.22312a9.835,9.835,0,0,0-.39811-1.067,3.86356,3.86356,0,0,0,.69444-2.81634,3.56386,3.56386,0,0,0-1.03737-2.01292,8.44059,8.44059,0,0,0-3.66342-1.81186c-.20356-.05685-.87448-.2408-.93339-.2588-.00462-.03842-.049-2.1971-.08947-3.12388a10.69427,10.69427,0,0,0-.412-2.74588,7.3516,7.3516,0,0,0-1.90458-3.395c2.32445-2.40607,3.77553-5.05646,3.772-7.33017-.0066-4.37268-5.38446-5.6959-12.0116-2.95551-.00726.00308-1.39437.59027-1.40426.59532-.00616-.00615-2.53857-2.48707-2.5766-2.52044C19.30856-.611-4.31609,25.61063,3.23718,31.97912l1.65069,1.39632a8.09061,8.09061,0,0,0-.459,3.74136A7.3669,7.3669,0,0,0,6.978,41.84751a7.76153,7.76153,0,0,0,5.00217,2.01117c2.93932,6.76383,9.65505,10.913,17.5295,11.14661C37.95653,55.25576,45.04707,51.298,48.018,44.18839Zm1.73378-8.00451a5.03683,5.03683,0,0,1,1.05187,3.27292,16.44267,16.44267,0,0,1-1.13914,5.37081l-.016.04017a18.6299,18.6299,0,0,1-7.63395,8.83185A22.74119,22.74119,0,0,1,30.2641,56.78071h-.00088c-.26687,0-.53791-.00417-.80588-.01208a22.80815,22.80815,0,0,1-11.50666-3.39651,19.69691,19.69691,0,0,1-7.13406-7.83373A9.76285,9.76285,0,0,1,5.80653,43.1681a9.12379,9.12379,0,0,1-3.13541-5.87525,10.1625,10.1625,0,0,1,.19038-3.31968l-.76632-.648a6.00654,6.00654,0,0,1-2.075-4.29037,12.18256,12.18256,0,0,1,.86239-4.97326c1.57308-4.29476,5.19189-9.40874,9.681-13.68022a36.05484,36.05484,0,0,1,6.62209-5.07995A13.74927,13.74927,0,0,1,23.84953,3.155,6.16267,6.16267,0,0,1,28.0256,4.64063c.06617.05774,1.05825,1.028,1.81072,1.7651.18883-.07968.32468-.137.32864-.13851a18.87034,18.87034,0,0,1,7.0457-1.56359c4.49745,0,7.40709,2.41178,7.4128,6.14437.00352,2.30312-1.12727,4.885-3.2119,7.38439a10.19546,10.19546,0,0,1,1.27214,2.84312,12.50348,12.50348,0,0,1,.48252,3.16866c.02023.46142.04089,1.20183.0576,1.85532a9.857,9.857,0,0,1,4.14309,2.20017,5.2896,5.2896,0,0,1,1.50186,2.94607,5.429,5.429,0,0,1-.488,3.235c.04375.12556.08925.26188.13454.40632.03935.126.0765.24739.11123.36263A3.74075,3.74075,0,0,1,49.75182,36.18388Z" fill="#fff"></path>
                                        <path d="M44.39731,34.00012a2.66776,2.66776,0,0,0,.83533-2.11511,1.83938,1.83938,0,0,0-.5256-1.04272,6.55815,6.55815,0,0,0-2.88371-1.38088c-.48437-.13743-.813-.22545-1.16706-.34324-.62967-.20956-.9408-.37831-1.01127-1.57522-.03076-.52346-.12109-2.34706-.1536-3.10059-.05738-1.32044-.21469-3.12529-1.32218-3.87044a1.844,1.844,0,0,0-.94713-.306,1.7718,1.7718,0,0,0-.562.05559,2.96866,2.96866,0,0,0-1.47229.84133,5.03836,5.03836,0,0,1-3.84523,1.29794c-.7752-.03287-1.59666-.15486-2.53833-.21133-.18327-.01081-.367-.02228-.55047-.032a5.075,5.075,0,0,0-4.89033,4.479c-.53913,3.75,2.14691,5.68787,2.92233,6.825a.95371.95371,0,0,1,.21338.50978.81755.81755,0,0,1-.276.53713l.00022.00111a9.67943,9.67943,0,0,0-2.0904,9.017,7.49089,7.49089,0,0,0,.39294,1.09368c1.95993,4.63059,8.04,6.78706,13.98,4.82581a14.49743,14.49743,0,0,0,2.25666-.964A11.86745,11.86745,0,0,0,44.21831,45.931a10.433,10.433,0,0,0,2.87716-5.70485c.17891-1.19338-.08312-1.65529-.43985-1.87743a1.3023,1.3023,0,0,0-.82975-.15308,11.61726,11.61726,0,0,0-.79025-2.724Z" fill="#fff"></path>
                                        <path d="M34.66285,16.11585c.09585.022.15674-.14356.071-.19163a10.74733,10.74733,0,0,0-4.58165-1.199.08336.08336,0,0,1-.06551-.13324,4.66116,4.66116,0,0,1,.86217-.864.08605.08605,0,0,0-.05782-.15388A12.17129,12.17129,0,0,0,25.411,15.50605a.08448.08448,0,0,1-.1297-.08846,6.01219,6.01219,0,0,1,.57991-1.41322.08113.08113,0,0,0-.1086-.11086,22.23963,22.23963,0,0,0-6.2431,5.09444.085.085,0,0,0,.11365.1249A19.08381,19.08381,0,0,1,26.36282,16.138a18.67978,18.67978,0,0,1,8.3-.02217" fill="#fff"></path>
                                        <path d="M27.67124,9.41766S25.61475,7.03683,24.994,6.86122c-3.81929-1.03061-12.06942,4.651-17.33714,12.15746-2.13145,3.03717-5.18266,8.41566-3.72366,11.182a11.15871,11.15871,0,0,0,1.74345,1.67861,6.496,6.496,0,0,1,4.10374-2.61439A33.36,33.36,0,0,1,20.31317,14.48137a53.79185,53.79185,0,0,1,7.35807-5.06371" fill="#fff"></path>
                                    </g>

                                    <g class="brandLogo__freddie-fill">
                                        <path d="M14.20393,38.6051a.23038.23038,0,0,1,.02319.25959,1.13439,1.13439,0,0,1-1.07.53449,1.48858,1.48858,0,0,1-1.328-1.538,3.95469,3.95469,0,0,1,.2761-1.50142,1.403,1.403,0,0,0-.529-1.68837,1.427,1.427,0,0,0-1.091-.20429,1.39884,1.39884,0,0,0-.89259.61857,3.29879,3.29879,0,0,0-.32738.77164c-.01464.04755-.02645.08489-.0354.109-.12431.3353-.32249.43306-.45677.4151-.06348-.00878-.15077-.05123-.20672-.2047a2.95419,2.95419,0,0,1,.75912-2.47857,2.3805,2.3805,0,0,1,2.04358-.739,2.42374,2.42374,0,0,1,1.85559,1.35347,3.11052,3.11052,0,0,1-.22686,2.7449c-.03113.06959-.05962.13347-.08363.19123a1.13586,1.13586,0,0,0-.02624,1.04938.72037.72037,0,0,0,.60855.30939,1.33436,1.33436,0,0,0,.33226-.04694c.141-.03306.28668-.06694.37519.04449m34.75721.86776a14.918,14.918,0,0,1-1.01243,4.72183C44.99706,51.28918,37.953,55.23878,29.56153,54.98878c-7.82275-.23307-14.49472-4.37368-17.41482-11.12327a7.69092,7.69092,0,0,1-4.96918-2.00694A7.36067,7.36067,0,0,1,4.645,37.13776a8.10686,8.10686,0,0,1,.456-3.73347L3.46107,32.01082C-4.04265,25.65571,19.427-.51082,26.9336,6.05653c.03785.03306,2.55346,2.509,2.55977,2.5151.01-.0051,1.388-.59122,1.395-.59408,6.58386-2.73469,11.9264-1.41428,11.93311,2.949.00346,2.26918-1.43808,4.91408-3.74718,7.3149a7.34556,7.34556,0,0,1,1.8918,3.38775,10.70641,10.70641,0,0,1,.40937,2.74041c.04008.9247.08444,3.079.08891,3.11735.0586.01775.72515.20122.92719.25816a8.37148,8.37148,0,0,1,3.63954,1.80817,3.56037,3.56037,0,0,1,1.03055,2.00857,3.86821,3.86821,0,0,1-.68974,2.8104,9.87064,9.87064,0,0,1,.39553,1.0649c.19431.6249.33571,1.14347.35748,1.22041C47.83924,36.65755,48.96114,37.48245,48.96114,39.47286ZM15.8003,35.5798c-.51029-3.31286-2.74452-4.48041-4.26052-4.56368a4.59539,4.59539,0,0,0-1.13594.081c-2.70585.54755-4.23406,2.85633-3.93335,5.85633a6.06029,6.06029,0,0,0,5.54417,5.071,4.02516,4.02516,0,0,0,.77723-.05469C15.53437,41.50061,16.25239,38.51367,15.8003,35.5798Zm4.62492-21.03A53.44055,53.44055,0,0,1,27.735,9.49673S25.69227,7.121,25.07537,6.94592c-3.79418-1.02878-11.99049,4.641-17.22356,12.13163-2.11745,3.03082-5.14864,8.39816-3.69937,11.15857a11.09842,11.09842,0,0,0,1.73208,1.6751,6.45146,6.45146,0,0,1,4.077-2.60877A33.285,33.285,0,0,1,20.42522,14.5498Zm8.24636,26.21612a2.507,2.507,0,0,0,1.77074,1.85673,7.9735,7.9735,0,0,0,1.395.38c6.00176,1.03551,11.61266-2.40653,12.876-3.27347.09482-.0651.15748-.00163.08139.11327a2.00935,2.00935,0,0,1-.12371.17694c-1.54611,2.00041-5.70266,4.31694-11.11051,4.31612-2.35855-.00041-4.71587-.83388-5.5814-2.11449-1.34286-1.98714-.06654-4.88755,2.171-4.58531.00264.00041.76563.08715.98008.111A20.44025,20.44025,0,0,0,41.313,36.11224c3.05276-1.42142,4.206-2.98571,4.033-4.252a1.82239,1.82239,0,0,0-.52635-1.0353,6.58294,6.58294,0,0,0-2.88613-1.37123c-.48485-.13653-.81385-.22367-1.16829-.34081-.63012-.20817-.94162-.37572-1.01223-1.56429-.03072-.51979-.12106-2.33061-.15381-3.079-.05758-1.31122-.21466-3.10347-1.32353-3.84347a1.85369,1.85369,0,0,0-.94773-.30388,1.7886,1.7886,0,0,0-.56278.05531,2.97762,2.97762,0,0,0-1.47348.83551,5.07015,5.07015,0,0,1-3.84912,1.28878c-.77581-.03245-1.598-.15368-2.54044-.2098-.18332-.01082-.36746-.02224-.55118-.03163A5.06534,5.06534,0,0,0,23.456,26.70816c-.53959,3.72388,2.149,5.64817,2.92519,6.77735a.94255.94255,0,0,1,.21364.50633.8111.8111,0,0,1-.27631.53326v.00123a9.55589,9.55589,0,0,0-2.09221,8.95408,7.40444,7.40444,0,0,0,.39329,1.08612c1.9618,4.59837,8.04758,6.73959,13.99319,4.79184a14.58216,14.58216,0,0,0,2.25885-.95674,11.87435,11.87435,0,0,0,3.45907-2.59306,10.33241,10.33241,0,0,0,2.87982-5.6651c.179-1.18531-.083-1.64367-.44029-1.86429a1.31387,1.31387,0,0,0-.83054-.15224,11.4699,11.4699,0,0,0-.79086-2.7051,17.32336,17.32336,0,0,1-5.66259,2.82489A22.86524,22.86524,0,0,1,31.914,39.068c-1.64194-.13306-2.72823-.61388-3.13679.718a17.69976,17.69976,0,0,0,7.721.78775.13963.13963,0,0,1,.15321.12531.14918.14918,0,0,1-.08667.149S33.515,42.26837,28.67158,40.76592ZM19.73975,19.17143a18.918,18.918,0,0,1,6.69557-2.96837,18.47753,18.47753,0,0,1,8.24575-.02224c.095.02183.15565-.14327.07061-.191a10.64255,10.64255,0,0,0-4.55188-1.19674.08313.08313,0,0,1-.06511-.13286,4.64616,4.64616,0,0,1,.85678-.86224.086.086,0,0,0-.05758-.15367,12.05963,12.05963,0,0,0-5.44427,1.928.08387.08387,0,0,1-.12879-.08816,6.01049,6.01049,0,0,1,.576-1.4102.08086.08086,0,0,0-.10784-.11082,22.11786,22.11786,0,0,0-6.20217,5.08408A.0845.0845,0,0,0,19.73975,19.17143ZM35.54463,31.812a.79106.79106,0,0,0,1.03979-.1728c.15137-.293-.06842-.6904-.49116-.8878a.791.791,0,0,0-1.03979.1732C34.90189,31.2174,35.12189,31.6148,35.54463,31.812Zm1.29663-4.7514a3.58063,3.58063,0,0,0,.64021,1.457,4.08008,4.08008,0,0,1,.99558,0,3.08105,3.08105,0,0,0,.04863-1.7912c-.23894-1.0862-.56231-1.7436-1.23052-1.6414C36.62716,25.1874,36.60253,25.9744,36.84126,27.0606Zm1.42148,2.4952a.83885.83885,0,1,0,.60737.8202A.73678.73678,0,0,0,38.26274,29.5558Z"></path>
                                    </g>

                                    <g class="brandLogo__freddie-eye--winking">
                                        <path d="M27.16938,29.45873c-.1066-.015-.152-.0606-.1654-.121-.0414-.1874.2468-.4958.5506-.7184a3.20166,3.20166,0,0,1,3.1138-.3738,2.66774,2.66774,0,0,1,1.1744.9452c.1086.1772.1296.3146.0594.3866-.1094.1154-.3884-.0168-.8426-.216a3.71739,3.71739,0,0,0-1.756-.3782A19.46093,19.46093,0,0,0,27.16938,29.45873Zm4.527.932a1.72168,1.72168,0,0,0-1.5504-.5082,2.14273,2.14273,0,0,0-1.1272.4698.7232.7232,0,0,0-.28841.4504.138.138,0,0,0,.04521.1078.1425.1425,0,0,0,.0974.037,1.80393,1.80393,0,0,0,.4328-.12,3.768,3.768,0,0,1,1.9046-.1978c.2972.0334.4376.052.5028-.05A.16686.16686,0,0,0,31.69638,30.39073Z"></path>
                                    </g>

                                    <g class="brandLogo__freddie-eye">
                                        <path d="M30.85483,30.6631a3.9979,3.9979,0,0,0,.03119-2.045c-.24177-1.08787-.60735-1.70952-1.28489-1.60713s-.69509.97909-.47672,2.07153a3.98983,3.98983,0,0,0,.57616,1.40418c.53911.75237.90469.55765,1.15328.17644Z"></path>
                                    </g>
                                </g>

                                <g class="brandLogo__wordMark" transform="translate(58,11) scale(.18)">
                                    <path d="M90.23,114.58c-20.7,0-21.06,22.6-25.96,22.6-1.02,0-1.83-.9-1.83-2.14,0-1.65,.43-3.08,.43-5.75,0-8.11-5.71-14.71-17.68-14.71-10.16,0-17.6,5.09-22.14,14.5-2.3,4.77-2.1,8.09-4.43,8.09-.86,0-1.53-.81-1.53-1.98,0-3.46,3.05-6.62,3.05-14.05,0-1.93-.15-3.56-.46-4.89H0v76.34H26.72v-41.42c0-8.16,3.5-13.39,9.47-13.39,3.96,0,7.48,3.46,7.48,9.79v45.02h26.72v-41.42c0-9.17,4.24-13.39,9.47-13.39,4.38,0,7.48,4.05,7.48,9.79v45.02h26.41v-46.87c0-20.48-8.13-31.15-23.51-31.15Z"></path>
                                    <rect x="246.57" y="94.88" width="26.41" height="97.71"></rect>
                                    <path d="M281.69,153.51c0,25.97,16.81,40.92,38.63,40.92,12.51,0,22.07-4.95,27.94-9.77v-25.19c-5.94,4.06-15.08,8.7-24.89,8.7-12.24,0-18.63-5.08-18.63-13.89s7.37-13.74,18.17-13.74c9.78,0,18.75,3.89,25.34,8.4v-26.72c-5.58-4.15-15.43-7.79-27.94-7.79-23.42,0-38.63,14.64-38.63,39.09Z"></path>
                                    <path d="M406.43,114.73c-10.74,0-16.96,4.98-21.53,14.2-2.01,4.07-2.16,8.09-4.43,8.09-.85,0-1.53-.79-1.53-1.98,0-4.23,5.04-10.54,5.04-29.16,0-4.68-.46-8.29-1.37-10.84h-23.05v97.56h26.72v-41.09c0-7.7,4.05-13.57,10.23-13.57,4.6,0,7.79,3.74,7.79,9.79v44.87h26.72v-47.79c0-19.94-8.7-30.08-24.58-30.08Z"></path>
                                    <path d="M651.63,114.43c-11.81,0-17.84,6.73-21.21,12.95-2.67,4.92-3.06,9.65-5.35,9.65-1.12,0-1.68-.66-1.68-1.98,0-2.34,3.05-6.31,3.05-12.82,0-2.65-.21-4.63-.61-5.95h-20v95.88h26.87v-30.12c3.41,7.28,10.55,12.1,20.31,12.1,17.6,0,29.62-14.52,29.62-39.85,0-23.37-11.14-39.85-30.99-39.85Zm-7.18,62.14c-5.39,0-11.3-5.59-11.3-19.7,0-12.29,4.83-19.54,11.3-19.54,7.44,0,11.6,7.17,11.6,19.54,0,13.75-4.79,19.7-11.6,19.7Z"></path>
                                    <path d="M161.49,114.43c-13.8,0-26.44,3.41-35.22,7.78v22.11c10.22-5.52,20.7-9.61,29.89-9.61,9.84,0,14.01,5.19,13.42,12.02-3.97-.41-8.38-.58-13.73-.58-20.9,0-34,8.16-34,25.92,0,14.59,11.36,22.11,23.79,22.11s20.47-5.8,25.3-14.54c2.75-4.98,2.52-8.03,4.31-8.03,.88,0,1.49,.63,1.49,1.61,0,3.19-.91,5.05-.91,9.37,0,4.04,.53,7.44,1.37,9.91h19.21v-40.87c0-23.21-10.62-37.21-34.92-37.21Zm-9,60.99c-4.96,0-7.62-2.17-7.62-5.95,0-4.92,4.63-8.69,16.62-8.69,2.64,0,5.03,.09,7.2,.27-1.06,7.03-7.18,14.37-16.2,14.37Z"></path>
                                    <path d="M256.75,44.31V1.48h-18.39V42.12c0,10.07-6.74,16.8-15.59,16.8s-15.59-6.74-15.59-16.8V1.48h-18.36l.1,42.83c0,18.65,14.93,32.29,33.9,32.29s33.93-13.61,33.93-32.29Z"></path>
                                    <polygon points="327.77 75.12 346.13 75.12 346.13 18.68 368.04 18.68 368.04 1.48 305.84 1.48 305.84 18.68 327.77 18.68 327.77 75.12"></polygon>
                                    <rect x="275.61" y="1.51" width="18.36" height="73.64"></rect>
                                    <polygon points="136.66 75.12 155.02 75.12 155.02 18.68 176.92 18.68 176.92 1.48 114.72 1.48 114.72 18.68 136.66 18.68 136.66 75.12"></polygon>
                                    <polygon points="18.36 38.34 18.36 1.51 0 1.51 0 75.14 18.36 75.14 18.36 38.34"></polygon>
                                    <path d="M55.57,34.48c0-10.07,6.74-16.8,15.59-16.8s15.59,6.74,15.59,16.8v40.64h18.36l-.05-42.83C105.05,13.63,90.1,0,71.13,0S37.2,13.61,37.2,32.29v42.83h18.36V34.48Z"></path>
                                    <path d="M571.17,114.58c-20.7,0-21.06,22.6-25.96,22.6-1.02,0-1.83-.9-1.83-2.14,0-1.65,.43-3.08,.43-5.75,0-8.11-5.71-14.71-17.68-14.71-10.16,0-17.6,5.09-22.14,14.5-2.3,4.77-2.1,8.09-4.43,8.09-.86,0-1.53-.81-1.53-1.98,0-3.46,3.05-6.62,3.05-14.05,0-1.93-.15-3.56-.46-4.89h-19.7v76.34h26.72v-41.42c0-8.16,3.5-13.39,9.47-13.39,3.96,0,7.48,3.46,7.48,9.79v45.02h26.72v-41.42c0-9.17,4.24-13.39,9.47-13.39,4.38,0,7.48,4.05,7.48,9.79v45.02h26.41v-46.87c0-20.48-8.13-31.15-23.51-31.15Z"></path>
                                    <path d="M455.59,121.6c-5.6,0-10.03-.81-13.28-2.44v73.44h26.41V119.16c-3.43,1.51-7.51,2.44-13.13,2.44Z"></path>
                                    <path d="M455.44,94.43c-10.92,0-16.64,4.83-16.64,10.38,0,5.98,6.77,10.38,16.64,10.38s16.64-4.4,16.64-10.38c0-5.55-5.73-10.38-16.64-10.38Z"></path>
                                    <path d="M221.61,121.6c-5.6,0-10.03-.81-13.28-2.44v73.44h26.41V119.16c-3.43,1.51-7.51,2.44-13.13,2.44Z"></path>
                                    <path d="M221.46,94.43c-10.92,0-16.64,4.83-16.64,10.38,0,5.98,6.77,10.38,16.64,10.38s16.64-4.4,16.64-10.38c0-5.55-5.73-10.38-16.64-10.38Z"></path>
                                </g>
                            </svg>
                            {{-- <img src="images/logo-walmart.svg" class="h-40px xs-h-30px" alt="" /> --}}
                        </a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="https://sendgrid.com/" target="_blank">

                            <svg width="136" height="60" viewBox="0 0 136 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_591_3272)">
                                <path d="M18.2155 23.3079C19.0561 23.3079 19.7345 23.9879 19.7345 24.8304V31.4241C19.7345 32.2667 19.0561 32.9467 18.2155 32.9467H1.51895C0.678385 32.9467 0 32.2667 0 31.4241V14.6861C0 13.8436 0.678385 13.1636 1.51895 13.1636H8.09711C8.93768 13.1636 9.61606 13.8436 9.61606 14.6861V22.2948C9.61606 22.8519 10.071 23.3099 10.6287 23.3099H18.2195L18.2155 23.3079Z" fill="#51A9E3"></path>
                                <path d="M11.0443 13.2547H18.6351C19.1909 13.2547 19.6478 13.7107 19.6478 14.2698V21.8785C19.6478 22.721 20.3262 23.401 21.1667 23.401H27.7449C28.5854 23.401 29.2638 22.721 29.2638 21.8785V5.1385C29.2638 4.29595 28.5854 3.61597 27.7449 3.61597H11.0443C10.2038 3.61597 9.52539 4.29595 9.52539 5.1385V11.7322C9.52539 12.5748 10.2038 13.2547 11.0443 13.2547Z" fill="#51A9E3"></path>
                                <path d="M65.043 0.214107V2.61884C65.043 2.67435 65.0647 2.72788 65.1023 2.76951C65.1399 2.80916 65.1913 2.83097 65.2467 2.83097H69.137C69.1924 2.83097 69.2418 2.80916 69.2814 2.76951C69.319 2.72986 69.3407 2.67634 69.3407 2.61884V0.214107C69.3407 0.158598 69.317 0.105071 69.2814 0.0634391C69.2438 0.0237896 69.1924 0 69.137 0H65.2467C65.1339 0 65.043 0.0971411 65.043 0.214107Z" fill="#121C2D"></path>
                                <path d="M41.2447 6.99603H42.2574V10.6497C42.2574 13.2329 43.6379 14.4442 46.207 14.4442C47.1999 14.4442 48.173 14.236 48.8612 13.9049C48.8988 13.8851 48.9324 13.8554 48.9542 13.8177C48.9759 13.782 48.9878 13.7404 48.9878 13.6968V10.7508C48.9878 10.7171 48.9779 10.6854 48.9661 10.6557C48.9522 10.6239 48.9285 10.5982 48.9028 10.5784C48.8751 10.5605 48.8434 10.5486 48.8098 10.5446C48.7782 10.5446 48.7445 10.5447 48.7129 10.5546C48.3826 10.6795 48.0325 10.7449 47.6805 10.7469C46.9962 10.7469 46.6382 10.4554 46.6382 9.66443V6.99801H48.79C48.8434 6.99801 48.8949 6.97422 48.9305 6.93457C48.968 6.89492 48.9898 6.84139 48.9898 6.78588V4.24436L51.8912 14.0616C51.909 14.119 51.9466 14.1666 51.9941 14.2023C52.0415 14.238 52.0989 14.2578 52.1562 14.24H55.3544C55.4137 14.2578 55.471 14.238 55.5185 14.2023C55.564 14.1666 55.5996 14.119 55.6194 14.0616L56.99 9.71399L57.6842 11.9899L58.3171 14.0675C58.3349 14.125 58.3705 14.1726 58.4199 14.2083C58.4674 14.2439 58.5248 14.2638 58.5841 14.3252H61.804C61.8633 14.2638 61.9206 14.2439 61.9661 14.2083C62.0136 14.1726 62.0492 14.125 62.069 14.0675L65.0456 4.22057V14.1111C65.0475 14.1666 65.0693 14.2202 65.1049 14.2618C65.1425 14.3014 65.1939 14.3252 65.2493 14.3252H69.1396C69.2523 14.3252 69.3433 14.2301 69.3433 14.1131V3.79434C69.3433 3.73883 69.3196 3.6853 69.284 3.64367C69.2464 3.60402 69.195 3.58221 69.1416 3.58221H61.3194C61.3194 3.58221 61.2067 3.58816 61.1612 3.62384C61.1157 3.65953 61.0801 3.71107 61.0623 3.76856L60.0595 7.68196L60.0081 7.88417L58.7878 3.72891C58.77 3.67142 58.7344 3.62384 58.685 3.58816C58.6375 3.55247 58.5228 3.58023 58.5228 3.58023H55.475C55.475 3.58023 55.2495 3.61195 55.21 3.72693L54.0688 7.64628L54.0134 7.84849L53.962 7.64628L53.4774 5.7094L52.9929 3.77055C52.9751 3.71306 52.9414 3.66349 52.894 3.62583C52.8485 3.58816 52.7931 3.56833 52.7357 3.57825H46.5531V0.210029C46.5868 0.176327 46.5789 0.142625 46.565 0.112888C46.5492 0.0851333 46.5294 0.0613436 46.5037 0.0395364C46.476 0.0197117 46.4463 0.00583444 46.4147 -0.000112974C46.3831 -0.00407792 46.3514 -0.000112973 46.3217 0.00583444L42.5026 1.22109C42.4314 1.24488 42.3701 1.28849 42.3266 1.35193C42.2831 1.41339 42.2574 1.56406 42.2574 1.56406V3.58023H41.2447C41.1913 3.58023 41.1379 3.60204 41.1004 3.64169C41.0628 3.68134 41.041 3.73486 41.041 3.79037V6.77994C41.041 6.83545 41.0628 6.88897 41.1004 6.92862C41.1379 6.96827 41.1894 6.99206 41.2447 6.99206V6.99603Z" fill="#121C2D"></path>
                                <path d="M70.1523 0.20813V14.1053C70.1523 14.1608 70.1741 14.2143 70.2117 14.2559C70.2493 14.2956 70.3007 14.3194 70.3561 14.3194H74.2464C74.2998 14.3194 74.3512 14.2956 74.3908 14.2559C74.4283 14.2163 74.4501 14.1627 74.4501 14.1053V0.214078C74.4501 0.158568 74.4264 0.105042 74.3908 0.0634097C74.3532 0.0237603 74.3018 0.00195312 74.2464 0.00195312H74.2068H70.3561C70.2453 0.00195312 70.1563 0.0951293 70.1523 0.210113V0.20813Z" fill="#121C2D"></path>
                                <path d="M75.3418 0.214078V2.61881C75.3418 2.67432 75.3636 2.72785 75.4011 2.76948C75.4387 2.80913 75.4901 2.83292 75.5455 2.83292H79.4358C79.5486 2.83292 79.6376 2.73578 79.6396 2.61881V0.214078C79.6396 0.158568 79.6158 0.105042 79.5802 0.0634097C79.5426 0.0237603 79.4912 0.00195312 79.4358 0.00195312H75.5455C75.4921 0.00195312 75.4407 0.0237603 75.4011 0.0634097C75.3636 0.103059 75.3418 0.156586 75.3418 0.214078Z" fill="#121C2D"></path>
                                <path d="M79.4358 3.58228H79.3963H75.5455C75.4921 3.58228 75.4407 3.60408 75.4011 3.64373C75.3636 3.68338 75.3418 3.73691 75.3418 3.7944V14.1072C75.3418 14.1627 75.3636 14.2162 75.4011 14.2579C75.4387 14.2975 75.4901 14.3193 75.5455 14.3193H79.4358C79.5486 14.3193 79.6376 14.2242 79.6396 14.1072V3.7944C79.6396 3.73889 79.6178 3.68536 79.5802 3.64373C79.5426 3.60408 79.4912 3.58228 79.4358 3.58228Z" fill="#121C2D"></path>
                                <path d="M85.9427 3.29297C82.4994 3.29297 80.0449 5.87018 80.0449 8.86966V8.90931C80.0449 11.9088 82.4737 14.4463 85.8992 14.4483H85.9091C89.3346 14.4463 91.799 11.8731 91.8029 8.87561V8.82803C91.801 5.82855 89.3702 3.29297 85.9427 3.29297ZM87.6674 8.90931C87.6674 9.92235 86.9573 10.757 85.9823 10.757C85.0072 10.757 84.2616 9.92235 84.2616 8.86966V8.83199C84.2616 7.81895 84.9716 6.98433 85.9447 6.98433C86.9178 6.98433 87.6674 7.81895 87.6674 8.87164V8.91129V8.90931Z" fill="#121C2D"></path>
                                <path d="M47.0155 33.1171C44.3099 33.1171 42.7257 32.2349 41.4282 31.1109V28.9936C43.056 30.6034 44.925 31.44 46.9265 31.44C48.6195 31.44 49.5886 30.6252 49.5886 29.3445C49.5886 27.7347 48.0479 27.5583 46.2679 27.36C43.9796 27.0964 41.2305 26.7435 41.2305 23.744C41.2305 21.2302 43.2755 19.7751 45.9811 19.7751C48.6868 19.7751 50.271 20.6791 51.3489 21.5177V23.6132C49.9625 22.158 48.1369 21.4305 46.0484 21.4087C44.1576 21.4087 43.232 22.2909 43.232 23.5696C43.232 25.0465 44.838 25.2666 46.62 25.4648C48.93 25.7285 51.6357 26.127 51.6357 29.1919C51.6357 31.551 49.8319 33.1171 47.0175 33.1171H47.0155ZM60.2589 33.1171C55.9473 33.1171 53.3306 30.7362 53.3306 26.6127V26.3034C53.3306 22.2691 55.8385 19.7771 59.3135 19.7771C62.5907 19.7771 64.9443 21.7834 64.9443 25.9723V26.9636H55.3974C55.5735 30.1375 57.7075 31.3944 60.6109 31.3944C62.5472 31.3944 63.8011 30.6886 64.6793 29.9611V31.8127C63.9752 32.3638 62.6777 33.1132 60.2589 33.1132V33.1171ZM59.2917 21.4107C57.2012 21.4107 55.706 22.7112 55.4212 25.4232H62.8775C62.745 22.733 61.4258 21.4107 59.2917 21.4107ZM67.0922 32.8971V19.9991H69.1155V24.3427C69.5545 21.0796 71.206 19.7791 73.6466 19.7791C76.9456 19.7791 78.5298 21.829 78.5298 25.3359V32.8991H76.4847V25.7562C76.4847 23.1334 75.4504 21.4781 72.899 21.4781C70.7649 21.4781 69.1372 23.1096 69.1372 26.24V32.8991H67.0922V32.8971ZM86.1404 33.1171C82.8631 33.1171 80.6203 30.6926 80.6203 26.5908V26.2816C80.6203 22.2254 82.9521 19.7771 86.2076 19.7771C88.8262 19.7771 90.4302 21.2322 90.9583 24.1861V15.5881H93.0033V32.8951H90.9583V28.7061C90.452 31.66 88.846 33.1152 86.1404 33.1152V33.1171ZM86.8445 31.4201C89.3741 31.4201 91.0235 29.7232 91.0235 26.5036V26.349C91.0235 23.2187 89.3523 21.4325 86.8445 21.4325C84.3366 21.4325 82.7089 23.2187 82.7089 26.349V26.5036C82.7089 29.7013 84.4256 31.4201 86.8445 31.4201ZM100.114 37.9028C95.9127 37.9028 94.637 36.8442 94.637 35.2562C94.637 33.8229 95.7366 32.7861 98.3098 32.6096C98.3315 32.6096 98.3533 32.5878 98.3533 32.566C98.3533 32.5442 98.3315 32.5224 98.3098 32.5224C96.0452 32.5224 95.2086 31.9713 95.2086 30.869C95.2086 29.854 96.2647 28.9064 98.8378 28.8846C98.8596 28.8846 98.8813 28.8628 98.8813 28.841C98.8813 28.8191 98.8596 28.7973 98.8378 28.7973C96.595 28.4663 95.2738 26.8783 95.2738 24.4756C95.2738 21.6525 97.4296 19.7791 100.596 19.7791C102.07 19.7791 102.774 19.9991 103.719 19.9991H107.129V21.6743H104.512C105.349 22.2691 105.875 23.4169 105.875 24.6738C105.875 27.144 103.96 29.1264 100.705 29.1264H99.9118C98.1515 29.1264 97.2279 29.5011 97.2279 30.1633C97.2279 30.869 97.843 30.9781 100.177 30.9781H102.53C105.543 30.9781 107.062 31.7492 107.062 33.9537C107.062 36.1583 105.171 37.9008 100.418 37.9008H100.11L100.114 37.9028ZM100.598 27.6515C102.732 27.6515 103.897 26.3074 103.897 24.543C103.897 22.6913 102.73 21.2362 100.598 21.2362C98.466 21.2362 97.2773 22.5149 97.2773 24.543C97.2773 26.3074 98.4423 27.6515 100.598 27.6515ZM100.555 36.3169C103.854 36.3169 105.064 35.5239 105.064 34.267C105.064 33.0755 104.097 32.7682 102.117 32.7682H100.028C97.5206 32.7682 96.6623 33.6722 96.6623 34.7091C96.6623 35.6567 97.6076 36.3188 100.313 36.3188H100.555V36.3169ZM108.84 32.8991V20.0011H110.863V24.5648C111.237 21.0816 112.799 19.7811 115.153 19.7811C115.857 19.7811 116.428 19.9139 116.78 20.0903V22.053C116.296 21.7219 115.57 21.5673 114.888 21.5673C112.667 21.5673 110.885 23.177 110.885 26.5492V32.8991H108.84ZM119.672 18.5242C118.924 18.5242 118.353 18.1277 118.353 17.2455C118.353 16.3197 118.924 15.945 119.672 15.945C120.465 15.945 120.991 16.3197 120.991 17.2455C120.991 18.1713 120.463 18.5242 119.672 18.5242ZM118.659 32.8991V20.0011H120.704V32.8991H118.659ZM128.408 33.1191C125.131 33.1191 122.888 30.6946 122.888 26.5928V26.2836C122.888 22.2274 125.22 19.7791 128.475 19.7791C131.092 19.7791 132.698 21.2342 133.226 24.1881V15.5901H135.271V32.8971H133.226V28.7081C132.72 31.662 131.114 33.1171 128.408 33.1171V33.1191ZM129.112 31.4221C131.642 31.4221 133.291 29.7251 133.291 26.5056V26.351C133.291 23.2206 131.62 21.4344 129.112 21.4344C126.604 21.4344 124.976 23.2206 124.976 26.351V26.5056C124.976 29.7033 126.691 31.4221 129.112 31.4221Z" fill="#121C2D"></path>
                                </g>
                                <defs>
                                <clipPath id="clip0_591_3272">
                                <rect width="135.317" height="38" fill="white"></rect>
                                </clipPath>
                                </defs>
                                </svg>
                            {{-- <img src="images/logo-logitech.svg" class="h-40px xs-h-30px" alt="" /> --}}
                        </a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="https://moose.com.pk/" target="_blank" style="font-size: 23px; font-weight: 700;">Moose Commerce</a>
                    </div>
                    <!-- end client item -->

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
