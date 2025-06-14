@extends('frontend.layouts.app')
@section('title', 'Exhibitions - ')
@section('content')

    <div class="breadcrumb-area dark-bg">
        <div class="breadcrumb-inner">
            <h2 class="text-white">Exhibitions</h2>
            <h6 class="text-white"><a href="{{ url('/') }}">Home</a>  / Exhibitions
            </h6>
        </div>
    </div>

    <section class="pt-5 bg-gray">
        <div class="container">
            <div class="row  p-lg-0 ">
                @forelse($exhibitions as $exhibition)
                    <div class="col-md-6 col-xl-4  mb-4 products-cards">
                        <div class="business-card-dark p-4 h-100 position-relative">
                            <p class="date text-white"><i class='fa fa-calendar mx-1'></i> {{ dd_format($exhibition->start_date, 'd-m-Y') }} To
                                {{ dd_format($exhibition->end_date, 'd-m-Y') }}</p>
                            {{-- @if ($exhibition->image)
                                <img src="{{ asset('storage/images/exhibition/' . $exhibition->image) }}" alt=""
                                    class="exhi-img">
                            @endif --}}
                            <h5 class="blog-details_title mt-5 mb-md-3 mb-2 text-capitalize">
                                {{ str_limit($exhibition->title, 90) }}
                                {{-- <a href="{{ route('show', $exhibition->slug) }}">{{$exhibition->title}}</a> --}}
                            </h5>
                            <div class="mt-5 pt-md-3">
                                <a href="{{ route('show', $exhibition->slug) }}" class="product-btn">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12 text-center">
                        <strong>No Exhibitions Found</strong>
                    </div>
                @endforelse

            </div>
        </div>


        <div class="text-center justify-content-center mx-auto mt-4 pb-5">
            <ul class="pagination  mx-auto d-block">
                <li class="page-item">
                    {{ $exhibitions->onEachSide(1)->links('pagination::bootstrap-4') }}
                </li>


            </ul>
        </div>
    </section>

@endsection
