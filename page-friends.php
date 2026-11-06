<?php
/*
Template Name: Friends Directory
*/
get_header();
$friends = array(
  array(
    'name' => 'Alex Santos',
    'role' => 'Frontend Developer',
    'initials' => 'AS',
    'slug' => 'alex-santos',
    'description' => 'Interested in website design, HTML, CSS, and JavaScript.'
  ),
  array(
    'name' => 'Jamie Cruz',
    'role' => 'Web Developer',
    'initials' => 'JC',
    'slug' => 'jamie-cruz',
    'description' => 'Enjoys creating useful websites and learning new technologies.'
  ),
  array(
    'name' => 'Taylor Reyes',
    'role' => 'Aspiring Developer',
    'initials' => 'TR',
    'slug' => 'taylor-reyes',
    'description' => 'Exploring web development and building beginner projects.'
  )
);
?>
<main class="friends-page">
  <section class="friends-heading">
    <p class="eyebrow">OUR CREATIVE COMMUNITY</p>
    <h1>Meet the <span class="accent">team.</span></h1>
    <p>Get to know my friends, explore their skills, and discover the projects they have created.</p>
  </section>
  <section class="friends-directory">
    <div class="container friends-grid">
      <?php foreach ($friends as $friend) : ?>
        <article class="friend-card">
          <div class="friend-avatar"><?php echo esc_html($friend['initials']); ?></div>
          <p class="friend-role"><?php echo esc_html($friend['role']); ?></p>
          <h2><?php echo esc_html($friend['name']); ?></h2>
          <p class="friend-description"><?php echo esc_html($friend['description']); ?></p>
          <a class="button" href="<?php echo esc_url(home_url('/friends/' . $friend['slug'] . '/')); ?>">View Portfolio <span>↗</span></a>
        </article>
      <?php endforeach; ?>
    </div>
  </section>
  <div class="friends-back"><a class="text-link" href="<?php echo esc_url(home_url('/')); ?>">← Back to homepage</a></div>
</main>
<?php get_footer(); ?>