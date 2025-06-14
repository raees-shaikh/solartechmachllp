@extends('frontend.layouts.app')
@section('title', ucfirst($product->title) . ' - ')
@section('content')

    <div class="breadcrumb-area dark-bg">
        <div class="breadcrumb-inner">
            <h2 class="text-white text-capitalize">{{ str_limit($product->title, 90) }}</h2>
            <h6 class="text-white text-capitalize"><a href="{{ url('/') }}">Home</a> / <a
                    href="{{ route('frontend.product.index') }}" class="">Products</a> /
                {{ str_limit($product->title, 90) }} </h6>
        </div>
    </div>
    <section>

        <div id="blog-page" class="blog-section section-padding py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="mb-3 blog-title-fs text-capitalize">{{ $product->title }}</h2>
                        <div class="single-blog-wrap">
                            {{-- @if ($product->image)
                                <img src="{{ asset('storage/images/products/' . $product->image) }}"
                                    style="max-height: 450px;object-fit: contain;" alt="">
                            @endif --}}
                            <h3 class="mb-2">Technical Description</h3>
                            <p>{!! json_decode($product->description) !!} </p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-4">
                        <div class="blog-category px-0 py-0 my-0">
                            <div class="sidebar">
                                <h5 class="my-0 text-white">Latest Products</h5>
                            </div>
                            <div>
                                @foreach ($latestProducts as $latestProduct)
                                    <a href="{{ route('frontend.product.show', $latestProduct->slug) }}"
                                        class="text-capitalize px-2 mb-0 mt-2 pb-2 {{ URL::current() == route('frontend.product.show', $latestProduct->slug) ? 'active' : '' }}">
                                        {{ str_limit($latestProduct->title, 90) }}
                                    </a>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
{{--
            @if ($medias->count())
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="cont">
                                <div class="page-head">
                                    <h2 class="text-center mb-4">Gallery</h2>

                                    <div class="demo-gallery text-center">
                                        <ul id="lightgallery" class="px-0">

                                            @forelse ($medias as $media)
                                                <li data-responsive="{{ asset('storage/images/products/gallery/' . $media->filename) }} 375, {{ asset('storage/images/products/gallery/' . $media->filename) }}480, {{ asset('storage/images/products/gallery/' . $media->filename) }}800"
                                                    data-src="{{ asset('storage/images/products/gallery/' . $media->filename) }}">
                                                    <a href="">
                                                        <img class="img-responsive"
                                                            src="{{ asset('storage/images/products/gallery/' . $media->filename) }}">
                                                        <div class="demo-gallery-poster">
                                                            <img
                                                                src="{{ asset('storage/images/products/gallery/' . $media->filename) }}">
                                                        </div>
                                                    </a>
                                                </li>
                                            @empty
                                                <div class="text-center pb-4">
                                                    No Gallery Found
                                                </div>
                                            @endforelse

                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif --}}

    </section>

@endsection
