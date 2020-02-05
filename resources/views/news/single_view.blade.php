@extends('layout.app')
    @section('title')
        News
    @endsection
@section('content')
@include('include.menu')
<style type="text/css">
    img{
        width: 100%;
    }
</style>
<div class="container">
    <div class="section-title welcome-section"></div>
    <div class="col-md-8">
        <div class="borderfix" style="padding: 6px;">
            <div class="clearfix"></div>
            <h3><span><strong>{{$new->title}}</strong></span></h3>
            <span>{{date('F, d, Y', strtotime($new->created_at))}}</span>
            <p><img src="/photos/share/{{$new->photo}}" class="img-responsive img-thumbnail" style="margin-right:5px;"></p>
            <p>{!! $new->details !!}</p>            
            <div class="clearfix"></div>
            <hr>          
        </div>        
    </div>
    @include('news.leftSide')
</div>
@include('include.footer')
@endsection