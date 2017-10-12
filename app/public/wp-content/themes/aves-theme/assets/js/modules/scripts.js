import selectBox from './selectbox.js';

export default function() {

	jQuery(document).ready(function($) {

		$('.hero').slick({
		  prevArrow: $('.hero__prev'),
		  nextArrow: $('.hero__next')
		});

		// $('select').selectBox({
		//     mobile: true,
		//     menuSpeed: 'fast'
		// });

		$('header').on('click', '.search', function(event) {
			var header = $('header');

			event.preventDefault();
			header.find('.product-search').toggleClass('show');
			header.find('.product-search-field').focus();
		});

	});

}