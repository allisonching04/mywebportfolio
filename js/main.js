$(document).ready(function(){    
    init();
});

function init() {
	console.log('jq is ready');

	// highlight current page
	var url = window.location.href;
    var activePage = url;
    $('.primary_nav_item a').each(function () {
        var linkPage = this.href;

        if (activePage == linkPage) {
            $(this).closest("li").addClass("primary_nav_current");
            
        }
    });

      
  $(".input").focus(function() {
    $(this).parent(".field-container").addClass("is-focused");
  });
  
  $(".input").blur(function() {
    $(this).parent(".field-container").removeClass("is-focused");
  });
  
 $('.field-container').on( 'keyup', '.text-area', function () {
    $(this).height(0);
    $(this).height(this.scrollHeight);
  });

}