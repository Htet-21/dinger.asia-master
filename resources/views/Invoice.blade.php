@extends('layouts.invoice')

@section('title')
Dinger | Invoice Feature
@endsection

@section('content')
<div id="invoice-page-wrapper">

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div id="partner-block-div">
                    <h1>Easy Tracking and <br> Get Paid Faster</h1>
                    <br />

                    <p id="partner-content2">Online invoicing feature helps you in managing the client information and
                        billing from one web
                        application. Speed up your bill-tracking system and accept digital payments in seconds.</p>

                </div>
            </div>
            <div id="partner-own">
                <a href="{{ url('/contact/eng') }}"><button>Get Started</button></a>
            </div>

        </div>
    </div>
    <div style="background: #FAFAFA;" class="invoice">
        <div class="home-3">
            <div class="container">
                <h3 id="why">Best product that benefits you in every corner</h3>
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-12">
                        <div id="why-dinger-block">
                            <div class="block-icon"><img src="{{ asset('/images/customize.png') }}" /> </div>
                            <p id="head-text">Customize every invoice</p>
                            <p>Professionally represent your brand with digital invoices and improve them with more
                                content.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12 pl-lg-5">
                        <div id="why-dinger-block">
                            <div class="block-icon"><img src="{{ asset('images/organized.png') }}" /> </div>
                            <p id="head-text">Organized bill-tracking system</p>
                            <p>Chasing the manual invoices can take your time a lot. Online invoicing gets your reports
                                by a
                                specific status of the invoices. </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12 pl-lg-5">
                        <div id="why-dinger-block">
                            <div class="block-icon"><img src="{{ asset('images/anytime.png') }}" /> </div>
                            <p id="head-text">Access invoices anytime</p>
                            <p>Cloud system keeps everything in its right place where you can retrieve invoices even
                                from your
                                smartphone at any time. </p>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-4 col-sm-12 col-12">
                        <div id="why-dinger-block">
                            <div class="block-icon"><img src="{{ asset('images/emails.png') }}" /> </div>
                            <p id="head-text">Send direct emails</p>
                            <p>Impress the clients’ experience by sending the bills from a unified web-application to
                                their emails
                                on the go.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 col-12 pl-lg-5">
                        <div id="why-dinger-block">
                            <div class="block-icon"><img src="{{ asset('images/instant.png') }}" /> </div>
                            <p id="head-text">Accept instant payments</p>
                            <p>Online invoices integrate with digital payments which is letting your clients choose the
                                payment
                                method (either with E-Wallets or banks or online cards) for the invoices.</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 col-12 pl-lg-5">
                        <div id="why-dinger-block">
                            <div class="block-icon"><img src="{{ asset('images/green.png') }}" /> </div>
                            <p id="head-text">Think green</p>
                            <p>Less use of one paper invoice will not save the planet, but if the number of several
                                billion invoices
                                are transformed into digital ones, we can protect the overuse of papers from green
                                environment.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="background: #fffff;" class="invoice">
        <div id="Bussiness">
            <h3 class="mb-4 pb-2">Types of businesses to be best fit in</h3>
            <div class="container">
                <div class="bussiness-row">
                    <div class="bussinessSlide">
                        <div id="isp"></div>
                        <div id="software"></div>
                        <div id="online"></div>
                        <div id="retail"></div>
                        <div id="gift"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div style="background: #FAFAFA;" class="social-merchant">
        <div id="Bussiness">
            <h3 class="mb-4 pb-2">Highlighted features that help you out</h3>
            <div class="container">
                <div class="bussiness-row">
                    <div class="featureSlide">
                        <div id="create-own"></div>
                        <div id="content"></div>
                        <div id="directly"></div>
                        <div id="monitor"></div>
                        <div id="multiple"></div>
                        <div id="manual"></div>
                        <div id="filter"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div style="background: #FFFFFF;" class="social-merchant">
        <div class="container">
            <div class="row">
                <div id="partnership-content" class="col-md-6 col-sm-12 col-12">
                    <div id="circle-text-row">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/WGGDV5e-yFI"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <br>

                </div>
                <div id="partnership-content" class="col-md-6 col-sm-12 col-12">
                    <div id="circle-text-row">
                        <div id="icon-text-col4">
                        </div>
                        <div id="circle-text-col1">
                            <p id="blank2">Watch how to streamline your billing system</p>
                            <p>Simple steps take you closer to the right journey of the effortless online invoicing
                                features.</p>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div> -->

    <div style="background: #FFFFFF;">
        <div id="package-div">
            <h3 id="pricing">Affordable price to start it NOW</h3>
            <div id="package-left">
                <div id="starter-title" class="mb-3">Standard</div>
                <div id="price-container">

                    <h4 id="price-text"><span>30,000</span><span style="font-size:20px; font-weight:400">
                            Ks</span><span style="font-size:14px; font-weight:400; font-family:'Poppins' ">
                            /mo + Transaction Fees</span> </h4>

                </div>
                <p style="opacity:0.4; font-weight:400;">*contract 6 months minimal and must be renewed
                    every month.</p>
                <hr>

                <div class="pricing-f mt-4">
                    <img id="pricing-icon" src="{{ asset('images/pricing-icon.svg') }}" />
                    <p>Monthly plan, billed monthly</p>
                </div>

                <div class="pricing-f">
                    <img id="pricing-icon" src="{{ asset('images/pricing-icon.svg') }}" />
                    <p>24 hr transaction monitoring dashboard</p>
                </div>

                <div class="pricing-f">
                    <img id="pricing-icon" src="{{ asset('images/pricing-icon.svg') }}" />
                    <p>Settlement (any banks in MM)</p>
                </div>

                <div class="pricing-f">
                    <img id="pricing-icon" src="{{ asset('images/pricing-icon.svg') }}" />
                    <p>Dedicated technical support</p>
                </div>

                <div class="pricing-f">
                    <img id="pricing-icon" src="{{ asset('images/pricing-icon.svg') }}" />
                    <p>Office-hour customer service</p>
                </div>

                <div class="pricing-f">
                    <img id="pricing-icon" src="{{ asset('images/pricing-icon.svg') }}" />
                    <p>Cancel at anytime</p>
                </div>
                <br>
                <a target="blank" href="https://subscription.dingerpay.com/"><button id="package-btn">Try it
                        now</button></a>
            </div>

        </div>

    </div>

</div>
@endsection

@section('scripts')
@endsection