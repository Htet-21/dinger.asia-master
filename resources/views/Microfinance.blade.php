@extends('layouts.app')

@section('title')
Dinger | Microfinance
@endsection

@section('content')

<div class="ecommerce">

    <div class="ecommerce-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <div id="centered-div">
                        <h1 id="top-title2">A Unified Payment Platform,Better Repayment Rates</h1><br>
                        <p id="top-content">Claims the faster repayments with an integrated and unified payment solution
                            with multiple banks and digital wallets.</p>
                        <br>
                        <a class="nav-link" target="blank" href="https://portal.dinger.asia/signup"><button
                                id="create-acc-btn2">Get Started</button></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12">


                    <div class="hero-image">

                        <img id="top-img" src="{{ asset('images/funding.jpg') }}" /> <br><br>

                        <div class="hero-shape">
                            <img id="top-img2" src="{{ asset('images/home-shape.svg') }}" />
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <img id="mb-top-img2" src="{{ asset('images/home-shape.svg') }}" />
        <img id="mb-top-img" src="{{ asset('images/funding.jpg') }}"  />

    </div>

    <div id="features-div" class="ecommerce-2">
        <div class="container">

            <div class="row fb-2-con">
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block">
                        <div class="block-icon"><img
                                src="{{ asset('images/icons-updated/icons-updated/multiple-payment-icon.svg') }}" />
                        </div>
                        <p id="head-text">Accept Multiple Payments</p>
                        <p>Your borrowers can make repayments from any corner of local payments via different methods.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block" class="pl-lg-4">
                        <div class="block-icon"><img
                                src="{{ asset('images/icons-updated\icons-updated\tracking-icon.svg') }}" /> </div>
                        <p id="head-text">Enhance Tracking System</p>
                        <p>Reduce the stress for tracking the transactions on different accounts and keep monitoring
                            them from a single account. </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block" class="pl-lg-5">
                        <div class="block-icon"><img
                                src="{{ asset('images/icons-updated\icons-updated\save-icon.svg') }}" /> </div>
                        <p id="head-text">Save Time</p>
                        <p>Diminish the redundant steps of recollecting payments can save time consuming and workloads
                            for both lenders and borrowers.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    {{-- <hr id="fb-hr" /> --}}

    <div style="background: #FAFAFA;" class="ecommerce-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <h2 id="eco-top-title">How it works</h2>
                    <br />
                    <p id="top-content">Transform your cross-platform by deep-linking with a unified payment gateway by
                        experiencing secured transactions.</p>
                </div>

            </div>
        </div>
        <div class="container">

            <div class="row fb-2-con-2">
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block">
                        <div class="block-icon"><img
                                src="{{ asset('images/icons-updated\icons-updated\save-icon.svg') }}" /> </div>
                        <p id="head-text">Secure Payments</p>
                        <p>Work with bank-level secured payment system which can accelerate your recollecting payments.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block" class="pl-lg-4">
                        <div class="block-icon"><img
                                src="{{ asset('images/icons-updated\icons-updated\integration-icon.svg') }}" /> </div>
                        <p id="head-text">Fully Integration</p>
                        <p>Ensure the system to get organized and aligned tracking with all loans and repayments.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block" class="pl-lg-5">
                        <div class="block-icon"><img
                                src="{{ asset('images/icons-updated\icons-updated\compatibility-icon.svg') }}" /> </div>
                        <p id="head-text">Compatibility</p>
                        <p>Repayments are well-compatible with different devices at any place at a time.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="social-merchant">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12 col-12">

                    <h2 id="top-title3">Loan recollection via online payment process</h2>
                    <p id="top-content3">The online repayment process can be done by choosing the payment method and
                        payment options based on their preferences. </p>

                    <h5 id="sale">Integration</h5><br>
                    <p>The system integration can help you to accept 20+ different banks and digital wallets account
                        payments in a shortest time frame of resettlement.</p> <br><br>
                    <div id="icon-text-row">
                        <div id="icon-text-col1">
                            <img src="{{ asset('images/done-icon.svg') }}" />
                        </div>
                        <div id="icon-text-col2">
                            <p id="blank">API integration</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12 p-0">
                    <img src="{{ asset('images/Ewallet.jpg') }}" />
                </div>
            </div>
        </div>


        @endsection

        @section('scripts')

        @endsection