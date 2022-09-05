@extends('layouts.developers')

@section('title')
Dinger | Developers
@endsection

@section('content')

<div id="payment-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-12 drop-left">

                <div id="hider">
                    <p id="main-menu">Get Started</p>
                    <p id="small-p" class="grey"><a href="{{ url('/developers/eng') }}">Home</a></p>
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
                    <p id="small-p" class="grey"><a href="{{ url('/Payment/eng') }}"><img
                                src="{{ asset('/images/provide.png') }}" /></a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/Encryption/eng') }}">Encryption & Decryption</a></p>

                    <p id="main-menu">Production API</p>
                    <p id="small-p" class="grey"><a href="{{ url('/production-intro/eng') }}">Introduction</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/production-gettoken/eng') }}">Get Token</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/production-payAPI/eng') }}">Pay API</a></p>
                    <p id="small-p" class="grey "><a href="{{ url('/production-merchant-callback/eng') }}">Merchant Callback</a></p>

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
                <h2 id="home-h">Payment Provider expiration times</h2>
                <hr class="line"><br><br>
                <p id="dev-home"><a>Payment Providers</a></p>
                <p id="home-p">Dinger offers integrations with almost all banks listed by Central Bank of Burma.
                    However, there are a few things you have to keep in mind in order to make your best experience with
                    Dinger. If you are in checkout form and chosen your desired payment provider, do keep in mind that
                    they have their time fo expiry. These are listed below.
                </p>
                <p id="home-p">• Onepay - 6 minutes</p>
                <p id="home-p">• KBZpay QR/Pin - 100 minutes</p>
                <p id="home-p">• KBZ Direct Pay - Active(after log in) Time Out (Total Session Time) = 30 minutes and
                    Inactive(before log
                    in) Time Out (Idle time) - 10 minutes</p>
                <p id="home-p">• Citizens Pin - 10 minutes</p>
                <p id="home-p">• M-Pitesan Pin - 1 day</p>
                <p id="home-p">• Wave Pay - callback returns when expire</p>
                <p id="home-p">• AYA Pay QR - 5 minutes, Minimum amount per transfer - 100MMK</p>
                <p id="home-p">• AYA Pay Pin - 30 minutes, Minimum amount per transfer - 100MMK</p>
                <p id="home-p">• MPU OTP - 5 minutes Minimum amount per transfer - 1000MMK</p>
                <p id="home-p">• CB Pay QR - 3 minutes</p>
                <p id="home-p">• MAB Mobile Banking OTP - 10 minutes</p>

            </div>
        </div>
    </div>
</div>



@endsection

@section('scripts')

@endsection