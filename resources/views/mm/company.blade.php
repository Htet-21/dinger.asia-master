@extends('layouts.mm-app')

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
                    <h1 id="top-title">ကျွန်ုပ်တို့၏ယုံကြည်ချက်</h1>
                    <br />
                    <p id="top-content">Dinger ဖြင့် လက်တွဲထားပါက မြန်မာနိုင်ငံရှိစီးပွါးရေးလုပ်ငန်းများသည် မည်သည့်အကောင့်မှမဆိုငွေပေးချေမှုများကို ရိုးရိုးရှင်းရှင်းနှင့်ထိရောက်စွာလက်ခံနိုင်သည်။</p>
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
                        <h1 id="title">Dinger အကြောင်း</h1>
                        <br />
                        <p id="content">Dinger သည် ၂၀၁၈ ခုနှစ်တွင်စတင်ခဲ့ပြီး၊ ၂၀၁၉ ခုနှစ်အစောပိုင်းတွင် တည်ထောင်ခဲ့သည်။  စီးပွားရေးလုပ်ငန်းများသည် Dinger ၏နည်းပညာဖြင့် ငွေပေးချေမှုအားလုံးကို API တစ်ခုတည်းမှ လက်ခံနိုင်သည်။ ငွေပေးချေမှုအမျိုးမျိုးမှ ငွေသားများကိုစီမံခန့်ခွဲခြင်းသည် အသေးစားနှင့်အလတ်စားစီးပွားရေးလုပ်ငန်းရှင်များအတွက်အချိန်များစွာ ရင်းနှီးရန်လိုအပ်သည်။ ထို့ကြောင့် Dinger သည် တိကျသောငွေပေးငွေယူမှတ်တမ်းများနှင့်အတူ မြန်ဆန်သောဝန်ဆောင်မှုများအတွက် အချိန်တိုအတွင်းဆောင်ရွက်နိုင်စေရန် ကူညီပေးသည်။</p>
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

            <div class="row">
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
                            <p><a href="<?php echo request()->getSchemeAndHttpHost(); ?>/achievement/{{$achievement->id}}/" id="achi-link">Read more <img src="{{ asset('images/link-icon.svg') }}" /></a></p>
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
                <div class="col-md-6 col-sm-12 col-12">
                    <div id="mvv">
                        <h2>Mission</h2>
                        <br />
                        <p id="content">အသေးစားနှင့်အလတ်စားစီးပွားရေးလုပ်ငန်းများအား ငွေပေးချေမှုဆိုင်ရာပြဿနာများကိုကူညီရန်နှင့် ရေရှည်တည်တံ့နိုင်သောစီးပွားရေးလုပ်ငန်းများတည်ထောင်နိုင်ရန်အတွက် ခေတ်မီဘဏ္ဍာရေး၀န်ဆောင်မှုများကို အသုံးပြုထားသည်။</p>
                    </div>
                    <div id="mvv-right">
                        <h2>Vision</h2>
                        <br />
                        <p id="content">မြန်မာနိုင်ငံရှိစီးပွားရေးလုပ်ငန်းများအတွက် ခိုင်မာသောငွေပေးချေမှုစနစ်ကို တီထွင်ပေးသည်။</p>
                    </div>
                    <div id="value">
                        <h2>Value</h2>
                        <br />
                        <p id="content">စီးပွားရေးလုပ်ငန်းများအနေဖြင့် များစွာသောငွေပေးချေမှု ၀န်ဆောင်မှုများမှလာသည့် ဝယ်သူများထံမှငွေပေးချေမှုများကို စုံလင်စွာလက်ခံနိုင်ရန် ခက်ခဲနေကြသည်။ အရင်းအမြစ်များကိုဖြုန်းတီးခြင်းမရှိဘဲပေးသူတိုင်းထံမှငွေပေးချေမှုကိုလက်ခံနိုင်ရန် သင်၏လုပ်ငန်းအတွက် Dinger ရှိသည်။</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <img id="value-img" src="{{ asset('images/mac-table.jpg') }}" />
                </div>
            </div>
        </div>
    </div>

    <div class="company-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <div id="our-partner">
                        <h1 id="op-title" class="mb-4">ကျွန်ုပ်တို့၏ပါတနာများ</h1>
                        <p id="cs-content">ကျွန်ုပ်တို့သည် ဖော်ပြထားသော မြန်မာနိုင်ငံရှိ ငွေပေးချေမှုဝန်ဆောင်မှုပေးသူများနှင့် ဂုဏ်ယူစွာလက်တွဲလုပ်ဆောင်နေပါသည်။</p>
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

        </div>
    </div>

    <div class="company-6">
        <div id="full-col1">
            <div id="wwu">
                <h1 id="op-title" class="mb-3">လက်တွဲလုပ်ဆောင်ရန် <img id="wwu-icon" src="{{ asset('images/wwu-icon.svg') }}" /></h1>
                <br />
                <p id="content">Dinger သည်မြန်မာနိုင်ငံရှိစီးပွါးရေးလုပ်ငန်းအားလုံးအားငွေပေးချေမှုကိုတစ်နေရာတည်းတွင်လက်ခံရန်အတွက်ပေါင်းစည်းထားသောငွေပေးချေမှုကို ပေးထားခြင်းဖြင့်ဖြေရှင်းပေးသည်။ ကျွန်ုပ်တို့၏ပတ်ဝန်းကျင်နှင့်နိုင်ငံ၏ အကောင်းဆုံးသောငွေပေးချေမှုအကျိုးသက်ရောက်မှုအတွက် ယနေ့ပဲ Dinger အဖွဲ့သို့ဆက်သွယ်ပါ။</p>

            </div>
        </div>
        <div id="full-col2">
            <div id="swu">
                <h1 id="swu-title" class="mb-3">ဝန်ဆောင်မှုပေးခြင်း <img id="swu-icon" src="{{ asset('images/swu-icon.svg') }}" /></h1>
                <br />
                <p id="content">စီးပွါးရေးလုပ်ငန်းများအနေဖြင့် သင်၏ဝယ်သူများအား ပိုမိုကောင်းမွန်သော ငွေပေးချေမှုဝန်ဆောင်မှုများပေးနိုင်ရန်အတွက် Dinger က ကူညီပေးမှာပါ။</p>

            </div>
        </div>
    </div>

    <div id="our-story" class="company-7">
        <div id="company-story">
            <h1 id="cs-title" class="mb-4">Dinger ဖြစ်တည်လာပုံ</h1>
            <p id="cs-content">စီးပွါးရေးလုပ်ငန်းများအတွက်စုံလင်သောငွေပေးချေမှုများကိုပေါင်းစည်းထားသောငွေပေးချေမှုပလက်ဖောင်းဖြင့်တစ်နေရာတည်းတွင်လက်ခံလိုက်ပါ။</p>
            <br />
        </div>

        <div class="cs-right" id="cs-row">
            <div id="cs-col1">

            </div>
            <div id="cs-col2">
                <img id="cs-icon" src="{{ asset('images/cs-icon.svg') }}" />
                <p id="cs-date">ဇန်နဝါရီလ ၂၀၁၈ ခုနှစ်</p>
                <p id="cs-bold">စတင်ဖြစ်ပေါ်လာပုံ</p>
                <p id="cs-date">အိုင်ဒီယာသည် ၂၀၁၈ ခုနှစ်တွင် စတင်ပေါ်ပေါက်ခဲ့ပြီး ၂၀၁၉ ခုနှစ်တွင် အကောင်အထည်ဖော်ကာ တရားဝင် တည်ထောင်ခဲ့ပါသည်။ ကျွန်ုပ်တို့သည် အွန်လိုင်းစီးပွါးရေးလုပ်ငန်းများနှင့် အသေးစား၊အလတ်စား စီးပွါးရေးလုပ်ငန်းများအားလုံးအတွက် လွယ်ကူအဆင်ပြေသော အွန်လိုင်းငွေပေးချေမှုစနစ်ကို ပံ့ပိုးပေးနိုင်ရန်အတွက်ဖြစ်ပါသည်။</p>
            </div>
        </div>

        <div class="cs-left" id="cs-row">
            <div id="cs-col1">
                <img id="cs-icon-right" src="{{ asset('images/cs-icon.svg') }}" />
                <p id="cs-date">ဒီဇင်ဘာလ ၂၀၁၉ ခုနှစ်</p>
                <p id="cs-bold">အိုင်ဒီယာနှင့်ထုတ်ကုန်ကို တရားဝင်ကြေညာခြင်း</p>
                <p id="cs-date">ကျွန်ုပ်တို့သည် မည်သည့်ငွေပေးချေမှုမျိုးကိုမဆို လက်ခံနိုင်ရန်အတွက် ပြည်တွင်း၊ပြည်ပငွေပေးချေမှုပံ့ပိုးသူများနှင့် တရားဝင်ချိတ်ဆက်နိုင်သော ကွန်ရက်တစ်ခုကို စတင်တည်ဆောက်ခဲ့ပါသည်။</p>
            </div>
            <div id="cs-col2">

            </div>
        </div>

        <div class="cs-right" id="cs-row">
            <div id="cs-col1">

            </div>
            <div id="cs-col2">
                <img id="cs-icon" src="{{ asset('images/cs-icon.svg') }}" />
                <p id="cs-date">မတ်လ ၂၀၂၀ ခုနှစ်</p>
                <p id="cs-bold">ဘဏ်နှင့်ဒီဂျစ်တယ်ငွေပေးချေမှုပေါင်း ၁၆ခု နှင့် တရားဝင်ပေါင်းစည်းချိတ်ဆက်ခြင်း</p>
                <p id="cs-date">ကျွန်ုပ်တို့၏ ငွေပေးချေမှုပလက်ဖောင်းသည် Facebook တွင် ရောင်းချသော အွန်လိုင်းစီးပွါးရေးလုပ်ငန်းများအတွက် စုံလင်သောငွေပေးချေမှုပုံစံအမျိုးမျိုးကို လက်ခံနိုင်ရန် ရည်ရွယ်ထားသောကြောင့် မြန်မာနိုင်ငံရှိ ဘဏ်နှင့် ဒီဂျစ်တယ်ငွေပေးချေမှုပေါင်း ၁၆ ခုနှင့် တရားဝင် ပေါင်းစည်းချိတ်ဆက်ခဲ့ပါသည်။</p>
            </div>
        </div>

        <div class="cs-left" id="cs-row">
            <div id="cs-col1">
                <img id="cs-icon-right" src="{{ asset('images/cs-icon.svg') }}" />
                <p id="cs-date">ဒီဇင်ဘာလ ၂၀၂၀ ခုနှစ်</p>
                <p id="cs-bold">တရားဝင်မိတ်ဆက်ခြင်း</p>
                <p id="cs-date">ကျွန်ုပ်တို့၏ ထုတ်ကုန်နှင့် ပတ်သက်၍ တရားဝင်မိတ်ဆက်ခြင်းကို ဒီဇင်ဘာလ ၁၆ ရက်၊ ၂၀၂၀ ခုနှစ်တွင် လစဉ်ကြေး ၁လ အခမဲ့ပေးခြင်းဖြင့် ဆောင်ရွက်ခဲ့ပါသည်။</p>
            </div>
            <div id="cs-col2">

            </div>
        </div>

    </div>

</div>

@endsection

@section('scripts')

@endsection
