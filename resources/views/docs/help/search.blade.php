@extends('layout.app')
@section('title', 'System Documentions')

@section('content') 
@include('include.menu')
<style type="text/css">
	a{
		color: #000;
	}
	a:hover{
		text-decoration: none !important;
	}</style>
<div class="welcome-section-top" >
	<div class="container">           
		<div class="col-md-12">
			<center>
				<div style="padding: 24px 0; width: 50%;">
					<i class="fa fa-search" style="position: absolute;padding: 10px; font-size: 24px;"aria-hidden="true"></i>
			          <input 	class="menu-search-input"
		        				type="text"		        		
		        				placeholder="Search"
		        				id="doSearch" 
		        				style=" font-size: 20px; padding-left: 40px; border-radius:3px; border: 1px solid #ddd; width: 100%; height: 45px;" 
		        		/>	
				</div>
		    </center>
			<!-- <p>We have service include free maintantent within 1 years and support what you want and we will make you happy with us</p> -->
		</div>
	</div>
</div>
<div class="container myheader" style="padding: 24px 0;"> <br><br><br>
</div>
@include('include.footer')
<script type="text/javascript">
	$(document).ready(function() {

		$('#doSearch').on('keyup', function(){
			var data = $(this).val();
			if (data.length >= 3) {				
				$.ajax({
			        type: 'get',
			        url: '{{route("research")}}',
			        data: {'search': data},
			        success: function(data1) {
			        	var dataArr = [];
			        	$.each(data1, function (key, vals) {
			        		var urls = '/system/help/'+vals.slug;

			        		var htmls = '<div class="row" style=" background: white;border: solid 1px #c1c1c133;border-radius: 2px;"><a href="'+urls+'"><div class="col-md-12 "><h3><strong>'+vals.title+'</strong></h3><p style="text-align: justify;">'+vals.desc+'</p></a></div></div>';
			        		dataArr.push(htmls);

			        	});
			        	if (dataArr.length > 0) {
			        		$('.myheader').css({'display': 'block'});
			            	$('.myheader').html(dataArr);
			        	}else{
			        		$('.myheader').css({'display': 'none'});
			        	}
			        	console.log(dataArr.length);

			        },
			        error: function() {
			            return false;
			        },
			    });
			}else{
				$('.myheader').html('');
				$('.myheader').css({'display': 'none'});
			}

		});

		// $('#doSearch').focus(function() {
		// 	$(document).bind('focusin.doSearch click.doSearch',function(e) {
		//         if ($(e.target).closest('.myheader, #doSearch').length) return;
		//         $(document).unbind('.myheader');
		//         $('.myheader').fadeOut('medium');
		//         console.log(1)
		//     });
		//         $('.myheader').show();
		// });
	
});
</script>
@endsection
