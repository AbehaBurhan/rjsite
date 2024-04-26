@extends('frontend.layout.master')

@section('title', 'Blog')

@section('content')
    <!-- start page title -->
    <section class="pb-0 ipad-top-space-margin md-pt-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-xl-6 col-lg-8 text-center position-relative page-title-double-large">
                    <div class="d-flex flex-column justify-content-center extra-very-small-screen">
                        <h1 class="text-dark-gray alt-font ls-minus-1px fw-700">RJ Blogs</h1>
                        <h2 class="text-dark-gray d-inline-block fw-400 ls-0px w-80 xs-w-100 mx-auto">Get the latest news and insights from the team at Reviews Junction.</h2>
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
                    <ul class="blog-grid blog-wrapper grid-loading grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                        <li class="grid-sizer"></li>
                        <!-- start blog item -->
                        @if ($blogs->count() > 0)
                        @foreach ($blogs as $blog)
                        <li class="grid-item">
                            <div class="card border-0 border-radius-4px box-shadow-extra-large box-shadow-extra-large-hover">
                                <div class="blog-image">
                                    @if (isset($blog->images) && count($blog->images) > 0)
                                    @isset($blog->images[0])
                                    <a href="{{ route('blog.detail', $blog->slug) }}" class="d-block"><img src="{{ asset('admin/assets/img/uploads/' . $blog->images[0]) }}" alt="" /></a>
                                    @endisset
                                    @endif

                                </div>
                                <div class="card-body p-12">
                                    <a href="{{ route('blog.detail', $blog->slug) }}" class="card-title mb-15px fw-600 fs-17 lh-26 text-dark-gray text-dark-gray-hover d-inline-block">{{ $blog->title }}</a>
                                    <p>{{ Str::limit($blog->description, 200) }}</p>
                                    <div class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase">
                                        <div class="me-auto">
                                            <span class="blog-date fw-500 d-inline-block">{{ $blog->created_at->format('F d , Y') }}</span>
                                            <div class="d-inline-block author-name"><a href="{{ route('blog.detail', $blog->slug) }}" class="text-dark-gray text-dark-gray-hover text-decoration-line-bottom fw-600">{{ $blog->created_at->format('F d , Y') }}</a></div>                                        </div>
                                        <div class="like-count">
                                            <a href="{{ route('blog.detail', $blog->slug) }}"><span class="text-dark-gray align-middle fw-600">Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                        @else
                        <p style="text-align: center">No blogs found.</p>
                        @endif
                    </ul>
                </div>
                <div class="col-12 mt-4 d-flex justify-content-center">
                    {{ $blogs->links('vendor.pagination.bootstrap-5') }}
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
