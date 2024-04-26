@extends('frontend.layout.master')

@section('title', 'Case Study Detail')

@section('content')

 <!-- start section -->
 <!-- end section -->
 <!-- start section -->
 @if ($casestudy)
 <section class="p-0" style="margin-top: 380px">
     <div class="container-fluid">
         <div class="row justify-content-center">
             <div class="col-lg-10 overlap-section text-center">
                 <div class="p-4 box-shadow-extra-large border-radius-4px bg-white text-center">
                     <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px mb-15px">{{ $casestudy->title }}</h3>
                     <div class="lg-20px sm-mb-0">
                        <a href="#" class="text-dark-gray">Last Updated on {{ $casestudy->created_at->format('F d , Y') }}</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- end section -->

 <!-- start section -->
 <section class="pb-0 pt-3">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-9 dropcap-style-01" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                 <p class="mb-6">{{ $casestudy->description }}</p>
             </div>
         </div>
     </div>
 </section>
 <!-- end section -->
 <!-- start section -->
 <section class="half-section" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
     <div class="container">
         <div class="row">
             <div class="col-12 position-relative">
                @if (isset($casestudy->images) && count($casestudy->images) > 0)
                @isset($casestudy->images[0])
                 <img src="{{ asset('admin/assets/img/uploads/' . $casestudy->images[0]) }}" alt="" class="border-radius-5px">
                @endisset
                @endif
             </div>
         </div>
     </div>
 </section>
 <!-- end section -->
 <!-- start section -->
 <section class="py-0">
     <div class="container">
         <div class="row">
             <div class="col-lg-9 last-paragraph-no-margin" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <p>{!! $casestudy->detail_description !!}</p>
                 {{-- <h6 class="alt-font fw-500 text-dark-gray ls-minus-05px mb-15px">Success is the result of perfection and hard work</h6>
                 <p class="mb-5">Lorem ipsum dolor sit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                 <h6 class="alt-font fw-500 text-dark-gray ls-minus-05px mb-15px">It is better to fail in originality than to succeed in imitation</h6>
                 <p>Lorem ipsum dolor sit sed do eiusmod tempor incididunt ut labore enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p> --}}
             </div>
         </div>
     </div>
 </section>
 <!-- end section -->

 <!-- start section -->
 <section class="bg-solitude-blue position-relative sm-pb-20px">
     <div class="container">
         <div class="row justify-content-center mb-1">
             <div class="col-lg-7 text-center">
                 <span class="bg-white box-shadow-quadruple-large text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-25px" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "delay": 500, "staggervalue": 100, "easing": "easeOutQuad" }'>You may also like</span>
                 <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "delay": 500, "staggervalue": 100, "easing": "easeOutQuad" }'>More Case Studies</h3>
             </div>
         </div>
         <div class="row">
             <div class="col-12 px-0">
                 <ul class="blog-classic blog-wrapper grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-double-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>

                     <li class="grid-sizer"></li>
                     <!-- start blog item -->
                     @if ($recentCasestudies->count() > 0)
                    @foreach ($recentCasestudies as $recentCasestudy)

                     <li class="grid-item">
                         <div class="card bg-transparent border-0 h-100">
                             <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                @if (isset($recentCasestudy->images) && count($recentCasestudy->images) > 0)
                                @isset($recentCasestudy->images[0])
                                 <a href="{{ route('casestudy.detail', $recentCasestudy->slug) }}"><img src="{{ asset('admin/assets/img/uploads/' . $recentCasestudy->images[0]) }}" alt="" /></a>
                                @endisset
                                @endif
                             </div>
                             <div class="card-body px-0 pb-30px pt-30px xs-pb-15px last-paragraph-no-margin">
                                 <span class="fs-13 text-uppercase mb-5px d-block"><a href="{{ route('casestudy.detail', $recentCasestudy->slug) }}" class="blog-date">{{ $recentCasestudy->created_at->format('F d , Y') }}</a></span>
                                 <a href="{{ route('casestudy.detail', $recentCasestudy->slug) }}" class="card-title mb-0 fw-500 fs-18 lh-30 text-dark-gray d-inline-block">{{ $recentCasestudy->title }}</a>
                                 <a href="{{ route('casestudy.detail', $recentCasestudy->slug) }}" ><p>{{ $recentCasestudy->description }}</p></a>
                             </div>
                         </div>
                     </li>
                     @endforeach
                        @else
                            <li>
                                <p>No recent case studies available.</p>
                            </li>
                        @endif
                     <!-- end blog item -->
                 </ul>
             </div>
         </div>
     </div>
 </section>
 <!-- end section -->
    @else
       <p>No blog details found</p>
                <!-- end blog item -->
    @endif


@endsection
