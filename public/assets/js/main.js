/*
Theme Name: Yose
Description: Responsive Coming Soon Template
Author: Erilisdesign
Theme URI: http://themes.erilisdesign.com/yose/
Author URI: http://themeforest.net/user/erilisdesign
Version: 2.0.0
License: https://themeforest.net/licenses/standard
*/

/*------------------------------------------------------------------
[Table of contents]

1. Preloader
2. Animations
3. Navigation
3. Back to top
4. Backgrounds
5. Masonry
6. Magnific Popup
7. Slider
8. Countdown
9. Mailchimp
10. Contact Form
-------------------------------------------------------------------*/

(function($) {
	"use strict";

	// Vars
	var $body = $('body'),
		$siteNavigation = $('.site-navigation'),
		$navToggle = $('#navigation-toggle'),
		closeNavAfterClick_mobile = true,
		$backToTop = $('#back-to-top'),
		$smoothScrollLinks = $('a.scrollto, .site-header a[href^="#"]'),
		$preloader = $('#preloader'),
		preloaderDelay = 1200,
		preloaderFadeOutTime = 500;

	function getWindowWidth() {
		return Math.max( $(window).width(), window.innerWidth);
	}

	function getWindowHeight() {
		return Math.max( $(window).height(), window.innerHeight);
	}

	// Mobile Detector
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		$body.addClass('mobile');
	}

	// [1. Preloader]
	function yose_preloader() {
		$preloader.delay(preloaderDelay).fadeOut(preloaderFadeOutTime);
	}
	
	// [2. Animations]
	function yose_animations() {

		$('.animated').each(function() {
			var $element = $(this);
			new Waypoint({
				element: $element,
				handler: function(direction) {
					var $element = this.element,
						animation = $element.attr('data-animation'),
						animationDelay = parseInt($element.attr('data-animation-delay'), 10);
					if ( !$element.hasClass('visible') ) {
						if ( animationDelay ) {
							setTimeout(function(){
								$element.addClass(animation + ' visible');
							}, animationDelay);
						} else {
							$element.addClass(animation + ' visible');
						}
					}
					this.destroy();
				},
				offset: '100%'
			});
		});

	}

	// [3. Navigation]
	function yose_navigation() {
		$siteNavigation.css('display','');

		// Mobile navigation toggle
		$navToggle.off('click');
		$navToggle.on('click', function(e) {
			e.preventDefault();

			if(!$(this).hasClass('open')){
				$(this).addClass('open');
				$('.header-collapse').slideDown(500);
			} else {
				$('.header-collapse').slideUp(500);
				$(this).removeClass('open');
			}
		});

		// Smooth Scroll
		$smoothScrollLinks.off('click');
		$smoothScrollLinks.on('click', function(e) {
			e.preventDefault();

			var target = $(this).attr('href');

			$.smoothScroll({
				offset: 0,
				easing: 'swing',
				speed: 800,
				scrollTarget: target,
				preventDefault: false
			});

			// Close classic navigation after menu element click - only for mobile view
			if( closeNavAfterClick_mobile === true && $(target).parents('.site-header') && $navToggle.hasClass('open') ){
				$navToggle.trigger('click');

				$('.site-navigation [data-toggle="tooltip"]').tooltip('hide');
			}

		});

		// Enable Bootstrap tolltips
		$('.site-navigation [data-toggle="tooltip"]').tooltip({
			container: '.site-header',
			trigger: 'hover'
		});

	}

	// [4. Back to top]
	function yose_backToTopShowHide() {
		if( getWindowWidth() >= 576 ){
			var scrollpos = $(window).scrollTop();

			if ( scrollpos > 100 ) {
				$backToTop.addClass('show');
			} else {
				$backToTop.removeClass('show');
			}
		} else {
			$backToTop.removeClass('show');
		}
	}

	function yose_backToTopButton() {
		$backToTop.off('click');
		$backToTop.on('click', function(e) {
			e.preventDefault();

			$.smoothScroll({
				offset: 0,
				easing: 'swing',
				speed: 800,
				scrollTarget: 0,
				preventDefault: false
			});
		});
	}

	// [5. Backgrounds]
	function yose_backgrounds() {

		// Image
		var $bgImage = $('.bg-image-holder');
		if($bgImage.length) {
			$bgImage.each(function(){
				var src = $(this).children('img').attr('src');
				var $self = $(this);

				$self.css('background-image','url('+src+')').children('img').hide();

				$self.imagesLoaded({
					background: true
				}, function(instance, image) {
					$self.addClass('loaded');
				});
			});
		}

		// Vegas Backgrounds
		yose_vegas();

		// Youtube Video
		if ($('#youtube-background').length > 0) {
			var videos = [
				{videoURL: "iXkJmJa4NvE", showControls:false, containment:'.overlay-video',autoPlay:true, mute:true, startAt:0,opacity:1, loop:true, showYTLogo:false, realfullscreen: true, addRaster:true}
			];

			$('.player').YTPlaylist(videos, true);
		}

		// Youtube Multiple Videos
		if ($('#youtube-multiple-background').length > 0) {

			var videos = [
				{videoURL: "CG20eBusRg0", showControls:false, containment:'.overlay-video',autoPlay:true, mute:true, startAt:0,opacity:1, loop:false, showYTLogo:false, realfullscreen: true, addRaster:true},
				{videoURL: "iXkJmJa4NvE", showControls:false, containment:'.overlay-video',autoPlay:true, mute:true, startAt:0,opacity:1, loop:false, showYTLogo:false, realfullscreen: true, addRaster:true}
			];

			$('.player').YTPlaylist(videos, true);

		}

		// Video Background
		if($body.hasClass('mobile')) {
			$('.video-wrapper').css('display', 'none');
		}

		// Granim
		$('[data-gradient-bg]').each(function(index,element){
    		var granimParent = $(this),
    			granimID = 'granim-'+index+'',
				colours = granimParent.attr('data-gradient-bg'),
				colours = colours.replace(' ',''),
				colours = colours.replace(/'/g, '"')
				colours = JSON.parse( colours );

			// Add canvas
			granimParent.prepend('<canvas id="'+granimID+'"></canvas>');

			var granimInstance = new Granim({
				element: '#'+granimID,
				name: 'basic-gradient',
				direction: 'left-right', // 'diagonal', 'top-bottom', 'radial'
				opacity: [1, 1],
				isPausedWhenNotInView: true,
				states : {
					"default-state": {
						gradients: colours
					}
				}
			});
    	});

	}

	function yose_vegas() {
		// Slideshow
		if ($body.hasClass('slideshow-background')) {
			$body.vegas({
				preload: true,
				timer: false,
				delay: 5000,
				transition: 'fade',
				transitionDuration: 1000,
				slides: [
					{ src: 'demo/images/image-15.jpg' },
					{ src: 'demo/images/image-16.jpg' },
					{ src: 'demo/images/image-17.jpg' },
					{ src: 'demo/images/image-4.jpg' }
				]
			});
		}

		// Slideshow - ZoomOut
		if ($body.hasClass('slideshow-zoom-background')) {
			$body.vegas({
				preload: true,
				timer: false,
				delay: 7000,
				transition: 'zoomOut',
				transitionDuration: 4000,
				slides: [
					{ src: 'demo/images/image-4.jpg' },
					{ src: 'demo/images/image-16.jpg' },
					{ src: 'demo/images/image-17.jpg' },
					{ src: 'demo/images/image-15.jpg' }
				]
			});
		}

		// Slideshow with Video
		if ($body.hasClass('slideshow-video-background')) {
			$body.vegas({
				preload: true,
				timer: false,
				delay: 5000,
				transition: 'fade',
				transitionDuration: 1000,
				slides: [
					{ src: 'demo/images/image-15.jpg' },
					{ src: 'demo/video/marine.jpg',
						video: {
							src: [
								'demo/video/marine.mp4',
								'demo/video/marine.webm',
								'demo/video/marine.ogv'
							],
							loop: false,
							mute: true
						}
					},
					{ src: 'demo/images/image-16.jpg' },
					{ src: 'demo/images/image-17.jpg' }
				]
			});
		}

		// Kenburns
		if ($body.hasClass('kenburns-background')) {

			var kenburnsDisplayBackdrops = false;
			var kenburnsBackgrounds = [
				{ src: 'demo/images/image-15.jpg', valign: 'top' },
				{ src: 'demo/images/image-14.jpg', valign: 'top' },
				{ src: 'demo/images/image-17.jpg', valign: 'top' }
			];

			$body.vegas({
				preload: true,
				transition: 'swirlLeft2',
				transitionDuration: 4000,
				timer: false,
				delay: 10000,
				slides: kenburnsBackgrounds,
				walk: function (nb) {
					if (kenburnsDisplayBackdrops === true) {
						var backdrop;

						backdrop = backdrops[nb];
						backdrop.animation = 'kenburns';
						backdrop.animationDuration = 20000;
						backdrop.transition = 'fade';
						backdrop.transitionDuration = 1000;

						$body
							.vegas('options', 'slides', [ backdrop ])
							.vegas('next');
					}
				}
			});
		}

	}

	// [6. Masonry]
	function yose_masonryLayout() {
		if ($('.isotope-container').length > 0) {
			var $isotopeContainer = $('.isotope-container');
			var $columnWidth = $isotopeContainer.data('column-width');

			if($columnWidth == null){
				var $columnWidth = '.isotope-item';
			}

			$isotopeContainer.isotope({
				filter: '*',
				animationEngine: 'best-available',
				resizable: false,
				itemSelector : '.isotope-item',
				masonry: {
					columnWidth: $columnWidth
				},
				animationOptions: {
					duration: 750,
					easing: 'linear',
					queue: false
				}
			});
		}

		$('nav.isotope-filter ul a').on('click', function() {
			var selector = $(this).attr('data-filter');
			$isotopeContainer.isotope({ filter: selector });
			$('nav.isotope-filter ul a').removeClass('active');
			$(this).addClass('active');
			return false;
		});

	}

	// [7. Magnific Popup]
	function yose_magnificPopup() {
		if(	document.querySelectorAll('.mfp-image').length > 0 ||
			document.querySelectorAll('.mfp-gallery').length > 0 ||
			document.querySelectorAll('.mfp-iframe').length > 0 ||
			document.querySelectorAll('.mfp-ajax').length > 0 ||
			document.querySelectorAll('.open-popup-link').length > 0 ){

			if(!$().magnificPopup) {
				console.log('MagnificPopup: magnificPopup not defined.');
				return true;
			}

			$('.mfp-image').magnificPopup({
				type:'image',
				closeMarkup: '<button title="%title%" type="button" class="mfp-close"><i class="fas fa-times"></i></button>',
				removalDelay: 300,
				mainClass: 'mfp-fade'
			});

			$('.mfp-gallery').each(function() {
				$(this).magnificPopup({
					delegate: 'a',
					type: 'image',
					gallery: {
						enabled: true
					},
					arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
					closeMarkup: '<button title="%title%" type="button" class="mfp-close"><i class="fas fa-times"></i></button>',
					removalDelay: 300,
					mainClass: 'mfp-fade'
				});
			});

			$('.mfp-iframe').magnificPopup({
				type: 'iframe',
				iframe: {
					patterns: {
						youtube: {
							index: 'youtube.com/',
							id: 'v=',
							src: '//www.youtube.com/embed/%id%?autoplay=1'
						},
						vimeo: {
							index: 'vimeo.com/',
							id: '/',
							src: '//player.vimeo.com/video/%id%?autoplay=1'
						},
						gmaps: {
							index: '//maps.google.',
							src: '%id%&output=embed'
						}
					},
					srcAction: 'iframe_src'
				},
				closeMarkup: '<button title="%title%" type="button" class="mfp-close"><i class="fas fa-times"></i></button>',
				removalDelay: 300,
				mainClass: 'mfp-fade'
			});

			$('.mfp-ajax').magnificPopup({
				type: 'ajax',
				ajax: {
					settings: null,
					cursor: 'mfp-ajax-cur',
					tError: '<a href="%url%">The content</a> could not be loaded.'
				},
				midClick: true,
				closeMarkup: '<button title="%title%" type="button" class="mfp-close"><i class="fas fa-times"></i></button>',
				removalDelay: 300,
				mainClass: 'mfp-fade',
				callbacks: {
					ajaxContentAdded: function(mfpResponse) {
						ln_Slider();
					}
				}
			});

			$('.open-popup-link').magnificPopup({
				type: 'inline',
				midClick: true,
				closeMarkup: '<button title="%title%" type="button" class="mfp-close"><i class="fas fa-times"></i></button>',
				removalDelay: 300,
				mainClass: 'mfp-zoom-in'
			});

			$('.popup-modal-dismiss').on('click', function (e) {
				e.preventDefault();
				$.magnificPopup.close();
			});

		}
	}

	// [8. Slider]
	function yose_slider() {
		var slider = $('.slider');
		if(slider.length > 0){
			slider.slick({
				slidesToShow: 1,
				infinite: true,
				nextArrow: '<button type="button" class="slick-next"><i class="fas fa-angle-right"></i></button>',
				prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-angle-left"></i></button>'
			});
		}
	}

	// [9. Countdown]
	function yose_countdown() {
		var countdown = $('.countdown[data-countdown]');

		if (countdown.length > 0) {
			countdown.each(function() {
				var $countdown = $(this),
					finalDate = $countdown.data('countdown');
				$countdown.countdown(finalDate, function(event) {
					$countdown.html(event.strftime(
						'<div class="countdown-container row"><div class="countdown-item col-6 col-sm"><div class="number">%-D</div><span>Day%!d</span></div><div class="countdown-item col-6 col-sm"><div class="number">%H</div><span>Hours</span></div><div class="countdown-item col-6 col-sm"><div class="number">%M</div><span>Minutes</span></div><div class="countdown-item col-6 col-sm"><div class="number">%S</div><span>Seconds</span></div></div>'
					));
				});
			});
		}
	}

	// [10. Mailchimp]
	function yose_mailchimp() {
		var subscribeForm = $('.subscribe-form');
		if( subscribeForm.length < 1 ){ return true; }

		subscribeForm.each( function(){
			var el = $(this),
				elResult = el.find('.subscribe-form-result');

			el.find('form').validate({
				submitHandler: function(form) {
					elResult.fadeOut( 500 );

					$(form).ajaxSubmit({
						target: elResult,
						dataType: 'json',
						resetForm: true,
						success: function( data ) {
							elResult.html( data.message ).fadeIn( 500 );
							if( data.alert != 'error' ) {
								$(form).clearForm();
								setTimeout(function(){
									elResult.fadeOut( 500 );
								}, 5000);
							};
						}
					});
				}
			});

		});
	}

	// [11. Contact Form]
	function yose_contactForm() {
		var contactForm = $('.contact-form');
		if( contactForm.length < 1 ){ return true; }

		contactForm.each( function(){
			var el = $(this),
				elResult = el.find('.contact-form-result');

			el.find('form').validate({
				submitHandler: function(form) {
					elResult.fadeOut( 500 );

					$(form).ajaxSubmit({
						target: elResult,
						dataType: 'json',
						success: function( data ) {
							elResult.html( data.message ).fadeIn( 500 );
							if( data.alert != 'error' ) {
								$(form).clearForm();
								setTimeout(function(){
									elResult.fadeOut( 500 );
								}, 5000);
							};
						}
					});
				}
			});

		});
	}

	// window load function
	$(window).on('load', function() {
		yose_preloader();
		yose_masonryLayout();
	});

	// document.ready function
	jQuery(document).ready(function($) {
		yose_animations();
		yose_navigation();
		yose_backToTopShowHide();
		yose_backToTopButton();
		yose_backgrounds();
		yose_magnificPopup();
		yose_slider();
		yose_countdown();
		yose_mailchimp();
		yose_contactForm();
	});

	// window.resize function
	$(window).on('resize', function() {
		yose_slider();
		yose_navigation();
		yose_backToTopShowHide();
		yose_masonryLayout();
	});

	// window.scroll function
	$(window).on('scroll', function() {
		yose_backToTopShowHide();
	});

})(jQuery);