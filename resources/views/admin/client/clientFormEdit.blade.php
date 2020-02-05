@extends('layout.backend')
@section('client')
active
@endsection
@section('title')
	News - Add
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
    		
	    	<form method="POST" action="{{route('clientUpdate')}}" enctype="multipart/form-data">
	    		{{ csrf_field() }}
				<section class="col-md-8 connectedSortable">
					<div class="panel">
						<div class="box-header">			
					       <h3>Add New</h3>			  
					    </div>
						<div class="row">						    
						    <div class="box-body">
						      	<div class="col-md-12 col-md-12">		                   
			                    	<div class="form-group">
			                            <input type="text" id="title" name="title" class="form-control input-md" placeholder="Client Name" required value="{{$client->client_name}}">
			                        </div>		                          
			                        <input type="hidden" name="id" value="{{$client->id}}">  
			                      	<div class="form-group">
			                      		<div class="row" style="padding: 4px;">
			                            	<div class="box-body">
								                <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
												<textarea name="intro" class="form-control my-editor">{!! old('intro', $client->description) !!}</textarea>
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
				    			<label>Logo</label>
				    			<hr style="margin-top: 0px; margin-bottom: 4px;">
				    			<a id="choosImg" href="javascript:void(0)">Choose Image</a>
					        	<input name="image" type='file' id="imgInp" style="display: none;" />
					        	<input type="hidden" name="old_image" value="{{$client->logo}}">
					        	<center>
					        		<?php
					        			$name = ($client->logo != '' ? '/photos/share/'.$client->logo : '#');
					        			$action = ($client->logo != '' ? 'block' : 'none');
					        		?>
							    	<img class="img-responsive" id="blah" src="{{$name}}" style="display: {{$action}}; cursor: pointer;"/>
							    </center>							    			               	
				            </div>			             	
			             	<div class="clear"></div>
			             	<br><br>
			             	<div class="col-md-12">				    		
							    <hr class="colorgraph">		
							    <div class="text-right">
									<input type="submit" value="Update" class="btn bg-olive">
								</div>
								<div class="clear"></div>	
								 <br>	               	
				            </div>				           
			             	<div class="clear"></div>
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
