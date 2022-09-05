@extends('layouts.app')

@section('content')

<div id="contact-sale-page" class="container-fluid">
    <div class="container">
        <div class="row">

            <div class="col-md-7 col-sm-6 col-12">

                <img id="contact-sale-icon" src="/images/contact-sale-icons.png" />
                <div id="con-sale-div">
                    <h1>Contact Our Sale Team</h1><br>
                    <p>Our team is happy to answer your sales questions. <br>
                        Fill out the form and we’ll be in touch <br>
                        as soon as possible.</p>
                </div>

            </div>

            <div class="col-md-5 col-sm-7 col-12">
                {!! Form::open(['url' => '/contactsale/create', 'id' => 'contact-sale-form']) !!}

                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" type="text" class="form-control" placeholder="Name" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" type="email" class="form-control" placeholder="Email" />
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input name="phone" type="tel" class="form-control" placeholder="Phone" />
                </div>
                <div class="form-group">
                    <label>Facebook Link</label>
                    <input name="fb_link" type="text" class="form-control" placeholder="Facebook Link" />
                </div>
                <div class="form-group">
                    <label>Payment Volume</label>
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