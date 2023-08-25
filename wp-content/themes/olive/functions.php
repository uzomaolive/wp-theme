<?php 

if ( ! isset( $content_width ) ) {
	$content_width = 800; /* pixels */
}

function olivercakesite_setup() {

    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'olivercake', get_template_directory() . '/languages' );

    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );

    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );

    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
        'secondary' => __( 'Secondary Menu', 'myfirsttheme' ),
    ) );

    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}

add_theme_support( 'custom-header' );



function olivercakesite_theme_support(){
// Adds dynamic title tag support
     add_theme_support('title-tag');
}

add_action('after_theme_setup','olivercakesite_theme_support');


function olivercakesite_menus(){
    $locations = array(
        'Primary' => "Desktop Left Sidebar",
        'footer' => "Footer Menu Items"

    );

    register_nav_menus($locations);

}

add_action('init', 'olivercakesite_menus');

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