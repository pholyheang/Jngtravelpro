@extends('layout.app')
@section("title")
	OUR SERVICES
@endsection 
@section('content') 
@include('include.menu')     
<div class="welcome-section-top" >
	<div class="container">           
		<div class="col-md-12">
			<h3><strong><center>OUR SERVICES</center></strong></h3>
			<!-- <p>We have service include free maintantent within 1 years and support what you want and we will make you happy with us</p> -->
		</div>
	</div>
</div>
<div class="container"> <br><br>
	@foreach(App\Post::where('category_id', 3)->orderBy('created_at')->get() as $key => $prow)
		<div class="row" style=" background: white;border: solid 1px #ddd;border-radius: 2px;">
			<div class="col-md-4 row">
				<img src="/photos/share/{{$prow->image}}" class="image img-responsive " >
			</div>
			<div class="col-md-8 ">
				<h3><strong>{{$prow->title}}</strong></h3>
				<p style="text-align: justify;">{!! str_limit(strip_tags($prow->intro),700) !!}</p>
				<a href="view-details/{{$prow->slug}}" class="btn btn-default">Read Details</a>
			</div>
		</div>	
		<br>
	@endforeach
	<br>
</div>
@include('include.footer')
@endsection
