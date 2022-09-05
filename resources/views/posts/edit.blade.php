@extends('layouts.app')


@section('content')

<h1>Edit Post</h1>

{!! Form::model($post, ['method'=>'PATCH', 'action' => ['PostsController@update', $post->id], 'id' => 'edit-form']) !!}
@csrf

<div class="form-group">
{!! Form::text('title', null, ['class'=>'form-control', 'value'=>'{{$post->title}}']) !!}
</div>

<div class="form-group">
{!! Form::textarea('body', null, ['class'=>'form-control', 'value'=>'{{$post->body}}']) !!}
</div>

<div class="form-group">
{!! Form::submit('Update Post', ['class'=>'btn btn-primary']) !!}
</div>

{!! Form::close() !!}




@endsection


