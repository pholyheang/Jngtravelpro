@extends('layout.app')
	@section('title')
		{{ $post->title }}
	@endsection
@section('content')
@include('include.menu')
<?php $img = '/photo/photo/'.$post->image;?>
<div class="" >
	<div class="container">
		<div class="section-title welcome-section"><h2>{{$post->title}}</h2></div>
		<p>{!! $post->intro !!}</p>
	</div>
</div>
@include('include.footer')
@endsection