<?php
/*
Plugin Name: SWA Custom Backend Slider
Description: Custom Backend Slider Poop
Plugin URI: http://google.com
Author URI: http://google.com
Author: Noone
Version 0.1
*/

register_activation_hook(__FILE__,'swa_backend_activate');
register_deactivation_hook(__FILE__,'swa_backend_deactivate');
add_action('admin_menu','swa_register_menu');
add_action('admin_enqueue_script','swa_bkacend_plugin_script');

function swa_backend_activate() {
add_option('swa_width', '300');
add_option('swa_height', '300');
add_option('swa_bgcolor','#fff');
add_option('swa_responsive', true);

// update_option('swa_width','300');
}
function swa_backend_deactivate() {
  delete_option('swa_width');
  delete_option('swa_height');
  delete_option('swa_bgcolor');
  delete_option('swa_responsive');
}

function swa_register_menu(){
  add_menu_page(
    'Slider JS',
    'Slider JS',
    'manage_options',
    __FILE__,
    'swa_options_page_content'
  );
}
function swa_options_page_content(){
  echo "<h2>Hello!</h2>";
}

