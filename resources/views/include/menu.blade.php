<?php $getDepartment =  App\Admin\Department::where('status',1)->orderBy('order')->get(); ?>
<nav class="navbar navbar" id="menu-nav">
	<div class="container" id="menu-header">
	    <div class="navbar-header">
	      	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="glyphicon glyphicon-menu-hamburger"></span>
	      	</button>
		    <a class="navbar-brand" id="web-logo" href="{{url('')}}">
		      	<img style="width: 248px;" src="{{url('img/jnglogo.png')}}" class="img-responsive" id="img-logo">
		    </a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
		    <ul class="nav navbar-nav" id="nav-ul">
		    	<li><a href="{{url('/')}}">Home</a></li>
		    	@foreach($getDepartment as $key=> $mn)
		    		<li><a href="{{$mn->slug}}">{{$mn->name}}</a></li>
		    	@endforeach
		    	<!-- 
		        <li class="active"><a href="{{route('getService')}}">Our Services</a></li>
		        <li><a href="#client" id="client">Clients</a></li>
		        <li><a href="{{route('news')}}">News</a></li>
		        <li><a href="{{route('contact')}}">Contact Us</a></li> -->
		    </ul>		   
	    </div>
	</div>
</nav>
