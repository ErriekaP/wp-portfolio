<!-- ✅ SERVICES SECTION -->
<section class="services">
  <div class="container">
    <div class="services-content">
      <h3>Services Overview</h3>
      <hr class="custom-hr">
      <h1><?php the_field('service-title'); ?></h1>
      <p><?php the_field('service-description'); ?></p>
    </div>

    <div class="services-images">
        <?php $hero_image = get_field('hero_image'); ?>
        <?php if ($hero_image): ?>
            <div class="hero-image">
                <img src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt']); ?>">
            </div>
        <?php endif; ?>
    </div>
    
  </div>
</section>
