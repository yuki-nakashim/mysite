$(function(){
    const Breakpoint = 670;
    let headertop = 40;
    let headerheight = 0;

    if($(window).width() > Breakpoint)
    {
        headerheight = 620;
    }

    else
    {
        headerheight = 355;
    }

    $(window).on("scroll", function(){
        if($(window).width() > Breakpoint)
        {
            if($(this).scrollTop() > headertop)
            {
                $(".header-nav").addClass("position-change");
            }

            else
            {
                $(".header-nav").removeClass("position-change");
            }
        }

        if($(this).scrollTop() > headerheight)
        {
            $(".header-nav").addClass("color-change");
        }

        else
        {
            $(".header-nav").removeClass("color-change");
        }
    });

    $(".hamburgermenu").on("click", function(){
        $(".hamburgermenu").toggleClass("active");
        $(".header-nav-menu").toggleClass("height-change");
    });

    $(".header-menu-item").on("click", function(){
        $(".hamburgermenu").removeClass("active");
        $(".header-nav-menu").toggleClass("height-change");
    });

    $("#top-btn").click(function(){
        $('html, body').animate(
        {"scrollTop": 0}, 250);
     });
 
     $("header a").click(function(){
        var id = $(this).attr("href");
        var position = $(id).offset().top;
        $("html, body").animate(
          {"scrollTop": position}, 250);
    });
});