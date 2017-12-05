<?php

/*
_______________________
Admin Settings - Admin Page
______________________
*/
function gecko_add_admin_page(){

//Primary Admin Page

add_menu_page( 'GekcoTravel Theme Options','GekcoTravel', 'manage_options', 'razvan_gecko', 'gecko_travel_create_page', get_template_directory_uri().'/images/gecko_admin.png', 200 );

//Secondary Admin pages

add_submenu_page( 'razvan_gecko', 'GekcoTravel Sidebar Options', 'Sidebar' , 'manage_options',  'razvan_gecko' , 'gecko_travel_create_page');

add_submenu_page('razvan_gecko','Gecko Theme Options' , 'Contact Form',  'manage_options','razvan_gecko_theme_contact', 'gecko_contact_form_page');

add_submenu_page('razvan_gecko','Gecko Contact Form' , 'Theme Options',  'manage_options','razvan_gecko_theme', 'gecko_theme_settings_page');
}

add_action('admin_menu','gecko_add_admin_page');
// Enable Custom settings
add_action('admin_init', 'gecko_custom_settings');

function gecko_custom_settings(){

    //Sidebar Options
    register_setting('gecko-settings-group','gecko_logo');
    register_setting('gecko-settings-group','gecko_title');
    register_setting('gecko-settings-group','gecko_subheading');
    register_setting('gecko-settings-group','gecko_facebook');
    register_setting('gecko-settings-group','gecko_twitter');
    register_setting('gecko-settings-group','gecko_youtube');

    add_settings_section('gecko-sidebar-options','Sidebar Options', 'gecko_sidebar_options', 'razvan_gecko');

    add_settings_field('sidebar-logo','Logo Image','gecko_sidebar_logo', 'razvan_gecko', 'gecko-sidebar-options' );
    add_settings_field('sidebar-name','Site Title','gecko_sidebar_name', 'razvan_gecko', 'gecko-sidebar-options' );
    add_settings_field('sidebar-description','Short Description','gecko_sidebar_subheading', 'razvan_gecko', 'gecko-sidebar-options' );
    add_settings_field('sidebar-facebook' , 'Facebook Account' , 'gecko_sidebar_facebook', 'razvan_gecko' , 'gecko-sidebar-options' );
    add_settings_field('sidebar-twitter' , 'Twitter Account' , 'gecko_sidebar_twitter', 'razvan_gecko' , 'gecko-sidebar-options' );
    add_settings_field('sidebar-youtube' , 'Youtube Account' , 'gecko_sidebar_youtube', 'razvan_gecko' , 'gecko-sidebar-options' );
    //Theme Options !!



    //Post Format Options
    register_setting('gecko-theme-support', 'post_formats');
    //Custom Header
    register_setting('gecko-theme-support', 'custom_header');
    //Custom Background
    register_setting('gecko-theme-support', 'custom_background');


    add_settings_section('gecko-theme-options', 'Theme Settings', 'gecko_theme_options' , 'razvan_gecko_theme');
    add_settings_field('post-formats', 'Post Formats' , 'gecko_post_formats', 'razvan_gecko_theme',  'gecko-theme-options');
    add_settings_field( 'custom-header', 'Custom Header', 'gecko_custom_header', 'razvan_gecko_theme',  'gecko-theme-options');
    add_settings_field( 'custom_background', 'Custom Background', 'gecko_custom_background', 'razvan_gecko_theme',  'gecko-theme-options');


//Contact Form Options
register_setting( 'gecko-contact-options', 'activate_contact');
add_settings_section( 'gecko-contact-section', 'Contact Form', 'gecko_contact_section', 'razvan_gecko_theme_contact' );
add_settings_field( 'activate-contact-form', 'Activate Contact Form', 'gecko_activate_form', 'razvan_gecko_theme_contact', 'gecko-contact-section');

}
//Theme Settings

function gecko_theme_options(){
    echo 'Manage Theme Options ';
}

function gecko_contact_section(){
    echo 'Activate and Deactivate the buil-in Contact Form';
}
//used to enable Custom Header change
function gecko_activate_form() {
	$options = get_option( 'activate_contact' );
	$checked = ( @$options == 1 ? 'checked' : '' );
  echo '<label><input type="checkbox" id="activate_contact" name="activate_contact" value="1" '.$checked.' /></label>';
}

//Used to enable wordpress default post types

function gecko_post_formats() {
	$options = get_option( 'post_formats' );
	$formats = array( 'aside', 'gallery', 'video');
	$output = '';
	foreach ( $formats as $format ){
		$checked = ( @$options[$format] == 1 ? 'checked' : '' );
		$output .= '<label><input type="checkbox" id="'.$format.'" name="post_formats['.$format.']" value="1" '.$checked.' /> '.$format.'</label><br>';
	}
	echo $output;
}

//used to enable Custom Header in customizer
function gecko_custom_header() {
	$options = get_option( 'custom_header' );
	$checked = ( @$options == 1 ? 'checked' : '' );
  echo '<label><input type="checkbox" id="custom_header" name="custom_header" value="1" '.$checked.' />Activate Custom Header</label>';
}
//used to change background in customizer
function gecko_custom_background() {
	$options = get_option( 'custom_background' );
	$checked = ( @$options == 1 ? 'checked' : '' );
  echo '<label><input type="checkbox" id="custom_background" name="custom_background" value="1" '.$checked.' />Activate Custom Background</label>';
}


//Section for adding Sidebar fields

function gecko_sidebar_options(){
    echo 'Manage Sidebar Options ';
}

function gecko_sidebar_logo(){
    $logo = esc_attr(get_option('gecko_logo'));
    if (empty($logo)){

      echo '<input type="button" class="button button-secondary" value="Upload Logo Image" id="upload-button" /><input type="hidden" id="logo-image" name="gecko_logo" value=""  />';

    } else {
        echo '<input type="button" class="button button-secondary" value="Replace Logo Image" id="upload-button" /><input type="hidden" id="logo-image" name="gecko_logo" value="'.$logo.'"  /><input type ="button" class="button button-secondary" value="Remove" id="remove-logo">';
    }

}

function gecko_sidebar_name(){
    $geckoTitle = esc_attr(get_option('gecko_title'));
    echo '<Input type="text" name="gecko_title" value="'.$geckoTitle.'" placeholder="Site Title" /><p class="description">Input the name of the Site to be displayed in the SideBar</p>';
}
function gecko_sidebar_subheading(){
    $geckoDescription = esc_attr(get_option('gecko_subheading'));
    echo '<Input type="text" name="gecko_subheading" value="'. $geckoDescription.'" placeholder="Short Description" /><p class="description">Input short description</p>';
}



//*Social Media Fields*
function gecko_sidebar_facebook(){
    $geckoFacebook = esc_attr(get_option('gecko_facebook'));
    echo '<Input type="text" name="gecko_facebook" value="'. $geckoFacebook.'" placeholder="Facebook Account" /><p class="description">Input Facebook username</p>';
}

function gecko_sidebar_twitter(){
    $geckoTwitter = esc_attr(get_option('gecko_twitter'));
    echo '<Input type="text" name="gecko_twitter" value="'. $geckoTwitter.'" placeholder="Twitter Account" /><p class="description">Input Twitter username</p>';
}

function gecko_sidebar_youtube(){
    $geckoYoutube = esc_attr(get_option('gecko_youtube'));
    echo '<Input type="text" name="gecko_youtube" value="'. $geckoYoutube.'" placeholder="Youtube Account" /><p class="description">Input Youtube Account</p>';
}
//Theme Submenu functions

function gecko_travel_create_page(){
    require_once(get_template_directory().'/inc/admin-templates/gecko-admin.php');
}


function gecko_theme_settings_page(){
    require_once(get_template_directory().'/inc/admin-templates/gecko-theme-settings.php');
}
function gecko_contact_form_page(){
    require_once(get_template_directory().'/inc/admin-templates/gecko-contact-form.php');
}
