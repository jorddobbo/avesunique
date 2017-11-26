import selectBox from './selectbox.js';
import objectfit from './mdnzr_object-fit.js';

export default function() {

	jQuery(document).ready(function($) {

		$('.hero').slick({
		  prevArrow: $('.hero__prev'),
		  nextArrow: $('.hero__next'),
		  dots: true,
		  appendDots: $('.hero__outer')
		});

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

		$('.sidebar__toggle').click(function () {
			$(this).toggleClass('show');
		    $('.sidebar__inner').toggleClass('show');
		});

		if (!CSS.supports("object-fit", "contain")) {
		  $('.woocommerce-loop-product__link').each(function () {
		    var $container = $(this).find('.product__image'),
		        imgUrl = $container.find('img').prop('src'),
		        hoverImg = $(this).find('.secondary-image'),
		        hoverUrl = hoverImg.prop('src');
		    if (imgUrl) {
		      $container
		        .css('backgroundImage', 'url(' + imgUrl + ')')
		        .addClass('compat-object-fit');
		       hoverImg.wrap("<div class='product__hover-image'></div>");
		       $(this).find('.product__hover-image').addClass('compat-object-fit').css('backgroundImage', 'url(' + hoverUrl + ')');
		    }  
		  });
		};

	});

}