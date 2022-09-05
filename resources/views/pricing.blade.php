@extends('layouts.app')

@section('title')
    Dinger | Pricing
@endsection

@section('content')

    <div class="pricing">

        <div class="pricing-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12 p-0">
                        <h1 id="pricing-title" class="mb-3">Affordable Plans for your business</h1>
                        <p id="pricing-content">Choose the plan that fits you best.</p>


                        <div id="package-div">
                            <div id="package-left">
                                <div id="starter-title" class="mb-3">Standard</div>
                                <div id="price-container">

                                    <h4 id="price-text"><span>60,000</span><span style="font-size:20px; font-weight:400">
                                            Ks</span><span style="font-size:14px; font-weight:400; font-family:'Poppins' ">
                                            /mo + Transaction Fees</span> </h4>

                                </div>
                                <p style="opacity:0.4; font-weight:400;">*contract 6 months minimal and must be renewed
                                    every month.</p>
                                <hr>

                                <div class="pricing-f mt-4">
                                    <img id="pricing-icon" src="{{ asset('images/pricing-icon.svg') }}" />
                                    <p>Monthly plan, billed monthly</p>
                                </div>

                                <div class="pricing-f">
                                    <img id="pricing-icon" src="{{ asset('images/pricing-icon.svg') }}" />
                                    <p>24 hr transaction monitoring dashboard</p>
                                </div>

                                <div class="pricing-f">
                                    <img id="pricing-icon" src="{{ asset('images/pricing-icon.svg') }}" />
                                    <p>Settlement (any banks in MM)</p>
                                </div>

                                <div class="pricing-f">
                                    <img id="pricing-icon" src="{{ asset('images/pricing-icon.svg') }}" />
                                    <p>Dedicated technical support</p>
                                </div>

                                <div class="pricing-f">
                                    <img id="pricing-icon" src="{{ asset('images/pricing-icon.svg') }}" />
                                    <p>Office-hour customer service</p>
                                </div>

                                <div class="pricing-f">
                                    <img id="pricing-icon" src="{{ asset('images/pricing-icon.svg') }}" />
                                    <p>Cancel at anytime</p>
                                </div>
                                <br>
                                <a target="blank" href="https://subscription.dingerpay.com/"><button id="package-btn">Try it
                                        now</button></a>
                            </div>
                            <div id="package-right">
                                <div id="starter-title" class="mb-3">Customized</div>
                                <div id="price-container">

                                </div>
                                <p style="opacity:0.6">Design the package as you desire</p>
                                <hr>

                                <div class="pricing-f mt-4">
                                    <img id="pricing-icon" src="{{ asset('images/pricing-icon-white.svg') }}" />
                                    <p>Volume discount</p>
                                </div>

                                <div class="pricing-f">
                                    <img id="pricing-icon" src="{{ asset('images/pricing-icon-white.svg') }}" />
                                    <p>Multi-product discount</p>
                                </div>

                                <br>
                                <a href="mailto:sales@dinger.asia"><button id="package-right-btn">Contact Us</button></a>


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
                <h2>Transaction Fees</h2>
                <p class="fees-content">Transparent pricing for every purchase of your customers.</p>
                <table class="table table-responsive-sm">
                    <thead>
                        <input class="fees-searchbox" id="myInput" type="text" placeholder="Search..">
                        <br>
                        <tr>
                            <th scope="col">Payment Method</th>
                            <th scope="col">Pricing Type</th>
                            <th scope="col" style="text-align:right;">Total Pricing</th>
                            <th scope="col" style="text-align:right;">Range</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">

                        <tr class="no-data">
                            <td colspan="4">No data found</td>
                        </tr>

                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/bank-icon.svg') }}" /> KBZ
                                Mobile Banking</td>
                            <td>Percentage(%)</td>
                            <td style="text-align:right;">1.9%</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                KBZ Pay</td>
                            <td>Percentage(%)</td>
                            <td style="text-align:right;">1.9%</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                Citizens Pay</td>
                            <td>Percentage(%)</td>
                            <td style="text-align:right;">1.9%</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                Wave Pay</td>
                            <td>Percentage(%)</td>
                            <td style="text-align:right;">3.4%</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                True Money</td>
                            <td>Tier Base</td>
                            <td style="text-align:right;">0.4%+500 MMK</td>
                            <td style="text-align:right;">1,000 - 50,000 MMK</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                True Money</td>
                            <td>Tier Base</td>
                            <td style="text-align:right;">0.4%+800 MMK</td>
                            <td style="text-align:right;">50,001 - 100,000 MMK</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                True Money</td>
                            <td>Tier Base</td>
                            <td style="text-align:right;">0.4%+1250 MMK</td>
                            <td style="text-align:right;">100,001 - 150,000 MMK</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                True Money</td>
                            <td>Tier Base</td>
                            <td style="text-align:right;">0.4%+1500 MMK</td>
                            <td style="text-align:right;">150,001 - 200,000 MMK</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                True Money</td>
                            <td>Tier Base</td>
                            <td style="text-align:right;">0.4%+1900 MMK</td>
                            <td style="text-align:right;">200,001 - 500,000 MMK</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                True Money</td>
                            <td>Tier Base</td>
                            <td style="text-align:right;">0.4%+2150 MMK</td>
                            <td style="text-align:right;">500,001 - 1,000,000 MMK</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                Mytel Pay</td>
                            <td>Percentage(%)</td>
                            <td style="text-align:right;">2%</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                AYA Pay</td>
                            <td>Percentage(%)</td>
                            <td style="text-align:right;">0.7%</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/card-icon.svg') }}" /> MPU
                            </td>
                            <td>Percentage(%)</td>
                            <td style="text-align:right;">0.8%+200 MMK</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                UAB SAI SAI Pay</td>
                            <td>Percentage(%)</td>
                            <td style="text-align:right;">0.9%</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                M-Pite san</td>
                            <td>Percentage(%)</td>
                            <td style="text-align:right;">1.9%</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" />
                                One Pay</td>
                            <td>Percentage(%)</td>
                            <td style="text-align:right;">1.9%</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/card-icon.svg') }}" />
                                Visa</td>
                            <td>Percentage(%)</td>
                            <td style="text-align:right;">3.9%</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/card-icon.svg') }}" />
                                Master </td>
                            <td>Percentage(%)</td>
                            <td style="text-align:right;">3.9%</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/card-icon.svg') }}" />
                                JCB</td>
                            <td>Percentage(%)</td>
                            <td style="text-align:right;">3.9%</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/card-icon.svg') }}" />
                                CB pay</td>
                            <td>Percentage(%)</td>
                            <td style="text-align:right;">1.5%</td>
                            <td style="text-align:right;">-</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/bank-icon.svg') }}" />
                                MAB Mobile Banking</td>
                            <td>Percentage(%)</td>
                            <td style="text-align:right;">1%</td>
                            <td style="text-align:right;">Under 200,000 MMK</td>
                        </tr>
                        <tr>
                            <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/bank-icon.svg') }}" />
                                MAB Mobile Banking</td>
                            <td>Fixed</td>
                            <td style="text-align:right;">MMK 1,200</td>
                            <td style="text-align:right;">Above 200,000 MMK</td>
                        </tr>
                        

                    </tbody>
                </table>
            </div>

        </div>
                <!-- <tr >
                    <td scope="row"><img id="paymentmethod-icon" src="{{ asset('images/e-wallet-icon.svg') }}" /> CB Pay</td>
                    <td>Percentage(%)</td>
                    <td style="text-align:right;">N/A</td>
                    <td style="text-align:right;">-</td>
                    </tr> -->

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
