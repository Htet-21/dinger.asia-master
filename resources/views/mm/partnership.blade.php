@extends('layouts.mm-partnership')

@section('title')
Dinger | Partnership Benefits
@endsection

@section('content')
<div id="partnership-page-wrapper">
<div class="accept partner-bg-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">

            <img id="hand-shake-partner" src="/images/hand-shake-partner.svg" />

                <div id="partner-block-div">
                    <h1>ကောင်းမွန်သော မိတ်ဖက်အစီအစဉ်များ </h1>
                    <br />

                    <p id="partner-content2">Digital Agencies များအပါအဝင် အတူတကွပူးပေါင်းလက်တွဲလိုသော မိတ်ဖက်များအတွက်
                        Dinger မှ အစဉ်ကြိုဆိုလျက်ရှိပါတယ်။ </p>

                </div>
            </div>
            <!-- <div id="img-spec"> -->
            <div id="partner-own">

                <a href="{{ url('/contact/') }}"><button>မိတ်ဖက်အဖြစ်</button></a>

                <!-- </div> -->
            </div>

        </div>
    </div>
</div>
<div style="background: #FAFAFA;" class="social-merchant">
    <div class="container">
        <div class="row">

            <div id="partnership-content" class="col-md-6 col-sm-12 col-12">
                <h3 id="top-title4">တိကျမြန်ဆန်သော ငွေလက်ခံမှုဖြင့် <br> စတင်မိတ်ဆက်လိုက်ပါ </h3>
                <br />
                <p id="top-content4">စီးပွားရေးလုပ်ငန်းများအတွက် အကောင်းဆုံး ငွေလက်ခံမှုဖြေရှင်းချက်တစ်ခုဖြစ်တဲ့
                    “Dinger” ကို သင်၏ မိတ်ဆွေများထံသို့ စတင်မိတ်ဆက်ခြင်းဖြင့် လက်တွဲနိုင်ပါတယ်။ </p><br>
                <div id="partner-text-row">
                    <div id="partner-text-col2">
                        <p id="partner">• နည်းပညာမလိုပဲ ချိတ်ဆက်နိုင်မှု</p>
                    </div>
                </div>
                <div id="partner-text-row">
                    <div id="partner-text-col2">
                        <p id="partner">• အွန်လိုင်းမှ စာရင်းပေးနိုင်ခြင်း</p>
                    </div>
                </div>
                <div id="partner-text-row">
                    <div id="partner-text-col2">
                        <p id="partner">• တစ်နေရာတည်းမှ ထိန်းချုပ်နိုင်မှု</p>
                    </div>
                </div>
                <div id="partner-text-row">
                    <div id="partner-text-col2">
                        <p id="partner">• ရောင်းအားအပေါ် ပို၍အာရုံစိုက်နိုင်ခြင်း</p>
                    </div>
                </div>

                <br />
            </div>


            <div class="col-md-6 col-sm-12 col-12 p-0">
                <img id="partner2-img" src="{{ asset('images/Rectangle 4.png') }}" />
            </div>

        </div>
    </div>

</div>
<div style="background: #FFFFFF;" class="social-merchant">
    <div class="container">
        <h3 id="why">မိတ်ဖက်အဖြစ်ပါဝင်ရန်</h3>
        <div class="row">
            <div id="partnership-content" class="col-md-6 col-sm-12 col-12">
                <div id="circle-text-row">
                    <div id="icon-text-col4">
                        <div id="circle">
                            <h4>1</h4>
                        </div>
                    </div>
                    <div id="circle-text-col1">
                        <p id="blank2">နည်းပညာမလိုပဲ ချိတ်ဆက်နိုင်မှု</p>
                        <p>စီးပွားရေးလုပ်ငန်းများအတွက် Website (သို့) Application ရှိရှိ၊ မရှိရှိ
                            ဒစ်ဂျစ်တယ်အကောင့်မျိုးစုံကနေ Dinger ရဲ့ “Pay with Link” ဖြင့် အွန်လိုင်းကနေ
                            စနစ်ကျကျငွေလက်ခံနိုင်ပြီ။ </p>
                    </div>
                </div>
            </div>

            <div id="partnership-content" class="col-md-6 col-sm-12 col-12">
                <div id="circle-text-row">
                    <div id="icon-text-col4">
                        <div id="circle">
                            <h4>2</h4>
                        </div>
                    </div>
                    <div id="circle-text-col1">
                        <p id="blank2">အွန်လိုင်းမှ စာရင်းပေးနိုင်ခြင်း</p>
                        <p>Dinger မှာ စာရင်းပေးသွင်းနိုင်ဖို့ စာရွက်စာတမ်းတွေ အများကြီး မလိုအပ်ပါဘူး။ Dinger Website
                            မှတဆင့် စာရင်းပေးသွင်းပြီး အလွယ်တကူ လျှောက်ထားနိုင်ပါတယ်။ </p>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div id="partnership-content" class="col-md-6 col-sm-12 col-12">
                <div id="circle-text-row">
                    <div id="icon-text-col4">
                        <div id="circle">
                            <h4>3</h4>
                        </div>
                    </div>
                    <div id="circle-text-col1">

                        <p id="blank2">တစ်နေရာတည်းမှ ထိန်းချုပ်နိုင်မှု</p>
                        <p>ဘဏ်အကောင့်များစွာရှိခြင်းက ငွေပေးချေနိုင်သော နည်းလမ်းများစွာကို ဖန်တီးပေးနိုင်သော်လည်း
                            မတူညီတဲ့အကောင့်တစ်ခုခြင်းစီမှ စာရင်းများကို ပြန်လည်ကိုင်တွယ်တဲ့အခါ အခက်တွေ့နိုင်ပါတယ်။
                            Dinger က ဒီအခက်အခဲအားလုံးကို တစ်နေရာတည်းမှာ လုံခြုံအောင် ဖြေရှင်းပေးမှာပါ။ </p>
                    </div>
                </div>
            </div>

            <div id="partnership-content" class="col-md-6 col-sm-12 col-12">
                <div id="circle-text-row">
                    <div id="icon-text-col4">
                        <div id="circle">
                            <h4>4</h4>
                        </div>
                    </div>
                    <div id="circle-text-col1">
                        <p id="blank2">ရောင်းအားအပေါ် ပို၍အာရုံစိုက်နိုင်ခြင်း</p>
                        <p>ပုံမှန်အရောင်းစာရင်းတွေကို ကိုင်တွယ်စိစစ်တဲ့အခါ မှန်ကန်တိကျဖို့က အရေးကြီးဆုံးပါပဲ။ Dinger က
                            ဘဏ်အကောင့်မျိုးစုံကနေ လက်ခံထားတဲ့ ငွေစာရင်းအားလုံးကို စနစ်တကျနဲ့ စစ်ဆေးနိုင်အောင်
                            ဖန်တီးပေးတာဖြစ်လို့ ရောင်းအားအပေါ် ပိုပြီး အာရုံစိုက်နိုင်စေပါတယ်။ </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <div id="partner-meet">
            <h3 class="mb-4 pb-2">မိတ်ဖက်များ </h3>
            <div class="container">
                <div class="partnerSlide">
                 <div id="iws"></div>
                 <div id="edka"></div>
                 <div id="cont"></div>
                 <div id="b360"></div>
                 <div id="idea-planet"></div>
                 <div id="noble-tech"></div>
                 <div id="digi-dots"></div>
                </div>
            </div>
        </div>
    <!-- <div id="partner-meet">
        <h3 class="mb-4 pb-2">မိတ်ဖက်များ </h3>
        <div class="container">
            <div class="partner-col">
                <div id="iws">

                </div>
            </div>
            <div class="partner-col">
                <div id="edka">

                </div>
            </div>
            {{-- <div class="partner-col">
                <div id="mmoi">

                </div>
            </div> --}}
            <div class="partner-col">
                <div id="cont">

                </div>
            </div>
            <div class="partner-col">
                <div id="b360">

                </div>
            </div>
        </div>
    </div> -->

    <div id="part-bot-div">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12 connect-left p-0">
                    <img id="part-bot-img" src="{{ asset('images/Rectangle 6.png') }}" />
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <div id="inner-connect2">
                        <div id="payment">
                            <h3 id="subtitle"><img src="/images/Vector.png"></h3>
                        </div>
                            <h3 id="subtitle"> ပူးပေါင်းလက်တွဲခြင်းဖြင့် ရရှိနိုင်သောကောင်းကျိုးများ </h3>
                        <p id="partner-text-col2">မိတ်ဖက်အဖြစ် ပူးပေါင်းလက်တွဲခြင်းဖြင့် သင်၏စီးပွားရေးလုပ်ငန်းကို
                            တိုးချဲ့အဆင့်မြှင့်တင်နိုင်သလို ပိုမိုကျယ်ပြန့်ကောင်းမွန်သော အဖွဲ့အစည်းတစ်ခုကိုလည်း Dinger
                            နှင့် အတူတူတည်ဆောက်နိုင်ပါတယ်။

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="features-div" class="ecommerce-2">
            <div class="container">

                <div class="row fb-2-con">
                    <div class="col-md-4 col-sm-12 col-12">
                        <div id="features-block">

                            <p id="head-text">တိုးချဲ့နိုင်သော ရလဒ်ကောင်းများ </p>
                            <p>ဆိုရှယ်မီဒီယာတွင် ပူးပေါင်းဆောင်ရွက်မှု အကြောင်းကို ကြေညာလိုက်ခြင်းဖြင့်
                                မိတ်ဖက်တို့ရဲ့ဈေးကွက်ကို ပိုမိုကျယ်ပြန့်စေနိုင်သလို မိတ်ဖက်တို့ရဲ့ဝန်ဆောင်မှုများကိုလည်း
                                Dinger ရဲ့ မိတ်ဆွေများထံသို့ ပြန်လည်မိတ်ဆက်ပေးမှာဖြစ်လို့ ရလဒ်ကောင်းများ
                                ပို၍တိုးလာစေမှာပါ။ </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12">
                        <div id="features-block" class="pl-lg-4">

                            <p id="head-text">ဝင်ငွေတိုးချဲ့စေနိုင်ဖို့ နည်းလမ်းကောင်းတစ်ခု </p>
                            <p>မြန်မာနိုင်ငံရှိ အကောင်းဆုံးငွေလက်ခံမှုဖြေရှင်းချက်အား သင်ရဲ့မိတ်ဆွေများထံ
                                မိတ်ဆက်လိုက်ပါ။ Dinger ရဲ့ ဖောက်သည်များလေလေ၊ သင့်အတွက်ဝင်ငွေတိုးလေလေ ဖြစ်စေမှာပါ။
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12">
                        <div id="features-block" class="pl-lg-5">

                            <p id="head-text">စိန်ခေါ်မှုအသစ်တွေ ဖန်တီးနိုင်မှု </p>
                            <p>Dinger နဲ့ မိတ်ဖက်တို့ရဲ့ မိတ်ဆွေများအတွက် ဒစ်ဂျစ်တယ်နည်းဖြင့်ငွေလက်ခံနိုင်သော အကောင်းဆုံးတန်ဖိုးတစ်ခုကို ဖန်တီးပြီး ရလဒ်ကောင်းများကို ရယူလိုက်ပါ။   </p>
                        </div>
                    </div>
                </div>

            </div>

            </div>



            @endsection

            @section('scripts')

            @endsection