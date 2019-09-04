<?php

function color_header($wp_customize){

  $wp_customize->add_setting( 'my-wordpress-theme_headertext_color' , array(
		'default'		=> '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_section( 'colors' , array(
		'title'      => __( 'Colori', 'my-wordpress-theme' ),
		'priority'   => 30
	) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
  	'label'        => __( 'Colore testo descrizione header', 'my-wordpress-theme' ),
  	'section'    => 'colors',
  	'settings'   => 'my-wordpress-theme_headertext_color'
  ) ) );
}

add_action('customize_register', 'color_header');

 ?>
