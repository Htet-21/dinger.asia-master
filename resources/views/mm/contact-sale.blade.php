@extends('layouts.mm-app')

@section('content')

<div id="contact-sale-page" class="container-fluid">
    <div class="container">
        <div class="row">

            <div class="col-md-7 col-sm-6 col-12">

                <img id="contact-sale-icon" src="/images/contact-sale-icons.png" />
                <div id="con-sale-div">
                    <h1>Dinger ကိုဆက်သွယ်ပါ။</h1><br>
                    <p>Dinger မှသင်၏အရောင်းနှင့်ပတ်သက်သောမေးခွန်းများကိုဖြေကြားပေးရန် အသင့်ရှိသည်။<br>
                        ဖောင်ကို ဖြည့်စွက်ပါကမကြာမီ <br>
                        ကျွန်တော်တို့အကြောင်းပြန်ပေးပါမည်။</p>
                </div>

            </div>

            <div class="col-md-5 col-sm-7 col-12">
                {!! Form::open(['url' => '/contactsale/create', 'id' => 'contact-sale-form']) !!}

                @csrf
                <div class="form-group">
                    <label>အမည်</label>
                    <input name="name" type="text" class="form-control" placeholder="Name" />
                </div>
                <div class="form-group">
                    <label>အီးမေးလ်</label>
                    <input name="email" type="email" class="form-control" placeholder="Email" />
                </div>
                <div class="form-group">
                    <label>Facebook Page လင့်ခ်</label>
                    <input name="fb_link" type="text" class="form-control" placeholder="Facebook Link" />
                </div>
                <div class="form-group">
                    <label>ငွေပေးချေမှုပမာဏ</label>
                    <select id="volume" name="payment_volume" class="form-control">
                        <option selected="" disabled="" value="">လစဉ်ပမာဏကိုရွေးချယ်ပါ။</option>
                        <option value="None, just getting started"> တစ်ခုမှမရွေးပါ။</option>
                        <option value="Less than 1,000,000 MMK">ဆယ်သိန်းအောက် </option>
                        <option value="Less than 5,000,000 MMK">သိန်းငါးဆယ်အောက်</option>
                        <option value="Less than 10,000,000 MMK">သိန်းတစ်ရာအောက်</option>
                        <option value="More than 10,000,000 MMK">သိန်းတစ်ရာအထက်</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Anything else?</label>
                    <textarea id="any-text" name="message" type="text" class="form-control" placeholder="Anything else?"></textarea>
                </div>
                <div class="form-group">
                    <input id="contact-btn-submit" name="contact_support" type="submit" value="Submit" />
                </div>
                {!! Form::close() !!}

                @if(count($errors) > 0)

                <div class="alert alert-danger">

                    <ul>
                        @foreach($errors->all() as $error)

                        <li>{{$error}}</li>

                        @endforeach

                    </ul>

                </div>

                @endif

                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @endif

            </div>

        </div>
    </div>
</div>



@stop