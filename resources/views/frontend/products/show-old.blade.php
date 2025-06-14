@extends('frontend.layouts.app')
@section('title', 'Product - ')
@section('content')

    <div class="breadcrumb-area dark-bg">
        <div class="breadcrumb-inner">
            <h2 class="text-white">Product</h2>
            <h6 class="text-white"><a href="{{ url('/') }}">Home</a> / <a  href="{{url('/products')}}" class="text-white">Products</a> / Product</h6>
        </div>
    </div>


    <section class="py-5 bg-gray">
        <div class="container">
            <div class="row d-flex align-items-center business-card p-md-3">
                <div class="col-lg-6  my-4">
                    <img src="{{ asset('frontend/assets/img/breadcrumb/energy.jpg') }}" alt=""
                        class="rounded w-100">
                </div>
                <div class="col-lg-6">
                    <h3 class="text-capitalize mb-3">PERTOP high-efficiency solar cell tube PECVD solutions </h3>
                    <h4 class="sub-title p-2 text-white text-capitalize mb-3">Core Technology</h4>

                    @for ($i = 0; $i <= 4; $i++)
                        <div class="d-flex align-items-center mb-2">
                            <img src="{{ asset('frontend/assets/img/icons/checkbox.png') }}" alt="">
                            <p class="mx-1">De-filming suppression technology for amorphous </p>
                        </div>
                    @endfor

                </div>


                <div class="col-12 mt-2">
                    <hr>
                    <h4 class="sub-title p-2 text-white text-capitalize my-3">Relevant description</h4>
                    <div class=" align-items-center mb-2">
                        <p>Jinchen tube PECVD solution realized the preparation of the core material of PERTOP solar cell
                            --- "Silicon oxide + in-situ doped amorphous silicon" , meanwhile, it won great breakthrough on
                            several core technologies, such as suppressing explosion of amorphous silicon, preventing
                            conduction of electric field and realizing the whole process of high-efficiency solar cell ,
                            etc.
                        </p>
                        @for ($i = 0; $i <= 1; $i++)
                            <div class="d-flex align-items-center my-2">
                                <img src="{{ asset('frontend/assets/img/icons/checkbox.png') }}" alt="">
                                <p class="mx-1">Directional deposition and slight winding plating guarantee high yield

                                </p>
                            </div>
                        @endfor

                    </div>

                    <hr>

                    <div class="col-12">
                        <h4 class="text-capitalize mb-3">Plasma Enhanced Chemical Vapor Deposition (PECVD) Technology </h4>

                        @for ($i = 0; $i <= 4; $i++)
                            <div class="d-flex align-items-center mb-2">
                                <img src="{{ asset('frontend/assets/img/icons/checkbox.png') }}" alt="">
                                <p class="mx-1">Directional deposition and slight winding plating guarantee high yield

                                </p>
                            </div>
                        @endfor

                    </div>
                    <hr>
                    <div class="col-12">
                        <h4 class="sub-title p-2 text-white text-capitalize my-3">Technical Parameters</h4>

                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Technical Parameters</th>
                                    <th scope="col">Related parameters
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Operation Power </td>
                                    <td>Length: 1650-2500mm * Width: 990-1400mm
                                    </td>

                                </tr>
                                <tr>
                                    <td>Compatible module size</td>
                                    <td>0.5～0.8Mpa
                                    </td>

                                </tr>
                                <tr>
                                    <td>Operating Noise </td>
                                    <td>≤72db</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
