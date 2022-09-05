@extends('layouts.app')

@section('title')
Dinger | Home
@endsection

@section('content')

<div class="home">
    <div class="home-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <div id="centered-div">
                        <h1 id="top-title" class="mb-4">Innovating <span>payment</span> <br />infrastructure for
                            businesses</h1>
                        <p id="top-content">Dinger enables businesses to accept digital payment with or without
                            technical resources.</p>

                        <div class="my-5">
                            <a target="blank" href="https://portal.dinger.asia/signup"><button
                                    id="create-acc-btn">Create account</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="hero-image">

                        <img id="top-img" src="{{ asset('images/girls-3.png') }}" />

                        <div class="hero-shape">
                            <img id="top-img2" src="{{ asset('images/home-shape.svg') }}" />
                        </div>

                    </div>



                </div>
            </div>
        </div>
        <img id="mb-top-img2" src="{{ asset('images/home-shape.svg') }}" />
        <img id="mb-top-img" src="{{ asset('images/girls-3.png') }}" />
    </div>

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

    <div class="home-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <h2 style="padding-top:100px;" id="top-title" class="mb-4">An integrated financial platform for your
                        business </h2>
                    <p id="top-content">Scale up your business simply and efficiently.</p>

                    <div class="my-5">
                        <a target="blank" href="{{url ('/features')}}"><button id="create-acc-btn">Learn
                                More</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="pj-dash-img my-4" src="{{ asset('images/pj-dash.png') }}" />
</div>
<div class="home-3">
    <div class="container">

        <div class="row">
            <div class="col-md-4 col-sm-12 col-12">
                <div id="why-dinger-block">

                    <div class="block-icon"><img src="{{ asset('images/widerpayment-icon.svg') }}" /> </div>
                    <p id="head-text">Wider Payment Network</p>
                    <p>Various payment options for your customers which will lead to higher growth of business.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12 pl-lg-5">
                <div id="why-dinger-block">
                    <div class="block-icon"><img src="{{ asset('images/easyintegrate-icon.svg') }}" /> </div>
                    <p id="head-text">Easy Integration</p>
                    <p>A single API to get paid by various payment providers.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12 pl-lg-5">
                <div id="why-dinger-block">
                    <div class="block-icon"><img src="{{ asset('images/digitalapp-icon.svg') }}" /> </div>
                    <p id="head-text">Digital Application Process</p>
                    <p>100% digital application process to avoid physical presence or documents.</p>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4 col-sm-12 col-12">
                <div id="why-dinger-block">
                    <div class="block-icon"><img src="{{ asset('images/transparentpricing-icon.svg') }}" /> </div>
                    <p id="head-text">Transparent Pricing</p>
                    <p>Whether a startup, we provide transparent pricing for all sizes of businesses.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 col-12 pl-lg-5">
                <div id="why-dinger-block">
                    <div class="block-icon"><img src="{{ asset('images/banklevel-icon.svg') }}" /> </div>
                    <p id="head-text">Bank Level Security</p>
                    <p>Highly secured financial platform for your business.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 col-12 pl-lg-5">
                <div id="why-dinger-block">
                    <div class="block-icon"><img src="{{ asset('images/quicksettlement-icon.svg') }}" /> </div>
                    <p id="head-text">Quick Settlement</p>
                    <p>We settle back to you with the list of the record by customer & payment details.</p>
                </div>
            </div>

        </div>

    </div>
</div>

          <div class="home-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-12 connect-left p-0">
                        <img id="connect-img" src="{{ asset('images/user-management.png') }}" />
                    </div>
                    <div class="col-md-6 col-sm-12 col-12">
                        <div id="inner-connect2">
                            <div id="payment">
                                <h2 id="subtitle">User Management Feature</h2>
                            </div>
                            <p id="content">You can now manage your merchant dashboard’s user role.
You can choose the role we provided or you can request new role if necessary. Our provided roles :</p>

                            <div id="icon-text-row">
                            
                                <div id="icon-text-col1">
                                    <div id="gray-square"></div> 
                                </div>
                                <div id="icon-text-col2">
                                    <p id="blank">Administrator</p>
                                </div>
                            </div>
                            <div id="icon-text-row">
                                <div id="icon-text-col1">
                                    <div id="gray-square"></div>
                                </div>
                                <div id="icon-text-col2">
                                    <p id="blank">Operation</p>
                                </div>
                            </div>
                            <div id="icon-text-row">
                                <div id="icon-text-col1">
                                    <div id="gray-square"></div>
                                </div>
                                <div id="icon-text-col2">
                                    <p id="blank">Developer</p>
                                </div>
                            </div>
                            <div id="icon-text-row">
                                <div id="icon-text-col1">
                                    <div id="gray-square"></div>
                                </div>
                                <div id="icon-text-col2">
                                    <p id="blank">Viewer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<div class="home-2">
    <div class="container">
        <div class="row">
            <div class="containered">
                <h2 id="top-title5" class="mb-4">The best choice to connect with us. </h2>
                <div class="testiSlide">
                @foreach ($testimonials as $testimonial)
                <div id="{{$testimonial->business_id}}-testimonial">
                    <figure class="testimonial">
                        <blockquote>
                            {!! html_entity_decode($testimonial->content) !!}
                            <div class="btn"></div>
                            <div class="row">
                                <img style="width:80px;"
                                    src="https://admin-info.dinger.asia/images/testimonials/{{ $testimonial->profile_img }}" />
                                <div class="peopl">
                                    <h5 class="indentity">{{ $testimonial->name }}</h5>
                                    <p class="indentity">{{ $testimonial->position }}</p>
                                </div>
                                <div class="test-col">
                                    <img style="width:80px;"
                                        src="https://admin-info.dinger.asia/images/testimonials/{{ $testimonial->logo }}" />
                                </div>
                                </div>
                        </blockquote>
                    </figure>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('scripts')

@endsection