<?php $getDepartment =  App\Admin\Department::where('status',1)->orderBy('order')->get(); ?>
<style type="text/css">
	/*.myheader{
		right:15px;
		width: 100%; 

		box-shadow: 0 0 4px -2px black;
		background-color: #fff;
		z-index: 999; 
		position: absolute;
		display: none;
	}
	.mybody{
		width: 100%;
		height: 100%; 
		border-bottom: 1px solid #ddd; 
		padding: 0px 10px;
	}
	a:hover{
		text-decoration: none !important;
	}*/
	/*.mybody:last-child{
		border: none;
	}*/
</style>
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
		    		<li><a href="/{{$mn->slug}}">{{$mn->name}}</a></li>
		    	@endforeach
		    	<!-- <li class=" menu-search" >
		    		<a href="#">
			          <i class="fa fa-search" style="position: absolute;padding: 6px;"aria-hidden="true"></i>
			          <input 	class="menu-search-input"
		        				type="text"		        		
		        				placeholder="Search"
		        				id="doSearch" 
		        				style="padding-left: 25px; border-radius:3px; border: 1px solid #ddd; width: 100%;" 
		        		/>
			       	</a>
			       	<div class="myheader">
			       	</div>
		      	</li> -->
		    	<!-- 
		        <li class="active"><a href="{{route('getService')}}">Our Services</a></li>
		        <li><a href="#client" id="client">Clients</a></li>
		        <li><a href="{{route('news')}}">News</a></li>
		        <li><a href="{{route('contact')}}">Contact Us</a></li> -->
		    </ul>		  
	    </div>
	</div>
</nav>
<!-- <script type="text/javascript">
	(function() {
		$('#doSearch').on('keyup', function(){
			var data = $(this).val();
			if (data.length >=3) {				
				$.ajax({
			        type: 'get',
			        url: '{{route("research")}}',
			        data: {'search': data},
			        success: function(data1) {
			        	var dataArr = [];
			        	$.each(data1, function (key, vals) {
			        		var htmls = '<a href="'+vals.slug+'"><div class="mybody"><h4>'+vals.title+'</h4><h>'+vals.desc+'</h5></div></a>';
			        		dataArr.push(htmls);
			        	});
			        	if (dataArr.length > 0) {
			        		$('.myheader').css({'display': 'block'});
			            	$('.myheader').html(dataArr);
			        	}else{
			        		$('.myheader').css({'display': 'none'});
			        	}
			        	console.log(dataArr.length);

			        },
			        error: function() {
			            return false;
			        },
			    });
			}else{
				$('.myheader').html('');
				$('.myheader').css({'display': 'none'});
			}

		});

		$('#doSearch').focus(function() {
			$(document).bind('focusin.doSearch click.doSearch',function(e) {
		        if ($(e.target).closest('.myheader, #doSearch').length) return;
		        $(document).unbind('.myheader');
		        $('.myheader').fadeOut('medium');
		        console.log(1)
		    });
		        $('.myheader').show();
		});
	
}())
</script> -->
