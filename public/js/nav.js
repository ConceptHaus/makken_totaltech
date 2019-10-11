
    
    $(".nav-item").click(function() {
        console.log('link');
        $(".nav-item").removeClass("active");
        $(this).addClass("active");
      });

