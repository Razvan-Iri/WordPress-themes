<h1>Gecko Contact Form </h1>
<?php settings_errors(); ?>
<?php

?>
<form method="post" action="options.php" class="gecko-general-form">
    <?php settings_fields('gecko-contact-options');?>
    <?php do_settings_sections('razvan_gecko_theme_contact');?>
    <?php submit_button(); ?>

</form>
