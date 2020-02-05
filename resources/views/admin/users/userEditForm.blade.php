@extends('layout.backend')
@section('users')
active
@endsection
@section('content')
<div class="wrapper">
	@include('admin.include.header')
  	<!-- Left side column. contains the logo and sidebar -->
  	@include('admin.include.leftMenu')
  	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	    <section class="content row">
	    	<form method="POST" >
	    		<div class="col-md-12 showMessage"></div>
	    		{{ csrf_field() }}
	    		<input type="hidden" name="eid" value="{{$user->id}}" id="eid">
				<section class="col-md-8 connectedSortable">
					<div class="panel">
						<div class="box-header">			
					       <h3>Update User </h3>			  
					    </div>
						<div class="row">						    
						    <div class="box-body">
						      	<div class="col-md-12 col-md-12">		                   
			                    	<div class="row">
			                            <div class="col-xs-12 col-sm-6 col-md-6">
			                            	<div class="form-group has-feedback username">
				                              	<input type="text" name="username" class="form-control" placeholder="User Name*" id="username" required value="{{$user->username}}">
				                              	<span class="fa fa-user form-control-feedback"></span>    
				                            </div>
			                            </div>
			                            <div class="col-xs-12 col-sm-6 col-md-6">
			                                <div class="form-group has-feedback fullname">
				                               <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Full Name*" value="{{$user->fullname}}">
				                               <span class="fa fa-user form-control-feedback"></span> 
			                                </div>
			                            </div>
			                        </div>
			                        <div class="row">
			                        	<div class="col-xs-12 col-sm-12 col-md-12">
											<div class="form-group ">
				                              	<input readonly type="text" id="current_password" value="{{ $user->text_password}}" class="form-control" placeholder=" Password*">
				                              	<!-- <span class="">Current Password</span> -->
				                            </div>
			                        	</div>
			                        </div>
			                        <div class="row">
			                            <div class="col-xs-12 col-sm-6 col-md-6">
			                            	<div class="form-group has-feedback password">
				                              	<input required type="password" name="password" id="password" class="form-control" placeholder="New Password*">
				                              	<span class="fa fa-unlock-alt form-control-feedback"></span>
				                            </div>
			                            </div>
			                            <div class="col-xs-12 col-sm-6 col-md-6">
			                                <div class="form-group has-feedback re-password">
				                               <input required type="password" name="re-password" id="re-password" class="form-control" placeholder="Re-Type Password">
				                               <span class="fa fa-unlock-alt form-control-feedback"></span>
			                                </div>
			                            </div>
			                        </div>     
			                        <div class="row">
			                            <div class="col-xs-12 col-sm-6 col-md-6">
			                            	<div class="form-group has-feedback email">
				                              	<input required type="email" name="email" id="email" class="form-control" placeholder="Email Address*" value="{{$user->email}}">
				                              	<span class="fa fa-envelope-o form-control-feedback"></span>
				                            </div>
			                            </div>
			                            <div class="col-xs-12 col-sm-6 col-md-6">
			                                <div class="form-group has-feedback phone ">
				                               <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number*" value="{{ $user->phone}}">
				                           		<span class="fa fa-phone-square form-control-feedback"></span>
			                                </div>
			                            </div>
			                        </div> 
			                        <hr class="colorgraph">
				                </div>        
						  	</div>
					  	</div>				  
				  	</div>
				</section>
				<section class="col-md-4 pull-left-3 connectedSortable">
					<div class="box box-solid">
					    <div class="box-header"></div>		     
					    <div class="panel">
				    		<div class="col-md-12">				    		
					        	<center>
							    	<img style="width:55%;" class="img-responsive" src="/img/create_user.png" />
							    </center>
							    <hr class="colorgraph">		
								<input type="submit" id="btnUpdate" value="Update User" 
								data-url="{{ route('editUser') }}" class="btn bg-olive"  >
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
	@include('admin.include.footer')
</div>

@endsection
