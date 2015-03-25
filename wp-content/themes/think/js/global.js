jQuery(document).ready(function($){

	//Skrollr init
	

	//Skrollr init
	if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
	    skrollr.init({
	        forceHeight: false
	    });
	}

	// INIT Fitvids.js
	$(".video-wrapper").fitVids();

	//Scrollit init
	$.scrollIt();

	function isMobile() {
		return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
	}

	if (!isMobile()) {
	//Sticky init
	$('.sticky').sticky({topSpacing:110});

	}

	// INIT Fitvids.js
	$(".video-wrapper").fitVids();

	//mobile nav show the links to scroll down the page
	$('button.burger-menu').click(function(){
		// $('ul.nav-links').toggleClass("show-navigation");
		$('ul.nav-links').slideToggle();
		$('#nav-icon3').toggleClass('open');
	});

	$('.nav-links__contact').click(function(e){
		e.preventDefault();
		$('#contact-form').fadeIn();
	});

	//change z-index on large letter when near the video
	$('.large-type').hover(function(){
		$('#play-video').css({
			'z-index' : '99'
		});

	});

 	//fitVids.js
	lightbox = $(".lightbox-wrapper");
	lightbox.fitVids();

 	// video lightbox
 	$('#play-video').click(function(){

 		//Fade in lightbox
 		$('section#lightbox-video').fadeIn();

 		$(window).on('resize', function(){
 			
 			//Get the parent, video, lightbox height and width
 			var lightboxHeight = $('.lightbox').height();
 				videoHeight = $('.lightbox-wrapper').height();

	 		//video marginTop : parent height - video height /2
	 		$('.lightbox-wrapper').css('margin-top',(lightboxHeight - videoHeight) / 2);

 			lightbox.fitVids();

 		}).resize();
 	});

 	//Add class you mobile nav to add close functionality on click
 	$(window).on('resize', function(){
		if ($(window).width() > 880){
				$('nav').removeClass("mobile");
			}else{
				$('nav').addClass("mobile");
			}
 	}).resize();

 	$('ul.nav-links li a').click(function(){
 		$('nav.mobile ul').slideUp();
 		$('#nav-icon3').removeClass('open');
 	});


 	//Change cursor when hovering over the lightbox background
 	$('.close-container').hover(function(){
 		$(this).css('cursor' , 'url(./img/close-button.png), auto');

 		// $(this).css('cursor' , '<?php bloginfo(template_url);?>/img/close-button.png, auto');
 	});

 	//Close video lightbox
 	$('.close-container').click(function(){
 		$('.lightbox').fadeOut();

 		//Kill video
 		$('section#lightbox-video .video-wrapper').empty();
 	});


 	//Close lightbox with escape key
	$(document).keyup(function(e) { 
		if (e.keyCode === 27) { 
			// $('body').removeClass("noScroll");
			$('.lightbox').fadeOut();
		} // esc key
	});

});
