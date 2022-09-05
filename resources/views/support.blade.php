@extends('layouts.app')

@section('title')
Dinger | Support
@endsection

@section('content')

<div class="support">

    <div class="support-top">
        <div class="container">
            <div class="row sup-top-row">
                <div class="col-md-6 col-sm-12 col-12">
                    <h1 id="title">Ready to help your business</h1>
                    <br />
                    <p id="content">Let your business raise sales by accepting vairous payment providers in Myanmar at one fingertip.</p>
                    <br />
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="contact-sales">
                        <div class="block-icon"><img src="{{ asset('images/contactsales-icon.svg') }}" /> </div>
                        <p id="head-text">Contact Sales</p>
                        <p id="content">Raise your sales by providing a stress-free payment to your customers.</p>
                        <br />
                        <p id="link"><a href="tel:+959787747310">Get in touch ></a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-12">
                    <div id="contact-sales">
                        <div class="block-icon"><img src="{{ asset('images/support-icon.svg') }}" /> </div>
                        <p id="head-text">Get Support</p>
                        <p id="content">Contact now to get your business payment system support.</p>
                        <br />
                        <p id="link"><a href="tel:+959787747310">Help & Support ></a></p>
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
                    <h2 class="sup2-top my-4" id="support2-title">Our Office</h2>
                    <p id="support2-content">No 647, Corner of 21st Street & Mahabandula Road, 6th FloorChina Town Hotel Latha Township, Yangon.</p>
                    <br />
                    <br />
                    <h2 class="my-4" id="support2-title">Email</h2>
                    <p id="support2-content"><a href="mailto:zinlinmyat@dinger.asia">zinlinmyat@dinger.asia</a></p>
                    <br />
                    <br />
                    <h2 class="my-4" id="support2-title">Call</h2>
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