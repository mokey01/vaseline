// JavaScript Document
jQuery("document").ready(function($){
    
    var nav = $('#navigation');
    
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            nav.addClass("f-nav");
        } else {
            nav.removeClass("f-nav");
        }
    });
 
});
$(function(){
		 var logoApear = 50;
		  $(window).scroll(function() {
		    var scroll = getCurrentScroll();
		      if ( scroll >= logoApear ) {
		           $('#logonav').addClass('logoposition');
		        }
		        else {
		            $('#logonav').removeClass('logoposition');
		        }
		  });
		function getCurrentScroll() {
		    return window.pageYOffset;
		    }
		});