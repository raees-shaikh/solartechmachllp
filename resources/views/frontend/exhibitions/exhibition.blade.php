@extends('frontend.layouts.app')
@section('title', ucfirst($exhibition->title . ' - Exhibitions -'))
@section('content')

    <div class="breadcrumb-area dark-bg">
        <div class="breadcrumb-inner">
            <h2 class="text-white text-capitalize">{{ str_limit($exhibition->title, 90) }}</h2>
            <h6 class="text-white text-capitalize"><a href="{{ url('/') }}">Home</a> / <a
                    href="{{ route('exhibitions') }}">Exhibitions</a> / {{ str_limit($exhibition->title, 90) }}</h6>
        </div>
    </div>

    <section>
        <div id="blog-page" class="blog-section section-padding py-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class=" blog-title-fs text-capitalize">{{ $exhibition->title }}</h2>
                        {{-- @if ($exhibition->image)
                            <div class="single-blog-wrap">
                                <img src="{{ asset('storage/images/exhibition/' . $exhibition->image) }}" alt=""
                                    class="w-100" style="max-height: 400px;object-fit: contain;">
                            </div>
                        @endif --}}
                    </div>

                    <div class="col-lg-4 mt-lg-0 mt-4">
                        <h3 class="mb-2"> Description</h3>
                        <p>
                            {{ $exhibition->title }}
                        </p>
                    </div>
                </div>
            </div>
    </section>
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
                                        <li data-responsive="{{ asset('storage/images/exhibition/' . $media->filename) }} 375, {{ asset('storage/images/exhibition/' . $media->filename) }}480, {{ asset('storage/images/exhibition/' . $media->filename) }}800"
                                            data-src="{{ asset('storage/images/exhibition/' . $media->filename) }}">
                                            <a href="">
                                                <img class="img-responsive"
                                                    src="{{ asset('storage/images/exhibition/' . $media->filename) }}">
                                                <div class="demo-gallery-poster">
                                                    <img
                                                        src="{{ asset('storage/images/exhibition/' . $media->filename) }}">
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
@endsection
