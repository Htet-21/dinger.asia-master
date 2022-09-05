@extends('layouts.app')


@section('content')


<div id="post-block">
<h4>{{$post->title}}</h4>
<p>{{$post->body}}</p>
<a href="{{route('posts.edit', $post->id)}}">Edit post</a>
{!! Form::open(['method'=>'DELETE', 'action' => ['PostsController@destroy', $post->id]]) !!}
<form method="post" action="/posts/{{$post->id}}">
@csrf

{!! Form::submit('DELETE', ['class'=>'btn btn-danger']) !!}

</form>
</div>

@endsection


