@extends('layouts.developers')

@section('title')
Dinger | Developers
@endsection

@section('content')
<div id="user-guide-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-12 drop-left">

                <div id="hider">
                    <p id="main-menu">Get Started</p>
                    <p id="small-p" class="grey"><a href="{{ url('/developers/eng') }}">Home</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/revoke/eng') }}">Home</a></p>

                    <p id="main-menu">Staging API</p>
                    <p id="small-p" class="grey"><a href="{{ url('/stagingAPI-intro/eng') }}">Introduction</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/Get-token/eng') }}">Get Token</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/payAPI/eng') }}">Pay API</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/Merchant-callback/eng') }}">Merchant Callback</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/developers/eng') }}">Revoke Transaction</a></p>

                    <p id="main-menu">Prebuilt Checkout API</p>
                    <p id="small-p" class="grey"><a href="{{ url('/User-guide/eng') }}"><img
                                src="{{ asset('/images/userguide.png') }}" /></a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/Workflow/eng') }}">Workflow</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/Payload/eng') }}">Payload and Redirect URL</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/Payment/eng') }}">Payment Providers</a></p>
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
                <h2 id="home-h">Overall Dinger user guide</h2>
                <hr class="line"><br><br>
                <p id="home-p"><img src="{{ asset('/images/overall-flow.png') }}" />
                </p>
                <br><br>
                <p id="dev-home"><a>Step by step user journey guide</a></p>
                <p id="home-p">1. The merchant first has to register his account before creating a project. You can
                    register your account here at production or here at staging.</p>
                <p id="home-p"><img src="{{ asset('/images/login.png') }}" />
                </p>
                <p id="home-p">2. After registration, he can log in to his account at the merchant portal.</p>
                <p id="home-p">3. Subsequently, he has to create a project at a merchant portal. Only the project name
                    is required to create a project.</p>
                <p id="home-p">4. After the project has been created, he has to activate his dinger account to get the
                    api keys needed to initiate the payment api.</p>
                <p id="home-p"><img src="{{ asset('/images/testapi.png') }}" /></p>
                <p id="home-p">5. To activate the project, he has to fill in the required information about his business
                    and product.</p>
                <p id="home-p"><img src="{{ asset('/images/story.png') }}" /></p>
                <p id="home-p">6. Later on, admins have approved the project, and the merchant generates the api keys
                    required for the transaction. (Remark: the secret key will only show once. He has to copy it and
                    keep it in a safe place.)</p>
                <p id="home-p">7. You will need the client keys (Public API Key) and client ID (API Key prefix) to work
                    with checkout form. (Please see checkout form docs here).</p>
                <p id="home-p"><img src="{{ asset('/images/activate.png') }}" /></p>
                <p id="home-p">8. After getting the keys, add the callback URL and return URL. Then you will receive an
                    API key that will be used later in registering for our checkout form.</p>
                <p id="home-p"><img src="{{ asset('/images/return.png') }}" /></p>
                <p id="home-p">9. Before initiating the payment api, he has to turn on the payment providers and methods
                    of his desire in the settings page of the merchant portal. (In Setting)</p>
                <p id="home-p"><img src="{{ asset('/images/wallet.png') }}" /></p>
                <p id="home-p">10. He also has to fill in the required information to use dinger prebuilt checkout form.
                </p>
                <p id="home-p"><img src="{{ asset('/images/pre.png') }}" /></p>
                <p id="home-p">11. After that, the merchant can now initiate the payment api with the steps at prebuilt
                    checkout form and finish the transaction.</p>
                <p id="home-p">12. After the payment confirmation, the payment provider will transfer the funds.</p>
                <p id="home-p">13. If the payment is successful, the customer will receive the confirmation of payment.
                </p>
                <p id="home-p">14. If the payment is unsuccessful, it will display the error message and why that error
                    occurs. The Merchant will receive the callback URL for failure and error message.</p>

            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')

@endsection