$(function(){
    const spBreakPoint = 670;
    let headerTop = 40;
    let headerHeight = 0;

    if ($(window).width() > spBreakPoint) 
    {
      headerHeight = 620;
    }

    else 
    {
      headerHeight = 355;
    }

    $(window).on('scroll', function () {
      if($(window).width() > spBreakPoint)
      {
        if($(this).scrollTop() > headerTop)
        {
          $('.header-nav').addClass('position-change');
        }

        else
        {
          $('.header-nav').removeClass('position-change');
        }
      }

      if($(this).scrollTop() > headerHeight)
      {
          $('.header-nav').addClass('color-change');
      } 

      else
      {
          $('.header-nav').removeClass('color-change');
      }

      let workDescTop = $('#work-desc').offset().top;
    
      if($(this).scrollTop() > (workDescTop - 50)) {
          $('.work').addClass('arrow-display');
      }
    });

    $('.hamburger-menu').on('click', function() {
      $('.hamburger-menu').toggleClass('active');
      $('.header-menu').toggleClass('height-change');
    });

    $('.header-menu-item').on('click', function() {
      $('.hamburger-menu').removeClass('active');
      $('.header-menu').toggleClass('height-change');
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