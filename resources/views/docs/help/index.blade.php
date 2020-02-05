@extends('layout.app')
@section('title', 'System Documentions')

@section('content') 
@include('include.menu')     
<div class="welcome-section-top" >
	<div class="container">           
		<div class="col-md-12">
			<h3><strong><center>RESULTS</center></strong></h3>
			<!-- <p>We have service include free maintantent within 1 years and support what you want and we will make you happy with us</p> -->
		</div>
	</div>
</div>
<div class="container"> <br><br>

		<div class="row" style=" background: white;border: solid 1px #ddd;border-radius: 2px;">
			<div class="col-md-12 ">
				<h3><strong>{{$item->title}}</strong></h3>
				<p style="text-align: justify;">{!! $item->desc !!}</p>
			</div>
		</div>
		<br>

	<br>
</div>
@include('include.footer')
@endsection
