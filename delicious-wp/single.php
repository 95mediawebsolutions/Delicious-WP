<?php
/*
@package Delicous WP

Delicous Single Page

*/
get_header();?>
   <!-- ##### Blog Area Start ##### -->
   <div class="blog-area section-padding-80">
        <div class="container">
            <div class="row">
                <?php get_template_part('template-parts/content-single' );?>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->




<?php get_footer();?>