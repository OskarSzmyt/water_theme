<?php


function os_regStyles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('os_custom', get_template_directory_uri() . "/style.css",array(),$version,'all');
    wp_enqueue_style('bootstrap',"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" ,array(),"4.3.1","all");
    wp_enqueue_style('fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css",array(),"6.5.1","all");
}

add_action('wp_enqueue_scripts','os_regStyles');

function os_regScripts(){
    
    wp_enqueue_script('os_custom_scripts', get_template_directory_uri()."/assets/js/main.js",array(),'1.0.0','all');


}
add_action('wp_enqueue_script','os_regScripts');

function os_register_menus(){
    $locations= array(
        'primary' => "Desktop primary menu",
        'footer' => "Desktop footer menu"
    );
    register_nav_menus($locations);
}
add_action('init', 'os_register_menus');

function os_theme_support() {
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'os_theme_support');
?>

