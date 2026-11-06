<?php get_header(); ?>
<main class="section content-section">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article <?php post_class('post-card'); ?>>
                    <p class="eyebrow"><?php echo esc_html(get_the_date()); ?></p>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-content"><?php the_excerpt(); ?></div>
                </article>
            <?php endwhile;
            the_posts_pagination();
        else : ?>
            <h1 class="section-heading">Nothing here yet.</h1>
            <p>Add a post in your WordPress Dashboard to see it here.</p>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>