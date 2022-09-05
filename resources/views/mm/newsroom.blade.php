@extends('layouts.mm-app')

@section('title')
Dinger | Newsroom
@endsection

@section('content')

<div class="newsroom">

    <div class="newsroom-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-12 mb-5">
                    <div id="top-featured" class="mb-5">
                        <h1>{{$news_featured->news_title}}</h1>
                        <p id="date-text" class="mt-3 mb-5">{{$news_featured->created_at->format('M d, Y')}} . @php

                            $contentwords = str_word_count($news_featured->news_content);

                            @endphp @if($contentwords < 500) 3 min Read @endif @if($contentwords> 500 & $contentwords < 1000) 5 min Read @endif @if($contentwords> 1000) 8 min Read @endif</p>


                        @php $limited=Str::limit($news_featured->news_content, 100);
                        @endphp
                        <p id="limted" >{!!html_entity_decode($limited)!!}</p>
                        <p><a href="https://dinger.asia/news-detail/{{$news_featured->id}}" id="achi-link">Read more <img src="{{ asset('images/link-icon.svg') }}" /></a></p>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-12">

                </div>
            </div>
        </div>
        <img id="top-featured-img" src="https://admin-info.dinger.asia/images/{{$news_featured->path_name}}" alt="Dinger newsroom image" />
    </div>

    <div class="newsroom-2">
        <div class="container">
            <h2 id="latest-title" class="my-5">Latest</h2>
            <div class="row">
                @php
                $count = 0;
                @endphp

                @foreach ($news as $new)

                @php
                if($count == 3) break;
                @endphp

                <div class="col-md-4 col-sm-12 col-12">
                    <a id="latest-achi-link" href="https://dinger.asia/news-detail/{{$new->id}}">
                        <div id="latest-featured">

                            <img id="latest-img" src="https://admin-info.dinger.asia/images/{{$new->path_name}}" alt="Dinger newsroom image" />

                            <div class="p-4">

                            <h3>{{$new->news_title}}</h3>

                            @php $limited=Str::limit($new->news_content, 100);
                            @endphp

                            <div id="limited">
                                {!!html_entity_decode($limited)!!}
                            </div>

                            <div id="date-text" class="mb-1">{{$new->created_at->format('M d, Y')}} . @php

                                $contentwords = str_word_count($new->news_content);

                                @endphp @if($contentwords < 500) 3 min Read @endif @if($contentwords> 500 & $contentwords < 1000) 5 min Read @endif @if($contentwords> 1000) 8 min Read @endif</div>



                            </div>


                        </div>
                    </a>

                </div>

                @php
                $count++;
                @endphp

                @endforeach

            </div>

        </div>
    </div>

</div>

@endsection

@section('scripts')

@endsection
