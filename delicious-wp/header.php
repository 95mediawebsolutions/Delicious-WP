<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content="<?php bloginfo('description')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
<?php wp_body_open(); ?>

<?php if(get_theme_mod('show_preloader')):?>
    <!-- Preloader -->
    <div id="preloader">
        <i class="circle-preloader"></i>
        <img src="<?php echo esc_html(get_theme_mod('delicious_preloader'));?>" alt="<?php echo bloginfo('name');?>">
    </div>
<?php endif;?>

    <!-- Search Wrapper -->
    <div class="search-wrapper">
        <!-- Close Btn -->
        <div class="close-btn"><i class="fa fa-times" aria-hidden="true"></i></div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                <?php $unique_id = esc_attr(uniqid());?>
                    <form action="<?php echo esc_url(home_url('/'));?>" method="get">
                        <input type="search" name="s" placeholder="<?php _e('Type any keywords...', 'delicious-wp')?>" id="<?php echo $unique_id; ?>">
                        <button type="submit" class="btns"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-between">
                    <!-- Breaking News -->
                    <div class="col-12 col-sm-6">
                        <div class="breaking-news d-none d-sm-block">
                            <div id="breakingNewsTicker" class="ticker">
                                <ul>
                                    <?php
                                        $args = array(
                                            'post_type' => 'post',
                                            'posts_per_page' => 2,
                                            'order_by'     => 'ASC'
                                        );

                                        $recent_post = new WP_Query($args); while(have_posts()) : the_post();
                                    ?>
                                      <li><a href="<?php the_permalink();?>"><?php the_title()?></a></li>

                                    <?php endwhile; wp_reset_postdata();?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Top Social Info -->
                    <div class="col-12 col-sm-6">
                        <div class="top-social-info text-right">
                            <?php  echo esc_html( delicious_social_media_display());?>
                            <?php if(get_theme_mod('set_search_icon')):?>
                             <div class="search-btn">
                                    <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </div>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="delicious-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="deliciousNav">
                     <!-- Logo -->
                        <?php if(has_custom_logo()):?>
                        <?php the_custom_logo()?>
                        <?php else:?>
                        <a class="navbar-brand" href="<?php echo esc_url(home_url('/'));?>"><h1><?php bloginfo('title');?></h1></a>
                        <?php endif;?>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                                <?php
                                wp_nav_menu( array(
                                'theme_location'    => 'primary',
                                'depth'             => 3,
                                'container_class'   => 'classynav',
                                'walker'         => new WalkerNav(),
                                ) );
                                ?>


                            <!-- Nav End -->
                        </div>
                    </nav>

                </div>

            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->
