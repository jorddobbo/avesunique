<?php get_header() ?>

<?php if (!have_posts()) : ?>
    <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
    <?php the_title(); ?>
    <?php the_content(); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>

<?php get_footer() ?>
