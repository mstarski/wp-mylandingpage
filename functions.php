<?php

function add_external_files() {
	wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true);
}

add_action( 'wp_enqueue_scripts', 'add_external_files' );


function mlp_customize_register($wp_customize) {
	// Add section Header
	$wp_customize->add_section('section1', array(
		'title' => __('Section 1', 'mylandingpage'),
		'description' => 'MLP Section 1',
		'priority' => 230	
	));

	//------- HEADER ------------
	$wp_customize->add_setting('header_content', array(
		'default' => 'Think outside of the box',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('header_content', array(
		'label' => __('Header', 'mylandingpage'),
		'section' => 'section1',
		'priority' => 1
	));

	//------- END HEADER -------------


	//------- HEADER CTA -------------
	$wp_customize->add_setting('header_cta_content', array(
		'default' => 'Read More',
		'type' => 'theme_mod'
	));

	$wp_customize->add_control('header_cta_content', array(
		'label' => __('Header Cta', 'mylandingpage'),
		'section' => 'section1',
		'priority' => 2 
	));

	//------- END HEADER CTA ---------
}
add_action('customize_register', 'mlp_customize_register');
