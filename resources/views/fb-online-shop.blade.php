@extends('layouts.app')

@section('title')
Dinger | Facebook Online Shop Payment
@endsection

@section('content')

<div class="fb-online-shop">

    <div class="fb-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <h1 id="fb-top-title">Online Shop Payment</h1>
                    <br />
                    <p id="top-content">A stress-free payment system customized for Facebook online shop owners to receive the payments from any payment service.</p>
                    <br />
                    <button id="fb-explore-btn">Explore features</button>
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <img id="top-img" src="{{ asset('images/phone-laptop.svg') }}" />
                    <img id="top-img2" src="{{ asset('images/blue-shape.svg') }}" />
                </div>
            </div>
        </div>
        <img id="mb-top-img" src="{{ asset('images/phone-laptop.svg') }}" />
    </div>

    <div class="fb-2">
        <div class="container">

            <div class="row fb-2-con">
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block">
                        <img id="feat-img" src="{{ asset('images/blue-shape.svg') }}" />
                        <h4>Grow Sale</h4>
                        <br />
                        <p>Boost your sale by providing worry-free payment experiences for your customers.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block">
                        <img id="feat-img" src="{{ asset('images/blue-shape.svg') }}" />
                        <h4>Recorded sale</h4>
                        <br />
                        <p>Every sale information will be recorded on our portal for you to get rid of using books and pens to record sale.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block">
                        <img id="feat-img" src="{{ asset('images/blue-shape.svg') }}" />
                        <h4>Reliability</h4>
                        <br />
                        <p>With our prepaid and reclaim system of payment, we share the trust with you and your customers.</p>
                    </div>
                </div>
            </div>
            <hr id="fb-hr" />
        </div>

    </div>

    <div class="fb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <h1 id="fb-top-title">Connect Every payment</h1>
                    <br />
                    <p id="top-content">Dinger enables businesses in Myanmar to accept payments from any accounts in the most simple and efficient way. Do more with less.</p>
                    <br />
                    <br />
                    <img id="two-girls-img" src="{{ asset('images/two-girls.svg') }}" />
                </div>
                <div class="col-md-6 col-sm-12 col-12">

                </div>
            </div>
        </div>
    </div>

    <div class="fb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">

                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <div id="features-block">
                        <h3>01</h3>
                        <br />
                        <h4>Easy integration</h4>
                        <br />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <br id="fb-br" />
                    <br />
                    <div id="features-block">
                        <h3>02</h3>
                        <br />
                        <h4>Easy integration</h4>
                        <br />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <div id="fb-blue-block">
                        <h2>Facebook<br /> Online Shop Payment</h2>
                        <br />
                        <p>Dinger enables businesses in Myanmar to accept payments from any accounts in the most simple and efficient way. Do more with less.</p>
                        <br />
                    </div>
                </div>
            </div>
        </div>
        <img id="pay-link-img" src="{{ asset('images/pay-link.svg') }}" />
    </div>

    <div class="fb-6">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <img id="pay-form-img" src="{{ asset('images/pay-form.svg') }}" />
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <h1 id="fb-top-title">Accept payment insteadly</h1>
                    <br />
                    <p id="top-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                    <br />
                    <br />
                </div>
            </div>
            <img id="mb-pay-form-img" src="{{ asset('images/pay-form.svg') }}" />
        </div>
    </div>

</div>

@endsection

@section('scripts')

@endsection