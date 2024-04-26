@extends('frontend.layout.master')

@section('title', 'Case Study')

@section('content')

          <!-- start page title -->
          <section class="pb-0 ipad-top-space-margin md-pt-0">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-xl-6 col-lg-8 text-center position-relative page-title-double-large">
                        <div class="d-flex flex-column justify-content-center extra-very-small-screen">
                            <h1 class="text-dark-gray alt-font ls-minus-1px fw-700">Top Case Studies</h1>
                            <h2 class="text-dark-gray d-inline-block fw-400 ls-0px w-80 xs-w-100 mx-auto">Reviews Junction is the trusted choice for top brands and retailers to seamlessly gather, showcase, and distribute customer ratings and reviews.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section class="pt-0 xl-ps-2 xl-pe-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                            <li class="grid-sizer"></li>
                            @if ($casestudies->count() > 0)
                            @foreach ($casestudies as $casestudy)
                            <!-- start blog item -->
                            <li class="grid-item">
                                <div class="card border-0 border-radius-4px box-shadow-extra-large box-shadow-extra-large-hover">
                                    <div class="blog-image">
                                        @if (isset($casestudy->images) && count($casestudy->images) > 0)
                                        @isset($casestudy->images[0])
                                        <a href="{{ route('casestudy.detail', $casestudy->slug) }}" class="d-block"><img src="{{ asset('admin/assets/img/uploads/' . $casestudy->images[0]) }}" alt="" /></a>
                                        @endisset
                                        @endif
                                    </div>
                                    <div class="card-body p-12">
                                        <a href="{{ route('casestudy.detail', $casestudy->slug) }}" class="card-title mb-15px fw-600 fs-17 lh-26 text-dark-gray text-dark-gray-hover d-inline-block">{{ $casestudy->title }}</a>
                                        <p>{{ Str::limit($casestudy->description, 100) }}</p>
                                        <div class="author d-flex align-items-center position-relative overflow-hidden fs-14 text-uppercase">

                                            <div class="like-count">
                                                <a href="{{ route('casestudy.detail', $casestudy->slug) }}"><span class="text-dark-gray align-middle fw-600">Learn more</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            @endforeach
                        @else
                        <p>No Case Studies found.</p>
                        @endif
                        </ul>
                    </div>
                    <div class="col-12 mt-4 d-flex justify-content-center">
                        {{ $casestudies->links('vendor.pagination.bootstrap-5') }}
                        {{-- <ul class="pagination pagination-style-01 fs-13 fw-500 mb-0">
                            <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-left fs-18 d-xs-none"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">01</a></li>
                            <li class="page-item active"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                            <li class="page-item"><a class="page-link" href="#">04</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-right fs-18 d-xs-none"></i></a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

@endsection
