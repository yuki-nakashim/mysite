$(function(){
    $(window).scroll(function(){
        $('.effect-fade').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();

            if (scroll > elemPos - windowHeight)
            {
                $(this).addClass('effect-scroll');
            } 
        });
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