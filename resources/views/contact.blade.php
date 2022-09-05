@extends('layouts.contact-app')

@section('title')
Dinger | Contact
@endsection

@section('content')

<div id="contact-page">

    <div id="contact-top" class="container">
        <div class="row">

            <div id="contact-sup-div" class="col-md-6 col-sm-12 col-12">

                <div id="contact-head">
                    <img src="{{ asset('images/contact-shape.png') }}" />
                    <h1>Let’s get started now to <span style="color:#fdbe34;"> grow </span> your business!</h1>
                </div>
                <div id="contact-bot" class="my-5">
                    <div id="contact-icons">
                        <a href="#"><img src="{{ asset('images/insta-black.svg') }}" /></a>
                        <a href="#"><img src="{{ asset('images/facebook-black.svg') }}" /></a>
                        <a href="#"><img src="{{ asset('images/messenger-black.svg') }}" /></a>

                    </div>
                </div>

            </div>

            <div id="contact-form-div" class="col-md-6 col-sm-12 col-12">
                <div style="width:80%;display:block;margin:auto;padding-top:20px;">

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

                <form method="POST" action="/contact-send" id="contact-support-form">

                    @csrf

                    <div class="form-group">
                        <label>Name <span style="color: red !important; display: inline; float: none;">*</span></label>
                        <input name="name" type="text" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Email <span style="color: red !important; display: inline; float: none;">*</span></label>
                        <input name="email" type="email" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Phone <span style="color: red !important; display: inline; float: none;">*</span></label>
                        <input name="phone" type="tel" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Facebook Link</label>
                        <input name="fb_link" type="text" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Payment Volume  <span style="color: red !important; display: inline; float: none;">*</span></label>
                        <select id="volume" name="payment_volume" class="form-control">
                            <option selected="" disabled="" value="">Select a monthly amount</option>
                            <option value="None, just getting started"> None, just getting started </option>
                            <option value="Less than 1,000,000 MMK">Less than 1,000,000 MMK </option>
                            <option value="Less than 5,000,000 MMK">Less than 5,000,000 MMK</option>
                            <option value="Less than 10,000,000 MMK">Less than 10,000,000 MMK</option>
                            <option value="More than 10,000,000 MMK">More than 10,000,000 MMK</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Message</label>
                        <textarea id="any-text" name="message" type="text" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button id="contact-btn-submit" type="submit">Send Message</button>
                    </div>

                </form>


            </div>

        </div>
    </div>

    <div id="contact-right-bg">

    </div>

</div>


@stop
