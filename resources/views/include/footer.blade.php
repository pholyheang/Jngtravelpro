<style type="text/css">
	.social:hover {
     -webkit-transform: scale(1.1);
     -moz-transform: scale(1.1);
     -o-transform: scale(1.1);
 }
 .social {
     -webkit-transform: scale(0.8);
     /* Browser Variations: */
     
     -moz-transform: scale(0.8);
     -o-transform: scale(0.8);
     -webkit-transition-duration: 0.5s;
     -moz-transition-duration: 0.5s;
     -o-transition-duration: 0.5s;
 }

/*
    Multicoloured Hover Variations
*/
 
 #social-fb:hover {
     color: #3B5998;
 }
 #social-tw:hover {
     color: #4099FF;
 }
 #social-gp:hover {
     color: #d34836;
 }
 #social-em:hover {
     color: #f39c12;
 }
</style>

<footer class="footer" style="margin-bottom: 0px;">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-xs-6">
				<label><h3>About Us</h3></label>
				<address>
					JngtravelPro is provides software solutions for users of booking tours program and reportation programe and very easy to use.
				</address>
				<address>
	                <strong>Head Office: </strong><br>
	               JngTravelPro Co.,Ltd<br>Road # 6A, Sangkat Chroy Changvar Chroy Changvar District, 12110 Phnom Penh,, Phnom Penh 12000<br>		                
	                <abbr title="Phone">
	                <i class="fa fa-phone-square"></i>&nbsp;+855 (23) 432 044<br> 
	                <!-- <abbr title="email">Email: -->
	                <i class="fa fa-envelope-o"></i>&nbsp;  enquiry [at] jngtravelpro.com <br>	
	            </address>	                
			</div>
			<div class="col-md-3 col-xs-6">
				<label><h3>Our Product</h3></label>
				<ul class="list-unstyled">
					@foreach(App\Post::where('category_id', 3)->get() as $key => $prow)
						<li><i class="fa fa-caret-right"></i><a href="/view-details/{{$prow->slug}}">{{$prow->title}}</a></li>
					@endforeach
				</ul>
			</div>			
			<div class="col-md-3 col-xs-6">
				<div><label><h3>Connect With Us</h3></label></div>
				<div>
					<a href="#"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
		            <a href="#"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
		            <a href="#"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	        	</div>
			</div>
			<div class="col-md-3 col-xs-6">
				<div><label><h3>Email For Subscribe</h3></label></div>
				<div>
					<div class="input-group">
					    
					    <input type="text" class="form-control" placeholder="Email Address" aria-label="Input group example" aria-describedby="btnGroupAddon2">
					    <span class="input-group-addon" id="btnGroupAddon2"><i class="fa fa-send (alias)"></i></span>
					     <!-- <button class="input-group-addon btn sr-btn" id="btnGroupAddon2" type="button"><i class="fa fa-search"></i></button> -->
					</div>
					<!-- <div class="input-append">
                      <input type="text" class="sr-input form-control" placeholder="Search Mail">
                      <button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
                  </div> -->
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<hr style="border-top: 1px solid rgba(238, 238, 238, 0.23);">
		<div class="copyright">
		    <div class="container">
		        <div class="col-md-6 col-xs-12 ">
		          <p>Copyright © 2016, www.jngtravelpro.com</p>
		        </div>

		    </div>
		    <div>
		      <a id="goTotop" style="position: fixed; right: 19px; display: block; bottom: 25px; font-size: 35px; z-index: 999999999;" href="javascript:void(0)"><span class="fa fa-chevron-circle-up"></span></a>
		    </div>
			<div class="clearfix"></div>
		</div>
	</div>
</footer>
