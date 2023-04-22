<?php
add_action( 'wp_enqueue_scripts', 'child' );

function child(){
    wp_enqueue_style( 'child-style', get_stylesheet_uri() );  // основной файл стилей
    wp_enqueue_style( 'add-style', get_template_directory_uri() . '/assets/styles/main.min.css' );
    wp_enqueue_script( 'child-style', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true );
};

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args){
    if ($args -> menu === 'Main'){
        $atts['class'] = 'header__nav-item';

        if ($item -> current){
            $atts['class'] .= ' header__nav-item-active';
        };
    };
    return $atts;

}
?>
