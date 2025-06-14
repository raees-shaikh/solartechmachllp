@extends('frontend.layouts.app')
@section('title', 'Products - ')
@section('content')

    <div class="breadcrumb-area dark-bg">
        <div class="breadcrumb-inner">
            <h2 class="text-white">Products</h2>
            <h6 class="text-white"><a href="{{ url('/') }}">Home</a> / Products</h6>
        </div>
    </div>

    <section class="pt-5 bg-gray">
        <div class="container">
            <div class="row  p-lg-0 ">
                @foreach ($products as $product)
                    <div class="col-md-6 col-xl-4  mb-4 products-cards">
                        <div class="business-card-dark p-4 h-100 position-relative">
                            {{-- <div class="card-index-img mb-4">
                                <img src="{{ asset('storage/images/products/' . $product->image) }}" alt=""
                                    class="w-100" style="height: 200px;object-fit: cover;">
                            </div> --}}
                            <h5 class="blog-details_title mb-md-3 mb-2 text-capitalize">
                                {{ str_limit($product['title'], 90) }}
                            </h5>
                            <div class="mt-5 pt-md-3">
                                <a href="{{ route('frontend.product.show', $product->slug) }}" class="product-btn"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <div class="text-center justify-content-center mx-auto mt-4 pb-5">
            <ul class="pagination  mx-auto d-block">
                {{-- <li class="page-item"><a class="page-link" href="#"><i class="las la-angle-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item" aria-current="page"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="las la-angle-right"></i></a>
                </li> --}}
                {{ $products->onEachSide(1)->links('pagination::bootstrap-4') }}
            </ul>
        </div>
    </section>

@endsection
