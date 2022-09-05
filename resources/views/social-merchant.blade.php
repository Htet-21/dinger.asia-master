@extends('layouts.app')

@section('title')
    Dinger | Social Merchant
@endsection

@section('content')

    <div class="ecommerce">

        <div class="ecommerce-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-12">
                        <div id="centered-div">
                        <h1 id="top-title2">Fast and secure check out solution to accept multiple payment providers.</h1>
                        <br>
                        <p id="top-content">No time wasting on opening multiple bank accounts. Fast and secure check out
                            solution which comes with a unified single dashboard. </p>
                        <br>
                        <a target="blank" href="https://portal.dinger.asia/signup"><button id="create-acc-btn">Get
                                Started</button></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-12">
                        <div class="hero-image">

                            <img id="top-img" src="{{ asset('images/Rectangle 2.png') }}" /> <br><br>

                            <div class="hero-shape">
                                <img id="top-img2" src="{{ asset('images/home-shape.svg') }}" />
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <img id="mb-top-img2" src="{{ asset('images/home-shape.svg') }}" />
            <img id="mb-top-img" src="{{ asset('images/Rectangle 2.png') }}" />

        </div>

        <div id="features-div" class="ecommerce-2">
            <div class="container">

                <div class="row fb-2-con">
                    <div class="col-md-4 col-sm-12 col-12">
                        <div id="features-block">
                            <div class="block-icon"><img src="{{ asset('images/customer-icon (1).svg') }}" /> </div>
                            <p id="head-text">More customers</p>
                            <p>Easy and simple check out solution for your business to accept multiple bank accounts from a
                                single account. </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12">
                        <div id="features-block" class="pl-lg-4">
                            <div class="block-icon"><img src="{{ asset('images/no-book-icon.svg') }}" /> </div>
                            <p id="head-text">Bye Bye Book</p>
                            <p>Take your book away. You will have a powerful dashboard to manage your sale transactions.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12">
                        <div id="features-block" class="pl-lg-5">
                            <div class="block-icon"><img src="{{ asset('images/application-icon.svg') }}" /> </div>
                            <p id="head-text">Easy appllication</p>
                            <p>Register and start accepting the payments within 2 hours. </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <hr id="fb-hr" />

        <div class="accept">
            <div class="slogen">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <div id="time-block-div">
                            <h2 id="top">Accept anytime anywhere.</h2>
                            <br />
                            <p id="top-content2">You customers will be able to pay with any digital payment providers to
                                complete the payments through Messenger, Viber, Telegram, Whatsapp and basically every
                                messaging apps.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="social-merchant">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-12 connect-left p-0">
                        <img id="connect-img" src="{{ asset('images/photo1638982896.jpeg') }}" />
                    </div>
                    <div class="col-md-6 col-sm-12 col-12">
                        <div id="inner-connect2">
                            <div id="payment">
                                <h2 id="subtitle">A form that fits for your business needs</h2>
                            </div>
                            <p id="content">Grow your business with our solution. A easy and simple form that will allow to
                                accept from multiple customers at once. Register now!</p>

                            <div id="icon-text-row">
                                <div id="icon-text-col1">
                                    <div id="gray-square"></div>
                                </div>
                                <div id="icon-text-col2">
                                    <p id="blank">No technical integration required</p>
                                </div>
                            </div>
                            <div id="icon-text-row">
                                <div id="icon-text-col1">
                                    <div id="gray-square"></div>
                                </div>
                                <div id="icon-text-col2">
                                    <p id="blank">No website needed</p>
                                </div>
                            </div>
                            <div id="icon-text-row">
                                <div id="icon-text-col1">
                                    <div id="gray-square"></div>
                                </div>
                                <div id="icon-text-col2">
                                    <p id="blank">Accept from any payments</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="social-merchant">

            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-sm-12 col-12">

                        <h2 id="top-title3">Check all transacitons in one dashboard</h2>
                        <p id="top-content3">A powerful dashboard that will allow you to see all the transactions in a
                            single place. </p>

                        <h5 id="sale">Sale History</h5><br>
                        <p>The past sale history in a single place to empower your tomorrow transactions. </p> <br><br>
                        <h5 id="sale">Export excel</h5><br>
                        <p>Get your real-time update sale data in excel format at everytime you need. </p>

                    </div>
                    <div class="col-md-6 col-sm-12 col-12 p-0">
                        <img src="{{ asset('images/Paymentlink.jpg') }}" />
                    </div>
                </div>
            </div>
        </div>
        <div class="social-merchant">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-12 connect-left p-0">
                        <img id="connect-img2" src="{{ asset('images/Thanks.jpg') }}" />
                    </div>
                    <div class="col-md-6 col-sm-12 col-12">
                        <div id="inner-connect2">
                            <div id="payment">
                                <h2>Get instant email receipt after checkout</h2>
                            </div>
                            <p id="content">Email confirmation will send to your customers on every success purchase.
                                Register now. </p>
                            <div id="icon-text-row">
                                <div id="icon-text-col1">
                                    <div id="gray-square"></div>
                                </div>
                                <div id="icon-text-col2">
                                    <p id="blank">After-sale confirmation</p>
                                </div>
                            </div>
                            <div id="icon-text-row">
                                <div id="icon-text-col1">
                                    <div id="gray-square"></div>
                                </div>
                                <div id="icon-text-col2">
                                    <p id="blank">No integration required</p>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="background: #FAFAFA;" class="social-merchant">
            <div class="container">
                <div class="row">

                    <div id="middle-content" class="col-md-6 col-sm-12 col-12">
                        <h2 id="top-title4">Yes! It’s also beautiful and secure checkout ever</h2>
                        <br />
                        <p id="top-content4">A simple and user friendly checkout yet it comes with the bank level security.
                            Easy, simple and secure check out solution for your business.</p>
                        <br />
                    </div>

                    <div class="col-md-6 col-sm-12 col-12 p-0">
                        <img src="{{ asset('images/Group 4985 1.png') }}" />
                    </div>

                </div>
            </div>
        </div>

    @endsection

    @section('scripts')

    @endsection
