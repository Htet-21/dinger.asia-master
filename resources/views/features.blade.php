@extends('layouts.app')

@section('title')
Dinger | Features
@endsection

@section('content')

<div class="enterprise features-page">
    <div class="enterprise-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <div id="centered-div">
                    <h1 id="top-title">Key Features</h1>
                    <br />
                    <p id="top-content">Grow your business with a cornerstone of an integrated payment system to empirically rationalize functions of your work. This is how we support and commit day-to-day operations.</p>
                    </div>
                    <!-- <button id="create-acc-btn">Explore features</button> -->
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <img src="{{ asset('images/transaction-bg.png') }}" />
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="enterprise-2">
        <div class="container">
            <h2 id="features-title">Features</h2>
            <div class="row">
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block">
                        <div id="icon-div1">
                        </div>
                        <h4>Smart Dashboard</h4>
                        <br />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block">
                        <div id="icon-div2">
                        </div>
                        <h4>Easy Integration</h4>
                        <br />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block">
                        <div id="icon-div3">
                        </div>
                        <h4>Faster On-Boarding Process</h4>
                        <br />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block">
                        <div id="icon-div4">
                        </div>
                        <h4>Transparent Pricing</h4>
                        <br />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block">
                        <div id="icon-div5">
                        </div>
                        <h4>Safe and Secure</h4>
                        <br />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block">
                        <div id="icon-div6">
                        </div>
                        <h4>Settlement Process</h4>
                        <br />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>

        </div>
    </div> -->

    <div class="enterprise-3">
        <div id="pj-color-bg">

        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12 p-0">
                    <img id="pj-pc-img" src="{{ asset('images/pj-status.png') }}" />
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <div id="pj-right">
                        <h2 id="pj-title">Projects</h2>
                        <br />
                        <p id="top-content">Businesses can create as many projects as they required to manage all business units in a single platform. </p>
                        <br />
                        <br />

                    </div>
                </div>
            </div>
            <img id="pj-mb-img" src="{{ asset('images/pj-status.png') }}" />
        </div>
    </div>

    <div class="enterprise-4">
        <div id="pj-color-bg-right">

        </div>
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12 col-12">
                    <div id="pj-right">
                        <h2 id="pj-title">Transactions</h2>
                        <br />
                        <p id="top-content">A real-time transactions dashboard for your to manage your financial transactions quicker and faster. </p>
                        <br />
                        <br />

                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-12 p-0">
                    <img src="{{ asset('images/cat-transaction.png') }}" />
                </div>

            </div>
        </div>
    </div>

    <div class="enterprise-5">


        <div id="pj-color-bg">

        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12 p-0">
                    <img id="pj-pc-img" src="{{ asset('images/balance-bg.png') }}" />
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <div id="pj-right">
                        <h2 id="pj-title">Balance</h2>
                        <br />
                        <p id="top-content">Track your all settlement data effective from Dinger.</p>
                        <br />
                        <br />

                    </div>
                </div>
            </div>
            <img id="pj-mb-img" src="{{ asset('images/balance-bg.png') }}" />
        </div>



    </div>

    <div class="enterprise-6">
        <div id="pj-color-bg-right">

        </div>
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12 col-12">
                    <div id="pj-right">
                        <h2 id="pj-title">Provider & Methods</h2>
                        <br />
                        <p id="top-content">Manage your payment providers in a single page. But remember the more the options, the more the business can accept. </p>
                        <br />
                        <br />
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-12">
                    <img  src="{{ asset('images/provider.png') }}" />
                </div>

            </div>
        </div>
    </div>

</div>

@endsection

@section('scripts')

@endsection
