@extends('layout.backend')
@section('program')
active
@endsection
@section('title')
	Category List
@endsection
@section('content')
<div class="wrapper">
<?php
	if ( isset($_GET['id']) ) {
		$id = $_GET['id'];
		$cat = \App\Category::where('id', $id)->first();
		$title = $cat->title;
		$details = $cat->details;
		$slug = $cat->slug;
		$action = route('categoryUpdate');
		$btnText = 'Update';

	} else {
		$id = '';
		$action =  route('categoryAdd');
		$btnText = 'Add';
		$title = '';
		$details = '';
		$slug = '';
	}
?>
@include('admin.include.header')
@include('admin.include.leftMenu')
	<div class="content-wrapper">
	    <section class="content row">
    		<div class="col-md-12" id="LoadMessage">
    			
    		</div>
	    	<form method="POST" >
	    		{{ csrf_field() }}
				<section class="col-md-4 connectedSortable">
					<div class="box box-solid">
					    <div class="box-header"></div>		     
					    <div class="panel">
				    		<div class="col-md-12">
				    			<label>Add New Category</label>
				    			<div class="row">		                        
		                            <div class="col-xs-12 col-sm-12 col-md-12">
		                            	<input type="hidden" name="id" id="id" value="{{$id}}">
		                                <div class="form-group " id="catTitle">
			                                <input type="text" id="category_name"  class="form-control input-md" placeholder="Category Name" required value="{{$title}}">
		                                </div>
		                            </div>
		                            <div class="col-xs-12 col-sm-12 col-md-12">
		                                <div class="form-group">
			                                <textarea id="details" rows="6" class="form-control" placeholder="Description">{{ $details }}</textarea>
		                                </div>
		                            </div>
		                        </div>						        	
							    <hr class="colorgraph">		
								<input type="submit" value="{{$btnText}}" data-url="{{$action}}" class="btn bg-olive" id="btnAddCategory">
				            </div>
			             	<div class="clear"></div>
			             	<br>
						</div>
					</div>			
				</section>  
				<section class="col-md-8 connectedSortable">
					<div class="panel">
						<div class="box-header">			
					       <h3><label>Category List <i class="fa fa-angle-double-right"></i> <a href="/admin/category">Add New</a></label></h3>			  
					    </div>
					    <div class="box-body">
					    	<table class="table table-striped" id="example">
					    		<thead>
					    			<th>Title</th>
					    			<th>Details</th>	
					    			<th class="text-right">Status</th>					    			
					    		</thead>
					    		<tbody>
					    			@foreach($getCat as $cat)
					    				<tr>
					    					<td style="text-transform: capitalize;">{{$cat->title}}</td>
					    					<td>{{$cat->details}}</td>
					    					<td class="text-right">
					    						<a href="/admin/category?id={{$cat->id}}" class="btn btn-info btn-xs">Edit</a>&nbsp;&nbsp;
					    						<!-- <a href="javascript:void()" data-url="" data-id="{{ $cat->id }}" class="btn btn-danger btn-xs btnCatDel">Delete</a> -->
					    					</td>
					    				</tr>
					    			@endforeach
					    		</tbody>
					    	</table>
					    	{{ $getCat->links() }}
							<br>
					  	</div>				  					  
				  	</div>
				</section> 
				<div class="clear"></div>  
			</form>
	    </section>
	</div>
	@include('admin.include.footer')
</div>
@endsection
