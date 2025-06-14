@extends('backend.layouts.app')
@section('title', 'Edit Product - ' . $product->title)
@section('content')
    <div class="layout-px-spacing row layout-top-spacing m-0">
        <div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow my-1">
                <div class="widget-header">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-4 col-md-6 col-sm-6 mt-2 mb-1">
                            <legend class="h4">
                                Edit Product
                            </legend>
                        </div>

                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2 d-flex justify-content-end align-it mt-2 ">
                            <nav class="breadcrumb-two" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a
                                            href="javascript:void(0);">Edit Product</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="statbox widget box box-shadow col-12 px-sm-3 px-2">
                <div class="row m-0">
                    <div class="col-12">
                        <form class="mt-3" method="POST" action="{{ route('cms.product.update', $product->id) }}"
                            enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="form-group mb-3 row">
                                <div class="col-md-6 mt-xl-2 mt-md-0 mt-2 ">
                                    <label for="formGroupExampleInput">Title</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="Enter Name" minlength="3" maxlength="200" required name="title"
                                        value="{{ old('title') ?? $product->title }}">
                                    @if ($errors->has('title'))
                                        <div class="text-danger" role="alert">{{ $errors->first('title') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label>Image</label><br>
                                    @if ($product->image)
                                        <img width="100" height="100" class="mr-2"
                                            src="{{ asset('storage/images/products/' . $product->image) }}">
                                    @endif
                                    <div class="form-group mt-1">
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                    @if ($errors->has('image'))
                                        <div class="text-danger" role="alert">{{ $errors->first('image') }}</div>
                                    @endif
                                </div>
                                <div class="col-12 px-3 mt-2">
                                    <label>Description</label><br>
                                    <textarea placeholder="enter the description" id="team-about" name="description" minlength="3" maxlength="50000000">{{ old('description', json_decode($product->description)) }}</textarea>
                                    @if ($errors->has('description'))
                                        <div class="text-danger" role="alert">{{ $errors->first('description') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <input type="submit" class="btn btn-primary"
                                onclick="return confirm('Are you sure, you want to update?')">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('js')
    {{-- <script src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4/tinymce.min.js"> --}}
    </script>
    <script>
        tinymce.init({
            selector: '#team-about',
            height: 200,
            plugins: 'textcolor colorpicker lists link',
            toolbar: "formatselect | fontsizeselect | bold italic strikethrough forecolor backcolor | alignleft aligncenter alignright alignjustify  | numlist bullist | link | outdent indent  | removeformat",
            // theme: 'modern',
            // plugins: ' fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample  charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern ',
            // toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            // image_advtab: true,
            // templates: [{
            //         title: 'Test template 1',
            //         content: 'Test 1'
            //     },
            //     {
            //         title: 'Test template 2',
            //         content: 'Test 2'
            //     }
            // ],
            // content_css: [
            //     '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',

            // ]
        });
    </script>
@endsection
