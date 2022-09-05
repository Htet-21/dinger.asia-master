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
                <h2 id="home-h">Transaction Status And Response Codes</h2>
                <hr class="line">
                <p id="dev-home"><a>Transaction Status</a></p>
                <p id="home-p">You can refer to transaction's status codes from the following table.</p>
                <table class="table table-responsive-sm">
                    <thead>
                        <br>
                        <tr>
                            <th scope="col">Status</th>
                            <th scope="col">Status Description</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">

                        <tr>
                            <td scope="row">SUCCESS</td>
                            <td>Transaction Success</td>
                           
                        </tr>
                        <tr>
                            <td scope="row">PENDING</td>
                            <td>Transaction Pending</td>
                           
                        </tr>
                        <tr>
                            <td scope="row">CANCELLED</td>
                            <td>User cancel transaction</td>
                           
                        </tr>
                        <tr>
                            <td scope="row">TIMEOUT</td>
                            <td>Transaction Time Out or Expired</td>
                           
                        </tr>
                        <tr>
                            <td scope="row">DECLINED</td>
                            <td>Transaction is declined by payment providers</td>
                           
                        </tr>
                        <tr>
                            <td scope="row">
                            ERROR</td>
                            <td>Miscellaneous errors(such as BILL_COLLECTION_FAILED, INSUFFICIENT_BALANCE, ACCOUNT_LOCKED, Max invalid OTP, Max Daily Transaction limit reached on wallet)
                                <br>For more details, please refer to transaction message in merchant dashboard in transaction detail.</td>
                          
                        </tr>
                        <tr>
                            <td scope="row">SYSTEM_ERROR</td>
                            <td>System or Transaction error by payment providers</td>
                           
                        </tr>
                        <tr>
                            <td scope="row">SETTLED </td>
                            <td>Payment is already settled by Dinger.</td>
                           
                        </tr>
                       

                    </tbody>
                </table>
                <p id="dev-home"><a>Response Codes</a></p>
                <p id="home-p">You can refer to API response codes from the following table.
                </p>    
                <table class="table table-responsive-sm">
                    <thead>
                        <br>
                        <tr>
                            <th scope="col">Response Codes</th>
                            <th scope="col">Response Description</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">

                        <tr>
                            <td scope="row">000</td>
                            <td>Success</td>
                           
                        </tr>
                        <tr>
                            <td scope="row">012</td>
                            <td>Cannot decrypt! Please check you encrypt correctly with correct method and key!</td>
                           
                        </tr>
                        <tr>
                            <td scope="row">013</td>
                            <td>Cannot authenticate! Please check and correct your merchant name, project name or full merchant api key!</td>
                           
                        </tr>
                        <tr>
                            <td scope="row">014</td>
                            <td>Invalid Total Amount!</td>
                           
                        </tr>
                        <tr>
                            <td scope="row">015</td>
                            <td>Order Id is already existed!</td>
                           
                        </tr>
                        <tr>
                            <td scope="row">016</td>
                            <td>Please activate provider and method name in dashboard</td>
                          
                        </tr>
                        <tr>
                            <td scope="row">102</td>
                            <td>Invalid request parameters
                                (eg. Please include email , bill city or bill address for visa, master, jcb)</td>
                           
                        </tr>
                        <tr>
                            <td scope="row">401 </td>
                            <td>Token Expire</td>
                           
                        </tr>
                        <tr>
                            <td scope="row">017</td>
                            <td>Request Failed!
                                (Due to System or Network error)</td>
                           
                        </tr>
                       

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')

@endsection