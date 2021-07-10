$(function(){
    $(".hamburgermenu").on("click", function(){
        $(".hamburgermenu").toggleClass("active");
        $(".header-nav-menu").toggleClass("height-change");
    });

    $(".header-menu-item").on("click", function(){
        $(".hamburgermenu").removeClass("active");
        $(".header-nav-menu").toggleClass("height-change");
    });

    $("#top-btn").on("click", function(){
        $('html, body').animate(
        {"scrollTop": 0}, 500);
     });
 
     $("header a").on("click", function(){
        var hsize = $(".header").height();
        var id = $(this).attr("href");
        var position = $(id).offset().top;
        $("html, body").animate(
          {"scrollTop": position - hsize}, 500);
    });

    var topbtn = $(".back-to-top");    
    topbtn.hide();
    
    $(window).on("scroll", function (){
        if($(this).scrollTop() > 100)
        {
            topbtn.fadeIn();
        }
        else
        {
            topbtn.fadeOut();
        }
    });

    topbtn.on("click", function (){
        $("body, html").animate(
            {"scrollTop": 0}, 500);
    });

    $(".works-modal-open").each(function(){
        $(this).on("click", function(){
            var target = $(this).data("target");
            var modal = document.getElementById(target);
            $(modal).fadeIn();
            return false;
        });
    });

    $(".works-modal-close").on("click", function(){
        $(".works-modal").fadeOut();
        return false;
    });
});