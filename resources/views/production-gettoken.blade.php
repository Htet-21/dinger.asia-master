@extends('layouts.developers')

@section('title')
Dinger | Developers
@endsection

@section('content')
<div id="production-gettoken-wrapper">
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
                    <p id="small-p" class="grey"><a href="{{ url('/Payment/eng') }}">Payment Providers</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/Encryption/eng') }}">Encryption & Decryption</a></p>

                    <p id="main-menu">Production API</p>
                    <p id="small-p" class="grey"><a href="{{ url('/production-intro/eng') }}">Introduction</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/production-gettoken/eng') }}"><img
                                src="{{ asset('/images/getT.png') }}" /></a></p>
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
                <h2 id="home-h">Get Token</h2>
                <hr class="line"><br><br>

                <p id="dev-home">Get Authentication</p>
                <p id="home-p">Sign up your staging merchant account <a target="blank" href="https://merchantportal-staging.dinger.asia/">here</a> to get your projectName, staging apiKey and merchantName.
                </p><br><br>
                <p id="dev-home">Get Token<img id="get" src="{{ asset('/images/get.png') }}" /></p>
                                    @markdown
                                    @verbatim
                                    {{baseurl}}api/token?projectName={{projectName}}&apiKey={{apiKey}}&merchantName={{merchantName}}
                                    @endverbatim
                                    @endmarkdown
                <!-- <p id="home-p"><a href=" https://staging.dinger.asia/payment-gateway-uat/"><img src="{{ asset('/images/baseurlq.jpg') }}" />
                </p> -->
                <p id="home-p">baseurl for production - https://api.dinger.asia/
                </p>    
                <p id="home-p"><img src="{{ asset('/images/frame 55.png') }}" />
                </p><br><br>
                <p id="dev-home"><a>PARAMS</a></p>
                <hr class="line">
                <p id="home-p"><img src="{{ asset('/images/param.png') }}" />
                </p>
                <div class="code2">
                                <div class="container">
                                    <div class="row">
                                        <button id="result">Example Request (Get Token)</button>
                                    </div><br>
                <p id="dev-home">    @markdown
                                    @verbatim
                                    curl --location --request GET '{{baseurl}}api/token?projectName={{projectName}}&apiKey={{apiKey}}&merchantName={{merchantName}}'
                                    @endverbatim
                                    @endmarkdown</p>
                                </div>
                            </div>

            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')

@endsection