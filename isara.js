$(function(){
    $(".section10-content-list-left").on("click", function(){
        $(this).next().slideToggle(500);
        $(this).parent().toggleClass("open");
    });

    $(".section16-question").on("click", function(){
        $(this).next().slideToggle(500);
        $(this).parent().toggleClass("open");
    });

    var topbtn = $('.back-to-top');    
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

    $("#top-btn").on("click", function(){
        $('html, body').animate(
            {"scrollTop": 0}, 500);
     });

    $(".pc-btn a").on("click", function(){
        var hsize = $(".header").height();
        var id = $(this).attr("href");
        var position = $(id).offset().top;
        $("html, body").animate(
            {"scrollTop": position - hsize}, 500);
    });

    $(".btn a").on("click", function(){
        var hsize = $(".header").height();
        var id = $(this).attr("href");
        var position = $(id).offset().top;
        $("html, body").animate(
            {"scrollTop": position - hsize}, 500);
    });

    $(".sp-btn a").on("click", function(){
        var id = $(this).attr("href");
        var position = $(id).offset().top;
        $("html, body").animate(
            {"scrollTop": position}, 500);
    });
});