<h1>Gecko Sidebar Options </h1>
<?php settings_errors(); ?>
<?php
$geckoLogo = esc_attr(get_option('gecko_logo'));
$geckoTitle = esc_attr(get_option('gecko_title'));
$geckoDescription = esc_attr(get_option('gecko_subheading'));



?>
<br>


<form method="post" action="options.php" class="gecko-general-form">
    <?php settings_fields('gecko-settings-group');?>
    <?php do_settings_sections('razvan_gecko');?>
    <?php submit_button('Save Changes' , 'primary', 'btnSubmit'); ?>

</form>

<p class="sidebar-preview-text">SideBar Preview</p>
<div class="gecko-sidebar-preview">

    <div class="gecko-sidebar">
        <div class="logo-container">
            <div class="logo-image">
                <img src="<?php print $geckoLogo ?>" />
            </div>
        </div>
       <h1 class="gecko-sidebar-title"><?php print $geckoTitle ?></h1>
       <h1 class="gecko-sidebar-description"><?php print $geckoDescription ?></h1>

</div>
</div>
