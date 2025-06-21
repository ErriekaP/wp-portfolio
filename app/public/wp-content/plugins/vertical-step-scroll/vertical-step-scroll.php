<?php
/*
Plugin Name: Horizontal Step Scroll
Description: A horizontal scroll section that reacts to vertical scrolling, with dot indicators.
Version: 1.0
Author: Your Name
*/

// Enqueue CSS and JS
function vss_enqueue_assets() {
    wp_enqueue_style('vss-style', plugin_dir_url(__FILE__) . 'scroll-style.css');
    wp_enqueue_script('vss-script', plugin_dir_url(__FILE__) . 'scroll-script.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'vss_enqueue_assets');

// Shortcode
function horizontal_scroll_shortcode() {
    ob_start(); ?>
    <div class="scroll-wrapper">
        <div class="scroll-container">
            <div class="scroll-track">
                <section class="scroll-page">
                    <img src="<?php the_field('prof_pic'); ?>" alt="<?php the_field('prof_pic'); ?>">
                     <div class="description">
                        <h3>I’m a full-stack developer with over two years of experience in 
                            designing and building scalable web applications. <br><br>

                            I hold a Bachelor’s degree in Computer Science from Ateneo 
                            de Davao University, which laid the foundation for my strong 
                            technical background and problem-solving skills.<br><br>

                            I specialize in modern technologies such as React.js, Angular JS, 
                            ASP.NET, and have hands-on experience working with MSSQL, MySQL, 
                            and WordPress, including custom theme and plugin development. 
                            I’m also skilled in API integration across diverse platforms, ensuring 
                            smooth and efficient system communication.
                        </h3>
                        <div class="btns">
                          <a href="<?php the_field('linkedin_button_link'); ?>" class="button left-button">LINKEDIN</a>
                          <a href="<?php the_field('resume_button_link'); ?>" class="button right-button">RESUME</a>
                        </div>
                 </div>
                </section>
                <section class="scroll-page">
                  <img src="<?php the_field('prof_pic'); ?>" alt="<?php the_field('prof_pic'); ?>">
                     <div class="description">
                        <h3>Deliver production-ready applications, lead code reviews, manage CI/CD pipelines, 
                          and mentor junior developers to ensure quality and best practices.
                          smooth and efficient system communication.
                        </h3>

                </section>
                <section class="scroll-page">React, .NET, WordPress expert.</section>
                <section class="scroll-page">Let’s work together!</section>
                <section class="scroll-page">Let’s work together!</section>

            </div>
            <div class="step-indicators">
             <div class="dots-wrapper">
                 <div class="trail-line">
    <div class="trail-fill"></div>
  </div>

  <div class="dot-group active">
    <span class="dot-label">The Gist</span>
    <span class="dot dot-left"></span>
  </div>
  <div class="dot-group">
    <span class="dot-label">Experience</span>
    <span class="dot"></span>
  </div>
  <div class="dot-group">
    <span class="dot-label">Skills</span>
    <span class="dot"></span>
  </div>
  <div class="dot-group">
    <span class="dot-label">Contact</span>
    <span class="dot"></span>
  </div>
   <div class="dot-group">
    <span class="dot-label">Contact</span>
    <span class="dot dot-right"></span>
  </div>

</div>

          </div>
  
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('horizontal_scroll_section', 'horizontal_scroll_shortcode');
