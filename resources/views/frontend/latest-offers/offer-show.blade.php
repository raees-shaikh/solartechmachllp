@extends('frontend.layouts.app')
@section('title', ucfirst($offer->title . ' - ' . $category->title . ' - What We Offer - '))
@section('content')
    <!-- Breadcrumb Area  -->
    <div class="breadcrumb-area dark-bg">
        <div class="breadcrumb-inner">
            <h2 class="text-white text-capitalize">{{ str_limit($offer->title, 90) }}</h2>
            <h6 class="text-white text-capitalize"><a href="{{ url('/') }}">Home</a> / <a href="{{ route('latest-offers') }}"> What We
                    Offer</a> /
                <a href="{{ route('offer-index', $category->slug) }}">
                    {{ str_limit($category->title, 90) }}
                </a> /
                {{ str_limit($offer->title, 90) }}
            </h6>
        </div>
    </div>
    <section>
        <div id="blog-page" class="blog-section section-padding py-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="mb-3 blog-title-fs text-capitalize">
                            {{ $offer->title }}
                        </h2>
                        <div class="single-blog-wrap">
                            {{-- @if ($offer->image)
                                <img src="{{ asset('storage/images/offers/' . $offer->image) }}"
                                    style="max-height: 400px;object-fit: contain;" alt="">
                            @endif --}}

                            {{-- <h3 class="mb-2">{{$offer->title}}</h3> --}}
                            <p>
                                {!! $offer->body !!}
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-lg-0 mt-4">
                        <div class="blog-category px-0 py-0 my-0">
                            <div class="sidebar">
                                <h5 class="my-0 text-white">Related Offers</h5>
                            </div>
                            @forelse ($relatedOffers as $ro)
                                <div>
                                    <a href="{{ route('offer-show', ['category' => $category->slug, 'offer' => $ro->slug]) }}"
                                        class="text-capitalize px-2 mb-0 mt-2 pb-2">{{ str_limit($ro->title, 90) }}</a>
                                </div>
                            @empty
                            @endforelse


                        </div>

                    </div>
                </div>
            </div>

    </section>






@endsection
