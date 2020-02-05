function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
           var imag = $('#blah').attr('src', e.target.result);
           if (imag) {
           		$("#choosImg").hide();
           }else{
           		$("#choosImg").show();
           }
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$(function(){
	$("#choosImg, #blah").click(function(){
		$("#imgInp").click();
	});
	$("#imgInp").change(function(){
	    readURL(this);
	    $("#blah").show();
	});
})

$(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {
        if (input.files) {
            var filesAmount = input.files.length;
            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                reader.onload = function(event) {
                  $($.parseHTML('<img class=\"pip\">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }
                reader.readAsDataURL(input.files[i]);
            }        
        }
    };
    $("#chooseGallery").click( function (){

      $('#gallery').click();
    });
    
    $('#gallery').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });

    $("div.gallery").on('click', '.pip',  function(){

        $(this).remove();
        // $('#gallery').val('');
    });
});


$(document).ready(function(){
  $(".btnSl").click(function(){
    $("#productList").append('<tr><td><a href="javascript:void(0)" class="choosSlide"></a><input class="addSlide form-control" type="file" name="slide[]" class="form-control"></td><td><textarea class="form-control" name="intro[]"></textarea></td><td><input type="text" name="title[]" class="form-control" placeholder="Slide Title"></td><td><a href="javascript:void(0)" class="remCF "><i class="fa fa-trash btn btn-danger"></i></a></td></tr>');
  });
  $("#productList").on('click','.remCF',function(){
      $(this).parent().parent().remove();
  });

  $(".choosSlide").click(function(){
      $(".addSlide").click();
  });
}); 

