@extends('layouts.mm-job-app')

@section('content')

<div id="jobs-detail-page">

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">


                <a href="{{ url('career/') }}">
                <div class="backbtn"><img src="{{ asset('images/back-icon.svg') }}"/><p>Back</p></div>
                </a>

                <div id="title-block">
                    <h1>{{$job->job_title}}</h1>
                    <div class="title-des"><img src="{{ asset('images/time-icon.svg') }}"/><p>{{$job->job_type}}</p></div>
                    <div class="title-des ml-5"><img src="{{ asset('images/salary-icon.svg') }}"/><p>{{$job->salary}}</p></div>
                </div>


                <div id="jobs-detail-div">

                    <h4 class="mb-4">What We Can Offer?</h4>
                    <p class="mb-5">{!!html_entity_decode($job->offer)!!}</p><br>

                    <h4 class="mb-4">Job Description</h4>
                    <p class="mb-5">{!!html_entity_decode($job->desc)!!}</p><br>

                    <h4 class="mb-4">Job Requirements</h4>
                    <p class="mb-5">{!!html_entity_decode($job->requirements)!!}</p>

                    <hr>
                    <br>

                    <p id="job-application-title" class="my-4">If you are interested in building future with us please send your resume to <a href="mailto:info@dinger.asia">info@dinger.asia</a></p>
<!-- 
<form action="/jobsfiles/store" id="job-apply-form" method="post" enctype="multipart/form-data">
    @csrf

    <div class="custom-file mb-3">
        <input id="job-file" type="file" class="custom-file-input" id="customFile" name="path_name">
        <label class="custom-file-label" for="customFile">Choose your resume file</label>
    </div>
    <div class="my-4">
        <button id="form-submit-btn" type="submit" id="job-submit-btn">Submit resume</button>
    </div>

</form>

@if (count($errors) > 0)

    <div class="alert alert-danger">

        <ul>
            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

@if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif -->



                </div>

            </div>
        </div>
    </div>
</div>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

@stop
