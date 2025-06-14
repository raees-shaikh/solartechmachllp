@extends('backend.layouts.app')
@section('title', 'Dashboard')
@section('content')

    <div class="layout-px-spacing row layout-top-spacing m-0">
        <div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">

            {{-- new --}}
            <div class="statbox widget box box-shadow my-1">
                <div class="widget-header">
                    <div class="row justify-content-between align-items-center mt-2 px-3">
                        <div class="col-12 col-sm-6">
                            <legend class="h4">
                                Dashboard
                            </legend>
                        </div>
                        <div class="col-12 col-md-6  d-flex justify-content-end align-it ">
                            <nav class="breadcrumb-two" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a
                                            href="javascript:void(0);">Dashboard</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <div class="row layout-top-spacing">


                        <div class="col-xl-4 mb-4 mb-xl-0 col-md-6 col-sm-12 col-12 layout-spacing ">
                            <div class="widget widget-one_hybrid widget-referral h-100 px-2 py-3">
                                <div class="widget-heading p-0 m-0">
                                    <h4 class="text-center">Total Products</h4>
                                    <div class="w-title justify-content-center align-items-center">
                                        <div class="w-icon">
                                            <i class="far fa-chart-bar big-font-icon"> </i>
                                        </div>
                                        <div class="">
                                            <p class="w-value">{{ $productCount }}</p>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{ route('cms.product.index') }}" class="btn btn-outline-primary mx-auto">
                                            <small><i class="far fa-edit"> </i></small> Manage
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 mb-4 mb-xl-0 col-md-6 col-sm-12 col-12 layout-spacing ">
                            <div class="widget widget-one_hybrid widget-referral h-100 px-2 py-3">
                                <div class="widget-heading p-0 m-0">
                                    <h4 class="text-center">Total Categories</h4>
                                    <div class="w-title justify-content-center align-items-center">
                                        <div class="w-icon">
                                            <i class="far fa-chart-bar big-font-icon"> </i>
                                        </div>
                                        <div class="">
                                            <p class="w-value">{{ $categoryCount }}</p>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{ route('cms.categories.index') }}" class="btn btn-outline-primary mx-auto">
                                            <small><i class="far fa-edit"> </i></small> Manage
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 mb-4 mb-xl-0 col-md-6 col-sm-12 col-12 layout-spacing ">
                            <div class="widget widget-one_hybrid widget-referral h-100 px-2 py-3">
                                <div class="widget-heading p-0 m-0">
                                    <h4 class="text-center">Total Offers</h4>
                                    <div class="w-title justify-content-center align-items-center">
                                        <div class="w-icon">
                                            <i class="far fa-chart-bar big-font-icon"> </i>
                                        </div>
                                        <div class="">
                                            <p class="w-value">{{ $offerCount }}</p>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{ route('cms.offer.index') }}" class="btn btn-outline-primary mx-auto">
                                            <small><i class="far fa-edit"> </i></small> Manage
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 mb-4 mb-xl-0 col-md-6 col-sm-12 col-12 layout-spacing ">
                            <div class="widget widget-one_hybrid widget-referral h-100 px-2 py-3">
                                <div class="widget-heading p-0 m-0">
                                    <h4 class="text-center">Total Exhibitions</h4>
                                    <div class="w-title justify-content-center align-items-center">
                                        <div class="w-icon">
                                            <i class="far fa-chart-bar big-font-icon"> </i>
                                        </div>
                                        <div class="">
                                            <p class="w-value">{{ $exhibitionCount }}</p>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{ route('cms.exhibition.index') }}" class="btn btn-outline-primary mx-auto">
                                            <small><i class="far fa-edit"> </i></small> Manage
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<style>
    .widget {
        padding: 20 px !important;
    }
</style>
@section('js')
@endsection
