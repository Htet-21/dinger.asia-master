@extends('layouts.partnership')

@section('title')
    Dinger | Partnership Benefits
@endsection

@section('content')
    <div id="partnership-page-wrapper">
        <div class="accept partner-bg-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">

                        <img id="hand-shake-partner" src="/images/hand-shake-partner.svg" />

                        <div id="partner-block-div">
                            <h1>Create a better way with our partnership program</h1>
                            <br />

                            <p id="partner-content2">This partnership program aims for Digital Agencies who want to provide
                                your
                                quality to Dinger's merchants and introduce your clients to Dinger.</p>

                        </div>
                    </div>
                    <!-- <div id="img-spec"> -->
                    <div id="partner-own">

                        <a href="{{ url('/contact/eng') }}"><button>Become a partner</button></a>

                        <!-- </div> -->
                    </div>

                </div>
            </div>
        </div>
        <div style="background: #FAFAFA;" class="social-merchant">
            <div class="container">
                <div class="row">

                    <div id="partnership-content" class="col-md-6 col-sm-12 col-12">
                        <h3 id="top-title4">Help merchants with <br> our payment solution</h3>
                        <br />
                        <p id="top-content4">Initiate the best payment solution of Dinger to <br> entrepreneurs and we will
                            deliver the next-level <br> financing results to manage their businesses. </p><br>
                        <div id="partner-text-row">
                            <div id="partner-text-col2">
                                <p id="partner">• No technical concern is required</p>
                            </div>
                        </div>
                        <div id="partner-text-row">
                            <div id="partner-text-col2">
                                <p id="partner">• Activate Dinger account from online</p>
                            </div>
                        </div>
                        <div id="partner-text-row">
                            <div id="partner-text-col2">
                                <p id="partner">• Reduce the stress of handling multiple banks</p>
                            </div>
                        </div>
                        <div id="partner-text-row">
                            <div id="partner-text-col2">
                                <p id="partner">• Unify the payment transactions</p>
                            </div>
                        </div>

                        <br />
                    </div>


                    <div class="col-md-6 col-sm-12 col-12 p-0">
                        <img id="partner2-img" src="{{ asset('images/Rectangle 4.png') }}" />
                    </div>

                </div>
            </div>

        </div>
        <div style="background: #FFFFFF;" class="social-merchant">
            <div class="container">
                <h3 id="why">Why partner with us?</h3>
                <div class="row">
                    <div id="partnership-content" class="col-md-6 col-sm-12 col-12">
                        <div id="circle-text-row">
                            <div id="icon-text-col4">
                                <div id="circle">
                                    <h4>1</h4>
                                </div>
                            </div>
                            <div id="circle-text-col1">
                                <p id="blank2">No technical concern is required</p>
                                <p>Whether the businesses use the website or application, the payment can be done by our
                                    "Pay
                                    with Link" solution, and the transactions can be processed digitally.</p>
                            </div>
                        </div>
                        <br>

                    </div>
                    <div id="partnership-content" class="col-md-6 col-sm-12 col-12">
                        <div id="circle-text-row">
                            <div id="icon-text-col4">
                                <div id="circle">
                                    <h4>2</h4>
                                </div>
                            </div>
                            <div id="circle-text-col1">
                                <p id="blank2">Activate Dinger account from online</p>
                                <p>No further physical documentation is necessary, and the business can be activated from
                                    the
                                    online assessment of Dinger dashboard. Dinger provides full support for account
                                    activations
                                    and further technical integration.</p>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div id="partnership-content" class="col-md-6 col-sm-12 col-12">
                        <div id="circle-text-row">
                            <div id="icon-text-col4">
                                <div id="circle">
                                    <h4>3</h4>
                                </div>
                            </div>
                            <div id="circle-text-col1">

                                <p id="blank2">All-in-one bank accounts control</p>
                                <p>Having multiple bank accounts can make many options for the customers to pay but it is
                                    time-consuming for handling the different account's transactions. Dinger dashboard
                                    unifies
                                    all transactions make safe and secured.</p>
                            </div>
                        </div>
                    </div>
                    <div id="partnership-content" class="col-md-6 col-sm-12 col-12">

                        <div id="circle-text-row">
                            <div id="icon-text-col4">
                                <div id="circle">
                                    <h4>4</h4>
                                </div>
                            </div>
                            <div id="circle-text-col1">
                                <p id="blank2">Unify the payment transactions</p>
                                <p>A load of transactions can make more profit but there's a better way to increase the
                                    sales
                                    and reduce the stress of handling audits. The solution is simple; Dinger; a checkout
                                    solution with a unified dashboard.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div id="partner-meet">
            <h3 class="mb-4 pb-2">Meet our partners </h3>
            <div class="container">
                <div class="partnerSlide">
                 <div id="iws"></div>
                 <div id="edka"></div>
                 <div id="cont"></div>
                 <div id="b360"></div>
                 <div id="idea-planet"></div>
                 <div id="noble-tech"></div>
                 <div id="digi-dots"></div>
                </div>
            </div>
        </div>
        <!-- non-slide logos -->
                <!-- <div class="partner-col">
                    <div id="iws">

                    </div>
                </div>
                <div class="partner-col">
                    <div id="edka">

                    </div>
                </div>
                {{-- <div class="partner-col">
                    <div id="mmoi">

                    </div>
                </div> --}}
                <div class="partner-col">
                    <div id="cont">

                    </div>
                </div>
                <div class="partner-col">
                    <div id="b360">

                    </div>
                </div> -->

        <div id="part-bot-div">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-12 connect-left p-0">
                        <img id="part-bot-img" src="{{ asset('images/Rectangle 6.png') }}" />
                    </div>
                    <div class="col-md-6 col-sm-12 col-12">
                        <div id="inner-connect2">
                            <div id="payment">
                                <h3 id="subtitle"><img src="/images/Vector.png"></h3>
                            </div>
                            <h3>Widen your network with <br> our partnership program</h3>
                            <p id="partner-text-col2">A partnership leads you to a wider network that <br> provides
                                more resources and connections to <br> level up your service.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="features-div" class="ecommerce-2">
                <div class="container">

                    <div class="row fb-2-con">
                        <div class="col-md-4 col-sm-12 col-12">
                            <div id="features-block">

                                <p id="head-text">Expand the benefits</p>
                                <p>Louder our partnership announcement on social media and invest in the design,
                                    development, or marketing campaigns, your services will be introduced to our
                                    clients and earn more profits. </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-12">
                            <div id="features-block" class="pl-lg-4">

                                <p id="head-text">More Businesses, More Incentives </p>
                                <p>Introduce the best E-Commerce Payment Solution and deliver the next-level results
                                    to your businesses. The more agreements you can bring, the more incentives you will
                                    receive.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-12">
                            <div id="features-block" class="pl-lg-5">
                                <p id="head-text">Long-term partnership</p>
                                <p>Let's innovate the best value for our customers and get new benefits from the
                                    partnership programs. Let us offer the best practice in digital payments with Dinger.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        @endsection

        @section('scripts')
        @endsection
