<?php
   add_action( 'wp_enqueue_scripts', 'website_scripts' );

   function website_scripts() {    
    
    global $wp_scripts;
    global $wp_styles;
    
    wp_enqueue_style('atattransport-style-css', get_template_directory_uri() .'/css/style.css');
    wp_enqueue_style('atattransport-owl-css', get_template_directory_uri() .'/owl-carousel/owl.carousel.css');
   
    
    wp_enqueue_script('atattransport-agency-js', get_template_directory_uri().'/js/agency.js','','','true'); 
    wp_enqueue_script('atattransport-easing-js', get_template_directory_uri().'/js/jquery.easing.min.js','','','true'); 
    wp_enqueue_script('atattransport-classie-js', get_template_directory_uri().'/js/classie.js','','','true'); 
    wp_enqueue_script('atattransport-cbp-js-js', get_template_directory_uri().'/js/cbpAnimatedHeader.js','','','true'); 
   

}

add_action('wp_footer','add_owl_carousel_footer');

function add_owl_carousel_footer() {
?>    


<script src="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl.carousel.js"></script>
<script>
    $(document).ready(function() {
      $("#owl-brand").owlCarousel({
        autoPlay: 3000,
        items : 6,
		itemsDesktop : [1199,4],
        itemsDesktopSmall : [979,2],
		navigation: true,
		navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
		pagination: false
      });
    });
    </script>
<?php
}
