<?php get_header() ?>

<div class="page__homepage">

	<div class="hero__outer">
		<div class="hero__wrap">
			<div class="hero__arrows">
				<div class="hero__prev"><span class="mdi mdi-arrow-left"></span></div>
				<div class="hero__next"><span class="mdi mdi-arrow-right"></span></div>
			</div>
			<div class="hero">

				<?php

				// check if the repeater field has rows of data
				if( have_rows('banner') ):

				 	// loop through the rows of data
				    while ( have_rows('banner') ) : the_row(); ?>

				        <a href="<?php echo the_sub_field('banner_url'); ?>" class="hero__slide">
							<div class="hero__inner" style="background-image: url('<?php echo the_sub_field('banner_image'); ?>')">
								<div class="container container--desktop">
									<div class="inner">
										<h2><?php echo the_sub_field('banner_title'); ?></h2>
										<p><?php echo the_sub_field('banner_paragraph'); ?></p>
										<div class="btn--underline">Shop Now</div>
									</div>
								</div>
							</div>
							<div class="container container--mobile">
								<div class="inner">
									<h2><?php echo the_sub_field('banner_title'); ?></h2>
									<p><?php echo the_sub_field('banner_paragraph'); ?></p>
									<div class="btn--underline">Shop Now</div>
								</div>
							</div>
						</a>

				    <?php endwhile;

				else :

				    // no rows found

				endif;

				?>
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
		<div class="section__title">
			<div class="sub">Featured</div>
			<h2 class="main"><span>Our Favourites</span></h2>
			<div class="icon mdi mdi-heart"></div>
		</div>
		<div class="container">
			<div class="row">
				<?php echo do_shortcode('[featured_products per_page="12" columns="4"]'); ?>
			</div>
		</div>
	</div>

</div>

<?php get_footer() ?>