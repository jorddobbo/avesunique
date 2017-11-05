<?php get_header() ?>

<div class="title__banner">

	<div class="container">
		<div class="row">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</div>
	</div>
</div>

<div class="container">

	<?php if (!have_posts()) : ?>
	    <?php get_search_form(); ?>
	<?php endif; ?>

	<?php while (have_posts()) : the_post(); ?>
	    <?php the_title(); ?>
	    <?php the_content(); ?>
	<?php endwhile; ?>

	<?php the_posts_navigation(); ?>

</div>

<?php get_footer() ?>
