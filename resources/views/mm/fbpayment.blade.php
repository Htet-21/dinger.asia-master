@extends('layouts.mm-app')

@section('content')

<div id="fb-payment">
  <img alt="dinger facebook payment background" src="/images/fb-payment-bg.svg" />
  <div id="fb-caption">
    <h1>Facebook အွန်လိုင်းဈေးဆိုင်များငွေပေးချေမှု</h1><br>
    <p>မည်သည့် ငွေပေးချေမှုကိုမဆိုစိတ်ကြိုက်လက်ခံလိုသည့် <br>
      အွန်လိုင်းဈေးရောင်းသူများအတွက် ဘဏ်အကောင့်တစ်ခု (သို့)<br>
      ငွေလွှဲဝန်ဆောင်မှုတစ်ခု ထဲမှ လွယ်ကူအဆင်ပြေစွာ လက်ခံပေးနိုင်သော<br>
      ငွေပေးချေမှု စနစ် တစ်ခုဖြစ်ပါတယ်။</p>
      <button id="fb-btn"><a target="blank" href="https://dinger.store/login">ကောင့်ဝင်ရန်</a> / <a target="blank" href="https://dinger.store/register">ဖွင့်ရန်</a></button>
  </div>
</div>

<div id="fb-con-2" class="container-fluid">
  <div class="container">
    <h1>Dinger သုံးခြင်းအားဖြင့် အောက်ပါ အကျိုးကျေးဇူး (၃)ရပ် ကို
      ရရှိမှာဖြစ်ပါတယ်။</h1><br>
    <div id="fb-row-2" class="row">

      <div class="col-md-4 col-sm-4 col-12">
        <div id="fb-sec-col">
          <img src="/images/grow-sale.svg" />
          <h2>ရောင်းအားမြှင့်တင်ခြင်း။</h2>
          <p>သင်၏ဝယ်သူများအတွက် မတူညီသော<br>
            ဘဏ်အကောင့် များမှငွေလက်ခံပေးခြင်းအားဖြင့်စိတ်ရှုပ်စရာမလိုသော<br>
            ငွေပေးချေမှုစနစ်ကိုဖန်တီးလိုက်ပါ။ </p>
        </div>
      </div>

      <div class="col-md-4 col-sm-4 col-12">
        <div id="fb-sec-col">
          <img src="/images/record-icon.svg" />
          <h2>အရောင်းစာရင်းများကို <br>
            စနစ်တကျမှတ်ခြင်း။</h2>
          <p>စာရင်းမှတ်ရန်စာအုပ်နှင့်ဘောပင်မလိုဘဲ
            အရောင်းစာရင်းများကို အချိန်နှင့်
            တစ်ြပေးညီ မှတ်တမ်းတင်ထားနိုင်ပြီး
            မိမိအရောင်းစာရင်း များကို
            အချိန်မရွေးပြန်လည်ကြည့်ရှုနိုင်ပါတယ်။</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-4 col-12">
        <div id="fb-sec-col">
          <img src="/images/reliability.svg" />
          <h2>ယုံကြည်စိတ်ချရခြင်း။</h2>
          <p>ကျွန်ုပ်တို့၏ ငွေပေးချေမှုစနစ်နှင့်
            သင်နှင့်သင်၏ ဝယ်သူများအကြား ယုံကြည်မှု ရရှိအောင်
            Dinger မှပြုလုပ်ပေးမှာပဲဖြစ်ပါတယ်။
            ထို့ကြောင့်သင်၏စီးပွားရေး တွင်
            (၁) လိမ်လည်ခြင်း
            (၂) ပစ`စည်းမှာပြီး မယူခြင်း
            (၃) ဖုန်းပိတ်ထားခြင်း
            စသည့်အခက်အခဲ များ ကို လျော့ချနိုင်မည်ဖြစ် ပါတယ်။</p>
        </div>
      </div>

    </div>
  </div>
</div>


<div class="container-fluid">
  <div id="contact-btn">
    <p>အခုပဲစတင်လိုက်ရအောင်။</p>
    <button><a href="/contact-sale">ဆက်သွယ်ရန်</a></button>
  </div>
</div>

@stop