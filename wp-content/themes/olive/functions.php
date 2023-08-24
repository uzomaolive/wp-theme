<?php 

function olivercakesite_theme_support(){
// Adds dynamic title tag support
add_theme_support('title-tag');
}

add_action('after_theme_setup','olivercakesite_theme_support');


function olivercakesite_styles(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('olivercake-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('olivercake-fontawesome', "https://kit.fontawesome.com/0e6ddc5030.js", array(), '1.0', 'all');


}

add_action( 'wp_enqueue_scripts', 'olivercakesite_styles');


function olivercakesite_scripts(){

   wp_enqueue_script('olivercakesite_main',get_template_directory_uri()."/assets/js/main.js", array(), '1.0',true);
}

add_action( 'wp_enqueue_scripts', 'olivercakesite_scripts');
?>