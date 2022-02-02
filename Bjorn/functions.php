<?php

function bjorn_theme_support(){
    // Tilføjer Dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');

}
add_action('after_setup_theme','bjorn_theme_support');


register_nav_menus(

    array(
        'top-menu' =>__('Top Menu', 'theme'),
    )
 );

 function extra_setup() {
 register_nav_menu ('primary mobile', __( 'Navigation Mobile', 'twentythirteen' ));
 }
 add_action( 'after_setup_theme', 'extra_setup' );

//Responsiv menu KAN BRUGES TIL FORBEDRING AF HJEMMESIDE;
// function twentysixteen_child_responsive_menu() {
//   register_nav_menu('primary-res-navigation', __
//                    ('Tutorial Responsive Navigation',
//                    'twentysixteen_child' ));

//   } add_action('after_setup_theme', 'twentysixteen_child_responsive_menu');









function bjorn_register_styles(){

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('bjorn-style', get_template_directory_uri(). "/style.css", array('bjorn-bootstrap'), $version, 'all');
    wp_enqueue_style('bjorn-ydelser', get_template_directory_uri(). "/ydelser.css", array('bjorn-bootstrap'), $version, 'all');
    wp_enqueue_style('bjorn-om-os', get_template_directory_uri(). "/Om-os.css", array('bjorn-bootstrap'), $version, 'all');
    wp_enqueue_style('bjorn-bootstrap', get_template_directory_uri(). "https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css", array(), '4.6.1', 'all');
    wp_enqueue_style('bjorn-Unicorns', get_template_directory_uri(). "https://unicons.iconscout.com/release/v4.0.0/css/line.css", array(), '1.0', 'all');

}
    add_action('wp_enqueue_scripts','bjorn_register_styles');



function bjorn_register_scripts(){

    wp_enqueue_script('bjorn-jquery', 'LINK TIL JQUERRY', array(), '4.1',true);
    wp_enqueue_script('bjorn-popper', 'LINK TIL POPPER', array(), '4.1',true);
    wp_enqueue_script('bjorn-bootstrap', 'LINK TIL BOOTSTRAP', array(), '4.1',true);
    wp_enqueue_script('bjorn-main', get_template_directory_uri(). "/assets/js/main.js", array(), '1.0' ,true);

    }
    add_action('wp_enqueue_scripts','bjorn_register_scripts');



?>
