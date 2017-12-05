<?php
/*
_______________________
Custom Post Types
______________________
*/

/* Contact Custom Post TYPE*/

$contact = get_option( 'activate_contact' );
if(@$contact == 1) {

    add_action( 'init', 'gecko_contact_cpt');

    // Add the custom columns to the Contact form post type:
    add_filter( 'manage_gecko-contact-form_posts_columns','gecko_configure_form_columns');
    add_action( 'manage_gecko-contact-form_posts_custom_column', 'gecko_contact_custom_column', 10, 2);

    //Action to trigger meta box

    add_action( 'add_meta_boxes', 'gecko_contact_form_add_meta_box');
    add_action( 'save_post', 'gecko_save_email_address');
}

function gecko_contact_cpt() {
  $labels = array(
    'name'                 => 'Messages',
    'singular_name'        => 'Message',
    'menu_name'            => 'Messages',
    'name_admin_bar'       => 'Message',
    );
    $args = array(
    'labels'               => $labels,
    'show_ui'              => true,
    'show_in_menu'         => true,
    'capability_type'      => 'post',
    'hierarchical'         => false,
    'menu_position'        => 26,
    'menu_icon'            => 'dashicons-email',
    'supports'             => array('title', 'editor' , 'author')
    );

    register_post_type( 'gecko-contact-form', $args);
}

function gecko_configure_form_columns($columns){
          $newColumns = array();
          $newColumns['title']    = 'Full Name';
          $newColumns['message']  = 'Feedback Message';
          $newColumns['email']    = 'Email' ;
          $newColumns['date']     = 'Date';
           return $newColumns;
}
//display the columns in the backend

function gecko_contact_custom_column($column, $post_id){
        switch($column){
              case'message' :
                  echo get_the_excerpt();
                  break;
              case'email'   :
                  $email = get_post_meta( $post_id,'_contact_email_key', true );
                  echo '<a href="mailto:'.$email.'">'.$email.'</a>';
                  break;
        }
}

/*Contact MetaBoxes */

function gecko_contact_form_add_meta_box(){
  add_meta_box( 'contact_email', 'User Email' , 'gecko_contact_email_callback' , "gecko-contact-form", 'side' );
}

function gecko_contact_email_callback($post){
  wp_nonce_field( 'gecko_save_email_address', 'gecko_contact_email_meta_box');
  $value = get_post_meta( $post->ID,'_contact_email_key', true );
  echo '<label for="gecko_contact_email_field">Email Address: </label>';
  echo '<input type="email" id="gecko_contact_email_field" name="gecko_contact_email_field" value="'.esc_attr($value).'" size="25"/>';
}

// Snitize and secure the nonce function
function gecko_save_email_address($post_id){
  //check if the metabox exists
  if(!isset($_POST['gecko_contact_email_meta_box'])){
    return;
  }
  if(!wp_verify_nonce( $_POST['gecko_contact_email_meta_box'], 'gecko_save_email_address')){
    return;
  }
  //Stop autosave "saving" the email Address
  if(defined('DOING_AUTOSAVE')&& DOING_AUTOSAVE){
    return;
  }
  //Verify user permissions
  if(!current_user_can( 'edit_post', $post_id )) {
    return;
  }
  //Check if the email field is passed in order to trigger the
    if(!isset($_POST['gecko_contact_email_field'])){
        return;
  }
  $email_address = sanitize_text_field($_POST['gecko_contact_email_field']);
  update_post_meta($post_id, '_contact_email_key', $email_address );

}
