@extends('layouts.developers')

@section('title')
Dinger | Developers
@endsection

@section('content')
<div id="woocommerce-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-12 drop-left">

                <div id="hider">
                    <p id="main-menu">Get Started</p>
                    <p id="small-p" class="grey"><a href="{{ url('/developers/eng') }}">Home</a></p>

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
                    <p id="small-p" class="grey "><a href="{{ url('/production-merchant-callback/eng') }}">Merchant Callback</a></p>

                    <p id="main-menu">woocommerce</p>
                    <p id="small-p" class="grey"><a href="{{ url('/woocommerce-intro/eng') }}"><img src="{{ asset('/images/Frame 29.png') }}" /></a></p>

                    <p id="main-menu"><a href="{{ url('Status/eng') }}">Transaction Status and Request url</a></p>

                    <hr class="line">
                    <p id="main-menu"><img class="dev-logo" src="{{ asset('images/Dinger Logo Black.svg') }}" alt="Dinger Logo"><a href="{{ url('/eng') }}">Back TO Dinger website</a></p>

                </div>
            </div>
            <div class="col-md-8 col-sm-8 col-12 drop-right  pl-4 ">
                <!--  <div class="row">-->
                <!-- <div class="col-md-5 col-sm-12 col-12 pl-5"> -->
                <h2 id="home-h">Dinger Plugin Introduction</h2>
                <hr class="line">
                <p id="dev-home"><a>Dinger</a></p>
                <p id="home-p">Dinger enables businesses in Myanmar to accept digital payments from any accounts in the
                    most simple and efficient way. Do more with less.</p>
                <p id="dev-home"><a>About Plugin</a></p>
                <p id="home-p">Using Dinger Payment Plugin in Woocommerce lets you accept payments with KBZ I Banking,
                    KBZ Pay, AYA Pay, Wave Pay, MPU, Citizens, One Pay, Sai Sai Pay, MPitesan, Visa, Master, and JCB.
                </p>
                <p id="home-p"><a class="line_link"
                        href="https://drive.google.com/file/d/1P1ciNPbNhyZGQul0oV8zOgo-xHoO_d77/view">Download Plugin
                        Here</a></p>
                <p id="home-p"><a class="line_link"
                        href="https://drive.google.com/file/d/1i8wpRWWCjyu7DufFpEdZlKnWR-a_VYHJ/view">Download Plugin
                        installation and setup guide line here</a></p>
                <p id="dev-home"><a>Plugin Setup</a></p>
                <p id="home-p">To setup the Dinger plugin in woocommerce. You can check all the steps in our
                    documentation (documentation link -
                    <a class="line_link"
                        href="/User-guide/eng">Overall User Guide)
                    </a>
                </p>
                <p id="home-p">• You need to create a Dinger merchant account and create the project (for your website)
                    in
                    the Dinger merchant dashboard. Dinger Portal Link -
                    <a class="line_link" href="https://portal.dinger.asia/signup">
                        (https://portal.dinger.asia/signup)</a>
                </p>
                <p id="home-p">• Activate the project to receive API key and Public key (these data need to fill in
                    plugin
                    settings). And then the Dinger team will check your project and they will approve your project.
                    After your project gets approved, you can create the API key and Public key. This data was displayed
                    one time. So you need to copy the API key and Public key from the Dinger merchant portal and save it
                    in the plugin settings (API key field and Public key field).</p>
                <p id="home-p">• To get the Callback key, you need to fill the return URL and callback URL in Dinger
                    Merchant Portal. These URL were shown in our plugin settings page. Copy the URL and fill in the
                    Dinger portal. If you click the create button, It will generate a Callback key. And then fill it in
                    plugin settings (callback key field).</p>
                <p id="home-p"><img src="{{ asset('/images/woocommerce-img.png') }}" /></p>
                <p id="home-p"><img src="{{ asset('/images/woocommerce-img2.png') }}" /></p>
                <p id="home-p">• To get the client ID and secret key, you need to click the Checkout form from the left
                    sidebar menu. In the Checkout form page, you have to upload your website logo and fill the shop name
                    or website name. Return URL needs to fill the redirect URL from plugin settings. After you click the
                    create button, it will generate the Client ID and secret key. And then fill these data in plugin
                    settings.</p>
                <p id="home-p"><img src="{{ asset('/images/woocommerce-img3.png') }}" /></p>
                <p id="home-p">• When all processes are finished, you must click the save button in the plugin settings.
                </p>

            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')

@endsection