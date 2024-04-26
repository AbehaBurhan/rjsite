@extends('frontend.layout.master')

@section('title', 'Blog Detail')

@section('content')
  <!-- start page title -->
  <section class="pb-0 ipad-top-space-margin md-pt-0">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-xl-6 col-lg-8 text-center position-relative page-title-double-large">
                <div class="d-flex flex-column justify-content-center extra-very-small-screen">
                    @if($blog)
                    <h1 class="text-dark-gray alt-font ls-minus-1px fw-700">{{ $blog->title }}</h1>
@endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start section -->
<section class="pt-0 right-side-bar">
    <div class="container-fluid px-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 blog-standard md-mb-50px sm-mb-40px">
                <!-- start blog item -->
                @if ($blog)
                <div class="col-12 mb-40px">
                    <div class="card border-0 no-border-radius box-shadow-extra-large">
                        <div class="blog-image">
                            @if (isset($blog->images) && count($blog->images) > 0)
                            @isset($blog->images[0])
                            <img src="{{ asset('admin/assets/img/uploads/' . $blog->images[0]) }}" alt="" class="d-block m-auto"/>
                            @endisset
                            @endif
                        </div>
                        <div class="card-body p-9 bg-white">
                            <div class="entry-meta mb-20px fs-15">
                                <span><i class="feather icon-feather-calendar"></i>{{ $blog->created_at->format('F d , Y') }}</span>
                            </div>
                            <a class="text-dark-gray card-title mb-20px fw-600 fs-24 d-block">{{ $blog->title }}</a>
                            <p class="text-medium-gray mb-20px">{{ $blog->detail_description }}</p>
                        </div>
                        <div class="check-out-box" style="padding-bottom: 35px;">
                            @if (isset($blog->images) && count($blog->images) > 0)
                                @foreach ($blog->images as $index => $image)
                                    @if ($index != 0)
                                        <div class="box">
                                            <img src="{{ asset('admin/assets/img/uploads/' . $image) }}" alt="box-img">

                                        </div>
                                    @endif
                                @endforeach
                            @else
                                <div class="box-left">
                                    "No Images available"
                                </div>
                            @endif
                        </div>

                    </div>

                </div>
                @else
                        <p>No blog details found</p>
                <!-- end blog item -->
                @endif

            </div>
            <!-- start sidebar -->
            <aside class="col-12 col-xl-4 col-lg-4 col-md-7 ps-55px xl-ps-50px lg-ps-15px sidebar">
                <div class="mb-15 md-mb-50px xs-mb-35px">
                    <div class="fw-600 fs-19 lh-22 ls-minus-05px text-dark-gray border-bottom border-color-dark-gray border-2 d-block mb-30px pb-15px position-relative">Recent posts</div>
                    <ul class="popular-post-sidebar position-relative">
                        @if ($recentPosts->count() > 0)
                        @foreach ($recentPosts as $recentPost)

                        <li class="d-flex align-items-center">
                            @if (isset($blog->images) && count($blog->images) > 0)
                            @isset($blog->images[0])
                            <figure>
                                <a href="{{ route('blog.detail', $recentPost->slug) }}"><img src="{{ asset('admin/assets/img/uploads/' . $recentPost->images[0]) }}" alt=""></a>
                            </figure>
                            @endisset
                            @endif
                            <div class="col media-body">
                                <a href="{{ route('blog.detail', $recentPost->slug) }}" class="fw-600 fs-17 text-dark-gray d-inline-block mb-10px">{{ $recentPost->title }}</a>
                                <div><a href="{{ route('blog.detail', $recentPost->slug) }}" class="d-inline-block fs-15">{{ $recentPost->created_at->format('F d , Y') }}</a></div>
                            </div>
                        </li>

                        @endforeach
                        @else
                            <li>
                                <p>No recent posts available.</p>
                            </li>
                        @endif
                    </ul>
                </div>



            </aside>
            <!-- end sidebar -->
        </div>
    </div>
</section>
<!-- end section -->
@endsection
