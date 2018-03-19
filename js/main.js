$(document).ready(function(){    
    init();
});

function init() {
	console.log('jq is ready');

	// highlight current page
	

  $('.hamburger_menu').on("click", function() {
    $(".primary_nav .primary_nav_ul").toggleClass("open");
    console.log("clicked");
    $(".primary_nav").toggleClass("moveBorder");
    console.log("moveBorder");
  });

      
  $(".input").focus(function() {
    $(this).parent(".field-container").addClass("is-focused");
  });
  
  $(".input").blur(function() {
    $(this).parent(".field-container").removeClass("is-focused");
  });
  
 // $('.field-container').on( 'keyup', '.text-area', function () {
 //    $(this).height(0);
 //    $(this).height(this.scrollHeight);
 //  });

  console.log('animation');

}