@extends('layout.backend')
@section('program')
active
@endsection
@section('title')
	Program - Add
@endsection
@section('content')
<div class="wrapper">
  @include('admin.include.header')
  <!-- Left side column. contains the logo and sidebar -->
  @include('admin.include.leftMenu')
  <!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	    <section class="content row">
    		@include('admin.include.message')
    		
	    	<form method="POST" action="{{route('addPost')}}" enctype="multipart/form-data">
	    		{{ csrf_field() }}
				<section class="col-md-8 connectedSortable">
					<div class="panel">
						<div class="box-header">			
					       <h3>Add New Post </h3>			  
					    </div>
						<div class="row">						    
						    <div class="box-body">
						      	<div class="col-md-12 col-md-12">		                   
			                    	<div class="form-group">
			                            <input type="text" id="title" name="title" class="form-control input-md" placeholder="New Title" required>
			                        </div>		                            
			                        <div class="row">
			                            <div class="col-xs-12 col-sm-6 col-md-6">
			                            	<div class="form-group">
				                               <select class="form-control" id="category" name="category" style="text-transform: capitalize;">
				                               		<option value="">Choose Type</option>
				                               		@foreach(\App\Category::all() as $cat)
				                               		<option value="{{$cat->id}}">{{$cat->title}}</option>
				                               		@endforeach
				                               </select>
				                            </div>
			                            </div>
			                            <div class="col-xs-12 col-sm-6 col-md-6">
			                                <div class="form-group">
				                                <input type="text" id="icon" name="icon" class="form-control input-md" placeholder="Awesome Icon" >
				                                <a style="position:absolute;" target="_blank" href="https://adminlte.io/themes/AdminLTE/pages/UI/icons.html"><i>Icon check library</i></a>
			                                </div>
			                            </div>
			                        </div>	                                
			                      	<div class="form-group">
			                      		<div class="row" style="padding: 4px;">
			                            	<div class="box-body">							            
								               <!--  <textarea id="intro" style="height: 300px;" name="intro" class="LoadData form-control" placeholder="Place some text here"></textarea>	
								                -->
								                <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
												<textarea name="intro" class="form-control my-editor">{!! old('intro') !!}</textarea>
								            </div>
							            </div>
			                        </div>
			                        <hr class="colorgraph">
				                </div>        
						  	</div>
					  	</div>				  
				  	</div>
				</section>
				<section class="col-md-4 connectedSortable">
					<div class="box box-solid">
					    <div class="box-header"></div>		     
					    <div class="panel">
				    		<div class="col-md-12">
				    			<label>Feature Image</label>
				    			<hr style="margin-top: 0px; margin-bottom: 4px;">
				    			<a id="choosImg" href="javascript::void(0)">Choose Image</a>
					        	<input name="image" type='file' id="imgInp" style="display: none;" />
					        	<center>
							    	<img class="img-responsive" id="blah" src="#"  style="display: none; cursor: pointer;"/>
							    </center>
							    <hr class="colorgraph">		
								<input type="submit" value="Public" class="btn bg-olive">				               	
				            </div>
			             	<div class="clear"></div>
			             	<br>
						</div>
					</div>			
				</section>   
			<div class="clear"></div>  
			</form>
	    </section>
	    <!-- /.content -->
	</div>
  <!-- /.content-wrapper -->
  @include('admin.include.editorscript')
	@include('admin.include.footer')
</div>
@endsection
