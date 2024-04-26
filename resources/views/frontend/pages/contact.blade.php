@extends('frontend.layout.master')

@section('title', 'Contact')

@section('content')
    <!-- start banner -->
    <section class="p-0 top-space-margin position-relative overflow-hidden">
        <div class="container-fluid p-0 h-100 position-relative">
            <div class="row g-0">
                <div class="col-xl-4 col-lg-5 d-flex justify-content-center align-items-center ps-10 xxl-ps-6 xl-ps-4 md-ps-4 sm-ps-0 position-relative order-2 order-lg-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="vertical-title-center align-items-center justify-content-center flex-shrink-0 w-75px sm-w-50px">
                        <h1 class="title fs-15 alt-font text-dark-gray fw-700 text-uppercase ls-1px text-uppercase d-flex w-auto align-items-center m-0" data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["contact us"], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'></h1>
                    </div>
                    <div class="border-start border-color-extra-medium-gray ps-40px sm-ps-20px position-relative z-index-9">
                        <h2 class="text-dark-gray fw-600 alt-font outside-box-right-10 xl-outside-box-right-15 lg-outside-box-right-20 md-me-0 sm-mb-0 ls-minus-3px">We're here to answer any questions you may have.</h2>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 position-relative one-half-screen order-1 order-lg-2 md-mb-50px">
                    <div class="overflow-hidden position-relative">
                        <div class="w-100" data-anime='{ "effect": "slide", "direction": "lr", "color": "#f7f7f7", "duration": 1000, "delay": 0 }'>
                            <img src="{{ asset('images/contact.jpg') }}" alt="" class="w-100 liquid-parallax" data-parallax-liquid="true" data-parallax-position="top" data-parallax-scale="1.05">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- start section -->
    <section>
        <div class="container">
            <div class="row" data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-md-10 sm-mb-30px">
                    <span class="fs-30 alt-font ls-minus-05px fw-700 text-dark-gray">Pakistan</span>
                    <p class="w-70 mb-10px lg-w-90">1-A 2nd Floor, Opposite Fazal Apartments, Faiz Road, Old Muslim Town, Lahore 54000, Pakistan</p>
                    <div class="separator-line-1px bg-extra-medium-gray w-70 mt-20px mb-20px md-w-100"></div>
                    <div class="d-block">
                        <span class="text-dark-gray fw-600">E:</span>
                        <a href="mailto:info@reviewsjunction.app">info@reviewsjunction.app</a>
                    </div>
                    <div class="d-block mb-5px">
                        <span class="text-dark-gray fw-600">T:</span>
                        <a href="tel:+92 42 3544 1050">+92 42 3544 1050</a>
                    </div>
                    <a href="https://maps.app.goo.gl/mwhMV5W85bKEq3YB9" target="_blank" class="fs-14 text-dark-gray text-uppercase fw-600">
                        <span class=""><i class="feather icon-feather-map-pin fs-14 me-5px"></i>View on google map</span>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="p-0 mb-5">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xl-6 col-lg-7 cover-background md-h-500px sm-h-400px md-mb-50px" style="background-image:url('https://craftohtml.themezaa.com/images/demo-branding-agency-contact-01.jpg')">
                    <div class="position-absolute text-center blur-box right-30px bottom-30px sm-right-15px sm-bottom-15px pt-35px pb-35px ps-45px pe-45px sm-p-20px bg-white-transparent counter-style-04 d-flex align-items-center border-radius-6px">
                        <h2 class="vertical-counter d-inline-flex alt-font text-dark-gray fw-700 mb-0 ls-minus-2px" data-text="+" data-to="40"></h2>
                        <span class="w-180px text-dark-gray text-start fw-500 lh-24 ms-15px sm-ms-10px">Very satisfied clients around the worldwide.</span>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-5 col-lg-5 position-relative">
                    <div class="contact-form-style-03 position-relative ps-15 pe-15 xxl-ps-10 xxl-pe-10 lg-ps-5 lg-pe-5 overflow-hidden last-paragraph-no-margin" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="mb-10px">
                            <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                            <span class="text-gradient-base-color fs-15 alt-font fw-700 ls-05px text-uppercase d-inline-block align-middle">Get in touch with us</span>
                        </div>
                        <h2 class="text-dark-gray alt-font fw-600 w-90 xxl-w-100 ls-minus-2px">We'd love to hear from you!</h2>
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    @if(Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <form id="contactForm" action="{{ route('contact.mail.send') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <input class="form-control" type="text" name="name" placeholder="Your name*" required>
                        </div>
                        <div class="form-group mb-3">
                            <input class="form-control" type="email" name="email" placeholder="Your email address*" required>
                        </div>
                        <div class="form-group mb-3">
                            <textarea class="form-control" name="comment" rows="3" placeholder="Your message"></textarea>
                        </div>
                        <input type="hidden" name="redirect" value="">
                        <button type="submit" class="btn btn-dark btn-block">Send message</button>
                    </form>
                    <div id="formResults" class="mt-3 d-none"></div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->

    <!-- end section -->
    <!-- start section -->
    <section class="p-0">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.2075525888768!2d74.32154847442092!3d31.518458974214774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391905fc5a67a641%3A0x2b8f4c6ddb29fd27!2sDevelopify%20Solutions!5e0!3m2!1sen!2s!4v1710742266377!5m2!1sen!2s" style="width: 100%;" height="300px;" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
