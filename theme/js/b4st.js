/**!
 * b4st JS
 * 
 * 1.0 NAVBAR SCROLL
 * 
 * 
 * 
 */

(function ($) {

	'use strict';

	$(document).ready(function() {


		// var Body = $('body');
		// Body.addClass('preloader-site');

		
		// Comments

		$('.commentlist li').addClass('card');
		$('.comment-reply-link').addClass('btn btn-secondary');

		// Forms

		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('btn btn-primary');

		// Pagination fix for ellipsis

		$('.pagination .dots').addClass('page-link').parent().addClass('disabled');

		// You can put your own code in here
		
		// 1.0: NAVBAR SCROLL
		$(window).scroll(function() {    
		    var scroll = $(window).scrollTop();
		
		    if (scroll >= 70) {
		        $(".navbar").addClass("darkHeader");
		    } else {
		        $(".navbar").removeClass("darkHeader");
		    }
		});
	});
	
	// $(window).on('DOMContentLoaded', function() {
	// 	   $('.preloader-wrapper').fadeOut();
	// 	   $('body').removeClass('preloader-site');
	// });

}(jQuery));
