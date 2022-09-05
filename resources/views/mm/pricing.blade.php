@extends('layouts.mm-app')

@section('title')
    Dinger | Pricing
@endsection

@section('content')

    <div class="pricing">

        <div class="pricing-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12 p-0">
                        <h1 id="pricing-title" class="mb-3">သင့်လုပ်ငန်းအတွက်စျေးနှုန်းချိုသာသောအစီအစဉ်များ</h1>
                        <p id="pricing-content">သင်၏လုပ်ငန်းနှင့်အကိုက်ညီဆုံးသောအစီအစဉ်ကိုရွေးချယ်ပါ။</p>


                        <div id="package-div">
                            <div id="package-left">
                                <div id="starter-title" class="mb-3">စံသတ်မှတ်နှုန်း</div>
                                <div id="price-container">

                                    <h4 id="price-text"><span style="font-size:14px; font-weight:400;">တစ်လလျှင်</span>
                                        <span>၆၀၀၀၀</span> <span style="font-size:20px; font-weight:400">ကျပ်</span><span
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
                                <a target="blank" href="https://subscription.dingerpay.com/"><button id="package-btn">Try it
                                        now</button></a>
                            </div>
                            <div id="package-right">
                                <div id="starter-title" class="mb-3">စိတ်ကြိုက်ဖန်တီးခြင်း</div>
                                <div id="price-container">

                                </div>
                                <p style="opacity:0.6">ကြိုက်နှစ်သက်သောဒီဇိုင်းကိုရွေးချယ်ခြင်း</p>
                                <hr>

                                <div class="pricing-f mt-4">
                                    <img id="pricing-icon" src="{{ asset('images/pricing-icon-white.svg') }}" />
                                    <p>အရောင်းအဝယ်ဖြစ်သော အကြောင်းအရေအတွက်ပေါ်မူတည်၍ လျှော့စျေးရယူနိုင်ခြင်း</p>
                                </div>

                                <div class="pricing-f">
                                    <img id="pricing-icon" src="{{ asset('images/pricing-icon-white.svg') }}" />
                                    <p>တစ်ခုထက်ပိုသော ထုတ်ကုန်အရေအတွက်ပေါ် မူတည်၍ လျှော့စျေးရယူနိုင်ခြင်း</p>
                                </div>

                                <br>
                                <a href="mailto:sales@dinger.asia"><button id="package-right-btn">ဆက်သွယ်ရန်</button></a>


                            </div>
                        </div>
                        <br />
                        <br />
                        <!-- <p style="text-align: center;"><a style="color:#10316B;" href="#">Learn more about transaction fees ></a></p> -->
                    </div>
                </div>
            </div>
        </div>


        <div class="transaction-fees-container">


            <div class="container">
                <h2>ငွေလွှဲခသတ်မှတ်ချက်များ</h2>
                <p class="fees-content">သင်တို့၏ ဝယ်သူများမှ ဖြစ်မြောက်သော အရောင်းအဝယ်များအတွက် ချမှတ်ထားသော
                    ငွေလွှဲခသတ်မှတ်ချက်များ</p>
                <table class="table table-responsive-sm">
                    <thead>
                        <input class="fees-searchbox" id="myInput" type="text" placeholder="Search..">
                        <br>
                        <tr>
                            <th scope="col">ငွေပေးချေစနစ်</th>
                            <th scope="col">စျေးနှုန်းသတ်မှတ်ပုံ</th>
                            <th scope="col" style="text-align:right;">စျေးနှုန်း</th>
                            <th scope="col" style="text-align:right;">သတ်မှတ်ချက်</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">

                        <tr class="no-data">
                            <td colspan="4">No data found</td>
                        </tr>

                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/bank-icon.svg') }}" /> KBZ
                                Bank</td>
                            <td>ရာခိုင်နှုန်း(%)</td>
                            <td style="text-align:right;">၁.၉%</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                KBZ Pay</td>
                            <td>ရာခိုင်နှုန်း(%)</td>
                            <td style="text-align:right;">၁.၉%</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                Citizens Pay</td>
                            <td>ရာခိုင်နှုန်း(%)</td>
                            <td style="text-align:right;">၁.၉%</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                Wave Pay</td>
                            <td>ရာခိုင်နှုန်း(%)</td>
                            <td style="text-align:right;">၃.၄%</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                True Money</td>
                            <td>ပမာဏအလိုက်</td>
                            <td style="text-align:right;">၀.၄% + ၅၀၀ကျပ်</td>
                            <td style="text-align:right;">၁,၀၀၀ - ၅၀,၀၀၀ ကျပ်</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                True Money</td>
                            <td>ပမာဏအလိုက်</td>
                            <td style="text-align:right;">၀.၄% + ၈၀၀ကျပ်</td>
                            <td style="text-align:right;">၅၀,၀၀၁ - ၁၀၀,၀၀၀ ကျပ်</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                True Money</td>
                            <td>ပမာဏအလိုက်</td>
                            <td style="text-align:right;">၀.၄% + ၁,၂၅၀ကျပ်</td>
                            <td style="text-align:right;">၁၀၀,၀၀၁ - ၁၅၀,၀၀၀ ကျပ်</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                True Money</td>
                            <td>ပမာဏအလိုက်</td>
                            <td style="text-align:right;">၀.၄% + ၁,၅၀၀ကျပ်</td>
                            <td style="text-align:right;">၁၅၀,၀၀၁ - ၂၀၀,၀၀၀ ကျပ်</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                True Money</td>
                            <td>ပမာဏအလိုက်</td>
                            <td style="text-align:right;">၀.၄% + ၁,၉၀၀ကျပ်</td>
                            <td style="text-align:right;">၂၀၀,၀၀၁ - ၅၀၀,၀၀၀ ကျပ်</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                True Money</td>
                            <td>ပမာဏအလိုက်</td>
                            <td style="text-align:right;">၀.၄% + ၂,၁၅၀ကျပ်</td>
                            <td style="text-align:right;">၅၀၀,၀၀၁ - ၁,၀၀၀,၀၀၀ ကျပ်</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                Mytel Pay</td>
                            <td>ရာခိုင်နှုန်း(%)</td>
                            <td style="text-align:right;">၂%</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                AYA Pay</td>
                            <td>ရာခိုင်နှုန်း(%)</td>
                            <td style="text-align:right;">၀.၇%</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/card-icon.svg') }}" /> MPU
                            </td>
                            <td>ရာခိုင်နှုန်း(%)</td>
                            <td style="text-align:right;">၀.၈% + ၂၀၀ကျပ်</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                UAB Sai Sai Pay</td>
                            <td>ရာခိုင်နှုန်း(%)</td>
                            <td style="text-align:right;">၀.၉%</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                M-Pite san</td>
                            <td>ရာခိုင်နှုန်း(%)</td>
                            <td style="text-align:right;">၁.၉%</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                One Pay</td>
                            <td>ရာခိုင်နှုန်း(%)</td>
                            <td style="text-align:right;">၁.၉%</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/card-icon.svg') }}" />
                                Visa</td>
                            <td>ရာခိုင်နှုန်း(%)</td>
                            <td style="text-align:right;">၃.၉%</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/card-icon.svg') }}" />
                                Master</td>
                            <td>ရာခိုင်နှုန်း(%)</td>
                            <td style="text-align:right;">၃.၉%</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/card-icon.svg') }}" />
                                JCB</td>
                            <td>ရာခိုင်နှုန်း(%)</td>
                            <td style="text-align:right;">၃.၉%</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/card-icon.svg') }}" />
                                CB pay</td>
                            <td>ရာခိုင်နှုန်း(%)</td>
                            <td style="text-align:right;">၁.၅%</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/bank-icon.svg') }}" />
                                MAB Mobile Banking</td>
                            <td>ရာခိုင်နှုန်း(%)</td>
                            <td style="text-align:right;">၁%</td>
                            <td style="text-align:right;">၂၀၀,၀၀၀ ကျပ် အောက်</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/bank-icon.svg') }}" />
                                MAB Mobile Banking</td>
                            <td>Fixed</td>
                            <td style="text-align:right;">၁,၂၀၀ ကျပ်</td>
                            <td style="text-align:right;">၂၀၀,၀၀၀ ကျပ် နှင့်အထက်</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>

        <!-- <div class="pricing-2">
            <div class="container">
                <p id="all-plan-title">All plan include</p>
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-12">
                        <div id="features-block">
                            <img id="feat-img" src="{{ asset('images/icon1-yellow.svg') }}" />
                            <h4>Multiple Choices of Payment</h4>
                            <br />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12">
                        <div id="features-block">
                            <img id="feat-img" src="{{ asset('images/mask-yellow.svg') }}" />
                            <h4>Easy Integration</h4>
                            <br />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12">
                        <div id="features-block">
                            <img id="feat-img" src="{{ asset('images/next-icon-yellow.svg') }}" />
                            <h4>Faster On-Boarding Process</h4>
                            <br />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

    </div>

    <script>
        $(document).ready(function() {

            (function($) {

                $('#myInput').keyup(function() {
                    var rex = new RegExp($(this).val(), 'i');
                    $('#myTable tr').hide();
                    $('#myTable tr').filter(function() {
                        return rex.test($(this).text());
                    }).show();
                    $('.no-data').hide();
                    if ($('#myTable tr:visible').length == 0) {
                        $('.no-data').show();
                    }

                })

            }(jQuery));

        });
    </script>

@endsection

@section('scripts')

@endsection
