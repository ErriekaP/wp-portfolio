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
        <?php if ($gmail = get_field('gmail_link')): ?>
            <a href="mailto:<?php echo esc_attr($gmail); ?>" target="_blank" rel="noopener">
                <img src="<?php the_field('gmail_icon'); ?>" alt="Gmail">
            </a>
        <?php endif; ?>

        <?php if ($linkedin = get_field('linkedin_link')): ?>
            <a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener">
                <img src="<?php the_field('linkedin_icon'); ?>" alt="LinkedIn">
            </a>
        <?php endif; ?>

        <?php if ($github = get_field('github_link')): ?>
            <a href="<?php echo esc_url($github); ?>" target="_blank" rel="noopener">
                <img src="<?php the_field('github_icon'); ?>" alt="GitHub">
            </a>
        <?php endif; ?>

        <?php if ($leetcode = get_field('leetcode_link')): ?>
            <a href="<?php echo esc_url($leetcode); ?>" target="_blank" rel="noopener">
                <img src="<?php the_field('leetcode_icon'); ?>" alt="LeetCode">
            </a>
        <?php endif; ?>
    </div>

</div>

</body>
</html>
