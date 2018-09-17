$(document).ready(function(){

/*detect mobile*/
if ($(window).width() > 991){
  if ($(window).scrollTop() > 100 ) {
    $("#menu1").css("background" , "rgb(34, 63, 151)");
    $(".logo-menu").attr("src","/img/logos/ceys-logo.svg");
    $('.navbar').css('min-height','0');
    $('.navbar-brand-home img').css('width', '30%');
    $('.navbar-brand img').css('width', '30%');
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
        $('.navbar-brand-home img').css('width', '30%');
        $('.navbar-brand img').css('width', '30%');
        $('.navbar-home .navbar-nav').css('margin-top', '0');
        $('#menu1').addClass('shadow-menu');

      }

      else{
        /* Fondo transparente */
        $("#menu1").css("background" , "transparent");
        $(".logo-menu").attr("src","/img/logos/puedescontodo-logo.svg");
        $('.navbar-brand-home img').css('width', '100%');
        $('.navbar-brand img').css('width', '100%');
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
  }

/* end detect mobile*/

});
