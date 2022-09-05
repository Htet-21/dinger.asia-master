@extends('layouts.mm-invoice')

@section('title')
Dinger | Invoice Feature
@endsection

@section('content')
<div id="invoice-page-wrapper">

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div id="partner-block-div">
                    <h1>လွယ်ကူ လျင်မြန်တဲ့ <br> အွန်လိုင်းငွေတောင်းခံမှု</h1>
                    <br />

                    <p id="partner-content2">အွန်လိုင်းငွေတောင်းခံလွှာသည် ဝယ်ယူသူအားလုံး၏ အချက်အလက်များနှင့် ငွေတောင်းခံမှုစနစ်အားလုံးကို တစ်နေရာတည်းမှ စနစ်တကျ စီမံခန့်ခွဲနိုင်အောင် ဆောင်ရွက်ပေးပါတယ်။ ဘေလ်ကောက်ခံခြင်းစနစ်ကို မြှင့်တင်ပြီး ဒစ်ဂျစ်တယ်ငွေပေးချေမှုအားလုံးကို စက္ကန့်ပိုင်းအတွင်း လက်ခံလိုက်ပါ။</p>

                </div>
            </div>
            <div id="partner-own">
                <a href="{{ url('/contact/eng') }}"><button>စတင်ရန်</button></a>
            </div>

        </div>
    </div>
    <div style="background: #FAFAFA;" class="invoice">
        <div class="home-3">
            <div class="container">
                <h3 id="why">ငွေကောက်ခံမှုတိုင်းအတွက် လက်ခံထားသင့်တဲ့ အဖြေတစ်ခု</h3>
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-12">
                        <div id="why-dinger-block">
                            <div class="block-icon"><img src="{{ asset('/images/customize.png') }}" /> </div>
                            <p id="head-text">စိတ်ကြိုက်ငွေတောင်းခံလွှာ</p>
                            <p>ဒစ်ဂျစ်တယ် ငွေတောင်းခံလွှာစနစ်ဖြင့် သင်၏စီးပွါးရေးလုပ်ငန်းကို ပရော်ဖက်ရှင်နယ်ကျကျ ဖန်တီးဆောင်ရွက်ပြီး အဆင့်မြှင့်တင်နိုင်ပါတယ်။</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12 pl-lg-5">
                        <div id="why-dinger-block">
                            <div class="block-icon"><img src="{{ asset('images/organized.png') }}" /> </div>
                            <p id="head-text">အကောင်းဆုံးစနစ်ဖြင့် စစ်ဆေးနိုင်မှု</p>
                            <p>ငွေတောင်းခံလွှာပြေစာများကို တစ်စောင်ချင်းစီ လိုက်စစ်ရတာက သင့်အတွက် အချိန်အလွန်ကုန်စေပါတယ်။အွန်လိုင်းငွေတောင်းခံလွှာစနစ်ဖြင့် သက်ဆိုင်ရာ ငွေကောက်ခံခြင်းကို စောင့်ကြည့်စစ်ဆေး နိုင်ပါတယ်။ </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12 pl-lg-5">
                        <div id="why-dinger-block">
                            <div class="block-icon"><img src="{{ asset('images/anytime.png') }}" /> </div>
                            <p id="head-text">ငွေတောင်းခံလွှာများကို အချိန်မရွေးကြည့်ရှုနိုင်ခြင်း</p>
                            <p>Cloud စနစ်ဖြင့် ဖွဲ့စည်းထားတဲ့အတွက်ကြောင့် စမတ်ဖုန်းမှ တစ်ဆင့်ငွေတောင်းခံလွှာများကို အချိန်မရွေးကြည့်နိုင်ပါတယ်။</p>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-4 col-sm-12 col-12">
                        <div id="why-dinger-block">
                            <div class="block-icon"><img src="{{ asset('images/emails.png') }}" /> </div>
                            <p id="head-text">အီးမေးလ်များကို တိုက်ရိုက်ပေးပို့ခြင်း</p>
                            <p>ဝယ်သူများထံသို့ အွန်လိုင်းငွေတောင်းခံလွှာများကို တိုက်ရိုက်အီးမေးလ်ပို့ပေးခြင်းဖြင့် ဝယ်သူတို့ရဲ့အတွေ့အကြုံကို တစ်ဆင့်တိုး မြှင့်တင်နိုင်ပါတယ်။
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 col-12 pl-lg-5">
                        <div id="why-dinger-block">
                            <div class="block-icon"><img src="{{ asset('images/instant.png') }}" /> </div>
                            <p id="head-text">မြန်ဆန်သော ငွေလက်ခံမှု</p>
                            <p>အီးမေးလ်မှတစ်ဆင့် တိုက်ရိုက် ငွေတောင်းခံတဲ့အခါ ငွေပေးချေနိုင်တဲ့လင့်ခ်ကိုပါ တစ်ခါထဲဝင်ရောက်၍ ကြိုက်နှစ်သက်ရာ ငွေပေးချေမှုစနစ်ဖြင့် ငွေပေးချေနိုင်သည့်အတွက် ငွေလက်ခံရပိုမိုလွယ်ကူပါတယ်။</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 col-12 pl-lg-5">
                        <div id="why-dinger-block">
                            <div class="block-icon"><img src="{{ asset('images/green.png') }}" /> </div>
                            <p id="head-text">စာရွက်အသုံးချမှုများကို လျော့ချခြင်း</p>
                            <p>စာရွက်တစ်ရွက်ကိုချွေတာခြင်းက ကမ္ဘာကြီးကို ပြောင်းလဲကယ်တင်နိုင်မှာမဟုတ်ပေမဲ့လည်း ပြေစာစာရွက်ပေါင်းများစွာကို ဒစ်ဂျစ်တယ်ပုံစံအဖြစ် ပြောင်းလဲအသုံးပြုလိုက်ပါက စာရွက်များကို အလွန်အကျွံသုံးစွဲခြင်းမှ ပတ်ဝန်းကျင်ကို ကာကွယ်နိုင်ပါတယ်။
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="background: #fffff;" class="invoice">
        <div id="Bussiness">
            <h3 class="mb-4 pb-2">အသုံးပြုရန် အသင့်တော်ဆုံး စီးပွါးရေးလုပ်ငန်းအမျိုးအစားများ</h3>
            <div class="container">
                <div class="bussiness-row">
                    <div class="bussinessSlide">
                        <div id="isp-mm"></div>
                        <div id="software-mm"></div>
                        <div id="online-mm"></div>
                        <div id="retail-mm"></div>
                        <div id="gift-mm"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div style="background: #FAFAFA;" class="social-merchant">
        <div id="Bussiness">
            <h3 class="mb-4 pb-2">အဓိက အသုံးတည့်စေမဲ့ အချက်များအဓိက အသုံးတည့်စေမဲ့ အချက်များ</h3>
            <div class="container">
                <div class="bussiness-row">
                    <div class="featureSlide">
                        <div id="create-own-mm"></div>
                        <div id="content-mm"></div>
                        <div id="directly-mm"></div>
                        <div id="monitor-mm"></div>
                        <div id="multiple-mm"></div>
                        <div id="manual-mm"></div>
                        <div id="filter"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div style="background: #FFFFFF;" class="social-merchant">
        <div class="container">
            <div class="row">
                <div id="partnership-content" class="col-md-6 col-sm-12 col-12">
                    <div id="circle-text-row">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/WGGDV5e-yFI"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <br>

                </div>
                <div id="partnership-content" class="col-md-6 col-sm-12 col-12">
                    <div id="circle-text-row">
                        <div id="icon-text-col4">
                        </div>
                        <div id="circle-text-col1">
                            <p id="blank2">Watch how to streamline your billing system</p>
                            <p>Simple steps take you closer to the right journey of the effortless online invoicing
                                features.</p>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div> -->

    <div style="background: #FFFFFF;">
        <div id="package-div">
            <h3 id="pricing">သင့်လုပ်ငန်းအတွက်စျေးနှုန်းချိုသာသောအစီအစဉ်များ</h3>
            <div id="package-left">
                <div id="starter-title" class="mb-3">စံသတ်မှတ်နှုန်း</div>
                <div id="price-container">
                <h4 id="price-text"><span style="font-size:14px; font-weight:400;">တစ်လလျှင်</span>
                                        <span>၃၀၀၀၀</span> <span style="font-size:20px; font-weight:400">ကျပ်</span><span
                                            style="font-size:14px; font-weight:400;"> + ငွှေလွှဲခ </span> </h4>

                                </div>
                                <p style="opacity:0.4; font-weight:400;">*စာချုပ်သက်တမ်း အနည်းဆုံး ၆လနှင့်
                                    လစဉ်သက်တမ်းတိုးဆောင်ရွက်ရမည်</p>
                                <hr>

                                <div class="pricing-f mt-4">
                                    <img id="pricing-icon" src="{{ asset('images/pricing-icon.svg') }}" />
                                    <p>လစဉ်အစီအစဉ်နှင့်လစဉ်ငွေတောင်းခံလွှာ</p>
                                </div>

                                <div class="pricing-f">
                                    <img id="pricing-icon" src="{{ asset('images/pricing-icon.svg') }}" />
                                    <p>၂၄နာရီမပြတ်စောင့်ကြည့်နိုင်သောDashboard </p>
                                </div>

                                <div class="pricing-f">
                                    <img id="pricing-icon" src="{{ asset('images/pricing-icon.svg') }}" />
                                    <p>မြန်မာနိုင်ငံရှိဘဏ်များသို့ ပြန်လည်ငွေပေးချေပေးခြင်း</p>
                                </div>

                                <div class="pricing-f">
                                    <img id="pricing-icon" src="{{ asset('images/pricing-icon.svg') }}" />
                                    <p>အထူးနည်းပညာပံ့ပိုးမှုများပေးထားခြင်း</p>
                                </div>

                                <div class="pricing-f">
                                    <img id="pricing-icon" src="{{ asset('images/pricing-icon.svg') }}" />
                                    <p>ရုံးချိန်အတွင်း ဝန်ဆောင်မှုပေးထားခြင်း</p>
                                </div>

                                <div class="pricing-f">
                                    <img id="pricing-icon" src="{{ asset('images/pricing-icon.svg') }}" />
                                    <p>အချိန်မရွေးပယ်ဖျက်နိုင်ခြင်း</p>
                                </div>
                                <br>
                                <a target="blank" href="https://subscription.dingerpay.com/"><button id="package-btn">စတင်ရအောင်</button></a>
                            </div>
                            

        </div>

    </div>

</div>
@endsection

@section('scripts')
@endsection