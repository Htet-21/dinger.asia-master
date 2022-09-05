@extends('layouts.app')

@section('title')
Dinger | Company
@endsection

@section('content')

<div class="company">

    <div class="company-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <div id="centered-div">
                    <h1 id="top-title">What we believe</h1>
                    <br />
                    <p id="top-content">Dinger enables businesses in Myanmar to accept digital payments from any accounts in the most simple and efficient way. Do more with less.</p>
                    <br />
                    <a href="#our-story"><button id="create-acc-btn">See our story</button></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <img id="blue-com" src="{{ asset('images/company-top.svg') }}" />
                </div>
            </div>
        </div>
    </div>

    <div class="company-bot">
        <div id="half-com-bg">

        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-10">
                    <div id="company-row">
                        <div id="company-col">
                            <h3>{{$wwd_content->enquiries}}+</h3>
                            <p style="font-size:16px;">Enquiries</p>
                        </div>
                        <div id="company-col">
                            <h3>{{$wwd_content->merchants}}+</h3>
                            <p style="font-size:16px;">Merchants</p>
                        </div>
                        <div id="company-col">
                            <h3>{{$wwd_content->transactions}}+</h3>
                            <p style="font-size:16px;">Transactions</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-2">
                    <img id="yellow-com" src="{{ asset('images/yellow-circle.svg') }}" />
                </div>

                <img id="mb-yellow-and-blue-com" src="{{ asset('images/yellow_n_blue.svg') }}" />

            </div>
        </div>
    </div>

    <div class="company-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12 p-0">
                    <img id="wwr-img" src="{{ asset('images/men-3.jpg') }}" />
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <div id="wwr-right">
                        <h1 id="title">Who we are</h1>
                        <br />
                        <p id="content">Dinger's idea originated back in 2018 and officially found in early 2019. With Dinger’s technology, businesses will be able to accept all fragment payments through one single API. Managing cash flow from multiple payment sources and calculating numbers can consume excessive time for SME owners. Dinger’s here to help by enabling fast and secure online transactions for service purchases with accurate transaction records in the shortest settlement time frame.</p>
                        <br />
                    </div>
                </div>
            </div>
        </div>
        <div id="aboutus-right">

        </div>
    </div>


    <div class="company-3">
        <div class="container">
            <div id="achi-head">
                <h1 id="achi-title">Awards <br> and Recognition</h1>
                <p id="achi-content">2018 - 2021</p>
            </div>

            <div class="row m-0">

                @php
                $count = 0;
                @endphp

                @foreach ($achievements as $achievement)

                @php
                if($count == 3) break;
                @endphp

                <div class="col-md-12 col-sm-12 col-12 d-flex justify-content-center">

                    <div id="achi-detail">
                        <div id="top-achi-detail">
                            <img id="bg-achi" src="https://admin-info.dinger.asia/images/{{$achievement->path_name}}" />
                            <img id="icon-achi" src="{{ asset('images/left-icon.png') }}" />
                        </div>
                        <div id="bot-achi-detail">
                            <p id="achi-col-title">{{$achievement->achievement_title}}</p>
                            @php $limited=Str::limit($achievement->achievement_content, 100);
                            @endphp
                            <div id="achi-col-content">{!!html_entity_decode($limited)!!}</div>
                            <p><a href="<?php echo request()->getSchemeAndHttpHost(); ?>/achievement/{{$achievement->id}}/eng" id="achi-link">Read more <img src="{{ asset('images/link-icon.svg') }}" /></a></p>
                        </div>
                    </div>

                </div>

                @php
                $count++;
                @endphp

                @endforeach

            </div>
        </div>
    </div>





    <div class="company-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6 col-sm-12 col-12 d-flex flex-column justify-content-between">
                    <div id="mvv">
                        <h2>Mission</h2>
                        <p id="content">To use technology to assist Start-ups and SMEs with payment issues and utilizemodern financial services for sustainable and scalable services.</p>
                    </div>
                    <div id="mvv-right">
                        <h2>Vision</h2>
                        <p id="content">To innovate the payment infrastructure of business in Myanmar and to provide a stress-free settlement experience and provide quick access to modern financial services using minimal human resources.</p>
                    </div>
                    <div id="value">
                        <h2>Value</h2>
                        <p id="content">Dozens of payment service providers in Myanmar are creating a headache for businesses to accept the payments coming from their customers. In order to accept the payments from every provider without wasting resources, you are here at Dinger.</p>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-sm-12 col-12">
                    <div class="mvu-image">
                        <img id="value-img" src="{{ asset('images/mac-table.jpg') }}" />
                        <img class="yellow-box" src="{{ asset('images/yellow-box.svg') }}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="company-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <div id="our-partner">
                        <h1 id="op-title" class="mb-4">Our partners</h1>
                        <p id="cs-content">We are proudly working together with trusted payment providers in Myanmar.</p>
                        <br />
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

        <div id="partner-div">
        <div class="container">
            
            <div class="partner-col">
                <div id="kbz-logo">

                </div>
            </div>
            
            <div class="partner-col">
                <div id="abank-logo">

                </div>
            </div>

            <div class="partner-col">
                <div id="uab-logo">

                </div>
            </div>

            <div class="partner-col">
                <div id="mab-logo">

                </div>
            </div>

            <div class="partner-col">
                <div id="kbzpay-logo">

                </div>
            </div>
            
            <div class="partner-col">
                <div id="wavepay-logo">

                </div>
            </div>

            <div class="partner-col">
                <div id="truemoney-logo">

                </div>
            </div>

            <div class="partner-col">
                <div id="cbpay-logo">

                </div>
            </div>

            <div class="partner-col">
                <div id="aya-logo">

                </div>
            </div>

            <div class="partner-col">
                <div id="onepay-logo">

                </div>
            </div>
            
            <div class="partner-col">
                <div id="visa-logo">

                </div>
            </div>

            <div class="partner-col">
                <div id="master-logo">

                </div>
            </div>

            <div class="partner-col">
                <div id="mpu-logo">

                </div>
            </div>

            <div class="partner-col">
                <div id="jcb-logo">

                </div>
            </div>

            <div class="partner-col">
                <div id="citizen-logo">

                </div>
            </div>

            <div class="partner-col">
                <div id="easypay-logo">

                </div>
            </div>
            
            <div class="partner-col">
                <div id="ok-logo">

                </div>
            </div>

            <div class="partner-col">
                <div id="saisaipay-logo">

                </div>
            </div>

            <!-- <div class="partner-col">
                <div id="cb-logo">

                </div>
            </div> -->

            <div class="partner-col">
                <div id="mpitesan-logo">

                </div>
            </div>

            <div class="partner-col">
                <div id="mytelpay-logo">

                </div>
            </div>

        </div>
    </div>
 
    <div class="company-6">
        <div id="full-col1">
            <div id="wwu">
                <h1 id="op-title" class="mb-3">Work with us <img id="wwu-icon" src="{{ asset('images/wwu-icon.svg') }}" /></h1>
                <br />
                <p id="content">Dinger empowers the payment all businesses in Myanmar by providing unified payment solution to accept all payments at a fingertip. Join today’s team for excellect payment impact for our community and country.</p>

            </div>
        </div>
        <div id="full-col2">
            <div id="swu">
                <h1 id="swu-title" class="mb-3">Serve with us <img id="swu-icon" src="{{ asset('images/swu-icon.svg') }}" /></h1>
                <br />
                <p id="content">If your business wants to give a better payment solution for your customers, Dinger is here to serve your customers’ payment convenience.</p>

            </div>
        </div>
    </div>

    <div id="our-story" class="company-7">
        <div id="company-story">
            <h1 id="cs-title" class="mb-4">Company Story</h1>
            <p id="cs-content">A payment gateway for your business to accept all payments at a fingertip.</p>
            <br />
        </div>

        <div class="cs-right" id="cs-row">
            <div id="cs-col1">

            </div>
            <div id="cs-col2">
                <img id="cs-icon" src="{{ asset('images/cs-icon.svg') }}" />
                <p id="cs-date">January 2018</p>
                <p id="cs-bold">First Origin</p>
                <p id="cs-date">Idea originated back in 2018 and officially founded in 2019 to provide the seamless online payment system for startups and online businesses.</p>
            </div>
        </div>

        <div class="cs-left" id="cs-row">
            <div id="cs-col1">
                <img id="cs-icon-right" src="{{ asset('images/cs-icon.svg') }}" />
                <p id="cs-date">December 2019</p>
                <p id="cs-bold">Idea Launch and Proof Of Concept Model</p>
                <p id="cs-date">Dinger build the partnership network with both local and international payment providers to accept any form of payments.</p>
            </div>
            <div id="cs-col2">

            </div>
        </div>

        <div class="cs-right" id="cs-row">
            <div id="cs-col1">

            </div>
            <div id="cs-col2">
                <img id="cs-icon" src="{{ asset('images/cs-icon.svg') }}" />
                <p id="cs-date">March 2020</p>
                <p id="cs-bold">Onboarded 16 Partnerships</p>
                <p id="cs-date">Our clients are mostly Facebook online shop owners who are selling the products through Facebook messenger.</p>
            </div>
        </div>

        <div class="cs-left" id="cs-row">
            <div id="cs-col1">
                <img id="cs-icon-right" src="{{ asset('images/cs-icon.svg') }}" />
                <p id="cs-date">December 2020</p>
                <p id="cs-bold">Serving Clients</p>
                <p id="cs-date">Launch is officially started in December 16th, 2020 with free one time offer.</p>
            </div>
            <div id="cs-col2">

            </div>
        </div>

    </div>

</div>

@endsection

@section('scripts')

@endsection
