<!-- ✅ HERO SECTION -->
<section class="hero">
  <div class="container">
    <div class="hero-content">
      <h1>I'M <?php the_field('name'); ?></h1>
      <h2><?php the_field('title'); ?> in the <?php the_field('location'); ?></h2>
      <p><?php the_field('years_of_experience'); ?>+ years of building and maintaining full-stack applications from concept to launch that grow with you.</p>
      <a href="<?php the_field('contact_button_link'); ?>" class="button">CONTACT ME</a>
    </div>
  </div>
</section>
