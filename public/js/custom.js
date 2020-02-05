;(function($){ 
   $(document).ready(function() {
      $('.information_menu').find('li').hover(function(e) {
          $('.information_menu').find('li').removeClass('active');
          $(this).addClass('active');
          $(".overlay-item").removeClass("active");
          $(".overlay-item").removeClass("inactive");
		      $(".overlay-id"+$(this).data("id")).addClass("active").removeClass("inactive");
          $(".overlay-id"+$(this).data("id")).prev().addClass("inactive")
      });     
      $('.slideshow').children().on('mouseleave',function(e) {
  		      $(this).removeClass("active");
  	  });  
      $('.carousel').carousel();
   });
})(jQuery);

$('section.awSlider .carousel').carousel({
    pause: "hover",
    interval: 2000
});

var startImage = $('section.awSlider .item.active > img').attr('src');
    $('section.awSlider').append('<img src="' + startImage + '">');

    $('section.awSlider .carousel').on('slid.bs.carousel', function () {
        var bscn = $(this).find('.item.active > img').attr('src');
        $('section.awSlider > img').attr('src',bscn);
    });


// var elementPosition = $('.wrapper-menu').offset();

$(function(){ 
    $("#goTotop").click(function (){
        $('html, body').animate({
            scrollTop: $("#menu-header").offset().top
        }, 300);
    });
    $(window).scroll(function(){
        if($(window).scrollTop() > 250 ){
          $("#goTotop").css('display','block');
        }else{
          $("#goTotop").css('display','none');
        }
    });

    $("#client").click(function (){
        $('html, body').animate({
            scrollTop: $("#client-section").offset().top
        }, 300);
    });
});



// sendding contact section
$(function(){ 
    var email_error = $('.email');
    var username_error = $('.username');
    var phone_error = $('.phone');
    var topic_error = $('.topic');
    var message_error = $('.message');
    // $("#showMessage").hide();
    $("#email").focusout( function(){
        checkEmail();
    });
    $("#username").focusout( function(){
        checkUser();
    });
    $("#phone").focusout( function(){
        checkPhone();
    });

    $("#topic").focusout( function(){
        checkTopic();
    });
    $("#message").focusout( function(){
        checkMessage();
    });
    function checkEmail (){
        var emailReg = RegExp(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/);
        if (!emailReg.test( $("#email").val() ) ) {
            $(email_error).addClass('has-error');
            $(this).focus();

        }else{
            $(email_error).removeClass('has-error');
        }
    }
    function checkUser(){
      var username = $("#username").val();
      if (username == '') {
        $(username_error).addClass('has-error');
      }else{
        $(username_error).removeClass('has-error');       
      }
    }

    function checkPhone(){
      var phone = $("#phone").val();
      if (phone == '') {
        $(phone_error).addClass('has-error');
      }else{
        $(phone_error).removeClass('has-error');       
      }
    }

    function checkTopic(){
      var topic = $("#topic").val();
      if (topic == '') {
        $(topic_error).addClass('has-error');
      }else{
        $(topic_error).removeClass('has-error');       
      }
    }

    function checkMessage(){
      var message = $("#message").val();
      if (message == '') {
        $(message_error).addClass('has-error');
      }else{
        $(message_error).removeClass('has-error');       
      }
    }

    $("#btnSendContact").click(function(e){

        if ($("#message").val() != '' && $("#topic").val() != '' && $("#phone").val() && $("#email").val() && $("#username").val() != '') {
            var Url = $(this).attr('data-url');            
            $.ajax({
              type: "POST",  
              url: Url,
              data: {
                username: $("#username").val(),               
                email: $("#email").val(),
                phone: $("#phone").val(),
                topic: $('#topic').val(),
                message: $('#message').val(),
                _token: $("input[name='_token']").val()
              },
              dataType: "json",
              beforeSend: function() {    
                  $(this).val('Loading');
              },
              success: function (respon) {
                  $(this).val('Submit');
                  messages = '<br><div class="alert alert-warning alert-dismissible  show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>  '+respon.message+'</div>';
                  $("#showMessage").html(messages);

                    setTimeout( function() {
                    $("#showMessage").html('');
                    
                  }, 6000);

              },
              error: function (respon) {
                  alert('Error');
              }
            });     
        }else{
          alert('Can not Blank');
          checkEmail();
          checkUser();
          checkPhone();
          checkMessage();
          checkTopic();
        }
    e.preventDefault();
    });
});

