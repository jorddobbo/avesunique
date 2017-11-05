<?php get_header() ?>

<div class="title__banner">

	<div class="container">
		<div class="row">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</div>
	</div>
</div>

<div class="container">

<?php while (have_posts()) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; ?>

</div>

<?php get_footer() ?>
