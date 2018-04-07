$(document).ready(function(){    
    init();
});

//add JS

function init() {



  $('.form-submit-btn').click(function() {
    $("#form-sent").removeClass('sent-hide');
    console.log('worked');
  });

      
  $(".input").focus(function() {
    $(this).parent(".field-container").addClass("is-focused");
  });
  
  $(".input").blur(function() {
    $(this).parent(".field-container").removeClass("is-focused");
  });

  $('.hamburger_menu').on("click", function() {
    $(".primary_nav .primary_nav_ul").toggleClass("open");
    console.log("clicked");
    $(".primary_nav").toggleClass("moveBorder");
    console.log("moveBorder");
  });

  console.log('animation');

  var redSroll = $(".red-scroll");
  TweenMax.from(redSroll, 0.9, {transform: 'translateY(1px)', repeat:-1, yoyo:true});
  TweenMax.to(redSroll, 0.9, {transform: 'translateY(2px)',stroke:'#e8e8e8', repeat:-1, yoyo:true});

  //
  $('a').click(function(){  
    $('html, body').stop().animate({
        scrollTop: $( $(this).attr('href') ).offset().top
        }, 500);
    return false;
  });

    var t1 = new TimelineMax();
    var mainAllison = $('.profilePic_svg path');
    t1.add(TweenMax.staggerFromTo(mainAllison, 2.5, {autoAlpha:0}, {autoAlpha:1, ease: Quad.easeOut}, 0.1));

    // type.js
    var typed = new Typed('.aboutName', {
      strings: ["" , "CHING CHING<br>LEE", "A WEB<br>DEVELOPER", "A GRAPHIC<br>DESIGNER", "A CAT<br>LOVER"],
      typeSpeed: 60,
      backSpeed: 100,
      backDelay: 500,
      cursorChar: '',
      loop: true
    });

  
}