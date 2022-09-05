@extends('layouts.developers')

@section('title')
Dinger | Developers
@endsection

@section('content')
<div id="developers-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-12 drop-left">

                <div id="hider">
                    <p id="main-menu">Get Started</p>
                    <p id="small-p" class="grey"><a href="{{ url('/developers/eng') }}"><img
                                src="{{ asset('/images/Frame 22.png') }}" /></a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/revoke/eng') }}">Revoke Transaction</a></p>

                    <p id="main-menu">Staging API</p>
                    <p id="small-p" class="grey"><a href="{{ url('/stagingAPI-intro/eng') }}">Introduction</a></p>
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
                <p id="dev-home"><a>Dinger Payment</a></p>
                <p id="home-p">This API documentation is for business that wants to integrate with Dinger platform
                    to accept payments digitally. Customers of the businesses can purchase items or services on the
                    businesses’ platform and Dinger will facilitate the payments together with corresponding payment
                    providers for every transaction.
                </p>
                <hr class="line">

                <div id="block4-sec" class="col-md-12 col-sm-12 col-12 drop-right">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="staging"><a href="{{ url('/stagingAPI-intro/eng') }}"><img
                                        src="{{ asset('/images/staging.png') }}" /></a> </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="production"><a href="{{ url('/production-intro/eng') }}"><img
                                        src="{{ asset('/images/production.png') }}" /></a> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="prebuilt"><a href="{{ url('/User-guide/eng') }}"><img
                                        src="{{ asset('/images/prebuilt.png') }}" /></a> </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="woocommerce"><a href="{{ url('/woocommerce-intro/eng') }}"><img
                                        src="{{ asset('/images/woocommerce.png') }}" /></a> </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection

@section('scripts')

@endsection