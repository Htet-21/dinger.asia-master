@extends('layouts.mm-app')

@section('title')
Dinger | Ecommerce
@endsection

@section('content')

<div class="ecommerce">

    <div class="ecommerce-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <div id="centered-div">
                    <h1 id="top-title">E-Commerce ငွေပေးချေမှု</h1>
                    <br />
                    <p id="top-content">E-Commerce လုပ်ငန်းများတွင် အရောင်းအဝယ်ဖြစ်သောလုပ်ငန်းစဉ်များအတွက်အလျင်မြန်ဆုံးနှင့်လုံခြုံစိတ်ချရသောအွန်လိုင်းငွေပေးချေမှုများကိုဆောင်ရွက်ပေးသွားမည့်အပြင် တိကျမှန်ကန်သောစာရင်းနှင့်တကွ အချိန်တိုအတွင်းပြန်လည်ငွေပေးချေမှုလုပ်ငန်းစဉ်များကိုလည်း လုပ်ဆောင်ပေးသည်။</p>
                    <br />
                    <a href="#features-div"><button id="create-acc-btn">လုပ်ဆောင်ချက်များကိုကြည့်ရှုရန်</button></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12">


                    <div class="hero-image">

                    <img id="top-img" src="{{ asset('images/team.jpg') }}" />

                        <div class="hero-shape">
                            <img id="top-img2" src="{{ asset('images/home-shape.svg') }}" />
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <img id="mb-top-img2" src="{{ asset('images/home-shape.svg') }}" />
        <img id="mb-top-img" src="{{ asset('images/team.jpg') }}" />

    </div>

    <div id="features-div" class="ecommerce-2">
        <div class="container">

            <div class="row fb-2-con">
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block">
                        <div class="block-icon"><img src="{{ asset('images/growsales-icon.svg') }}" /> </div>
                        <p id="head-text">ရောင်းအားမြှင့်တင်ခြင်း</p>
                        <p>ဝယ်သူများအတွက်ငွေလက်ခံမှုစနစ်အမျိုးမျိုးကိုအသုံးပြုခြင်းဖြင့်ရောင်းအားကိုမြှင့်တင်လိုက်ပါ။ </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block" class="pl-lg-4">
                        <div class="block-icon"><img src="{{ asset('images/stressfree-icon.svg') }}" /> </div>
                        <p id="head-text">စိတ်ချရသောငွေပေးချေမှု</p>
                        <p>ငွေလက်ခံမှုစနစ်အမျိုးမျိုးကိုတစ်နေရာတည်းတွင်လုပ်ဆောင်နိုင်သောကြောင့် ငွေလက်ခံရန်အတွက်လုပ်ဆောင်ရသောလုပ်ငန်းစဉ်များနည်းသွားမည်။</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="features-block" class="pl-lg-5">
                        <div class="block-icon"><img src="{{ asset('images/reliability-icon.svg') }}" /> </div>
                        <p id="head-text">ယုံကြည်စိတ်ချသောဝန်ဆောင်မှုပေးနိုင်ခြင်း</p>
                        <p>ဝယ်သူများအတွက် ပေါင်းစည်းထားသောငွေပေးချေမှုနည်းလမ်းများကို တစ်နေရာတည်း၊ တစ်ချိန်တည်းတွင် ပေးနိုင်ခြင်းဖြင့် ပိုမိုကောင်းမွန်၍ စနစ်ကျသောလုပ်ငန်းစဉ်များကို တည်ဆောက်နိုင်သည်။ </p>
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
                    <h2 id="eco-top-title">ငွေလက်ခံနိုင်မှုနည်းလမ်းမျိုးစုံနဲ့ချိတ်ဆက်လိုက်ပါ</h2>
                    <br />
                    <p id="top-content"> မြန်မာနိုင်ငံရှိစီးပွါးရေးလုပ်ငန်းများအတွက်မည်သည့်အကောင့်များမှမဆို ရိုးရှင်းစွာဖြင့် ငွေလက်ခံနိုင်အောင် Dinger မှဆောင်ရွက်ပေးသည်။ ထိရောက်သောနည်းလမ်းဖြင့် သင်၏လုပ်ငန်းပိုမိုကောင်းမွန်အောင်ဖန်တီးလိုက်ပါ။</p>
                </div>

            </div>
        </div>
    </div>

    <div class="ecommerce-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12 connect-left p-0">
                    <img id="connect-img" src="{{ asset('images/connect-ecommerce.jpg') }}" />
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <div id="inner-connect">
                        <div id="features-block" class="my-5">
                            <h4>ပို၍လျင်မြန်သောတိုးတက်မှု</h4>
                            <br />
                            <p>ငွေလက်ခံနိုင်မှုစနစ်များကိုတိုးချဲ့ခြင်းဖြင့် သင်၏စီးပွါးရေးလုပ်ငန်းကို မြှင့်တင်ပါ။</p>
                        </div>
                        <br>
                        <div id="features-block" class="my-5">
                            <h4>ခေတ်မီတိုးတက်သောလုပ်ငန်းတစ်ခုတည်ဆောက်ခြင်း</h4>
                            <br />
                            <p>နောက်ဆုံးပေါ်နည်းပညာများဖြင့် ဝန်ဆောင်မှုပေးနေသော Dinger ကို ယုံကြည်စွာလက်တွဲလိုက်ပါ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="connect-eco-right">

        </div>
    </div>

    <div class="ecommerce-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-12">
                <div id="partner-net-div">
                        <h2 id="eco-top-title">ထိရောက်စွာလုပ်ဆောင်ခြင်း</h2>
                        <br />
                        <p id="top-content">Dinger ဝန်ဆောင်မှုသည် သင်၏စီးပွါးရေးလုပ်ငန်းအတွက် မြန်မာနိုင်ငံရှိအကောင့်မျိုးစုံကို ပလက်ဖောင်းတစ်ခုထဲတွင် ငွေလက်ခံနိုင်အောင် ပြုလုပ်ပေးသည်။ ထိုကဲ့သို့ ဝန်ဆောင်မှုများကို ရယူလိုပါက Dinger ၏ ငွေပေးချေမှုစနစ်နှင့် ပထမဦးစွာ ချိတ်ဆက်ရန်လိုအပ်သည်။ Dinger နှင့် ချိတ်ဆက်ပြီးသည်နှင့်တပြိုင်နက် သင်၏စီးပွါးရေးပါတနာများအတွက် လွယ်ကူလျင်မြန်သောငွေပေးချေမှုစနစ်ကိုပေးသည့် Dinger ဝန်ဆောင်မှုအား စတင်အသုံးပြုနိုင်ပါပြီ။</p>
                    </div>
                    <div class="row my-4">
                    <!---    <div class="col-md-6 col-sm-12 col-12">
                            <div class="dev-bot" id="features-block">
                                <img id="feat-img" src="{{ asset('images/blue-shape.svg') }}" />
                                <h4>Feature 1</h4>
                                <br />
                                <p>Grow your business with a cornerstone of an integrated payment system to empirically rationalize functions of your work.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-12">
                            <div class="dev-bot" id="features-block">
                                <img id="feat-img" src="{{ asset('images/blue-shape.svg') }}" />
                                <h4>Feature 2</h4>
                                <br />
                                <p>Grow your business with a cornerstone of an integrated payment system to empirically rationalize functions of your work.</p>
                            </div>
                        </div>
                    -->
                        <!-- <div class="col-md-6 col-sm-12 col-12">
                            <div class="dev-bot" id="features-block">
                                <img id="feat-img" src="{{ asset('images/blue-shape.svg') }}" />
                                <h4>Feature 2</h4>
                                <br />
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div> -->
                        <img id="dev-shape-img" src="{{ asset('images/dev-shape.svg') }}" />
                    </div>
                </div>

            </div>
        </div>

        <img id="dev-pipe-img" src="{{ asset('images/dev-pipeline.svg') }}" />
    </div>

    <div class="ecommerce-6">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <div id="partner-net-div">
                        <h2 id="eco-top-title">အချိန်ကုန်သက်သာခြင်း</h2>
                        <br />
                        <p id="top-content">Dinger သည်မြန်မာနိုင်ငံရှိစီးပွါးရေးလုပ်ငန်းများကိုမည်သည့်အကောင့်များမှမဆိုရိုးရိုးရှင်းရှင်းနည်းလမ်းဖြင့်ငွေပေးချေမှုများကို လက်ခံနိုင်အောင်ပြုလုပ်ပေးသည်။</p>
                        <br />
                    </div>
                    <img id="partner-network-img" src="{{ asset('images/partner-network.svg') }}" />
                    <p id="pn">Partner network</p>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('scripts')

@endsection
