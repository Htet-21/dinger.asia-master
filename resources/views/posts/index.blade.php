@extends('layouts.app')


@section('content')

@foreach($posts as $post)

<a id="no-color" href="{{route('posts.show', $post->id)}}">
<div id="post-block">
<h4>{{$post->title}}</h4>
<p>{{$post->body}}</p>
</div>
</a>

@endforeach

@endsection


