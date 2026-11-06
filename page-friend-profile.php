<?php
/*
Template Name: Friend Profile
*/
get_header();
?>

<main class="section content-section friend-profile-main">
  <div class="container friend-profile-container">
    <?php while (have_posts()) : the_post(); ?>
      <article class="friend-profile-content">
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  </div>
</main>

<?php get_footer(); ?>