<?php

add_action('init','register_main_menu');
add_action( 'wp_enqueue_scripts', 'website_scripts' );

function register_main_menu() {
    register_nav_menu("header-menu",'Header Menu');
    register_nav_menu("footer-menu",'Footer Menu');
}

function website_scripts() {    
    global $wp_scripts;
    global $wp_styles;
    
    wp_enqueue_style('lightslider-css', get_template_directory_uri() .'/include/lightslider/css/lightslider.min.css');
    
    wp_enqueue_script('lightslider-js', get_template_directory_uri() 
    .'/include/lightslider/js/lightslider.min.js','','','true');
    
}

add_theme_support( 'post-thumbnails' );

add_image_size( 'homepage-slider', 1920 , 500, $crop = true );


/*sidebar*/

add_action('widgets_init','register_website_sidebars');

function register_website_sidebars(){
        register_sidebar( array (
            'name'              => __( 'Post Sidebar','our_theme') ,
            'id'                => 'post_sidebar',
            'description'       => 'My first sidebar - Only for posts',
            'class'             => 'post_sidebar',
            'before_widget'     => '<div>',
            'after_widget'      => '</div>',
            'before_title'      => '<h2 class="widget_title">',
            'after_title'       => '</h2>',
            
        ));
}

add_action('init','swiss_custom_post_types');

function swiss_custom_post_types() {
  register_post_type(
    'swiss_team',
    array(
      'labels' =>  array(
      'name' => 'Team Members',
      'singular_name' => 'Team Member'
    ),
      'public' => true,
      'taxonomies' => array('category'),
      'has_archive' => true,
      'menu_icon' => 'dashicons-smiley',
      'menu_position' => 6,
    )
   );
}