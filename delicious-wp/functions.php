<?php
/* @package Delious WP */


include(get_template_directory() . '/inc/enqueue.php');






// action hooks

add_action('after_setup_theme', 'delicious_wp_theme_setup');