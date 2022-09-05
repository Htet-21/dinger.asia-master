@extends('layouts.app')

@section('title')
Dinger | Career
@endsection

@section('content')

<div class="career">

    <div class="job-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <h1 id="job-top-title">Join our team</h1>
                    <br />
                    <p id="top-content">Dinger vision is to re-innovate the payment system and build the future with less headache payment environment. And we believe the passion and the dedication are the only fuel to drive Dinger forward. You are welcome to the team if you think you have the same passion.</p>
                    <br />
                    <a href="#jof-title"><button id="create-acc-btn">See all jobs</button></a>
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <div id="job-top-img" class="row">
                        <div class="col-md-4 col-sm-4 col-6">
                            <img src="{{ asset('images/job1.svg') }}" />
                        </div>
                        <div class="col-md-4 col-sm-4 col-6">
                            <img src="{{ asset('images/job2.jpg') }}" />
                        </div>
                        <div class="col-md-4 col-sm-4 col-6">
                            <img src="{{ asset('images/job3.jpg') }}" />
                        </div>

                        <div class="col-md-4 col-sm-4 col-6">
                            <img src="{{ asset('images/job4.jpg') }}" />
                        </div>
                        <div class="col-md-4 col-sm-4 col-6">
                            <img src="{{ asset('images/job5.svg') }}" />
                        </div>
                        <div class="col-md-4 col-sm-4 col-6">
                            <img src="{{ asset('images/job6.jpg') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="job-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-12">
                    <img src="{{ asset('images/job-second-banner.jpg') }}" />
                </div>
                <div class="col-md-8 col-sm-12 col-12 d-flex flex-column justify-content-center pb-5">
                    <h2 id="job-top-title">Still in school?</h2>
                    <br />
                    <p id="top-content">Interested in building future? You are welcome even though just graduate or you are still in school?</p>
                    <br />
                    <a href="#jof-title"><button id="create-acc-btn">Find out more opportunities</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="job-3">
        <div class="container">
            <h3 id="jof-title" class="py-5">Job Openings for you</h3>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12 p-0">
                    <div id="job-block">
                        <form>

                            @csrf

                            <input placeholder="Search Jobs . . ." type="text" name="job_search" />

                            <button type="submit"><img src="{{ asset('images/search-icon.svg') }}" /></button>

                        </form>

                        @if($jobs)
                        @foreach($jobs as $job)
                        <div id="job-row">
                            <div id="job-col">
                                <p id="j-title">{{$job->job_title}}</p>
                                <p id="job-sub">{{$job->job_category}} • {{$job->job_type}}</p>
                            </div>
                            <div id="job-col" class="d-none d-lg-block d-xl-block">
                                <p id="job-normal">{{$job->level}}</p>
                            </div>
                            <div id="job-col" class="d-none d-lg-block d-xl-block">
                                <p id="job-normal">1 post</p>
                            </div>
                            <div id="job-arrow-col">
                                <a href="/jobs-detail/{{$job->id}}/eng" style="float:right;"><img src="{{ asset('images/detail.svg') }}" /></a>
                            </div>
                        </div>
                        @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('scripts')

@endsection
