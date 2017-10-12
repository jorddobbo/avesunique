<?php get_header() ?>

<div class="page__homepage">

	<div class="hero__wrap">
		<div class="hero__arrows">
			<div class="hero__prev"><span class="mdi mdi-arrow-left"></span></div>
			<div class="hero__next"><span class="mdi mdi-arrow-right"></span></div>
		</div>
		<div class="hero">
			<div class="hero__slide">
				<div class="hero__inner" style="background-image: url('wp-content/themes/aves-theme/assets/img/homepage/banner_winter.jpg')">
					<div class="container">
						<div class="inner">
							<h2>New In<br/>For Winter</h2>
							<p>Our new collection now available. Take a look and find something for your home this Winter.</p>
							<div class="btn--underline">Shop Now</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hero__slide">
				<div class="hero__inner" style="background-image: url('wp-content/themes/aves-theme/assets/img/homepage/banner_winter.jpg')">
					<div class="container">
						<div class="inner">
							<h2>New In<br/>For Winter</h2>
							<p>Our new collection now available. Take a look and find something for your home this Winter.</p>
							<div class="btn--underline">Shop Now</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hero__slide">
				<div class="hero__inner" style="background-image: url('wp-content/themes/aves-theme/assets/img/homepage/banner_winter.jpg')">
					<div class="container">
						<div class="inner">
							<h2>New In<br/>For Winter</h2>
							<p>Our new collection now available. Take a look and find something for your home this Winter.</p>
							<div class="btn--underline">Shop Now</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="promo-blocks">
		<div class="container">
			<div class="row">
				<div class="promo-block promo-block--one">
					<a href="#" class="block--long">
						<div class="image">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/homepage/block_fox.png">
						</div>
						<div class="inner">
							<h3>Animal<br>Sculptures</h3>
							<div class="btn--underline">Shop Now</div>
						</div>
					</a>
					<a href="#" class="block--short">
						<div class="image">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/homepage/block_planters.png">
						</div>
						<div class="inner">
							<h3>Planters</h3>
						</div>
					</a>
				</div>
				<div class="promo-block promo-block--two">
					<a href="#" class="block--short">
						<div class="image">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/homepage/block_gallery.png">
						</div>
						<div class="inner">
							<h3>Gallery</h3>
						</div>
					</a>
					<a href="#" class="block--long">
						<div class="image">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/homepage/block_butterfly.png">
						</div>
						<div class="inner">
							<h3>Wall Art</h3>
							<div class="btn--underline">Shop Now</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="featured-products">
		<div class="container">
			<div class="row">
				<div class="section__title">
					<div class="sub">Featured</div>
					<h2 class="main"><span>Our Favourites</span></h2>
					<div class="icon mdi mdi-heart"></div>
				</div>
				<?php echo do_shortcode('[featured_products per_page="12" columns="4"]'); ?>
			</div>
		</div>
	</div>

</div>

<?php get_footer() ?>