<?php 
/**
 * Template Name: Portfolio Page
 */
get_header(); ?>

<main>
  <?php get_template_part('sections/hero'); ?>
  <?php get_template_part('sections/the-gist'); ?>
  <?php get_template_part('sections/services'); ?>
  <?php get_template_part('sections/projects'); ?>
  <?php get_template_part('sections/testimonials'); ?>
  <?php get_template_part('sections/invite'); ?>
  <?php get_template_part('footer'); ?>
</main>

<?php get_footer(); ?>
