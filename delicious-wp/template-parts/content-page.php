<?php if(have_posts()) : while(have_posts()) : the_post();?>
<div <?php post_class('single-blog-area mb-80'); ?> id="post-<?php the_ID(); ?>">

<!-- Thumbnail -->
<div class="blog-thumbnail">
    <?php if(has_post_thumbnail()):?>
    <?php the_post_thumbnail( 'blog-image' );?>
    <?php else: ?>
    <img src="<?php echo esc_html(get_template_directory_uri());?>/assets/img/1.jpg"
        alt="<?php the_title();?>">
    <?php endif;?>

</div>

<!-- Content -->
<div class="blog-content">
    <a href="<?php the_permalink();?>" class="post-title"><?php the_title();?></a>

    <p><?php the_content();?> </p>
</div>
</div>

<?php endwhile; endif;?>


    <?php $defaults = array(
        'before'           => '<p class="text-center">' . __( 'Pages:', 'delicious-wp' ),
        'after'            => '</p>',
        ); wp_link_pages( $defaults );?>

        <?php if(comments_open() || get_comments_number()){
            comments_template();
        }?>
