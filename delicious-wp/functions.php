<?php
/* @package Delious WP */

// File Includes
include(get_template_directory() . '/inc/enqueue.php');
include(get_template_directory(). '/inc/setup.php');
include(get_template_directory(). '/inc/theme-functions.php');
include(get_template_directory() . '/inc/widgets.php');
include(get_template_directory() . '/inc/customizer/social.php');
include(get_template_directory() . '/inc/customizer/misc.php');
include(get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php');





// action hooks
add_action('after_setup_theme', 'delicious_theme_setup');
add_action('wp_enqueue_scripts', 'delicious_wp_theme_setup');
add_action('widgets_init', 'delicious_widgets');