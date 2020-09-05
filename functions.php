<?php
// Register Nav Walker Class
require_once('class-wp-bootstrap-navwalker.php');

// Theme Support
function wpb_theme_setup(){
    // Nav menus
    register_nav_menus( array(
        'primary' => __('Primary Menu')
    ));
}

add_theme_support( 'post-thumbnails' );


add_action('after_setup_theme', 'wpb_theme_setup');

// Excerpt length control

function set_excerpt_length(){
    return 40;

}

add_filter('excerpt_length', 'set_excerpt_length');
?>