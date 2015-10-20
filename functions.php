<?php

wp_enqueue_style( 'style', get_stylesheet_uri() );


function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

// walker class to change the class of submenus ("sub-menu" --> "dropdown-menu")

class Submenu_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
  }
}

/*
function themename_custom_header_setup() {
    $args = array(
        'default-image'      =&gt; get_template_directory_uri() . 'img/default-image.jpg',
        'default-text-color' =&gt; '000',
        'width'              =&gt; 1000,
        'height'             =&gt; 250,
        'flex-width'         =&gt; true,
        'flex-height'        =&gt; true,
    )
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );
*/


?>
