@extends('frontend.layouts.app')
@section('title', ucfirst($category->title . ' - What We Offer - '))
@section('content')
    <!-- Breadcrumb Area  -->
    <div class="breadcrumb-area dark-bg">
        <div class="breadcrumb-inner">
            <h2 class="text-white text-capitalize">{{ str_limit($category->title, 90) }}</h2>
            <h6 class="text-white text-capitalize"><a href="{{ url('/') }}">Home</a> / <a href="{{ route('latest-offers') }}">What We
                    Offer</a> /
                {{ str_limit($category->title, 90) }}</h6>
        </div>
    </div>
    <section>
        <div id="blog-page" class="blog-section section-padding py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row offers">
                            @forelse($offers as $offer)
                                <div class="col-md-6 mb-4">
                                    <div class="single-blog-item h-100 mb-0">

                                        <div class="blog-content red pb-2">
                                            <h5><a href="{{ route('offer-show', ['category' => $category->slug, 'offer' => $offer->slug]) }}"
                                                    class="mb-2">{{ str_limit($offer->title, 90) }}</a>
                                            </h5>
                                            <div class="mt-2">
                                                <a href="{{ route('offer-show', ['category' => $category->slug, 'offer' => $offer->slug]) }}"
                                                    class="main-btn-custom-2">Read More</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @empty
                                <li>No Offers Found</li>
                            @endforelse


                        </div>
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-4">
                        <div class="blog-category px-0 py-0 my-0">
                            <div class="sidebar">
                                <h5 class="my-0 text-white">Other Categories</h5>
                            </div>
                            <div>
                                @forelse ($relatedCategories as $rCategory)
                                    <a href="{{ route('offer-index', $rCategory->slug) }}"
                                        class="text-capitalize px-2 mb-0 mt-2 pb-2">{{ str_limit($rCategory->title, 90) }}</a>
                                @empty
                                @endforelse
                            </div>
                        </div>

                    </div>
                </div>
            </div>

    </section>






@endsection
