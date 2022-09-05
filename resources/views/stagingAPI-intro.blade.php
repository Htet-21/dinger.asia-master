@extends('layouts.developers')

@section('title')
Dinger | Developers
@endsection

@section('content')
<div id="staging-intro-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-12 drop-left">

                <div id="hider">
                    <p id="main-menu">Get Started</p>
                    <p id="small-p" class="grey"><a href="{{ url('/developers/eng') }}">Home</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/revoke/eng') }}">Revoke Transaction</a></p>

                    <p id="main-menu">Staging API</p>
                    <p id="small-p" class="grey"><a href="{{ url('/stagingAPI-intro/eng') }}"><img
                                src="{{ asset('/images/Frame 29.png') }}" /></a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/Get-token/eng') }}">Get Token</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/payAPI/eng') }}">Pay API</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/Merchant-callback/eng') }}">Merchant Callback</a></p>

                    <p id="main-menu">Prebuilt Checkout API</p>
                    <p id="small-p" class="grey"><a href="{{ url('/User-guide/eng') }}">User Guide</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/Workflow/eng') }}">Workflow</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/Payload/eng') }}">Payload and Redirect URL</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/Payment/eng') }}">Payment Providers</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/Encryption/eng') }}">Encryption & Decryption</a></p>

                    <p id="main-menu">Production API</p>
                    <p id="small-p" class="grey"><a href="{{ url('/production-intro/eng') }}">Introduction</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/production-gettoken/eng') }}">Get Token</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/production-payAPI/eng') }}">Pay API</a></p>
                    <p id="small-p" class="grey "><a href="{{ url('/production-merchant-callback/eng') }}">Merchant
                            Callback</a></p>

                    <p id="main-menu">woocommerce</p>
                    <p id="small-p" class="grey"><a href="{{ url('/woocommerce-intro/eng') }}">Introduction</a></p>

                    <p id="main-menu"><a href="{{ url('Status/eng') }}">Transaction Status and Request url</a></p>

                    <hr class="line">
                    <p id="main-menu"><img class="dev-logo" src="{{ asset('images/Dinger Logo Black.svg') }}" alt="Dinger Logo"><a href="{{ url('/eng') }}">Back TO Dinger website</a></p>

                </div>
            </div>
            <div class="col-md-8 col-sm-8 col-12 drop-right  pl-4 ">
                <!--  <div class="row">-->
                <!-- <div class="col-md-5 col-sm-12 col-12 pl-5"> -->
                <h2 id="home-h">Introduction</h2>
                <hr class="line"><br><br>
                <p id="dev-home"><a>Description</a></p>
                <p id="home-p">This API documentation is for business that wants to integrate with Dinger platform to
                    accept
                    payments digitally. Customers of the businesses can purchase items or services on the businesses’
                    platform and Dinger will facilitate the payments together with corresponding payment providers for
                    every
                    transaction.
                </p><br><br>
                <p id="dev-home"><a>Change Log</a></p>
                <p id="home-p">29/9/2020 - Version 1.0 API release. Provided 2 API (Payment Token and Payment API).
                </p><br><br>
                <p id="dev-home"><a>Dinger Flow Process</a></p>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <div class="work-flow"><a href="{{ url('/stagingAPI-intro/eng') }}"><img
                                    src="{{ asset('/images/Dinger-flow-process.png') }}" /></a> </div>
                    </div>
                </div>
                <br><br>
                <p id="dev-home"><a>Step by Step User Journey</a></p>
                <ul>
                    <li>User has to fill order information on business check out process.</li>
                    <li>User has to fill payment information on business check out process and click pay.</li>
                    <li>Business received the information and request Dinger server for authentication token to initiate
                        payment together with order information.</li>
                    <li>Dinger share authentication token to initiate payment from Business.</li>
                    <li>Dinger initiate the payment with corresponding payment provider.</li>
                    <li>Customer need to confirm the payment via OTP or pin code.</li>
                    <li>Payment provider will transfer the funds.</li>
                    <li>Dinger will initiate the callback URL from business and send back return URL.</li>
                    <li> User will receive the confirmation of payment on business platform.</li>
                </ul>

            </div>
        </div>
    </div>

    @endsection

    @section('scripts')

    @endsection