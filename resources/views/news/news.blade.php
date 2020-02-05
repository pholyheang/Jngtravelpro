@extends('layout.app')
	@section('title')
		News
	@endsection
@section('content')
@include('include.menu')
<div class="container">
	<div class="section-title welcome-section"><h2>Our News</h2></div>
	<div class="col-md-8">
		<div class="borderfix">
			@foreach($news as $new)
	        	<div class="clearfix"></div>
	        	<span><strong>{{$new->title}}</strong></span>
	            <img src="/photos/share/thumbs/{{$new->photo}}" class="img-responsive img-thumbnail pull-left" style="margin-right:5px;">
	            	<p>{{ str_limit(strip_tags($new->details), 350) }}</p>
                    <a href="/news/single-view/{{$new->slug}}">View Delails</a>
	            <div class="clearfix"></div>
	            <hr>
	        @endforeach
	        <div class="clearfix"></div>
            {{ $news->links() }}
		</div>        
        <div class="clearfix"></div>
        <br>
	</div>
    @include('news.leftSide')	
</div>
@include('include.footer')
@endsection