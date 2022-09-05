@extends('layouts.app')


@section('content')



<h1>Create Post</h1>

<!-- <form id="create-form" method="post" action="/posts"> -->
{!! Form::open(['url' => '/posts', 'id' => 'create-form', 'files'=>true]) !!}
@csrf

<div class="form-group">
{!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Enter post title']) !!}
</div>

<div class="form-group">
{!! Form::textarea('body', null, ['class'=>'form-control', 'placeholder'=>'Enter Post Content', 'id'=>'textarea']) !!}
</div>

<div class="form-group">
{!! Form::file('file', ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
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

@endsection


