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

<?php while (have_posts()) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; ?>

</div>

<?php } else { ?>

<?php while (have_posts()) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; ?>

<?php } ?>

<?php get_footer() ?>