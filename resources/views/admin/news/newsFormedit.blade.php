@extends('layout.backend')
@section('news')
active
@endsection
@section('title')
	News - AUpdate
@endsection
@section('content')
<div class="wrapper">
  @include('admin.include.header')
  @include('admin.include.leftMenu')
	<div class="content-wrapper">
	    <section class="content row">
    		@include('admin.include.message')   
	    	<form method="POST" action="{{route('UpdateNews')}}" enctype="multipart/form-data">
	    		{{ csrf_field() }}
				<section class="col-md-8 connectedSortable">
					<div class="panel">
						<div class="box-header">			
					       <h3>News Title </h3>			  
					    </div>
						<div class="row">						    
						    <div class="box-body">
						      	<div class="col-md-12 col-md-12">		                   
			                    	<div class="form-group">
			                            <input type="text" id="title" name="title" class="form-control input-md" placeholder="News Title" required value="{{$news->title}}">
			                        </div>		                            
			                        <input type="hidden" name="id" value="{{ $news->id }}">
			                      	<div class="form-group">
			                      		<div class="row" style="padding: 4px;">
			                            	<div class="box-body">
								                <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
												<textarea name="intro" class="form-control my-editor">{!! old('intro', $news->details) !!}</textarea>
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
					        		<input type="hidden" name="old_image" value="{{$news->photo}}">
					        		<?php
					        			$name = ($news->photo != '' ? '/photos/share/'.$news->photo : '#');
					        			$action = ($news->photo != '' ? '' : 'none');
					        		?>
							    	<img class="img-responsive" id="blah" src="{{$name}}" style="display: {{$action}}; cursor: pointer;"/>
							    </center>
							    <hr class="colorgraph">		
								<input type="submit" value="Update" class="btn bg-olive">				               	
				            </div>
			             	<div class="clear"></div>
			             	<br>
						</div>
					</div>			
				</section>   
			<div class="clear"></div>  
			</form>
	    </section>
	</div>
  	@include('admin.include.editorscript')
	@include('admin.include.footer')
</div>
@endsection
