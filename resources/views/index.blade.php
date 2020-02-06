@extends('layout.app')
@section('title')
Travel Mangement Software 
@endsection
@section('content')
@include('include.menu')
@include('include.slide')
<div class=" welcome-section-top" >
	<div class="container">
	<div class="section-title welcome-section"><h2>Create your Travel Program with <span> JNGTRAVELPRO.COM</span></h2></div>
		<p>Are you a budget travel looking for a comfortable bed & breakfast arrangement for your holiday or are you a luxury traveler looking for a super luxurious hotel to wash off all that stress and rejuvenate you in its folds? You could be any one of these or anywhere between these two extremes of the spectrum or have any niche needs, eTravel.com will always have the perfect solution .</p>
	</div>
</div>
<div class="container margin-top">
    <div class="">
        <!-- Boxes de Acoes -->
        @foreach(App\Post::where('category_id', 4)->take(3)->get() as $key => $grow)
    	<div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="{{ $grow->icon }}"></i></div>
					<div class="info">
						<h3 class="title">{{$grow->title}}</h3>
						<p>	{!! str_limit($grow->intro, 200) !!}</p>
						<div class="more">
							<a href="/view-details/{{$grow->slug}}" title="Title Link">
								View Detail <i class="fa fa-angle-double-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>	
		@endforeach	    
	</div>
</div>
<div class="container-fluid margin-top welcome-section-top ">
	<div class="container margin-bottom">
		<div class="section-title welcome-section"><h2><span>Growth your business</span></h2></div>
		@foreach(App\Post::where('category_id', 3)->get() as $key => $prow)
		<div class="col-md-3">
			<a href="/view-details/{{$prow->slug}}">
				<div class="well img-circle text-center">	
					<div class="image">
						<i class="{{$prow->icon}}"></i>
					</div>
					<span>{{$prow->title}}</span>	
				</div>
			</a>
			<div class="space"></div>
		</div>
		@endforeach			
		<div class="clear"></div>
	</div>
</div>
<div class="container margin-top ">
	<div class="col-md-6 ">
		<div class="monitor">
			@include('include.monitor')
		</div>		
	</div>
	<div class="col-md-6">
		<div class="section-title"><center><h3>What We Do</h3></center></div>
		<p>As a distributor COMPLETE TOUR BOOKING SYSTEM for Indochina and Eastern 	Europe, we know how to help travel agencies grow their business.
			We carefully listen to the needs of the travel industry and tirelessly create solutions that save your time, money and bring you more and more satisfied customers.
		</p>
	</div>
	<div class="clear"></div>
</div>
<div class="container margin-top " id="client-section">
	<strong>OUR CLIENTS</strong><hr>
	@include('include.client')
	<div class="clear"></div>
</div><br>

@include('include.footer')
@endsection
