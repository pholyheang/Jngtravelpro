@extends('layout.backend')
@section('program')
active
@endsection
@section('title')
	Program List
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
			    <h3>Packages <i class="fa fa-angle-double-right"></i><a href="{{route('getPost')}}"> Add New</a></h3><br>
		    </section>
		    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>
		                  	<input type="checkbox"  id="check_all" style="width: 16px; height: 16px; opacity: 0.7;">
			            </th>
		                <th>Image</th>
		                <th>Title</th>
		                <th>Category</th>
		                <th>Created By</th>
		                <th>Created At</th>
		                <th>Status</th>                
		            </tr>
		        </thead>
		    	<tbody>	
		    		@foreach($posts as $post)		    		
	    			<tr>
	    				<td style="width: 17px;vertical-align: middle; text-align: center;">
	    					<input type="checkbox" name="checkall" class="checkall" style="width: 16px; height:16px;opacity:0.7;">
						</td>
	    				<td style="width: 8%; vertical-align: middle;text-align: center;">
	    				<?php echo $post->image != '' ? '<img class="img-responsive" src="/photos/share/thumbs/'.$post->image.'">' : '<i style="font-size:28px;" class="'.$post->icon.'"></i>';?>
	    				</td>	    					
	    				<td>{{ str_limit($post->title, 60)}}</td>
	    				<td style="text-transform: capitalize;">{{isset($post->category->title)?$post->category->title:''}}</td>
	    				<td style="text-transform: capitalize;">{{ $post->user->fullname }}</td>
	    				<td>{{ date('Y-M-d', strtotime($post->created_at))}}</td>
	    				<td>
	    					<a data-url="{{route('deletePost')}}"  data-id="{{$post->id}}"  class="btnDeletePost btn btn-danger btn-xs">Delete</a>
	    					<a href="{{url('admin/post/edit')}}/{{$post->id}}" class="btn btn-info btn-xs">Edit</a>
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

