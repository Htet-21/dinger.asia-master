@extends('layouts.app')

@section('content')

<div id="guides-detail-page">

    <div id="guides-detail-top-bg">

    </div>
    <div class="container">

        <div class="row">

            <div class="col-md-12 col-sm-12 col-12">
                <div class="video-content">

                    <a href="{{ url('/help') }}">
                    <div class="backbtn"><img src="{{ asset('images/back-icon.svg') }}"/><p>Back</p></div>
                    </a>

                    <h1>API integration</h1>
                    <p class="upload-time">Updated on 12 Jan, 2021</p>

                    <div class="video-container">


                    </div>
                  
                </div>
            
                <div class="related-video">
                    <h3 class="title">Related videos</h3>

                    <div class="related-video-container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
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
                        <div class="col-12 col-md-6 col-lg-4">
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
                        <div class="col-12 col-md-6 col-lg-4">
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

    </div>
</div>


@stop