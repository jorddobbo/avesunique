<?php

// Template Name: Contact

?>

<?php get_header() ?>

<?php

$field = get_field_object('colour');
$value = $field['value'];

?>

<?php if ( !is_woocommerce() && !is_cart() && !is_checkout() && !is_account_page()) { ?>

<div class="title__banner title__banner--<?php echo $value; ?>">

	<div class="container">
		<div class="row">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</div>
	</div>
</div>

<div class="container page__wrap">

	<div class="contact__wrap">
		<div class="contact__info">
			<div class="contact__email">
				<h3>Email Us</h3>
				<p>enquiries@avesunique.co.uk</p>
			</div>
			<div class="contact__social">
				<h3>Follow Us</h3>
				<a href="https://www.facebook.com/Avesunique0"><span class="icon--circle mdi mdi-facebook-box"></span></a>
	    		<a href="https://www.instagram.com/avesunique/"><span class="icon--circle mdi mdi-instagram"></span></a>
			</div>
		</div>
		<div class="contact__form">
			<?php echo do_shortcode('[contact-form-7 id="271" title="Contact form 1"]'); ?>
		</div>
	</div>

</div>

<?php } else { ?>

<?php while (have_posts()) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; ?>

<?php } ?>

<?php get_footer() ?>