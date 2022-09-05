@extends('layouts.app')

@section('title')
Dinger | Jobs
@endsection

@section('content')

<div id="jobs-page" class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-12">

            <div id="title-block">
                Career
            </div>
            <img id="cloud-jobs" alt="dinger cloud icon" src="/images/cloud-icon.svg" />
            <img id="bf-jobs" alt="dinger bf icon" src="/images/bf-icon.svg" />

            <div id="jobs-con" class="container">
                <div id="jobs-table">
                    <p><b>{{ $jobscount }}</b> Jobs Found</p>

                    <div id="jobs-head">
                        <div id="jobs-col">
                            <p>Position</p>
                        </div>
                        <div id="jobs-col">
                            <p>Experienced Level</p>
                        </div>
                        <div id="jobs-col-1">
                            <p>Posts</p>
                        </div>
                        <div id="jobs-col">
                            <p>Max Salary</p>
                        </div>
                        <div id="jobs-col">
                            <p>Posted Date</p>
                        </div>
                        <div id="jobs-col-2">
                            <img id="dp-jobs" alt="dinger pattern" src="/images/dinger-pattern.svg" />
                        </div>
                    </div>

                    @if($jobs)

                    @foreach($jobs as $job)
                    <div id="jobs-body">
                        <div id="jobs-col">
                            <p>{{$job->job_title}}</p>
                        </div>
                        <div id="jobs-col">
                            <p>Entry Level</p>
                        </div>
                        <div id="jobs-col-1">
                            <p>1</p>
                        </div>
                        <div id="jobs-col">
                            <p>Negotiable</p>
                        </div>
                        <div id="jobs-col">
                            <p>{{$job->created_at}}</p>
                        </div>
                        <div id="jobs-col-2">
                            <a href="{{  Request::url() }}/jobs-detail/{{$job->id}}/eng"><button>View Job</button></a>
                        </div>
                    </div>
                    @endforeach
                    @endif


                </div>
            </div>

        </div>
    </div>
</div>

<div id="jobs-footer">
    <img src="/images/nr-footer-shape.png" />
</div>

@stop
