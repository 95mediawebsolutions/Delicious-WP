<div class="col-12 col-lg-8">
<div class="blog-posts-area">
<?php while(have_posts()) : the_post();?>
    <!-- Single Blog Area -->
    <div <?php post_class('single-blog-area mb-80'); ?> id="post-<?php the_ID(); ?>">
        <!-- Thumbnail -->
        <div class="blog-thumbnail">
           <?php if(has_post_thumbnail()):?>
                <?php the_post_thumbnail( 'blog-image' );?>
                <?php else: ?>
             <img src="<?php echo esc_html (get_template_directory_uri())?>/assets/img/1.jpg" alt="<?php the_title();?>">
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
            <p><?php the_content();?> </p>

            <div class="share-post mb-4">
            <?php
            $title = get_the_title();
            $permalink = get_permalink();
            $twitter = 'https://twitter.com/intent/tweet?text=Hey! Read this: '.$title.'&amp;url='.$permalink.'';
            $facebook = 'https://www.facebook.com/sharer/sharer.php?u='.$permalink;
            $linkedin = 'https://www.linkedin.com/cws/share?mini=true&url='.$permalink;
            ?>

                  <!-- Post share-->
            <div class="d-flex align-items-center flex-column flex-sm-row mb-5 p-4">
            <h3 class="h4 mb-3 mb-sm-0">Share this post:</h3>
            <ul class="list-inline mb-0 ml-0 ml-sm-3">
                <li class="list-inline-item mr-1 my-1"><a class="social-link-share facebook" href="<?php echo $facebook?>" target="_blank"><i class="fa fa-facebook-f mr-2"></i>Share</a></li>
                <li class="list-inline-item mr-1 my-1"><a class="social-link-share twitter" href="<?php echo $twitter?>" target="_blank"><i class="fa fa-twitter mr-2"></i>Tweet</a></li>
                <li class="list-inline-item mr-1 my-1"><a class="social-link-share linkedin" href="<?php echo $linkedin?>" target="_blank"><i class="fa fa-linkedin mr-2"></i>Share</a></li>
            </ul>
            </div>

            </div>

        </div>
    </div>

    <div class="navigation-top">

      <div class="content">
<?php
wp_link_pages(
array(
'before'    => '<p class="inner-pagination">' . esc_html__( 'Pages:', 'delicious-wp' ),
'after'     => '</p>',
)
);
?>
    </div>
  </div>

<div class="blog-author">
 <div class="media align-items-center">
    <?php echo get_avatar(get_author_posts_url($post->post_author), 90, '', false,  ['class' => 'img-circle']);?>
    <div class="media-body">
       <a href="#">
          <h4><?php the_author();?></h4>
       </a>
       <p><?php echo nl2br (get_the_author_meta('description'));?></p>
    </div>
 </div>
</div>
<div class="comment-section mb-4">
    <?php
    // If comments are open or we have at least one comment, load up the comment template.
        if( comments_open() || get_comments_number()):
            comments_template();
        endif;
    ?>
  </div>
<?php endwhile;?>
</div>

</div>

<div class="col-12 col-lg-4">
<?php get_sidebar();?>
</div>
