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
    ob_start(); 
    global $post;
    $post_id = $post ? $post->ID : get_option('page_on_front'); // fallback to homepage ID if needed

    // Get image and button links
    $image = get_field('prof_pic', $post_id);
    $linkedin_link = get_field('linkedin_button_link', $post_id);
    $resume_link = get_field('resume_button_link', $post_id);
    ?>
    <div class="scroll-wrapper">
        <div class="scroll-container">
            <div class="scroll-track">
                <section class="scroll-page">
                    <?php if ($image): ?>
                        <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" style="width:500px; margin:0; transform: rotate(-2deg);">
                    <?php else: ?>
                        <p>No profile picture found.</p>
                    <?php endif; ?>
                </section>
                <section class="scroll-page">
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
                           <?php if ($linkedin_link): ?>
                                <a href="<?php echo esc_url($linkedin_link); ?>" class="button left-button">LINKEDIN</a>
                            <?php endif; ?>
                            <?php if ($resume_link): ?>
                                <a href="<?php echo esc_url($resume_link); ?>" class="button right-button">RESUME</a>
                            <?php endif; ?>
                        </div>
                 </div>
                </section>
                <section class="scroll-page">
                     <div class="description">
                        <h3>Deliver production-ready applications, lead code reviews, manage CI/CD pipelines, 
                          and mentor junior developers to ensure quality and best practices.
                          smooth and efficient system communication.
                        </h3>
                      </div>
                </section>
                <section class="scroll-page">
                     <div class="description">
                        <h3>Work in Agile and Waterfall teams with daily standups and sprint planning. Use Docker,
                           Azure DevOps, GitHub, GitLab, Plesk, and Delinea to streamline deployments, 
                           manage infrastructure, and ensure secure, efficient workflows.
                        </h3>
                      </div>
                </section>
                <section class="scroll-page">
                     <div class="description">
                        <h3>Fast-paced, collaborative web and cloud environments.
                        </h3>
                      </div>
                </section>
                <section class="scroll-page">
                     <div class="description">
                        <h3>From concept through launch and ongoing maintenance, ensuring continuous improvement.
                        </h3>
                      </div>
                </section>
          

            </div>
            <div class="step-indicators">
             <div class="dots-wrapper">
                 <div class="trail-line">
    <div class="trail-fill"></div>
  </div>

  
  <div class="dot-group active">
    <span class="dot-label">Hi!</span>
    <span class="dot dot-left"></span>
  </div>
  <div class="dot-group">
    <span class="dot-label">The Gist</span>
    <span class="dot"></span>
  </div>
  <div class="dot-group">
    <span class="dot-label">What I Do</span>
    <span class="dot"></span>
  </div>
  <div class="dot-group">
    <span class="dot-label">How I Do It</span>
    <span class="dot"></span>
  </div>
  <div class="dot-group">
    <span class="dot-label">Where I Do It</span>
    <span class="dot"></span>
  </div>
   <div class="dot-group">
    <span class="dot-label">When I Do It</span>
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

