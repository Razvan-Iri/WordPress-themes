<?php
/*
_______________________
Admin Enqueue
______________________
*/


function gecko_load_admin_scripts($hook){

    if('toplevel_page_razvan_gecko' != $hook ){
        return;
    }

    wp_register_style('gecko_admin_css', get_template_directory_uri().'/css/gecko-admin.css',array(), '0.1', 'all');
    wp_enqueue_style('gecko_admin_css');

    wp_enqueue_media();

    wp_register_script('gecko_admin_script', get_template_directory_uri(). '/js/gecko-admin.js', array('jquery'), '0.1', true );
    wp_enqueue_script('gecko_admin_script');
    
    wp_register_script('gecko_header_script', get_template_directory_uri(). '/js/gecko-header.js', array('jquery'), '0.1', true );
    wp_enqueue_script('gecko_header_script');
 }
add_action('admin_enqueue_scripts', 'gecko_load_admin_scripts');

/*
_______________________
Frontend Enqueue
______________________
*/
function gecko_load_scripts(){
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css',array(), '4.0.0', 'all');
    wp_enqueue_style('gecko', get_template_directory_uri().'/css/gecko.css',array(), '1.0.0', 'all');
     wp_register_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'fontawesome');
    
    wp_deregister_script('jquery');
    wp_register_script( 'jquery', get_template_directory_uri().'/js/jquery-3.2.1.min', false, '3.2.1', true);
    wp_enqueue_script('jquery' );
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', array(), '1.13.0', true); 
    wp_enqueue_script('bootstrap', get_template_directory_uri(). '/js/bootstrap.min.js', array('jquery'), '4.0.0', true );
    
    
    
}
add_action('wp_enqueue_scripts','gecko_load_scripts');

