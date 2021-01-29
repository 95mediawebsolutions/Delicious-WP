  <!-- ##### Footer Area Start ##### -->
  <footer class="footer-area">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100 d-flex flex-wrap align-items-center justify-content-between">
                    <!-- Footer Social Info -->
                    <div class="footer-social-info text-right">
                        <?php echo delicious_social_media_display();?>    
                    </div>
                    <!-- Footer Logo -->
                    <div class="footer-logo">
                    <?php if(has_custom_logo()):?>
                        <?php the_custom_logo()?>
                        <?php else:?>
                        <a class="navbar-brand" href="<?php echo esc_url(home_url('/'));?>"><h1><?php bloginfo('title');?></h1></a>
                        <?php endif;?>
                    </div>
                    <!-- Copywrite -->
                    <p><?php echo esc_html( get_theme_mod('set_copyright', __('Copyright &copy; 2021 All rights reserved | This theme is made with by 95media', 'delicious-wp')));?></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

<?php wp_footer();?>

</body>
</html>