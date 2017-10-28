import selectBox from './selectbox.js';

export default function() {

	jQuery(document).ready(function($) {

		$('.hero').slick({
		  prevArrow: $('.hero__prev'),
		  nextArrow: $('.hero__next'),
		  dots: true,
		  appendDots: $('.hero__outer')
		});

		// $('select').selectBox({
		//     mobile: true,
		//     menuSpeed: 'fast'
		// });

		$('header').on('click', '.header__search', function(event) {
			var header = $('header');

			event.preventDefault();
			header.find('.product-search').toggleClass('show');
			header.find('.product-search-field').focus();
		});

		$('header').on('click', '.header__menu', function(event) {
			var header = $('header');

			event.preventDefault();
			header.find('.nav-primary').toggleClass('show');
			$('.header__overlay').toggleClass('show');

		});

		$('body').on('click', '.header__overlay', function(event) {
			var header = $('header');

			event.preventDefault();
			$(this).toggleClass('show');
			header.find('.nav-primary').toggleClass('show');
		});

	});

}