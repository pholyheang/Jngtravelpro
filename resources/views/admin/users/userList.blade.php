@extends('layout.backend')
@section('users')
	active
@endsection
@section('title')
	Users Lists
@endsection
@section('content')
<div class="wrapper">
  	@include('admin.include.header')
  	@include('admin.include.leftMenu')
  	<script type="text/javascript" src="{{ asset('adminlte/js/lib/jquery.dataTables.min.js') }}"></script>	
  	<div class="content-wrapper">
  		<div class="col-md-12">
	    <section class="content-header " style="margin-bottom: 20px;">
		    <h3>User Lists <i class="fa fa-angle-double-right"></i> <a id="LoadURL" data-url="{{ url()->current()  }}" href="{{route('getUserForm')}}">Add New</a></h3><br>		
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	        <thead>
	            <tr>
	                <th>User Name</th>
	                <th>Phone</th>
	                <th>Email</th>
	                <th>Created_at</th>
	                <th>Status</th>                
	            </tr>
	        </thead>
	        <tbody>
	            @foreach($users as $user)
	            <tr>
	            	<td>{{$user->fullname}}</td>
	            	<td>{{$user->phone}}</td>
	            	<td>{{$user->email}}</td>
	            	<td>{{ date('Y-m-d', strtotime($user->created_at))}}</td>
	            	<td>
	            		<a data-url="{{route('delUser')}}" data-id="{{$user->id}}" class="btnDelete btn btn-danger btn-xs">Delete</a>
			    		<a href="{{url('admin/user/edit')}}/{{$user->id}}" class="btn btn-info btn-xs">Edit</a>
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
	} );
</script>
@endsection

