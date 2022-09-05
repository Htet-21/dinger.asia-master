@extends('layouts.mm-app')

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
                    <h1 id="top-title2">အွန်လိုင်းကနေ ချေးငွေလျှောက်ထားပြီး <br> သင့်စီးပွါးရေးအတွက် ငွေကြေးဆိုင်ရာအခက်အခဲများကို ဖြေရှင်းလိုက်ပါ</h1><br>
                    <p id="top-content">သင့်စီးပွါးရေးလုပ်ငန်းအတွက် ငွေကြေးလိုအပ်ချက်တွေကို လွယ်ကူ လျင်မြန် တိကျစွာ ကူညီပေးဖို့ Dinger ရှိနေပါပြီ</p>
                    <br>
                    <a class="nav-link" target="blank" href="https://portal.dinger.asia/signup"><button id="create-acc-btn">Get Started</button></a>
                </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12">


                    <div class="hero-image">

                    <img id="top-img" src="{{ asset('images/funding.jpg') }}" />                                                                                                                   <br><br>

                        <div class="hero-shape">
                            <img id="top-img2" src="{{ asset('images/home-shape.svg') }}" />
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <img id="mb-top-img2" src="{{ asset('images/home-shape.svg') }}" />
        <img id="mb-top-img" src="{{ asset('images/funding.jpg') }}" />

    </div>

    <div id="features-div" class="ecommerce-2">
        <div class="container">

            <div class="row fb-2-con">
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block">
                        <div class="block-icon"><img src="{{ asset('images/growsales-icon.svg') }}" /> </div>
                        <p id="head-text">လွယ်ကူမြန်ဆန်သော အွန်လိုင်းချေးငွေ လျှောက်ထားခြင်း</p>
                        <p>အွန်လိုင်းကနေ အလွယ်တကူ ချေးငွေလျှောက်ထားနိုင်ခြင်းကြောင့် အချိန်ကုန် သက်သာခြင်း</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block" class="pl-lg-4">
                        <div class="block-icon"><img src="{{ asset('images/stressfree-icon.svg') }}" /> </div>
                        <p id="head-text">စာရွက်စာတမ်း အနည်းငယ်သာ လိုအပ်ခြင်း</p>
                        <p>စာရွက်စာတမ်း အများကြီး မလိုအပ်တာကြောင့် အလုပ်မရှုပ်စေခြင်း</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block" class="pl-lg-5">
                        <div class="block-icon"><img src="{{ asset('images/reliability-icon.svg') }}" /> </div>
                        <p id="head-text">အွန်လိုင်းမှမြန်ဆန်စွာ ချေးငွေလွှဲပေးနိုင်ခြင်း</p>
                        <p>ချေးငွေလျှောက်ထားခြင်း အောင်မြင်သည်နှင့် အချိန်တိုအတွင်း အွန်လိုင်းမှ ချေးငွေလွှဲပေးခြင်း</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <hr id="fb-hr" />

    <div class="ecommerce-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <h1 id="eco-top-title">လွယ်ကူသော လုပ်ငန်းစဉ်</h1>
                    <br />
                    <p id="top-content">ချေးငွေနှင့် သက်ဆိုင်သော ပြုလုပ်ပုံအဆင့်ဆင့်သည် အွန်လိုင်းမှတစ်ဆင့်တစ်နေရာတည်းမှသာ လုပ်ငန်းအစအဆုံး ပြုလုပ်နိုင်ခြင်းကြောင့် လွယ်ကူမြန်ဆန်ခြင်း </p>
                </div>

            </div>
        </div>
    </div>
    <div id="features-div" class="ecommerce-2">
        <div class="container">

            <div class="row fb-2-con">
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block">
                        <div class="block-icon"><img src="{{ asset('images/growsales-icon.svg') }}" /> </div>
                        <p id="head-text">ချေးငွေ လျှောက်လွှာတင်ခြင်း</p>
                        <p>အွန်လိုင်းကနေဘဲ စာရွက်စာတမ်းအနည်းငယ်နဲ့ အချိန်တိုအတွင်း ချေးငွေလျှောက်လွှာ အလွယ်တကူတင်ခြင်း</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block" class="pl-lg-4">
                        <div class="block-icon"><img src="{{ asset('images/stressfree-icon.svg') }}" /> </div>
                        <p id="head-text">ချေးငွေတွက်ချက်ခြင်း</p>
                        <p>ပြန်လည်ပေးသွင်းရမယ့် ငွေပမာဏကို တွက်ချက်ကြည့်ရှုနိုင်ခြင်း</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block" class="pl-lg-5">
                        <div class="block-icon"><img src="{{ asset('images/reliability-icon.svg') }}" /> </div>
                        <p id="head-text">ချေးငွေပြန်ဆပ်ခြင်း</p>
                        <p>အွန်လိုင်းကနေဘဲ ချေးငွေ အလွယ်တကူ ပြန်လည်ပေးနိုင်ခြင်း</p>
                    </div>
                </div>
            </div>

        </div>

    </div>                                                                                                                                                  <br>   <br>                                                                                                                                        <br>                                                                                                                                                                            <br><br>
    <div class="social-merchant">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12 col-12">

                        <h2 id="top-title3">အွန်လိုင်းငွေပေးချေမှု လုပ်ငန်းစဉ်မှတစ်ဆင့် ချေးငွေပြန်လည်သိမ်းဆည်းခြင်း</h2>
                        <p id="top-content3">လွယ်ကူ ၊ လျင်မြန် ၊ စိတ်ချရသော အွန်လိုင်းမှတစ်ဆင့် ချေးငွေပြန်လည် သိမ်းဆည်းခြင်းကို အသုံးပြုထားသောကြောင့် အချိန်ကုန် လူပင်ပန်းမှုကို များစွာလျှော့ကျစေသည်။</p>
                        <h5 id="sale">သုံးစွဲသူအတွက် အဆင်ပြေစေမည့် လုပ်ငန်းစဥ်</h5><br>
                        <p>ဒီဂျစ်တယ်ငွေ အမျိုးမျိုးဖြင့် QR code မှဖြစ်စေ ၊ App မှဖြစ်စေ နည်းလမ်းစုံဖြင့် နှစ်သက်ရာ ရွေးချယ်ပေးဆောင်နိုင်ပါသည်။</p>                                                                                <br><br>
                        <div id="icon-text-row">
                                <div id="icon-text-col1">
                                    <div id="gray-square"></div>
                                </div>
                                <div id="icon-text-col2">
                                    <p id="blank">သပ်ရပ်လှပသော စာရင်းမျက်နှာစာ</p>
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
