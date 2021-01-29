<?php

function delicious_theme_setup(){

    add_theme_support( 'post-thumbnails' );
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption') );

    register_nav_menu('primary', __('Primary Menu', 'delicious-wp'));


    add_image_size( 'blog-image', '1000', '402' );

    if ( ! isset( $content_width ) ) {
        $content_width = 900;
    }

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
    }

    $text_domain = 'delicious-wp';
   load_theme_textdomain( $text_domain, get_stylesheet_directory() . '/languages' );
   load_theme_textdomain( $text_domain, get_template_directory() . '/languages' );
}
