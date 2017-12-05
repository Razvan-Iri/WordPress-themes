<?php
/*
_______________________
Admin Settings - Admin Page
______________________
*/


$options = get_option( 'post_formats' );
$formats = array( 'aside', 'gallery', 'video');
$output = array();
foreach ( $formats as $format ){
	$output[] = ( @$options[$format] == 1 ? $format : '' );
}
if( !empty( $options ) ){
	add_theme_support( 'post-formats', $output );
}
$customHeader = get_option( 'custom_header' );
if(@$customHeader == 1) {
add_theme_support( 'custom-header' );
}

$customBackground = get_option( 'custom_background' );
if(@$customBackground == 1) {
add_theme_support( 'custom-background' );
}



/*
_______________________
Header Section - 
______________________
*/

/*Menu Section*/
function gecko_register_nav_menu(){
 register_nav_menus( array(
    'secondary-menu' => esc_html__( 'Secondary Menu', 'Gecko-secondary-meny' ),
) );
}
add_action('after_setup_theme', 'gecko_register_nav_menu');
/*Custom Logo Section - Customizer* - We specify the exact dimmensions of the custom logo */    

function mytheme_setup() {
 add_theme_support( 'custom-logo', array(
   'height'      => 130,
   'width'       => 190,
   'flex-width' => true,
) );
}

add_action('after_setup_theme', 'mytheme_setup');


/*Added several image sizes: i.e for the Sidebar logo*/