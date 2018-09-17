$(document).ready(function(){

/*detect mobile*/
if ($(window).width() > 991){

  $(window).scroll(function(){

      var scroll = $(window).scrollTop();
      if (scroll > 100) {
          /* Fondo azul */
        $("#menu1").css("background" , "rgba(34, 63, 151, 0.8)");
        $(".logo-menu").attr("src","/img/logos/ceys-logo.svg");
        $('.navbar').css('min-height','0');
        $('.navbar-brand-home img').css('width', '30%');
        $('.navbar-home .navbar-nav').css('margin-top', '-30px');
      }

      else{
        /* Fondo transparente */
        $("#menu1").css("background" , "transparent");
        $(".logo-menu").attr("src","/img/logos/puedescontodo-logo.svg");
        $('.navbar-brand-home img').css('width', '100%');
        $('.navbar-home .navbar-nav').css('margin-top', '-50px')
        $('.navbar').css('min-height','166px');
      }
    })
  }
else{
    $('.navbar-home .navbar-nav').css('margin-top', '-5px');
    $(window).scroll(function(){
      var scroll = $(window).scrollTop();
      if (scroll > 50) {
          /* Fondo azul */
        $("#menu1").css("background" , "rgba(34, 63, 151, 0.8)");
      }else {
          /* Fondo transparente */
        $("#menu1").css("background" , "transparent");
      }
    });

  }

/* end detect mobile*/

});
