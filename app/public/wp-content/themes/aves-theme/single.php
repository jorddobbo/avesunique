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
    <article <?php post_class(); ?>>
        <header>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <?php get_template_part('templates/entry-meta'); ?>
        </header>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
        <footer>
        </footer>
    </article>
<?php endwhile; ?>
</div>
<?php get_footer() ?>
