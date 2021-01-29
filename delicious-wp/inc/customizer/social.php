<?php
/**
 * Delicious Theme Customizer
 *
 * @package Delicious
 */

function delicious_customizer( $wp_customize ){


// facebook

$wp_customize->add_section(
  'sec_social', array(
    'title' 		=> __( 'Social Media Section', 'delicious-wp'),
    'description' 	=> __( 'Social Section', 'delicious-wp' )
  )
);


  // Pinterest
  $wp_customize->add_setting(
    'set_pinterest', array(
      'type' 				=> 'theme_mod',
      'default' 			=> '',
      'sanitize_callback' => 'esc_url_raw'
    )
  );

  $wp_customize->add_control(
    'set_pinterest', array(
      'label' 		=> __( 'Pinterest', 'delicious-wp' ),
      'description' 	=> __( 'Please add your Pinterest Here', 'delicious-wp' ),
      'section' 		=> 'sec_social',
      'type' 			=> 'url'
    )
  );

    // - Facebook Text Box
    $wp_customize->add_setting(
      'set_facebook', array(
        'type' 				=> 'theme_mod',
        'default' 			=> '',
        'sanitize_callback' => 'esc_url_raw'
      )
    );

    $wp_customize->add_control(
      'set_facebook', array(
        'label' 		=> __( 'Facebook', 'delicious-wp' ),
        'description' 	=> __( 'Please add your facebook page link here', 'delicious-wp' ),
        'section' 		=> 'sec_social',
        'type' 			=> 'url'
      )
    );

    // Field 2 - Twitter Text Box
    $wp_customize->add_setting(
      'set_twitter', array(
        'type' 				=> 'theme_mod',
        'default' 			=> '',
        'sanitize_callback' => 'esc_url_raw'
      )
    );

    $wp_customize->add_control(
      'set_twitter', array(
        'label' 		=> __( 'Twitter', 'delicious-wp' ),
        'description' 	=> __( 'Please add your twitter handle here', 'delicious-wp' ),
        'section' 		=> 'sec_social',
        'type' 			=> 'url'
      )
    );


    // Field 3 - Instagram
    $wp_customize->add_setting(
      'set_instagram', array(
        'type' 				=> 'theme_mod',
        'default' 			=> '',
        'sanitize_callback' => 'esc_url_raw'
      )
    );

    $wp_customize->add_control(
      'set_instagram', array(
        'label' 		=> __( 'Instagram', 'delicious-wp' ),
        'description' 	=> __( 'Please add your Instagram handle here', 'delicious-wp' ),
        'section' 		=> 'sec_social',
        'type' 			=> 'url'
      )
    );

    // Field 4 - Linkedin Text Box
    $wp_customize->add_setting(
      'set_linkedin', array(
        'type' 				=> 'theme_mod',
        'default' 			=> '',
        'sanitize_callback' => 'esc_url_raw'
      )
    );

    $wp_customize->add_control(
      'set_linkedin', array(
        'label' 		=> __( 'LinkedIn', 'delicious-wp' ),
        'description' 	=> __( 'Please add your LinkedIn page here', 'delicious-wp' ),
        'section' 		=> 'sec_social',
        'type' 			=> 'url'
      )
    );


    // Field 5 - Youtube Text Box
    $wp_customize->add_setting(
      'set_youtube', array(
        'type' 				=> 'theme_mod',
        'default' 			=> '',
        'sanitize_callback' => 'esc_url_raw'
      )
    );

    $wp_customize->add_control(
      'set_youtube', array(
        'label' 		=> __( 'Youtube', 'delicious-wp' ),
        'description' 	=> __( 'Please add your Youtube page here', 'delicious-wp' ),
        'section' 		=> 'sec_social',
        'type' 			=> 'url'
      )
    );

     // Field 5 - Youtube Text Box
     $wp_customize->add_setting(
      'set_youtube', array(
        'type' 				=> 'theme_mod',
        'default' 			=> '',
        'sanitize_callback' => 'esc_url_raw'
      )
    );

    $wp_customize->add_control(
      'set_youtube', array(
        'label' 		=> __( 'Youtube', 'delicious-wp' ),
        'description' 	=> __( 'Please add your Youtube page here', 'delicious-wp' ),
        'section' 		=> 'sec_social',
        'type' 			=> 'url'
      )
    );



	// Copyright Section

	$wp_customize->add_section(
		'sec_copyright', array(
			'title' 		=> __( 'Copyright Settings', 'delicious-wp'),
			'description' 	=> __( 'Copyright Section', 'delicious-wp' )
		)
	);

			// Field 1 - Copyright Text Box
			$wp_customize->add_setting(
				'set_copyright', array(
					'type' 				=> 'theme_mod',
					'default' 			=> 'Copyright ©2021 All rights reserved | Theme By 95media',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_copyright', array(
					'label' 		=> __( 'Copyright', 'delicious-wp' ),
					'description' 	=> __( 'Please, add your copyright information here', 'delicious-wp' ),
					'section' 		=> 'sec_copyright',
					'type' 			=> 'text'
				)
			);

}
add_action( 'customize_register', 'delicious_customizer' );
