<?php

add_action( 'wp_enqueue_scripts', 'timber_style' );
add_action( 'wp_enqueue_scripts', 'timber_scripts' );

function timber_style() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	//wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

//add_action( 'admin_enqueue_scripts', 'my_scripts_method' );
//add_action( 'login_enqueue_scripts', 'my_scripts_method' );

function timber_scripts(){
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');

    // wp_enqueue_script( 'script', get_template_directory_uri() . 'assets/js/script.js');
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', null, true);
}