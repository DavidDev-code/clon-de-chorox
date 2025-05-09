<?php

function cg_your_theme_scripts() {
	wp_enqueue_style( 'output', get_template_directory_uri() . '/style.css', array() );
}
add_action( 'wp_enqueue_scripts', 'cg_your_theme_scripts' );

// imagenes destacadas en post
function eureka_theme_setup(){
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme', 'eureka_theme_setup');

add_image_size('cuadrada_244', 244, 244, true);