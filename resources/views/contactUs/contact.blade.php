@extends('layout.app')
@section('title')
	Contact Us
@endsection
@section('content')
@include('include.menu')
<style type="text/css">
	.welcome-section-top {
	    background: #f4f6fe url('');
	    background-position: center top;
	    background-repeat: no-repeat;
	}

	.addcol{color: #002aff; }
	.addcol1:focus{color: red; border-color: red;}

</style>
<div class=" welcome-section-top">
	<div class="container">
		<br><br><div class="clearfix"></div>
		<!-- @if(session('message')) -->
		<div class="col-md-12">
			<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong></strong>{{session('message')}}
			</div>
	    </div>
	    <!-- @endif -->
		<div class="section-title welcome-section text-right"><h2><b>Get In Touch</b></h2></div>
		<div class="col-md-6">
			<img src="/img/location.jpg" class="img-responsive">
		</div>
		<div class="col-md-6">
			<p>Let us show you how we can help !</p>
			<form method="POST" action="{{route('contactForm')}}" >
				{{csrf_field() }}
				<div class="row">
	                <div class="col-xs-12 col-sm-6 col-md-6">
	                	<div class="form-group has-feedback username">
	                     	<input type="text" name="username" id="username" class="form-control" placeholder="User Name" required="">
	                    </div>
	                </div>
	                <div class="col-xs-12 col-sm-6 col-md-6">
	                    <div class="form-group has-feedback email">
	                  <!--     	<input class="form-control" name="email" id="email" type="email" placeholder="Email Address" required="" > -->
	                      	<input type="email" class="form-control" name="email" id="eshow" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required="" />
	                    </div>
	                </div>
	            </div>	  
	            <div class="row">
	                <div class="col-xs-12 col-sm-6 col-md-6">
	                	<div class="form-group has-feedback topic">
	                     	<input type="text" id="topic" name="topic" class="form-control" placeholder="Which Solution ?" required="">
	                    </div>
	                </div>
	                <div class="col-xs-12 col-sm-6 col-md-6">
	                    <div class="form-group has-feedback phone">
	                       <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone*" required="">
	                    </div>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-xs-12 col-sm-12 col-md-12">
	                	<div class="form-group has-feedback message">
		                	<textarea class="form-control" name="message" id="message" rows="3" placeholder="Message..."></textarea>
		                </div>
	                </div>
	            </div><br>
	            <div class="row" id="notrobot">
	        		<div class="col-md-3">
	        			<input type="text" id="num1" class="form-control textbox_color"   style="float: left; text-align: center;" disabled></div>
	        		<div class="col-md-3">
	        			<input type="text" id="num2" class="form-control textbox_color" style="float: left; text-align: center;" disabled >
	        		</div>
	         		<div class="col-md-6"><input type="text" name="myResult" id="myResult" class="form-control textbox_color" placeholder="" required ></div>
				</div><br>

	            <div class="row">
	                <div class="col-xs-12 col-sm-6 col-md-6">
	               		<input type="submit" class="btn btn-info btn-flat" data-url="{{route('contactForm')}}" value="Submit">
	               	</div>
	            </div>
            	<br>
	        		
        	</form>

        </div>	   
	</div>
</div>
@include('include.footer')
<script type="text/javascript">
	$(document).ready(function(){

	    var datanum1=Math.floor(Math.random() * 11)+1;
	    var datanum2=Math.floor(Math.random() * 11)+1;
	  $('#num1').val(datanum1);
	  $('#num2').val(datanum2);
	  $('#myResult').on('keyup',function(){

	    var getdata=$(this).val();
	    var total = datanum1 + datanum2;
	    
	    
	    if (getdata == total) {
	      $('#myResult').removeClass('addcol1');
	         $('#btn').on('click',function(){
	         $('#myResult').val(getdata);
	    
	      });
	    }
	    else{
	       $('#myResult').addClass('addcol1');
	       $('#myResult').attr('required', true);

	       $('#btn').on('click',function(){
	         $('#myResult').val('');
	    
	        });
	    }
	  });
	  $('#notrobot').css({'display':'none'});
	  $('#eshow').on('keyup', function(){
	      var eshow= $('#eshow').val();
	        if (eshow.length>0) {
	          $('#notrobot').css({'display':'block'});
	    console.log(eshow);
	  }
	  else{
	     $('#notrobot').css({'display':'none'});
	  }
	  });

	});
</script>
@endsection