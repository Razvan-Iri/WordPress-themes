<h1>Gecko Theme Options </h1>
<?php settings_errors(); ?>
<?php 

?>
<form method="post" action="options.php" class="gecko-general-form">
    <?php settings_fields('gecko-theme-support');?>
    <?php do_settings_sections('razvan_gecko_theme');?>
    <?php submit_button(); ?>
    
</form>



