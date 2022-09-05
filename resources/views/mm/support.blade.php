@extends('layouts.mm-app')

@section('title')
Dinger | Support
@endsection

@section('content')

<div class="support">

    <div class="support-top">
        <div class="container">
            <div class="row sup-top-row">
                <div class="col-md-6 col-sm-12 col-12">
                    <h1 id="title">သင်၏စီးပွါးရေးလုပ်ငန်းကို ကူညီဖို့အသင့်ပါပဲ</h1>
                    <br />
                    <p id="content">မြန်မာနိုင်ငံရှိငွေပေးချေသူများထံမှငွေများကို တစ်နေရာတည်းမှာလက်ခံခြင်းဖြင့်သင်၏စီးပွါးရေးကိုရောင်းအားတိုးမြှင့်လိုက်ပါ။</p>
                    <br />
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="contact-sales">
                        <div class="block-icon"><img src="{{ asset('images/contactsales-icon.svg') }}" /> </div>
                        <p id="head-text">ဆက်သွယ်ရန်</p>
                        <p id="content">သင့်ဖောက်သည်များအားစိတ်ဖိစီးမှုကင်းသောငွေပေးချေမှုဖြင့်သင်၏ရောင်းအားကိုတိုးချဲ့ပါ။</p>
                        <br />
                        <p id="link"><a href="tel:+959787747310">ဆက်သွယ်ရန် ></a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="contact-sales">
                        <div class="block-icon"><img src="{{ asset('images/support-icon.svg') }}" /> </div>
                        <p id="head-text">အကူအညီရယူရန်</p>
                        <p id="content">သင်၏ငွေပေးချေမှုစနစ်အတွက်အကူအညီရယူရန်ယခုပဲဆက်သွယ်ပါ။</p>
                        <br />
                        <p id="link"><a href="tel:+959787747310">အကူအညီရယူရန် ></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="support-2">
        <div class="container">
        <img id="mb-support2-img" src="{{ asset('images/women.jpg') }}" />
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <h2 class="sup2-top my-4" id="support2-title">ရုံးတည်နေရာ</h2>
                    <p id="support2-content">အမှတ် (၆၄၇)၊ ၆လွှာ၊ ချိုင်းနားတောင်းဟိုတယ်၊ ၂၁လမ်းနှင့် မဟာဗန္ဓုလလမ်းထောင့်၊ လသာမြို့နယ်၊ ရန်ကုန်။</p>
                    <br />
                    <br />
                    <h2 class="my-4" id="support2-title">အီးမေးလ်မှတစ်ဆင့်ဆက်သွယ်ရန်</h2>
                    <p id="support2-content"><a href="mailto:zinlinmyat@dinger.asia">zinlinmyat@dinger.asia</a></p>
                    <br />
                    <br />
                    <h2 class="my-4" id="support2-title">ဖုန်းမှတစ်ဆင့်ဆက်သွယ်ရန်</h2>
                    <p id="support2-content"><a href="tel:+959787747310">+95 9787747310</a></p>
                    <br />
                    <br />
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <img id="support2-img" src="{{ asset('images/women.jpg') }}" />
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('scripts')

@endsection