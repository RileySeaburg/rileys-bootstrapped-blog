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

//  Widget Locations
function wpb_init_widgets($id) {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar', 
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

    register_sidebar(array(
        'name' => 'Box1',
        'id' => 'box1', 
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}

add_action( 'widgets_init', 'wpb_init_widgets');

add_filter('excerpt_length', 'set_excerpt_length');

// Customizer File
require get_template_directory(). '/inc/customizer.php';
?>