@extends('layouts.mm-app')

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
                            <h1 id="top-title" class="mb-4">စီးပွါးရေးလုပ်ငန်းများအတွက် ဆန်းသစ်သော 
                                <span>ငွေပေးချေမှု </span>
                            </h1>
                            <p id="top-content">ယခုဘဲ သင့် ရဲ့ လုပ်ငန်းအတွက် ဒီဂျစ်တယ်ငွေပေးချေ မှု အစုံမှ ငွေလက်ခံလိုက် ရ
                                အောင်။ software developer တစ်ယောက်မှ မရှိတောင် ငွေလက်ခံနိုင်နေပါပြီ။ </p>

                            <div class="my-5">
                                <a target="blank" href="https://portal.dinger.asia/signup"><button
                                        id="create-acc-btn">အကောင့်ဖွင့်ရန်</button></a>
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

                        <h2 style="padding-top:100px;" id="top-title" class="mb-4">စီးပွားရေးလုပ်ငန်းများအတွက်
                            စိတ်ချရတဲ့
                            finanial platform </h2>
                        <p id="top-content">အချိန်တိုတိုနဲ့ လွယ်လွယ် ကူကူ သင့် လုပ်ငန်းကို တိုးချဲ့လိုက်ရအောင်။ </p>

                        <div class="my-5">
                            <a target="blank" href="{{ url('/features') }}"><button id="create-acc-btn">အခုပဲ
                                    တိုးချဲ့လိုက်ရအောင်။ </button></a>
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
                        <p id="head-text">ကျယ်ပြန့်သော အကျိုးတူမိတ်ဖက် များ</p>
                        <p>ဝယ်သူများအတွက် စုံလင်သောငွေပေးချေမှုနည်းလမ်းများပေးထားခြင်းက သင်၏စီးပွါးရေးလုပ်ငန်းတိုးတက်မှုကို
                            အထောက်အကူဖြစ်စေသည်။</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12 pl-lg-5">
                    <div id="why-dinger-block">
                        <div class="block-icon"><img src="{{ asset('images/easyintegrate-icon.svg') }}" /> </div>
                        <p id="head-text">လွယ်ကူ သော ချိတ်ဆက်နိုင်မှု</p>
                        <p>API တစ်ခုတည်းနှင့် စုံလင်သောငွေပေးချေမှုများကို လက်ခံနိုင်သည်။</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12 pl-lg-5">
                    <div id="why-dinger-block">
                        <div class="block-icon"><img src="{{ asset('images/digitalapp-icon.svg') }}" /> </div>
                        <p id="head-text">ဒီဂျစ်တယ်နည်းဖြင့်လျှောက်လွှာတင်နိုင်ခြင်း</p>
                        <p>စာရွက်စာတမ်းများဖြည့်စွက်ရခြင်းကို လျှော့ချပြီး ဒီဂျစ်တယ်နည်းဖြင့်သာ အလွယ်တကူ
                            လျှောက်လွှာတင်နိုင်သည်။</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4 col-sm-12 col-12">
                    <div id="why-dinger-block">
                        <div class="block-icon"><img src="{{ asset('images/transparentpricing-icon.svg') }}" /> </div>
                        <p id="head-text">ပွင့်လင်းမြင်သာစွာဖော်ပြထားသော စျေးနှုန်း</p>
                        <p>မည်သည့်လုပ်ငန်းအမျိုးအစားအတွက်ကိုမဆို ပွင့်လင်းမြင်သာသော ဈေးနှုန်းကိုသာ ဖော်ပြထားသည်။</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 col-12 pl-lg-5">
                    <div id="why-dinger-block">
                        <div class="block-icon"><img src="{{ asset('images/banklevel-icon.svg') }}" /> </div>
                        <p id="head-text">ဘဏ်များ နည်းတူ လုံခြုံမှုရှိခြင်း</p>
                        <p>သင်၏လုပ်ငန်းအတွက် လုံခြုံမှုမြင့်မားသော ပလက်ဖောင်းတစ်ခုတည်ဆောက်ပေးသည်။</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 col-12 pl-lg-5">
                    <div id="why-dinger-block">
                        <div class="block-icon"><img src="{{ asset('images/quicksettlement-icon.svg') }}" /> </div>
                        <p id="head-text">မြန်ဆန်သော ငွေပေးချေခြင်း</p>
                        <p>ဖောက်သည်များနှင့်သက်ဆိုင်သော ငွေပေးချေခြင်းဆိုင်ရာစာရင်းနှင့်အသေးစိတ်အချက်အလက်များကို
                            ပြန်လည်အပ်နှံပါမည်</p>
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
                        <div id="inner-connect2-mm">
                            <div id="payment">
                                <h2 id="subtitle">User Management Feature</h2>
                            </div>
                            <p id="content">Merchant Dashboard ရဲ့ User Role ကို စီမံခန့်ခွဲနိုင်ပါပြီ။ ဖော်ပြထားသော User Role များကို ရွေးချယ်နိုင်မယ့်အပြင် လိုအပ်သလို User Role အသစ်များကို တောင်းဆိုနိုင်ပါတယ်။ ကျွန်တော်တို့ ထောက်ပံ့ပေးထားတဲ့ User Role များ</p>

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
                            <div id="{{ $testimonial->business_id }}-testimonial">
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
