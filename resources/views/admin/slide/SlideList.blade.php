@extends('layout.backend')
@section('slide')
active
@endsection
@section('title')
	Slide List
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
			    <h3>Image Slide show <i class="fa fa-angle-double-right"></i><a href="{{route('slideForm')}}"> Add New</a></h3><br>
		    </section>
		    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
		        <thead>
		            <tr>		               
		                <th>Image</th>
		                <th>Title</th>		
		                <th>Slide for </th>                
		                <th>Created At</th>
		                <th class="text-right">Status</th>                
		            </tr>
		        </thead>
		    	<tbody>	
		    		@foreach($slides as $slide)		    		
	    			<tr>	    					    				
	    				<td style="width: 20%; vertical-align: middle;text-align: center;">
	    					<img src="/photos/share/thumbs/{{$slide->slide}}" class="img-responsive">
	    				</td>
	    				<td>{{ $slide->title }}</td>	
	    				<td>
	    					@if($slide->slide_for == 2)
								Monitor	    						
	    					@else
	    						Home Page
	    					@endif
	    				</td>    				
	    				<td>{{ date('Y-M-d', strtotime($slide->created_at))}}</td>	    				
	    				<td class="text-right">
	    					<a href="{{url('admin/slide/edit')}}/{{$slide->id}}" class="btn btn-info btn-xs">Edit</a>
	    					<a data-url="{{route('getDelete')}}" data-id="{{$slide->id}}"  class="btnDelSd btn btn-danger btn-xs">Delete</a>	    					
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

