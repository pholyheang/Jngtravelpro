
@if(session('message'))
<div class="col-md-12">
	<div class="alert alert-warning alert-dismissible show" role="alert">							
	  	<strong> {{ session('message')}} </strong>
	  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    	<span aria-hidden="true">&times;</span>
	  	</button>
	</div>		
</div>
@endif
	

