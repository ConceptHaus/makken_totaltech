$(document).ready(function(){
  var url = window.location.href.split('/');

/*detect mobile*/
if ($(window).width() > 991){
  if ($(window).scrollTop() > 100 ) {
    $("#menu1").css("background" , "rgb(34, 63, 151)");
    $(".logo-menu").attr("src","/img/logos/ceys-logo.svg");
    $('.navbar').css('min-height','0');
    $('.navbar-brand-home img').css('width', '350px');
    $('.navbar-brand img').css('width', '350px');
    $('.navbar-home .navbar-nav').css('margin-top', '0');
    $('#menu1').addClass('shadow-menu');
  };
  $(window).scroll(function(){

      var scroll = $(window).scrollTop();
      if (scroll > 100) {
          /* Fondo azul */
        $("#menu1").css("background" , "rgb(34, 63, 151)");
        $(".logo-menu").attr("src","/img/logos/ceys-logo.svg");
        $('.navbar').css('min-height','0');
        $('.navbar-brand-home img').css('width', '20%!important');
        $('.navbar-brand img').css('width', '20%!important');
        $('.navbar-home .navbar-nav').css('margin-top', '0');
        $('#menu1').addClass('shadow-menu');
        $('#logo-img-resp').addClass('');

      }

      else{
        /* Fondo transparente */
        $("#menu1").css("background" , "transparent");
        $(".logo-menu").attr("src","/img/logos/consigue-tu-bicicleta.png");
        if (url[3] == "") {
          $('.navbar-brand-home img').css('width', '70%');
          $('.navbar-brand img').css('width', '70%');
        } else {
          $('.navbar-brand-home img').css('width', '50%');
          $('.navbar-brand img').css('width', '50%');
        }
        $('.navbar-home .navbar-nav').css('margin-top', '-50px')
        $('.navbar').css('min-height','166px');
        $('#menu1').removeClass('shadow-menu');
      }
    })
  }
else{
    $('.navbar-home .navbar-nav').css('margin-top', '-5px');
    $("#menu1").css("background" , "rgb(34, 63, 151)");
    $('#menu1').addClass('shadow-menu');

    $('#menu-link').click( function(){
      console.log('click');
      $('.navbar-toggler').click();
    });

    $('#menus-link').click( function(){
      console.log('click');
      $('.navbar-toggler').click();
    });
  }

/* end detect mobile*/

});
