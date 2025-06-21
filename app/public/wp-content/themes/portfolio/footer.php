<?php wp_footer(); ?>
<div class="footer">
    <div class="details">
        <a href="<?php echo home_url(); ?>" class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="WebView Logo">
        </a>
        <h3>ERRIEKA PALANCA</h3>
        <div class="roles">
            <h4>FULL-STACK DEVELOPER</h4>
            <h4>WORDPRESS DEVELOPER</h4>
            <h4>DATABASE ENGINEERING</h4>
            <h4>ECOMMERCE</h4>
            <h4>DEVOPS</h4>
        </div>
    </div>
    <div class="copyright">
        <h4>Copyright © <?php the_field('current_year'); ?></h4>
    </div>
    <div class="icons">
        <img src="<?php the_field('gmail_icon'); ?>" alt="<?php the_field('gmail'); ?>">
        <img src="<?php the_field('linkedin_icon'); ?>" alt="<?php the_field('linkedin'); ?>">
        <img src="<?php the_field('github_icon'); ?>" alt="<?php the_field('github'); ?>">
        <img src="<?php the_field('leetcode_icon'); ?>" alt="<?php the_field('leetcode'); ?>">
    </div>
</div>

</body>
</html>
