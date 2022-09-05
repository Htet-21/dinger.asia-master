@extends('layouts.app')

@section('title')
Dinger | Ecommerce
@endsection

@section('content')

<div class="ecommerce">

    <div class="ecommerce-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <div id="centered-div">
                    <h1 id="top-title">E-commerce Payment</h1>
                    <br />
                    <p id="top-content">Helping E-Commerces by enabling fast and secure online transactions for heavy purchases with accurate transaction records in shortest settlement time frame.</p>
                    <br />
                    <a href="#features-div"><button id="create-acc-btn">Explore features</button></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12">


                    <div class="hero-image">

                    <img id="top-img" src="{{ asset('images/team.jpg') }}" />

                        <div class="hero-shape">
                            <img id="top-img2" src="{{ asset('images/home-shape.svg') }}" />
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <img id="mb-top-img2" src="{{ asset('images/home-shape.svg') }}" />
        <img id="mb-top-img" src="{{ asset('images/team.jpg') }}" />

    </div>

    <div id="features-div" class="ecommerce-2">
        <div class="container">

            <div class="row fb-2-con">
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block">
                        <div class="block-icon"><img src="{{ asset('images/growsales-icon.svg') }}" /> </div>
                        <p id="head-text">Grow Sales</p>
                        <p>Start accepting the payment from your customers with variety of payment options seamlessly.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block" class="pl-lg-4">
                        <div class="block-icon"><img src="{{ asset('images/stressfree-icon.svg') }}" /> </div>
                        <p id="head-text">Stress-free Settlement</p>
                        <p>The transaction steps will be less and the scope will be small. Accept any kind of payment in one place.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block" class="pl-lg-5">
                        <div class="block-icon"><img src="{{ asset('images/reliability-icon.svg') }}" /> </div>
                        <p id="head-text">Reliability</p>
                        <p>Instant benefit of better payment experience for your coustomers with one time integration.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <hr id="fb-hr" />

    <div class="ecommerce-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <h2 id="eco-top-title">Connect Every Payment</h2>
                    <br />
                    <p id="top-content">Dinger enables businesses in Myanmar to accept payments from any accounts in the most simple and efficient way. Do more with less.</p>
                </div>

            </div>
        </div>
    </div>

    <div class="ecommerce-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12 connect-left p-0">
                    <img id="connect-img" src="{{ asset('images/connect-ecommerce.jpg') }}" />
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <div id="inner-connect">
                        <div id="features-block" class="my-5">
                            <h4>Faster Growth</h4>
                            <br />
                            <p>Scale up your businesses by maximizing your payment acceptance</p>
                        </div>
                        <br>
                        <div id="features-block" class="my-5">
                            <h4>Always Up-to-date</h4>
                            <br />
                            <p>Always keeping up with the cutting edge technologies to serve better for our merchants</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="connect-eco-right">

        </div>
    </div>

    <div class="ecommerce-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-12">
                    <div id="partner-net-div">
                        <h2 id="eco-top-title">Deploy often</h2>
                        <br />
                        <p id="top-content">Using Dinger payment service will allow your business accept various payment providers in Myanmar with one account. In order to work with Dinger, your business need to integrate your business with Dinger payment service system. As soon as the integration is finished, you can start to use Dinger service providing stress-free payment to your customers.</p>
                    </div>
                    <div class="row my-4">
                    <!---    <div class="col-md-6 col-sm-12 col-12">
                            <div class="dev-bot" id="features-block">
                                <img id="feat-img" src="{{ asset('images/blue-shape.svg') }}" />
                                <h4>Feature 1</h4>
                                <br />
                                <p>Grow your business with a cornerstone of an integrated payment system to empirically rationalize functions of your work.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-12">
                            <div class="dev-bot" id="features-block">
                                <img id="feat-img" src="{{ asset('images/blue-shape.svg') }}" />
                                <h4>Feature 2</h4>
                                <br />
                                <p>Grow your business with a cornerstone of an integrated payment system to empirically rationalize functions of your work.</p>
                            </div>
                        </div>
                    -->
                        <!-- <div class="col-md-6 col-sm-12 col-12">
                            <div class="dev-bot" id="features-block">
                                <img id="feat-img" src="{{ asset('images/blue-shape.svg') }}" />
                                <h4>Feature 2</h4>
                                <br />
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div> -->
                        <img id="dev-shape-img" src="{{ asset('images/dev-shape.svg') }}" />
                    </div>
                </div>

            </div>
        </div>

        <img id="dev-pipe-img" src="{{ asset('images/dev-pipeline.svg') }}" />
    </div>

    <div class="ecommerce-6">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <div id="partner-net-div">
                        <h2 id="eco-top-title">Less Time Consuming</h2>
                        <br />
                        <p id="top-content">Dinger enables businesses in Myanmar to accept payments from any accounts in the most simple.</p>
                        <br />
                    </div>
                    <img id="partner-network-img" src="{{ asset('images/partner-network.svg') }}" />
                    <p id="pn">Partner network</p>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('scripts')

@endsection
