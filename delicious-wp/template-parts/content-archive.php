


<div class="col-12 col-lg-8">
<div class="blog-posts-area">

<?php  if(have_posts()) : while(have_posts()) : the_post();?>
    <!-- Single Blog Area -->
    <div <?php post_class('single-blog-area mb-80'); ?> id="post-<?php the_ID(); ?>">
        <!-- Thumbnail -->
        <div class="blog-thumbnail">
            <?php if(has_post_thumbnail()):?>
                <?php the_post_thumbnail( 'blog-image' );?>
                <?php else: ?>
                    <img src="<?php echo esc_html(get_template_directory_uri())?>/assets/img/1.jpg" alt="<?php the_title();?>">
            <?php endif;?>
            <!-- Post Date -->
            <div class="post-date">
                <a href="#"><span><?php echo esc_html(get_the_date('d'));?></span> <?php echo esc_html(get_the_date('M'));?>  <span><?php echo esc_html(get_the_date('Y'));?></span></a>
            </div>
        </div>
        <!-- Content -->
        <div class="blog-content">
            <a href="<?php the_permalink();?>" class="post-title"><?php the_title();?></a>
            <div class="meta-data">by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a> in 
            <?php if(has_category()):?><?php the_category(', ')?><?php endif;?> <?php if(has_tag()):?><?php the_tags(' | ')?><?php endif;?>
            </div>
            <p><?php the_excerpt();?> </p>
            <a href="<?php the_permalink()?>" class="btn delicious-btn mt-30"><?php _e('Read More', 'delicious-wp')?></a>
        </div>
    </div>
<?php endwhile; endif; ?>
</div>
<nav aria-label="Page navigation example">
<ul class="pagination">
<?php delicious_number_pagination(); ?>
</ul>
</nav>

</div>

<div class="col-12 col-lg-4">
<?php get_sidebar();?>
</div>