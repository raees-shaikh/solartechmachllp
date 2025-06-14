@extends('frontend.layouts.app')
@section('title', 'Business Process - ')
@section('content')
    <!-- Breadcrumb Area  -->
    <div class="breadcrumb-area dark-bg">
        <div class="breadcrumb-inner">
            <h2 class="text-white">Business Process</h2>
            <h6 class="text-white"><a href="{{ url('/') }}">Home</a> / <a class="text-white" >Company</a> /
                Business Process</h6>
        </div>
    </div>
    <section>
        <div class="container px-0custom">
            <h2 class="text-center mt-4">How We Work</h2>
            <h3 class="text-center text-black mb-4 mt-2">Process Flow / Methodology</h3>

            <div class="row my-4 process-card d-flex align-items-center">
                <div class="col-xl-4 col-lg-5">
                    <img src="{{ asset('frontend/assets/img/process/inquiry.png') }}" alt="" class="">
                </div>
                <div class="col-xl-8 col-lg-7 ">
                    <div class="inner-card pb-2 pt-lg-0 pt-3 mobile-title-mt-10 ">
                        <h4>Inquiry</h4>
                        <p>All Inquiry’s Received By WhatsApp, Phone Calls, Website. Google Search, References By Our
                            Existing Clients, Via Participating Through Exhibitions In India & International, Advertisements
                            In News Paper, Magazines, Online Media, Sales Circulars Etc.</p>
                    </div>
                </div>
            </div>


            <div class="row my-4 process-card d-flex align-items-center">
                <div class="col-xl-4 col-lg-5 order-lg-2 order-1 text-lg-end">
                    <img src="{{ asset('frontend/assets/img/process/inward.png') }}" alt="" class="">
                </div>
                <div class="col-xl-8 col-lg-7   order-lg-1 order-2">
                    <div class="inner-card pb-2 pt-lg-0 pt-3 mobile-title-mt-10 ">
                        <h4>Inward Inquiry</h4>
                        <p>All Inquiries Are Been Verified On The Authenticity Of Each Clients, Based On Their Actual
                            Inquiry Immediate Of Projects, Whether They Can Import With Having Valid Gst-Iec Codes, Land,
                            Building, Shed To Install Plant Or Machinery’s & Most Importantly Ready Banks Approved Finances
                            Or Internal Finances…</p>
                    </div>
                </div>
            </div>

            <div class="row my-4 process-card d-flex align-items-center ">
                <div class="col-xl-4 col-lg-5">
                    <img src="{{ asset('frontend/assets/img/process/suggest.png') }}" alt="">
                </div>
                <div class="col-xl-8 col-lg-7  ">
                    <div class="inner-card py-2 ">
                        <h4>Guidance, Instructions & Suggestion</h4>
                        <p class="mb-2">Once Our Marketing & Sales Staff Gets Feedback From Our Research & Development
                            Departments On Each Client’s History, They Speak To Clients To Get To Real Specifications,
                            Prices They Can Afford To Import, Tech Parameters, Terms Of Payments For Imports, Inspection
                            Plans, Visiting Peoples Invitation Letters, Getting Them Apply For Visas & Guide Them To Visit
                            Overseas Where The Plant Or Machinery’s Are Of Their Interest To Finalize……Help Each Client
                            Whether Owners/Cmd/Directors Or Presidents To Gm Technical On Overseas Hotels, Locations,
                            Transportations, Managing With Our Counter Parts Who Sell These Machinery’s…</p>
                        <p class="mb-2">In Short We Treat Our Clients Like Our Family For Ease Of Doing Business & Feel
                            Comfortable.</p>
                        <p>We Do Suggest Our Clients Not Just One Proposals But With Many Options To Choose Of With Their
                            Matching Price/Specifications Requirements, As We Feel A Client Needs To Have A Transparent
                            International Broker With Not Just Intentions Of Sales But Also Services…</p>
                    </div>
                </div>
            </div>

            <div class="row my-4 process-card d-flex align-items-center">
                <div class="col-xl-4 col-lg-5 order-lg-2 order-1 text-lg-end">
                    <img src="{{ asset('frontend/assets/img/process/price.png') }}" alt="">
                </div>
                <div class="col-xl-8 col-lg-7   order-lg-1 order-2">
                    <div class="inner-card py-2 ">
                        <h4>Price & Terms</h4>
                        <p class="mb-2">All Our Proposals/Offers Submitted To Clients After Discussions & Felt Being
                            Genuine Buyer, We Give Technical Specifications, Videos, Photos Of The Machinery’s Of Their
                            Interest & Lowest Rates Possible With Max Scope Of Supply & As Also Sometimes Spare Parts
                            Included Free, We Don’t See As Always Our Profits, Commissions/Fees/Consultations 1st But For
                            Our Company Policy Matters, Client/Customer/Buyer 1st & Then Profits.</p>
                        <p>Terms We Always Try To Submit Flexible Terms To Accommodate Clients Based On Their Financial
                            Availability, With Preferred Letter Of Credit Due To Overseas Imports & Risks Sometimes Client
                            Think Of, Or If They Prefer 100% Wire Transfer From Banks, We Do Workout The Same .. Any Terms
                            Which Gives Client Ease Of Doing Business We Assist Them..</p>
                    </div>
                </div>
            </div>

            <div class="row my-4 process-card d-flex align-items-center">
                <div class="col-xl-4 col-lg-5">
                    <img src="{{ asset('frontend/assets/img/process/pre.png') }}" alt="">
                </div>
                <div class="col-xl-8 col-lg-7 pt-0 ">
                    <div class="inner-card pb-2 pt-lg-0 pt-3 mobile-title-mt-10">
                        <h4>Pre Finalization Process</h4>
                        <p class="mb-2">We After Speaking To Client, Owners & Their Technical Team, Submit A Final Price
                            Based On Terms Of Delivery, Payment & Port/Destinations They Need In Proforma Invoice Format
                            Signed By Oversees Seller & Countered By Buyer From India Or Our Overs Clients/Buyers Too…</p>
                        <p>For Financial Requirements From Banks, We Do Provide Imports Related Documents In Draft Format,
                            Like Chartered Engg Certificates,BL Drafts, Commercial Invoices, Serial Number Photos If
                            Available, Layouts, Dimensions Of Machinery’s/Plants, Power Requirements, Production Parameters,
                            Efficiency Of Overseas Machinery’s When In Production, Quality Configuration, Etc, In Order That
                            Our Clients Get Full Satisfaction To Proceed To Finalize As Next Step…</p>
                    </div>
                </div>
            </div>
            <div class="row my-4 process-card d-flex align-items-center">
                <div class="col-xl-4 col-lg-5 order-lg-2 order-1 text-lg-end">
                    <img src="{{ asset('frontend/assets/img/process/post.png') }}" alt="">
                </div>
                <div class="col-xl-8 col-lg-7   order-lg-1 order-2">
                    <div class="inner-card pb-2 pt-lg-0 pt-3  mobile-title-mt-10">
                        <h4>Post Finalization</h4>
                        <p>Submitting All Draft Documentations Of Shipping, For Clients Import Departments To Approve, As
                            Well As Their Banks & Then Give Them Final Imports Documentations, From Copy Of BL, Commercial
                            Invoices, CEC, Packing List, Photos Of The Machinery’s Pre Loading In Containers & Post With
                            Container Numbers, Liners India Agents Contacts For Our Clients Imports Clearness… Any Further
                            Assistance/Help We Are Always There To Support Our Genuine Clients All Over India & Overseas
                            Countries.</p>
                    </div>
                </div>
            </div>
        </div>
    @endsection
