<?php

/* Package Delicious WP

Enqueue all necessary files for the theme.
*/

function delicious_wp_theme_setup(){
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
    wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/css/nice-select.min.css' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
    wp_enqueue_style( 'custom-icon', get_template_directory_uri() . '/assets/css/custom-icon.css' );
    wp_enqueue_style( 'classy-nav-min', get_template_directory_uri() . '/assets/css/classy-nav.min.css' );
    wp_enqueue_style( 'classy-nav-min', get_template_directory_uri() . '/assets/css/classy-nav.min.css' );
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css');

    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.1.0', true );
    wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script( 'plugins-js', get_template_directory_uri() . '/assets/js/plugins.js', array(), '1.0', true );
    wp_enqueue_script( 'active', get_template_directory_uri() . '/assets/js/active.js', array(), '1.0', true );

}


