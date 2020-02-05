
$(function(){

	function checkName (){
		var username = $("#category_name").val().length;
		if (username < 1) {
			$("#category_name").focus();			
			$('#catTitle').addClass('has-error');
		}else{
			$('#catTitle').removeClass('has-error');
		}
	}
	$("#category_name").focusout( function(){
	    checkName();
	});

	var baseUrl = location.protocol +'//'+location.host;
	var getData = function (){
		var Url = baseUrl+'/admin/app/category';
		$.ajax({
	        method: "GET",  
		    url: Url,	 
		    dataType: 'json',			
			success: function (respon) {
				var dataload = '';
				$.each(respon, function(index, data) {
					dataload += "<tr><td>"+data.title+"</td><td>"+data.details+"</td><td><button data-id="+data.id+" class=' btn btn-info btn-xs'>Edit</button></td></tr>";  	
				});
				$("#LoadData").html(dataload);
	        },
	        error: function (respon) {
	            alert('Error');
		    }
		});
	}

	$("#btnAddCategory").click(function(e){
		var UrlCat = $(this).attr('data-url');
		if ($("#category_name").val() != '') {
			$.ajax({
		       	type: "POST",  
			    url: UrlCat,
				data: {
					id : $("#id").val(),
					title: $("#category_name").val(),
					details: $("#details").val(),					
					_token: $("input[name='_token']").val()
				},
				dataType: "json",
		        success: function (respon) {
		        	messages = '<div class="alert alert-warning alert-dismissible  show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>  '+respon.message+'</div>';
			        $("#LoadMessage").html(messages);
			        setTimeout( function() {
					   $("#LoadMessage").html('');
					}, 6000);	
					location.reload();
		        },
		        error: function (respon) {
		            alert('Error');
		        }
			});
		}else{
			$("#category_name").focus();
			checkName();
		}
		e.preventDefault();
	});


	$(".btnCatDel").click( function(e) {
		var DataId = $(this).attr('data-id');
		var remove_row = $(this).closest("tr");
		// alert(baseUrl+'/admin/app/category/delete');
		if (confirm("Are you sure, you want to remove this?")) {
			$.ajax({
		        method: "GET",  
			    url: baseUrl+'/admin/app/category/delete',
			    data : { dataId: DataId },
			    dataType: 'json',			
				success: function (respon) {
					remove_row.fadeOut(500, function(){
						$(remove_row).css("background-color", "red");
						remove_row.remove();						
					});
					return false;
		        },
		        error: function (respon) {
		            alert('Error');
			    }
			});
		}else{

			return false;
		}
		e.preventDefault();
	});

});