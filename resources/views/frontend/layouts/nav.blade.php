<!-- Mouse Cursor  -->
{{-- <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"><span>Drag</span></div> --}}

<!-- Pre-Loader -->
<div class="loader-bg">
    <div id="loader" class="text-center">
        <div class="bg-thin position-relative">
            <div class="d-grid-custom">
                <h2 class="text-white text-center fonts-sm-24  mt-customlg-40"> Rising Sun & Rising Company,<br>
                    We Are <span class="">Solar Techmach LLP </span> Of Bharat India.</h2>
            </div>
        </div>
    </div>
</div>

<style>
    div#loader {
        {{-- background-color: #c0c0c0 !important; --}}

    }
</style>
<!-- Header Top Area -->

<!-- Header Area -->

<header class="header-area">
    <div class="sticky-area">
        <div class="navigation">
            <div class="container">
                <div class="row position-relative">
                    <div class="col-xl-3 col-lg-2">
                        <div class="logo mt-0 logo-section">
                            <a class="navbar-brand" href="{{ url('/') }}"><img
                                    src="{{ asset('frontend/assets/img/solar-logo.png') }}" alt="" class="rotate-img"></a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-10">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                                <button class="navbar-toggler px-0" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                    <span class="navbar-toggler-icon"></span>
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse justify-content-end d-lg-block"
                                    id="navbarSupportedContent">
                                    <ul class="navbar-nav  justify-content-end">
                                        <li class="nav-item">
                                            <a class="nav-link {{ URL::current() == url('/') ? 'active' : '' }}"
                                                href="{{ url('/') }}">Home
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ URL::current() == url('/about-us') ? 'active' : '' }}"
                                                href="{{ url('/about-us') }}">About Us

                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link {{ URL::current() == route('frontend.product.index') ? 'active' : '' }}"
                                                href="{{ route('frontend.product.index') }}">Products

                                            </a>
                                        </li>


                                        <li class="nav-item">
                                            <a class="nav-link {{ URL::current() == route('latest-offers') ? 'active' : '' }}"
                                                href="{{ route('latest-offers') }}">What We Offer
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link {{ URL::current() == url('/exhibitions') ? 'active' : '' }}"
                                                href="{{ url('/exhibitions') }}">Exhibitions

                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a
                                                class="nav-link {{ URL::current() == url('/business-process') || URL::current() == url('/contact-us') ? 'active' : '' }}">Company
                                                <span class="sub-nav-toggler"> </span>
                                            </a>
                                            <ul class="sub-menu pt-lg-3 pt-0">
                                                <li><a href="{{ url('/business-process') }}"
                                                        class=" {{ URL::current() == url('/business-process') ? 'nav-active' : '' }}">Business
                                                        Process</a></li>
                                                <li><a href="{{ url('/contact-us') }}"
                                                        class=" {{ URL::current() == url('/contact-us') ? 'nav-active' : '' }}">Contact
                                                        Us</a></li>
                                            </ul>
                                        </li>

                                        {{-- <li class="nav-item">
                                            <a
                                                class="nav-link {{URL::current() == url('/exhibitions') ||  URL::current() == url('/contact-us') ? 'active' : '' }}">Company
                                                <span class="sub-nav-toggler"> </span>
                                            </a>
                                            <ul class="sub-menu pt-lg-3 pt-0">

                                                <li><a href="{{ url('/exhibitions') }}"
                                                        class=" {{ URL::current() == url('/exhibitions') ? 'nav-active' : '' }}">Exhibitions</a></li>

                                                             <li><a href="{{ url('/contact-us') }}"
                                                            class=" {{ URL::current() == url('/contact-us') ? 'nav-active' : '' }}">Contact Us</a></li>
                                            </ul>
                                        </li> --}}
                                        {{--
                                        <li class="nav-item mx-0">
                                            <a class="nav-link {{ URL::current() == url('/contact-us') ? 'active' : '' }}" href="{{ url('/contact-us') }}">Contact Us

                                            </a>

                                        </li> --}}
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Search Dropdown Area -->

<div class="search-popup">
    <span class="search-back-drop"></span>

    <div class="search-inner">
        <div class="container">
            <div class="upper-text">
                <div class="text">Search for anything.</div>
                <button class="close-search"><span class="la la-times"></span></button>
            </div>

            <form method="post" action="">
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search..." required="">
                    <button type="submit"><i class="la la-search"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
