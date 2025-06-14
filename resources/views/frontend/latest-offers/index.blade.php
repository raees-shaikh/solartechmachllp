@extends('frontend.layouts.app')
@section('title', 'What We Offer - ')
@section('content')
    <!-- Breadcrumb Area  -->
    <div class="breadcrumb-area dark-bg">
        <div class="breadcrumb-inner">
            <h2 class="text-white">What We Offer</h2>
            <h6 class="text-white"><a href="{{ url('/') }}">Home</a> /
                What We Offer</h6>
        </div>
    </div>

    <div class="container px-0">
        <!-- Blog Section  -->


        <div class="blog-page blog-area section-padding py-3 px-0">
            <div class="container">
                <div class="row mt-4 latest">


                    @forelse ($categories as $cat)
                        <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft mb-4" data-wow-delay=".2s">
                            {{-- <div class="single-blog-item h-100 mb-0">

                                <div class="blog-content pb-2">
                                    <h5><a href="{{ route('offer-index', $cat->slug) }}"
                                            class="mb-2 mb-md-3">{{ str_limit($cat->title, 90) }}</a>
                                    </h5>
                                    <div class="mt-5 pt-3">
                                        <a href="{{ route('offer-index', $cat->slug) }}" class="main-btn-custom">Read
                                            More</a>
                                    </div>
                                </div>

                            </div> --}}
                                                                     <a class="card1 h-100" href="{{ route('offer-index', $cat->slug) }}">
    <h5>{{ str_limit($cat->title, 90) }}</h5>

    <div class="go-corner" href="{{ route('offer-index', $cat->slug) }}">
      <div class="go-arrow">
        →
      </div>
    </div>
  </a>
                        </div>
                    @empty
                        <div class="col-md-12 text-center">
                            <strong>No Categories found</strong>
                        </div>
                    @endforelse


                </div>
            </div>
        </div>
    </div>
    <div class="text-center justify-content-center mx-auto mt-3 pb-5">
        <ul class="pagination  mx-auto d-block">
            <li class="page-item "> {{ $categories->onEachSide(0)->links('pagination::bootstrap-4') }}</li>
        </ul>
    </div>




@endsection
