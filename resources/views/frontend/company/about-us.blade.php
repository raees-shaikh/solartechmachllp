@extends('frontend.layouts.app')
@section('title', 'About Us - ')
@section('content')

    <div class="breadcrumb-area dark-bg">
        <div class="breadcrumb-inner">
            <h2 class="text-white">About Us</h2>
            <h6 class="text-white"><a href="{{ url('/') }}">Home</a> /
                About Us
            </h6>
        </div>
    </div>

    <!-- About Section-->

    <div class="about-area section-padding pb-lg-5 pb-3 pt-lg-5 pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInLeft mt-0" data-wow-delay=".6s">
                    {{-- <div class="about-img w-100">
                        <img src="{{ asset('frontend/assets/img/team/group-2.png') }}" alt="">
                    </div> --}}
                </div>
                <div class=" col-md-12 col-sm-12 wow fadeInRight" data-wow-delay=".2s">
                    <div class="info-content-area px-0">
                        <div class="section-title mb-3">
                            <h6>Welcome To Solar Techmach LLP</h6>
                            <h2 class="mb-2 mt-3 about text-light-blue">Solar Techmach LLP (India) </h2>
                        </div>
                        <p class="mb-2">At <b>Solar Techmach LLP</b>, we are dedicated to advancing a cleaner, greener planet by delivering innovative, cost-effective production plants and machinery tailored for the solar and renewable energy sectors. Headquartered in India and supported by a global network, we proudly serve clients both locally and worldwide with a clear mission: to harness the power of clean energy for a sustainable future.</p>
                        <h3 class="mb-2 text-capitalize">Our Legacy : From Industrial Roots To a Renewable Future</h3>
                        <p class="mb-2">Founded in <b>1989</b>, Solar Techmach LLP emerged during a transformative period in India’s history—amidst the nation’s rapid industrial expansion fueled by the bold economic reforms of the early 1990s. With reduced import tariffs, deregulation, and attractive tax incentives creating a fertile environment for industrial investment, we seized the opportunity to support India’s industrial evolution. Our journey began by facilitating the import and integration of world-class production plants across key sectors such as <b>Textiles,
                                Steel, Forging,
                                Power Generation,
                                Plastics, Polymers,
                                Packaging,
                                Heavy Engineering, Machine Tools,
                                Construction & Infrastructure. </b> </p>
                        <p class="mb-2">Over the decades, many of the businesses we helped establish have evolved into industry leaders—testament to the lasting value and trust we build in every partnership.</p>

                        <h3 class="mb-2 text-capitalize">Renewable Energy : Our Present And Future</h3>
                        <p class="mb-2">Today, Solar Techmach LLP stands at the forefront of <b>renewable energy innovation</b>, delivering fully integrated, technology-driven solutions across multiple domains:</p>
                        <p class="mb-2">Solar panel and photovoltaic (PV) production plants
                            Hydrogen and oxygen generation systems using alkaline electrolysis.</p>
                        <p class="">Turnkey renewable energy manufacturing facilities.</p>
                        <p>Tailored technological solutions for specific industry needs.</p>
                        <p>High-efficiency machinery and spare parts.</p>
                        <p class="mb-2">Complete technical support and global import logistics.</p>
                        <p class="mb-2">We take pride in supporting India’s vision to lead the global solar energy market—not only by fulfilling domestic demand but also by enabling the <b>export of clean, affordable energy solutions worldwide.</b></p>
                        <h3 class="mb-2 text-capitalize">A Trusted Partner For Investors And Innovators</h3>
                        <p class="mb-2">If you have an existing facility, shed, or open land and want to enter the rapidly <b>growing renewable energy industry</b>, Solar Techmach LLP is your trusted partner. We offer comprehensive support—from technology selection and import logistics to installation and operational setup—ensuring your investment is cutting-edge, efficient, and future-ready.</p>
                        <p class="mb-2">Leveraging extensive experience, global sourcing capabilities, and a commitment to excellence, we transform your vision for a renewable energy business into a fully operational reality.</p>
                        <h3 class="mb-2 text-capitalize">Our Mission : Energy With Purpose</h3>
                        <p class="mb-2">More than a business, our work is a mission to serve humanity. Every system we deliver advances a cleaner environment, a stronger economy, and a more sustainable planet. We envision a world where <b>light triumphs over darkness</b>—where renewable energy is not merely an option, but the foundation of prosperity, security, and responsible stewardship of our Earth.</p>

                        {{-- <p class="mb-2">AtSolar Techmach LLP, India we are committed to delivering cost-effective, cutting-edge production plants and machinery to clients across India and around the world. Our focus is on the solar and renewable energy industries, where quality and innovation meet affordability.</p>
                        <p class="mb-2"> We are only sellers of imported Solar & Renewable energies related production,
                            equipments, machines, plants, spare parts machienrys.</p>
                        <p class="mb-2">
                            All fully automatic, robotic, high performance, advance technology & machinery’s.</p>
                        <p> Solar Techmach LLP is one of the earliest companies  to commit to the photovoltaic industry.
                            It is an integrated photovoltaic smart energy solution provider that encompasses technology
                            research and development, and power station business. In 2023, its
                            photovoltaic module bid volume and shipment volume ranked in the top ten of the industry.
                            The company has an industrial layout across multiple
                             locations. With outstanding technology, it explores the
                            large-scale development and utilization of green solar energy, contributing photovoltaic wisdom
                            and strength to achieving the “dual carbon” goals.</p> --}}

                        <h3 class="blog-details_title  mb-lg-3  mb-4  mt-4 text-capitalize">Enterprise Culture : Built On
                            Purpose And Progress
                        </h3>
                        <p>At Solar Techmach LLP, our corporate culture embodies our core values and shared vision:</p>
                        <blockquote><i>Together, let’s build a greener, more beautiful homeland for all.</i></blockquote>
                        <ul class="about-key mt-lg-3 mt-0">
                            <li class="w-100"><i class="las la-check-square"></i>
                                <p>
                                    Driven by Responsibility – <span>Serving society through sustainable and ethical practices</span>
                                </p>
                            </li>
                            <li class="w-100"><i class="las la-check-square"></i>
                                <p>Strengthened by Tenacity – <span>Committed to excellence, no matter the challenge</span>
                                </p>
                            </li>
                            <li class="w-100"><i class="las la-check-square"></i>
                                <p>Inspired by Innovation – <span>Continuously advancing our technologies and
                                        solutions</span> </p>
                            </li>
                            <li class="w-100"><i class="las la-check-square"></i>
                                <p>
                                    Built on Trust – <span> Fostering lasting partnerships grounded in integrity</span> </p>
                            </li>

                            <li class="w-100"><i class="las la-check-square"></i>
                                <p>
                                    Committed to Delivery – <span>Ensuring reliability and performance in every
                                        project</span> </p>
                            </li>

                            <li class="w-100"><i class="las la-check-square"></i>
                                <p>
                                    Focused on Growth – <span>Elevating our clients, our people, and our planet</span> </p>
                            </li>

                            <li class="w-100"><i class="las la-check-square"></i>
                                <p>Empowered by Sharing – <span>Promoting open collaboration and mutual success</span> </p>
                            </li>
                        </ul>
                        <h3 class="mb-2 mt-1 text-capitalize">Join Us In Shaping a Brighter Future</h3>
                        <p>At Solar Techmach LLP, we invite investors, developers, and visionary enterprises to join us in reshaping the global energy landscape. Together, let’s build a future powered by clean, sustainable energy—because <b>light is life</b>, and the future starts now.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--
        <div class="container mt-lg-5 mt-3">
            <h3 class="blog-details_title mb-4 d-lg-none d-block mt-4">The Enterprise Culture
            </h3>
            <div class="row d-flex align-items-center business-card box-shadow-none p-0 " id="guidance">
                <div class="col-lg-6 px-0 order-lg-2 order-1">
                    <img src="{{ asset('frontend/assets/img/team/group-1.png') }}" alt="" class="w-100">
                </div>
                <div class="col-lg-6 pt-lg-0 pt-4  order-lg-1 order-2 px-sm-2 px-0">
                    <h3 class="blog-details_title mb-md-3 mb-2 d-lg-block d-none">The Enterprise Culture
                    </h3>
                    <ul class="about-key mt-lg-4 mt-0">
                        <li class="w-100"><i class="las la-check-square"></i>
                            <p>
                                Build a Green and Beautiful Homeland for All</p>
                        </li>
                        <li class="w-100"><i class="las la-check-square"></i>
                            <p>To be a global leader in green and intelligent </p>
                        </li>
                        <li class="w-100"><i class="las la-check-square"></i>
                            <p>Responsibility, Tenacity, Innovation</p>
                        </li>
                        <li class="w-100"><i class="las la-check-square"></i>
                            <p>
                                Trust, Delivery, Growth, Sharing</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}

@endsection
