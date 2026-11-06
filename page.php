<?php get_header(); ?>
<main class="section content-section">
    <div class="container narrow-container">
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class('page-content'); ?>>
                <p class="eyebrow">PAGE</p>
                <h1 class="section-heading"><?php the_title(); ?></h1>
                <div class="entry-content"><?php the_content(); ?></div>
            </article>
        <?php endwhile; ?>
    </div>
</main>
<?php get_footer(); ?>