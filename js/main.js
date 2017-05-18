jQuery(document).ready(function($) {

	"use strict";
	
	// Menu
	$('#nav-wrapper .menu').slicknav({
		prependTo:'.menu-mobile',
		label:'',
		allowParentLinks: true
	});
	
	// BXslider
	$('.featured-area .bxslider').bxSlider({
		pager: false,
		mode: 'fade',
		auto: true,
		pause: 7000,
		speed: 800,
		easing: 'ease-in-out',
		nextText: '<i class="fa fa-angle-right"></i>',
		prevText: '<i class="fa fa-angle-left"></i>',
		onSliderLoad: function(){
			$(".sideslides").css("visibility", "visible");
		}
	});
	
	$('.post-img .bxslider').bxSlider({
	  adaptiveHeight: true,
	  mode: 'fade',
	  pager: false,
	  captions: true,
	  nextText: '<i class="fa fa-angle-right"></i>',
	  prevText: '<i class="fa fa-angle-left"></i>',
	  onSliderLoad: function(){
			$(".sideslides").css("visibility", "visible");
		}
	});
	
	// Search
	
	$('#top-search a').on('click', function ( e ) {
		e.preventDefault();
    	$('.show-search').slideToggle('fast');
    });
	
	// Fitvids
	$(document).ready(function(){
		// Target your .container, .wrapper, .post, etc.
		$(".container").fitVids();
	});
	
	
});