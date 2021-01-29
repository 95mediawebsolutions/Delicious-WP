<?php
/**
 * Delicious Theme Customizer
 *
 * @package Delicious
 */



function delicious_misc_customizer( $wp_customize ){




$wp_customize->add_section(
  'sec_header', array(
    'title' 		=> __( 'Delicous Misc Section', 'delicious-wp'),
    'description' 	=> __( 'header images for every pages', 'delicious-wp' )
  )
);



 // Preloader
 $wp_customize->add_setting(
    'show_preloader', array(
        'type' 				=> 'theme_mod',
        'default' 			=> '',
        'sanitize_callback' => 'delicious_sanitize_checkbox' 
    )
);

$wp_customize->add_control(
    'show_preloader', array(
        'label' 	=> __( 'Show Preloader', 'delicious-wp' ),
        'section' 	=> 'sec_header',
        'type' 		=> 'checkbox'			
    )
);


$wp_customize->add_setting(
    'set_search_icon', array(
        'type' 				=> 'theme_mod',
        'default' 			=> '',
        'sanitize_callback' => 'delicious_sanitize_checkbox'
    )
);

$wp_customize->add_control(
    'set_search_icon', array(
        'label' 	=> __( 'Show Search Icon', 'delicious-wp' ),
        'section' 	=> 'sec_header',
        'type' 		=> 'checkbox',
    )
);



        // Image Preloader
        $wp_customize->add_setting(
            'delicious_preloader', array(
                'type' 				=> 'theme_mod',
                'sanitize_callback'  => 'delicious_sanitize_image'
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'delicious_preloader',
                array(
                    'label'      => __( 'Upload your preloader', 'delicious-wp' ),
                    'section'    => 'sec_header',
                )
            )
        );

 


// Blog Banner background Iamge
$wp_customize->add_setting(
    'delicious_blog_banner', array(
        'type' 				=> 'theme_mod',
        'sanitize_callback'  => 'delicious_sanitize_image'
    )
);

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'delicious_blog_banner',
        array(
            'label'      => __( 'Upload Blog Page Banner', 'delicious-wp' ),
            'section'    => 'sec_header',
        )
    )
);

	

}
add_action( 'customize_register', 'delicious_misc_customizer' );

function delicious_sanitize_checkbox( $checked ){
    //returns true if checkbox is checked
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}


function delicious_sanitize_image( $input, $setting ) {
	return esc_url_raw( delicious_validate_image( $input, $setting->default ) );
}

 
function delicious_validate_image( $input, $default = '' ) {
	// Array of valid image file types
	// The array includes image mime types
	// that are included in wp_get_mime_types()
	$mimes = array(
		'jpg|jpeg|jpe' => 'image/jpeg',
		'gif'          => 'image/gif',
		'png'          => 'image/png',
		'bmp'          => 'image/bmp',
		'tif|tiff'     => 'image/tiff',
		'ico'          => 'image/x-icon'
	);
	// Return an array with file extension
	// and mime_type
	$file = wp_check_filetype( $input, $mimes );
	// If $input has a valid mime_type,
	// return it; otherwise, return
	// the default.
	return ( $file['ext'] ? $input : $default );
}


