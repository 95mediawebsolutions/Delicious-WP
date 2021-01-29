<?php
/*
@package Delious WP
*/
get_header();?>


   <!-- ##### Breadcumb Area Start ##### -->
   <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(<?php echo esc_html(get_theme_mod('delicious_blog_banner'));?>);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-text text-center">
                    <h2><?php _e('Blog', 'delicious-wp');?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-80">
        <div class="container">
            <div class="row">
                <?php get_template_part( 'template-parts/content' );?>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->



<?php get_footer();?>