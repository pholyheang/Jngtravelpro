@extends('layout.backend')
@section('client')
active
@endsection
@section('title')
	Client List
@endsection
@section('content')
<div class="wrapper">
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/jquery.dataTables.min.js') }}"></script>	
  	@include('admin.include.header')
  	<!-- Left side column. contains the logo and sidebar -->
  	@include('admin.include.leftMenu')
  	<!-- Content Wrapper. Contains page content -->
  	<div class="content-wrapper">
  		<div class="col-md-12">
		    <section class="content-header row">
			    <h3>Client Lists <i class="fa fa-angle-double-right"></i><a href="{{route('clientForm')}}"> Add New</a></h3><br>
		    </section>
		    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>
		                  	<input type="checkbox" id="check_all" style="width: 16px; height: 16px; opacity: 0.7;">
			            </th>
		                <th>Image</th>
		                <th>Client Name</th>
		                <th>Created By</th>
		                <th>Created At</th>
		                <th class="text-right">Status</th>                
		            </tr>
		        </thead>
		    	<tbody>	
		    		@foreach($clients as $post)		    		
	    			<tr>
	    				<td style="width: 17px;vertical-align: middle; text-align: center;">
	    					<input type="checkbox" name="checkall" class="checkall" style="width: 16px; height:16px;opacity:0.7;">
						</td>
	    				<td style="width:8%; vertical-align: middle;text-align: center;">
	    					<img class="img-responsive" src="/photos/share/thumbs/{{ $post->logo }}">
	    				</td>	    					
	    				<td>{{ $post->client_name}}</td>	    				
	    				<td style="text-transform: capitalize;"> {{{ $post->user->fullname or ''}}}</td>
	    				<td>{{ date('Y-M-d', strtotime($post->created_at))}}</td>
	    				<td class="text-right">	    					
	    					<a href="{{url('admin/client/edit/')}}/{{$post->id}}" class="btn btn-info btn-xs">Edit</a>
	    					<a data-url="{{route('clientDelete')}}"  data-id="{{$post->id}}"  class="btnDelCleint btn btn-danger btn-xs">Delete</a>
	    				</td>
	    			</tr>
		    		@endforeach
		    	</tbody>
		    </table>
	    </div>
   </div>
   @include('admin.include.footer')
</div>
<script type="text/javascript">
	$(document).ready(function() {
	    $('#example').DataTable();
	    $("#check_all").click(function () {
	        if($("#check_all").is(':checked')){	        	
	            if ($('#example tbody tr:visible')) {
	                $('#example tbody tr:visible td .checkall').prop('checked', true);     
	            }else{
	                $('#example tbody tr:visible td .checkall').prop('checked', false);     
	            }          
	        } else {
	            $(".checkall").prop('checked', false);
	        }
	    });
	} );
</script>
@endsection

