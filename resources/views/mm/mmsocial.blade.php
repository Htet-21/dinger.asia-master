@extends('layouts.mm-app')

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
                    <h1 id="top-title2">များပြားသောငွေပေးချေမှုများကို လက်ခံနိုင်ရန် လွယ်ကူ လျင်မြန် စိတ်ချရသော ငွေလက်ခံမှုဖြေရှင်းချက်</h1>
                   <br>
                    <p id="top-content">ဘဏ်အကောင့်များစွာကို အချိန်ကုန်ခံပြီး ဖွင့်စရာမလိုတော့ဘဲ ငွေလက်ခံမှုအားလုံးကို စနစ်တစ်ခုတည်းကနေ တစ်စုတစည်းတည်း ထိန်းချုပ် စီမံခန့်ခွဲနိုင်မဲ့ ငွေလက်ခံမှု ဖြေရှင်းချက်တစ်ခုဖြစ်ပါသည်။ </p>
                    <br>
                    <a target="blank" href="https://portal.dinger.asia/signup"><button id="create-acc-btn">Get Started</button></a>
                </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12">


                    <div class="hero-image">

                    <img id="top-img" src="{{ asset('images/Rectangle 2.png') }}" />                                                                                                                   <br><br>

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
                        <p id="head-text">လူသုံးများလာခြင်း</p>
                        <p>လွယ်ကူ ရိုးရှင်းသော ငွေလက်ခံမှု ဖြေရှင်းချက်တစ်ခုရှိထားရုံဖြင့် စုံလင်သော အကောင့်ငွေပေးချေမှုများကို လက်ခံနိုင်သောကြောင့် သင့်ရဲ့ဝယ်သူများအတွက် အဆင်ပြေလွယ်ကူစေသည့်အပြင် သင့်ရဲ့စီးပွါးရေးထုတ်ကုန်များကိုလည်း လူသုံးများလာနိုင်ပါတယ်။ </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block" class="pl-lg-4">
                        <div class="block-icon"><img src="{{ asset('images/no-book-icon.svg') }}" /> </div>
                        <p id="head-text">စာရင်းစာအုပ်များလျော့ချနိုင်ခြင်း</p>
                        <p>အရင်လို စာရင်းစာအုပ်တွေအတွဲလိုက် မှတ်စရာမလိုတော့ဘဲ သင့်အရောင်းစာရင်းအားလုံးကို အွန်လိုင်းစနစ်ဖြင့် တစ်နေရာတည်းမှာ အလိုအလျောက်သိမ်းဆည်းပေးမည့် ပိုမိုကောင်းမွန်တဲ့ နည်းစနစ်ကို တည်ဆောက်လိုက်ပါ။ </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block" class="pl-lg-5">
                        <div class="block-icon"><img src="{{ asset('images/application-icon.svg') }}" /> </div>
                        <p id="head-text">လွယ်ကူစွာ လျှောက်ထားနိုင်ခြင်း</p>
                        <p>အသုံးပြုရန် လျှောက်ထားပြီး ၂နာရီအတွင်း စုံလင်သော ငွေပေးချေမှုနည်းလမ်းမျိုးစုံကို တစ်နေရာတည်းတွင် လက်ခံနိုင်ပါမည်။</p>
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
                    <h2 id="top">အချိန်မရွေး နေရာမရွေး ငွေလက်ခံနိုင်ခြင်း</h2>
                    <br />
                    <p id="top-content2">သင်၏ ဝယ်သူများသည် မည်သည့် အွန်လိုင်းငွေပေးချေမှုများကိုမဆို Messenger၊ Viber၊ Telegram၊ Whatsapp နှင့် အခြားသော စာတိုပေးပို့ရေးအက်ပ်များမှတစ်ဆင့် ဆောင်ရွက်နိုင်သည်။</p>
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
                            <h2 id="subtitle">သင့်လုပ်ငန်းလိုအပ်ချက်များအတွက် ကိုက်ညီသောပုံစံ</h2>
                            </div>
                            <p id="content">လွယ်ကူရိုးရှင်းသော ငွေလက်ခံမှုဖြေရှင်းချက်တစ်ခုရှိရုံနဲ့ သင့်ရဲ့ ဝယ်သူမျိုးစုံကနေ တစ်ချိန်တည်း တစ်နေရာတည်းမှာ ကြိုက်တဲ့အကောင့်ကနေ ငွေလက်ခံနိုင်တာဖြစ်လို့ သင့်ရဲ့ လိုအပ်ချက်အားလုံးကို တစ်စုတစ်စည်းတည်း အောင်မြင်ပြီးစီးနိုင်ပါတယ်။</p>

                            <div id="icon-text-row">
                                <div id="icon-text-col1">
                                    <div id="gray-square"></div>
                                </div>
                                <div id="icon-text-col2">
                                    <p id="blank">နည်းပညာပေါင်းစပ်မှု မလိုအပ်ပါ</p>
                                </div>
                            </div>
                            <div id="icon-text-row">
                                <div id="icon-text-col1">
                                    <div id="gray-square"></div>
                                </div>
                                <div id="icon-text-col2">
                                    <p id="blank">ဝက်ဘ်ဆိုဒ် (သို့) အက်ပ်ရှိရန် မလိုအပ်ပါ</p>
                                </div>
                            </div>
                            <div id="icon-text-row">
                                <div id="icon-text-col1">
                                    <div id="gray-square"></div>
                                </div>
                                <div id="icon-text-col2">
                                    <p id="blank">ကြိုက်တဲ့အကောင့်ကနေ ငွေလက်ခံနိုင်ပါတယ်</p>
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

                        <h2 id="top-title3">တစ်နေရာတည်းမှာ စာရင်းအားလုံးကို ကြည့်ရှုနိုင်ခြင်း</h2>
                        <p id="top-content3">အရောင်းအဝယ်နှင့် ပတ်သက်သောစာရင်းအားလုံးကို တစ်နေရာတည်းတွင် တစ်စုတစ်စည်း ကြည့်ရှုစစ်ဆေးနိုင်ပါသည်။ </p>

                        <h5 id="sale">အရောင်းမှတ်တမ်း</h5><br>
                        <p>အရောင်းစာရင်းများကို တစ်နေရာတည်းတွင် ပြန်လည် စိစစ်ကြည့်ရှုနိုင်ခြင်းအားဖြင့် အနာဂတ်ရောင်းအားမြှင့်တင်နိုင်ဖို့အတွက် အထောက်အပံ့ကောင်းတစ်ခု ဖြစ်နိုင်ပါသည်။ </p>                                                                                <br><br>
                        <h5 id="sale">စာရင်းထုတ်ခြင်း</h5><br>
                        <p>အရောင်းစာရင်းများကို အချိန်နှင့်တပြေးညီ ကြည့်ရှုနိုင်ရန်အတွက် excel format ဖြင့် စိစစ်ကြည့်ရှုပါ။  </p>
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
                            <h2 id="title">ငွေရှင်းပြီးနောက် လက်ငင်းအီးမေးလ်လက်ခံဖြတ်ပိုင်းကို ရယူပါ။</h2>
                            <br /></div>
                            <p id="content">အောင်မြင်စွာ ပြီးစီးခဲ့သောဝယ်ယူမှုတိုင်းအတွက် သင့်ဝယ်သူများထံ အီးမေးလ်အတည်ပြုချက်ကို ပေးပို့ပါမည်။ ယခုပဲ စာရင်းသွင်းပါ။ </p>
                            <div id="icon-text-row">
                                <div id="icon-text-col1">
                                    <div id="gray-square"></div>
                                </div>
                                <div id="icon-text-col2">
                                    <p id="blank">အရောင်းပြီးစီးပြီးနောက် အတည်ပြုချက်</p>
                                </div>
                            </div>
                            <div id="icon-text-row">
                                <div id="icon-text-col1">
                                    <div id="gray-square"></div>
                                </div>
                                <div id="icon-text-col2">
                                    <p id="blank">ပေါင်းစည်းမှုများ မလိုအပ်ပါ</p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
        <div  style="background: #FAFAFA;" class="social-merchant">
        <div class="container">
            <div class="row">

                <div id="middle-content" class="col-md-6 col-sm-12 col-12">
                        <h2 id="top-title4">စိတ်ချယုံကြည်ပြီး သေသပ်သော ငွေလက်ခံမှုပလက်ဖောင်း</h2>
                        <br />
                        <p id="top-content4">ရိုးရှင်းပြီး အသုံးပြုရလွယ်ကူသော ငွေပေးချေမှုတစ်ခုဖြစ်သော်လည်း ၎င်းသည် ဘဏ်အဆင့်လုံခြုံရေးနှင့်အတူ တည်ဆောက်ထားပါသည်။ သင့်လုပ်ငန်းအတွက် လွယ်ကူရိုးရှင်းပြီး လုံခြုံသော ငွေလက်ခံမှုဖြေရှင်းချက်တစ်ခုကို အခုပဲ ရယူပါ။</p>
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
