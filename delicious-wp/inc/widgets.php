<?php

/*

@Package Delicious WP

Widgets 


*/ 


function delicious_widgets(){

    register_sidebar([
        'name'          => __('Delicious Theme Sidebar Widget', 'delicious-wp'),
        'id'            => 'delicious_sidebar',
        'description'   => __('Sidebar for the theme Delicious WP', 'delicious-wp'),
        'before_widget' => '<div id="%1$s" class="widget single-widget mb-80 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>'
    ]);
}



