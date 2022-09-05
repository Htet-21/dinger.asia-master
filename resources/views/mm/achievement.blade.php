@extends('layouts.mm-achievement-app')

@section('content')

<div id="newsroom-page">
    <div id="achievement-detail-top-bg">

    </div>
    <div class="container">

        <div class="row">

            <div class="col-md-12 col-sm-12 col-12">
                <div id="news-content">
                    <p id="date-text">Achievements > {{$achievement->achievement_title}}</p><br>
                    <h1 style="font-size:24px;font-weight:bold;">{{$achievement->achievement_title}}</h1><br>

                    <img id="news-image" src="https://admin-info.dinger.asia/images/{{$achievement->path_name}}" alt="dinger image pattern" />
                    <p id="achievement-date-text">{{$achievement->created_at->format('M d, Y')}} . @php

                        $contentwords = str_word_count($achievement->achievement_content);

                        @endphp @if($contentwords < 500) 3 min Read @endif @if($contentwords> 500 & $contentwords < 1000) 5 min Read @endif @if($contentwords> 1000) 8 min Read @endif</p><br>
                    <div id="news-body">
                        {!!html_entity_decode($achievement->achievement_content)!!}
                    </div>
                </div><br>
            </div>

        </div>

    </div>
</div>


@stop