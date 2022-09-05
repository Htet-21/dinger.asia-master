@extends('layouts.app')

@section('content')
<div id="about-con" class="container-fluid">
    <div class="row">
        <div style=" border-top: 1px solid rgba(42,43,42,0.4);" id="about-payment">
            <img alt="dinger facebook payment background" src="/images/about-bg.png" />
            <div class="about-cap" id="about-caption">
                <h1>About Dinger </h1><br>
                <p>Dinger idea originated back in 2018 to provide
                    the seamless online payment system for startups and online businesses.
                    Officially found in early 2019 and our management team landed
                    the company first market as in Facebook online businesses.
                    As of today, we have talked with over 100 customers and working
                    with dozens of online shop owners to
                    overcome their payment challenges with our technology. </p>
            </div>
        </div>
    </div>
</div>

<div id="fb-con-2" class="container-fluid">
    <div class="container">
        <div id="fb-row-2" class="row">

            <div class="col-md-6 col-sm-6 col-12">
                <div id="about-sec-col">
                    <h1>About Partners</h1><br>
                    <p>Dinger build the partnership network<br>
                        with both local and international payment <br>
                        providers to accept any form of payments.  </p><br>
                    <a href="/partners"><button id="see-btn">
                            <p>See our partners here</p><img src="/images/arrow-icon.svg" />
                        </button></a><br>
                    <hr>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-12">
                <div id="about-sec-col">
                    <h1>Our clients</h1><br>
                    <p>Our clients are mostly Facebook online shop owners <br>
                        who are selling the products through Facebook messenger. </p><br>
                    <a href="/shoplist"><button id="see-btn">
                            <p>See our clients here</p><img src="/images/arrow-icon.svg" />
                        </button></a><br>
                    <hr>
                </div>
            </div>

            <div id="about-row" class="col-md-6 col-sm-6 col-12">
                <div id="about-sec-col">
                    <h1>Job</h1><br>                 
                    <p>Dinger is a fast growing company in <br>
                        the financial technology market in Myanmar. <br>
                        Join today's team to create a positive impact for <br>
                        our community and our country. </p><br>
                    <a href="/jobs"><button id="see-btn">
                            <p>Job list here</p><img src="/images/arrow-icon.svg" />
                        </button></a><br>
                    <hr>
                </div>
            </div>

        </div>
    </div>
</div>




@stop