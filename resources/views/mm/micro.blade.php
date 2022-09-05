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
                    <h1 id="top-title2">ပိုမိုကောင်းမွန်သော ငွေကောက်ခံမှုများအတွက် ဖြေရှင်းချက်တစ်ခု</h1><br>
                    <p id="top-content3">ငွေပြန်ပေးချေမှုများကို ကောက်ခံရာတွင် လျင်မြန်စွာနဲ့ စနစ်တကျလက်ခံနိုင်ဖို့
                        ပြည်တွင်းဘဏ်တွေနဲ့ ချိတ်ဆက်ထားတဲ့ ပလက်ဖောင်းတစ်ခုရှိဖို့ လိုအပ်ပါတယ်။</p>
                    <br>
                    <a class="nav-link" target="blank" href="https://portal.dinger.asia/signup"><button
                            id="create-acc-btn2">စတင်ရန်</button></a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-12">


                <div class="hero-image">

                <img id="top-img" src="{{ asset('images/funding.jpg') }}" /> <br><br>

                    <div class="hero-shape">
                        <img id="top-img2" src="{{ asset('images/home-shape.svg') }}" />
                    </div>

                </div>

            </div>
        </div>
    </div>
    <img id="mb-top-img2" src="{{ asset('images/home-shape.svg') }}" />
    <img id="mb-top-img" src="{{ asset('images/funding.jpg') }}"  />
</div>

<div id="features-div" class="ecommerce-2">
    <div class="container">

        <div class="row fb-2-con">
            <div class="col-md-4 col-sm-12 col-12">
                <div id="features-block">
                    <div class="block-icon"><img
                            src="{{ asset('images/icons-updated/icons-updated/multiple-payment-icon.svg') }}" />
                    </div>
                    <p id="head-text">စုံလင်သောငွေလက်ခံမှု</p>
                    <p>ချေးငွေရယူသူများသည် ကြိုက်နှစ်သက်သော ဘဏ်နဲ့အကောင့်ပေါင်း ၂၀ ကျော်မှ
                        ငွေပြန်လည်ပေးချေနိုင်ပါတယ်။</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div id="features-block" class="pl-lg-4">
                    <div class="block-icon"><img
                            src="{{ asset('images/icons-updated\icons-updated\tracking-icon.svg') }}" /> </div>
                    <p id="head-text">စနစ်မြှင့်တင်ခြင်း </p>
                    <p>မတူညီတဲ့ ဘဏ်အကောင့်တစ်ခုခြင်းစီတိုင်းမှာ စာရင်းစစ်ရင်း အချိန်ကုန်မဲ့အစား
                        အကောင့်တစ်ခုတည်းမှာပဲ အချိန်နဲ့တပြေးညီ စာရင်းတွေကို စောင့်ကြည့်စစ်ဆေးနိုင်ပါတယ်။</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div id="features-block" class="pl-lg-5">
                    <div class="block-icon"><img
                            src="{{ asset('images/icons-updated\icons-updated\save-icon.svg') }}" /> </div>
                    <p id="head-text">အချိန်ကုန်သက်သာခြင်း</p>
                    <p>ငွေပြန်လည်ပေးချေမှုများကို ကောက်ခံရာတွင် မလိုအပ်သောအဆင့်များကို လျှော့ချနိုင်ခြင်းဖြင့်
                        သင်နှင့် ငွေချေးသူများအတွက် အလုပ်ချိန်များကို သက်သာစေနိုင်ပါတယ်။</p>
                </div>
            </div>
        </div>

    </div>

</div>

<div style="background: #FAFAFA;" class="ecommerce-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-12">
                <h2 id="eco-top-title">ဘယ်လိုချိတ်ဆက်သလဲ</h2>
                <br />
                <p id="top-content">သင်၏စနစ်ကို စုံလင်သော ဘဏ်အကောင့်များနှင့် ချိတ်ဆက်ထားသော Dinger Platform နှင့်
                    ပေါင်းစည်းရုံဖြင့် လုံခြုံစိတ်ချရသော စာရင်းများကို ပြုလုပ်နိုင်ပါတယ်။</p>
            </div>

        </div>
    </div>
    <div class="container">

        <div class="row fb-2-con-2">
            <div class="col-md-4 col-sm-12 col-12">
                <div id="features-block">
                    <div class="block-icon"><img
                            src="{{ asset('images/icons-updated\icons-updated\save-icon.svg') }}" /> </div>
                    <p id="head-text">လုံခြုံသော ငွေပေးချေမှုများ </p>
                    <p>ဘဏ်အဆင့်လုံခြုံမှုရှိသော ငွေလက်ခံမှုပလက်ဖောင်းဖြင့် ငွေပြန်ပေးချေမှု ကောက်ခံသောနှုန်းထားကို
                        အရှိန်မြှင့်တင်လိုက်ပါ။</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div id="features-block" class="pl-lg-4">
                    <div class="block-icon"><img
                            src="{{ asset('images/icons-updated\icons-updated\integration-icon.svg') }}" /> </div>
                    <p id="head-text">စနစ်တကျချိတ်ဆက်ခြင်း </p>
                    <p>သင်၏ လုပ်ငန်းနှင့် ပေါင်းစည်းချိတ်ဆက်လိုက်ခြင်းအားဖြင့် ချေးငွေနှင့် ပြန်လည်ကောက်ခံသော
                        ငွေစာရင်းအားလုံးကို စနစ်တကျ သိမ်းဆည်းစစ်ဆေးနိုင်ပါတယ်။</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div id="features-block" class="pl-lg-5">
                    <div class="block-icon"><img
                            src="{{ asset('images/icons-updated\icons-updated\compatibility-icon.svg') }}" /> </div>
                    <p id="head-text">စနစ်ကျသော ငွေကောက်ခံမှု </p>
                    <p>သင်၏ ငွေချေးသူများသည် ချေးငွေများကို ပြန်လည်တင်သွင်းရာတွင် မတူညီသော ပစ္စည်း (ဖုန်း၊ Tablet)
                        မျိုးစုံဖြင့် အချိန်မရွေး၊ နေရာမရွေး ပြန်လည် တင်သွင်းနိုင်ပါတယ်။</p>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="social-merchant">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-12 col-12">

                <h2 id="top-title2">အွန်လိုင်းငွေပေးချေမှုလုပ်ငန်းစဉ်မှတစ်ဆင့် ချေးငွေပြန်လည်ကောက်ခံခြင်း</h2>
                <p id="top-content3">အွန်လိုင်းငွေပေးချေမှုလုပ်ငန်းစဉ်ကို ချေးငွေပြန်လည်တင်သွင်းသောသူ၏
                    စိတ်ကြိုက်ရွေးချယ်မှုများအပေါ် မူတည်၍ ဘဏ်၊ အကောင့်မျိုးစုံအပြင် ငွေပေးချေမှုနည်းလမ်းကို
                    ရွေးချယ်ခြင်းဖြင့် လုပ်ဆောင်နိုင်ပါတယ်။</p>

                <h5 id="sale">ချိတ်ဆက်ပေါင်းစည်းခြင်း</h5><br>
                <p>စနစ်များကို ချိတ်ဆက်ပေါင်းစည်းခြင်းအားဖြင့် ဘဏ်နှင့် ဒီဂျစ်တယ်အကောင့်မျိုးစုံကို တစ်နေရာတည်းကနေ
                    လက်ခံနိုင်မည့်အပြင် အချိန်အနည်းငယ်အတွင်း ပြန်လည်ငွေပေးချေပေးပါသည်။</p> <br><br>
                <div id="icon-text-row">
                    <div id="icon-text-col1">
                        <div id="gray-square"></div>
                    </div>
                    <div id="icon-text-col2">
                        <p id="blank">စနစ်များကို ချိတ်ဆက်ခြင်း</p>
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-sm-12 col-12 p-0">
                <img src="{{ asset('images/Paymentlink.jpg') }}" />
            </div>
        </div>
    </div>


    @endsection

    @section('scripts')

    @endsection