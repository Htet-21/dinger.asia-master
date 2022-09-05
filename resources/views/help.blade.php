@extends('layouts.app')

@section('title')
Dinger | Help
@endsection

@section('content')

<div id="help-page">

    <div id="help-bg">
        <div class="container">
            <div id="help-content">
                <h1>Hello, how can we help?</h1><br>
                <input class="searchbox" type="text" placeholder="Search for articles . . ." />
            </div>
        </div>
    </div>
    <div class="help-sub-menu" id="myHeader">
        <div class="help-sub-menu-container">
            <ul>
                <a href="#quick-guide"><li><img src="/images/guide-icon.svg">Quick Guides</li></a>
                <a href="#FAQs"><li><img src="/images/faqs-icon.svg">FAQs</li></a>
                
            </ul>
        </div>
    </div>
  

    <div class="help-body">
        <span class="anchor" id="quick-guide"></span>
        <div class="quick-guide-container" >
            <div class="row m-0">
                <div class="col-lg-4 p-0">
                    <div class="quick-guide-menu">
                        <h3>Quick Guides</h3>
                        <p>Learn more about how to <br>use the products.</p>
                        <ul>
                            <li class="active">Getting Started</li>
                            <li>KBZ Pay form tutorials</li>
                            <li>Wave Pay form tutorials</li>
                            <li>AYA Pay form tutorials</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="quick-guide-videos">
                        <h3>Getting Started</h3>
            
                        
                        <div class="row">
                            <div class="col-12 col-md-6">

                                    <a href="{{ url('/guides-detail') }}">
                                    <div class="video-card mb-5">
                                        <div class="thumbnail">
                                            <img  src="#" />
                                            <span class="play-btn"></span>
                                        </div>
                                        <div class="video-card-body">
                                            <p class="upload-time">Updated on 12 Jan, 2021</p>
                                            <h3>API integration</h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,</p>
                                        </div>
                                    </div>
                                    </a>
                            </div>
                            <div class="col-12 col-md-6">
                                    <div class="video-card mb-5">
                                        <div class="thumbnail">
                                            <img  src="#" />
                                            <span class="play-btn"></span>
                                        </div>
                                        <div class="video-card-body">
                                            <p class="upload-time">Updated on 12 Jan, 2021</p>
                                            <h3>API integration</h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                    <div class="video-card mb-5">
                                        <div class="thumbnail">
                                            <img  src="#" />
                                            <span class="play-btn"></span>
                                        </div>
                                        <div class="video-card-body">
                                            <p class="upload-time">Updated on 12 Jan, 2021</p>
                                            <h3>API integration</h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,</p>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-12 col-md-6">
                                    <div class="video-card mb-5">
                                        <div class="thumbnail">
                                            <img  src="#" />
                                            <span class="play-btn"></span>
                                        </div>
                                        <div class="video-card-body">
                                            <p class="upload-time">Updated on 12 Jan, 2021</p>
                                            <h3>API integration</h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        
                    </div>
                
                </div>
            </div>
        </div>
        <hr>
        <span class="anchor" id="FAQs"></span>
        <div class="FAQs-container" >
            <div class="row m-0">
                <div class="col-lg-4 p-0">
                    <div class="FAQs-menu">
                        <h3>FAQs</h3>
                        <p>Frequently asked questions <br> about the product.</p>
                        <ul>
                            <li class="active">Payment Service Provider</li>
                            <li>User</li>
                            <li>Settlement</li>
                            <li>Reliability</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="FAQs-body">
                        <h3>Payment Service Provider</h3>
                        
                        <div class="FAQs-card">
                            <h4>1. Does it include international payments such as (Apple Pay)?</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br> Lorem Ipsum has been the industry’s standard dummy text ever…</p>
                        </div>
                        <div class="FAQs-card">
                            <h4>2. How does Dinger connect to banking applications?</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br> Lorem Ipsum has been the industry’s standard dummy text ever…</p>
                        </div>
                        <div class="FAQs-card">
                            <h4>3. Can we get demo videos?</h4>
                            <p>Yes, we will share the demo videos for PWA and QR.</p>
                        </div>
                        <div class="FAQs-card">
                            <h4>4. Is it available to make payments with offline Wave agents?</h4>
                            <p>No, it is not but Wave Pay is already available in our options.</p>
                        </div>  
                    </div>
                
                </div>
            </div>
        </div>

    </div>




    

        
</div>

@stop