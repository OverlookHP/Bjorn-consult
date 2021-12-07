<?php

function bjorn_theme_support(){
    // Tilføjer Dynamic title tag support
    add_theme_support('title-tag'); 
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

}
add_action('after_setup_theme','bjorn_theme_support');


function bjorn_menus(){

    $locations = array(
        'primary' => "Desktop Primary Top Menu",
        'footer' => "Footer Menu"
    );
    register_nav_menus($locations);
}

add_action('init','bjorn_menus');



// Mangler links
function bjorn_register_styles(){

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('bjorn-style', get_template_directory_uri(). "/style.css", array('bjorn-bootstrap'), $version, 'all');
    wp_enqueue_style('bjorn-bootstrap', get_template_directory_uri(). "https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css", array(), '4.6.1', 'all');
    wp_enqueue_style('bjorn-fontawesome', get_template_directory_uri(). "LINK HER TIL FONTAWESOME", array(), '1.0', 'all');

}
    add_action('wp_enqueue_scripts','bjorn_register_styles');


// Mangler links
function bjorn_register_scripts(){

    wp_enqueue_script('bjorn-jquery', 'LINK TIL JQUERRY', array(), '4.1',true);
    wp_enqueue_script('bjorn-popper', 'LINK TIL POPPER', array(), '4.1',true);
    wp_enqueue_script('bjorn-bootstrap', 'LINK TIL BOOTSTRAP', array(), '4.1',true);
    wp_enqueue_script('bjorn-main', get_template_directory_uri(). "/assets/js/main.js", array(), '1.0' ,true);

    }
    add_action('wp_enqueue_scripts','bjorn_register_scripts');

?>