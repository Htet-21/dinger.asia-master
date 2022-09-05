@extends('layouts.developers')

@section('title')
Dinger | Developers
@endsection

@section('content')
<div id="workflow-wrapper">
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
                    <p id="small-p" class="grey"><a href="{{ url('/Workflow/eng') }}"><img
                                src="{{ asset('/images/workflow.png') }}" /></a></p>
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
                <h2 id="home-h">Prebuilt Checkout form workflow</h2>
                <hr class="line"><br><br>

                <p id="dev-home"><a>Description</a></p>
                <p id="home-p">This API documentation is for business that wants to integrate with Dinger platform to
                    accept
                    payments digitally. Customers of the businesses can purchase items or services on the businesses’
                    platform and Dinger will facilitate the payments together with corresponding payment providers for
                    every
                    transaction.

                    <br><br>
                    There is a thing to note here. You can either open this checkout form in the same tab as your store
                    or
                    in the new tab, leaving your store's tab open. We, Dinger, personally encourage merchants to open
                    the
                    form in the same tab as your store.
                </p><br><br>
                <p id="dev-home"><a>DINGER PREBUILT CHEKOUT FLOW PROCESS</a></p>
                <p id="home-p"><img src="{{ asset('/images/Prebuilt_checkout.png') }}" />
                </p>
                <br><br>
                <p id="dev-home"><a>Step by step user journey</a></p>
                <p id="home-p">1. Customers first have to fill order information and payment information in the dinger
                    prebuilt checkout form and click the pay button.</p>
                <p id="home-p">2. The merchant first has to activate the project in the merchant portal. He will get the
                    public key and secret key from the merchant portal after activating the project.</p>
                <p id="home-p">3. The merchant will receive the information from the customer and send the data to the
                    Dinger server after encryption.</p>
                <p id="home-p">• Remark: items from customer’s order information must be an json array string. So items
                    should be stringified first.</p>
                <p id="home-p">4. The data should first be encrypted with the RSA algorithm using the public key.</p>
                <p id="data">encrypted_data = rsa(jsonStringify(data),publicKey)</p>
                <p id="home-p">5. Then the result payload data should be encoded to base64 format.</p>
                <p id="data2">base64_payload = Base64.getEncoder().encodeToString(encrypted_data)</p>
                <p id="home-p">6. The hash value can be obtained by encrypting the payload with hmac sha256 using the
                    secret
                    key from the merchant portal.</p>
                <p id="data3">hashed_value</p>
                <p id="home-p">7. After all the encryption processes, the payload is ready to be sent to the server.</p>
                <p id="data4">Sample link-BaseUrl?payload=base64_payload&hashValue=hashed_value
                    BaseUrl-<a href="https://prebuilt.dinger.asia">https://prebuilt.dinger.asia</a>
                    <br>
                </p>
                <p id="home-p">8. When dinger receives the data from the merchant, it initiates the payment with the
                    corresponding payment provider.</p>
                <p id="home-p">9. Customer needs to confirm the payment with OTP or PIN code.</p>
                <p id="home-p">10. Merchants have to add return URL for form payment (to redirect if there's a payment
                    error
                    on form payment and after the payment is successful). <br> (example return URL (GET Method)- <br>
                    <a
                        href=" https://sannkyi-testing.dingerpay.org/success?merchantOrderId=5133&state=SUCCESS)">https://sannkyi-testing.dingerpay.org/success?merchantOrderId=5133&state=SUCCESS)</a>
                </p>
                <p id="note">Note : Form token expires in 15 minutes so, if you have not paid to the respective
                    provider, do
                    refresh the page. For provider tokens, please <a class="line_link" href="/Payment/eng">read here</a>
                    for their times of expiry.</p>

            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')

@endsection