@extends('layouts.app')

@section('content')

<div id="fb-payment">
    <img alt="dinger facebook payment background" src="/images/fb-payment-bg.svg" />
    <div id="fb-caption">
        <h1>Facebook online shops payment </h1><br>
        <p>A stress-free payment system customized <br>
            for Facebook online shop owners<br>
            to receive the payments from any payment services.</p>
            <button id="fb-btn"><a target="blank" href="https://dinger.store/login">Sign In</a> / <a target="blank" href="https://dinger.store/register">Up</a></button>
    </div>
</div>

<div id="fb-con-2" class="container-fluid">
    <div class="container">
        <h1>Three reasons to start using Dinger for your online shop.</h1><br>
        <div id="fb-row-2" class="row">

            <div class="col-md-4 col-sm-4 col-12">
                <div id="fb-sec-col">
                    <img src="/images/grow-sale.svg" />
                    <h2>Grow Sale</h2>
                    <p>Boost your sale by<br>
                        providing worry-free <br>
                        payment experiences <br>
                        for your customers. </p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-12">
                <div id="fb-sec-col">
                    <img src="/images/record-icon.svg" />
                    <h2>Recorded sale and <br>
                        delivery address</h2>
                    <p>Every sale information <br>
                        will be recorded on <br>
                        our portal for you to get rid of <br>
                        using books and pens to record sale. </p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-12">
                <div id="fb-sec-col">
                    <img src="/images/reliability.svg" />
                    <h2>Reliability</h2>
                    <p>With our prepaid and reclaim <br>
                        system of payment,<br>
                        we share the trust with you and <br>
                        your customers. <br>
                        With us, you can reduce <br>
                        fraud cases and prank calls. </p>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="container-fluid">
    <div id="contact-btn">
        <p>Ready to start?</p>
        <button><a href="/contact-sale">Contact Sale</a></button>
    </div>
</div>

@stop