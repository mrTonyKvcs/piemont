/*
Template Name    : CENTR - Agency One Page Portfolio
Version          : 1.0.0
Author           : SVYYAT
Author URI       : https://themeforest.net/user/svyyat
Created.         : August 2019
File Description : Main JS file of the template

// ------------------------------------------ //
//              Table Of Content              //
// ------------------------------------------ //

1. Preloader
2. Jarallax
3. Scroll
4. Menu
5. EasyPieChart
6. CounterUp
7. Portfolio (MixItUp)
8. Magnific PopUp
9. Clients Carousel
10. Partners Carousel
11. Blog Carousel
12. Ajax Contact Form
13. Typed Text
*/



$(function() {
	'use strick'


	/*========== Start Preloader ==========*/

	var counter = 0;
	var c = 0;
	var i = setInterval(function() {

		$('.preloader p').html(c);
		$('.preloader-counter').css('height', c + '%');

		counter++;
		c++;
		if(counter == 101) {
			clearInterval(i);
			TweenMax.from('.preloader p', 1, { ease: Power2.easeInOut });
			TweenMax.to('.preloader p', 1, { opacity: 0 , ease: Power2.easeInOut });
			TweenMax.from('.preloader', 2, { ease: Power2.easeInOut });
			TweenMax.to('.preloader', 2, { top: '-110%', ease: Power2.easeInOut });
			TweenMax.from('.preloader-counter', 2, { ease: Power2.easeInOut });
			TweenMax.to('.preloader-counter', 2, { delay: .25, top: '-110%', ease: Expo.easeInOut });
		}

	}, 9);

	/*========== End Preloader ==========*/
	/*========== Start Jarallax ==========*/

	$('.jarallax').jarallax({
		speed: 0.65
	});

	/*========== End Jarallax ==========*/
	/*========== Start Scroll ==========*/

	$(window).on('scroll', function(){
		if ($(window).scrollTop() > 25) {
			$('.navbar',).addClass('sticky');
			$('.scroll').addClass('hide');
			$('.top').addClass('visible');
		} else {
			$('.navbar',).removeClass('sticky');
			$('.scroll').removeClass('hide');
			$('.top').removeClass('visible');
		}
	});

	var scroll = new SmoothScroll('a[href*="#"]', {
		speed: 1000,
		speedAsDuration: true,
		easing: 'easeInOutQuad',
	});

	$('body').scrollspy({
		offset: 60
	});

	/*========== End Scroll ==========*/
	/*========== Start Menu ==========*/

	$('.navbar-nav a').on('click', function() {
		$('.navbar-nav a').removeClass('active');
		$(this).addClass('active')
	});

	$('.menu-button, #menuMb .nav-link').on('click', function() {
		$('.menu-button, .navbar-mobile').toggleClass('open');
		$('.navbar-brand').toggleClass('menu');
		if ($('.menu-button').hasClass('open')) {
			var tl = new TimelineLite();
			tl.set($('#menuMb .nav-item'), {y: 50, opacity: 0});
			$('#menuMb .nav-item').each(function(index, element) {
				tl.to(element, .35, {y: 0, opacity: 1, delay: .4, ease:Power2.easeOut}, index * .1)
			});
		} else {
			var tl = new TimelineLite();
			$('#menuMb .nav-item').each(function(index, element) {
				tl.to(element, .35, {y: -50, opacity: 0, ease:Power2.easeIn}, index * .1)
			});
		}
	});

	/*========== End Menu ==========*/
	/*========== Start EasyPieChart ==========*/

	$(window).on('scroll', function (){
		$('.skill-chart').easyPieChart({
			animate: 3000,
			barColor: '#2969ff',
			lineCap: 'square',
			lineWidth: 7,
			size: 125,
			scaleColor: false,
			trackColor: '#ffffff26'
		});
	});

	/*========== End EasyPieChart ==========*/
	/*========== Start CounterUp ==========*/

	$(window).on('scroll', function () {
		$(".progress-bar").each(function () {
			var bottom_of_object = 
			$(this).offset().top + $(this).outerHeight();
			var bottom_of_window = 
			$(window).scrollTop() + $(window).height();
			var myVal = $(this).attr('data-value');
			if(bottom_of_window > bottom_of_object) {
				$(this).css({
					width : myVal
				});
			}
		});
	});

	$('#skills .counter').countUp({
		delay: 5,
		time: 1600
	});

	$('#statistics .counter').countUp({
		delay: 3,
		time: 1000
	});

	/*========== End CounterUp ==========*/
	/*========== Start Portfolio (MixItUp) ==========*/

	$('.filter .filter-item').on('click', function() {
		$('.filter .filter-item').removeClass('active');
		$(this).addClass('active')
	});

	var containerEl = document.querySelector('#content');

	var mixer = mixitup(containerEl);

	/*========== End Portfolio (MixItUp) ==========*/
	/*========== Start Magnific PopUp ==========*/

	$('.play-button').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});

	$('.zoom-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true,
			titleSrc: function(item) {
				return item.el.attr('title') + '<a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank"></a>';
			}
		},
		gallery: {
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 500, // don't foget to change the duration also in CSS
			opener: function(element) {
				return element.find('img');
			}
		}
		
	});

	/*========== End Magnific PopUp ==========*/
	/*========== Start Clients Carousel ==========*/

	$('#clients .owl-carousel').owlCarousel({
		autoplay: true,
		autoplayHoverPause: true,
		dots: true,
		loop: true,
		items: 1,
		margin: 30,
		smartSpeed: 750
	})

	/*========== End Clients Carousel ==========*/
	/*========== Start Partners Carousel ==========*/

	$('#partners .owl-carousel').owlCarousel({
		autoplay: true,
		autoplayHoverPause: true,
		dots: true,
		loop: true,
		smartSpeed: 750,
		responsiveClass: true,
		responsive:{
			0:{
				items: 1,
			},
			767:{
				items: 2,
			},
			991:{
				items: 3,
			},
			1199:{
				items: 5,
			}
		}
	})

	/*========== End Partners Carousel ==========*/
	/*========== Start Blog Carousel ==========*/

	$('#blog .owl-carousel').owlCarousel({
		autoplay: true,
		autoplayHoverPause: true,
		dots: true,
		loop: true,
		smartSpeed: 750,
		responsiveClass: true,
		responsive:{
			0:{
				items: 1,
			},
			767:{
				items: 2,
			},
			1199:{
				items: 3,
			}
		}
	})

	/*========== End Blog Carousel ==========*/
	/*========== Start Ajax Contact Form ==========*/

	$('#form').on('submit', function() {
		$.ajax({
			type: 'POST',
			url: 'mail.php', // default 'mail.php'. Can be change to 'telegram.php' for using Telegram
			data: $(this).serialize(),
			success: function (data)
			{
				$(this).find('input').val('');
				alert('Thank you for your request! Soon we will contact you.');
				$('#form').trigger('reset');
			}
		});
		return false;
	});

	/*========== End Ajax Contact Form ==========*/
	/*========== Start Typed Text ==========*/

	var typed = new Typed('#typed', {
		stringsElement: '#typed-strings',
		typeSpeed: 65,
		backSpeed: 65,
		backDelay: 1500,
		startDelay: 1000,
		loop: true
	});

	/*========== End Typed Text ==========*/

});