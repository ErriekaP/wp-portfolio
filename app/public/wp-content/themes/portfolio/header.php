<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="navbar">
  <div class="container">
    <div class="navbar-left">
      <a href="<?php echo home_url(); ?>" class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="WebView Logo">
      </a>
    </div>
    <div class="navbar-right">
      <nav class="navbar-center">
        <?php
          wp_nav_menu(array(
            'theme_location' => 'portfolio-nav',
            'container' => false,
            'menu_class' => 'nav-menu'
          ));
        ?>
      </nav>
     <div class="navbar-button">
      <a href="#contact" class="btn contact-btn">CONTACT ME</a>
    </div>
  </div>
</header>
