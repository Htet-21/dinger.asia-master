@extends('layouts.app')

@section('content')

<div id="clients-page" class="container-fluid">

  <img id="clients-cloud" src="/images/cloud-icon.svg" />

  <img id="clients-dinger-pattern-2" src="/images/dinger-pattern1.svg" />

  <div id="clients-con" class="container">
    <img id="clients-dinger-pattern" src="/images/dinger-pattern1.svg" />
    <img id="clients-bf-icon" src="/images/bf-icon.svg" />
    <img id="clients-dinger-pattern-1" src="/images/dinger-pattern1.svg" />
    <h1>Shop List</h1>
    <p style="text-align:center;">We are here to inform you that we have high criteria for our partner online shops to work with us with a same mission to provide the reliable products and services for you. </p><br>
    <form id="search-form" action="/search-shop" method="POST" role="search">
      {{ csrf_field() }}
      <div class="col-md-8 col-sm-8 col-8">
        <button type="submit" class="btn btn-default"><img id="search-icon" alt="search icon" src="/images/search-icon.png"></button>
        <input placeholder="Search Shop" id="search" type="text" name="shop_name">
      </div>
    </form>

    <div class="row">
      @foreach($shoplists ?? '' as $shoplist)

      <div class="col col1">
        <img id="client-logo" src="https://admin-info.dinger.asia/images/{{$shoplist->path_name}}" />
        <p style="font-size:14px;">{{$shoplist->shop_name}}</p>
        <a style="font-size:14px;" target="blank" id="nr-explore" href="{{$shoplist->shop_link}}">Shop Now<img src="/images/seemore.svg" /></a>
      </div>

      @endforeach

    </div>

    <div id="paginate-div">
      {{ $shoplists ?? ''->links() }}
    </div>
    <hr>

    <h1 id="bot-text-clients"><a href="/partners">To see our partners <img id="see-more-icon" src="/images/seemore.svg" /></a></h1>
  </div>
</div>

@stop