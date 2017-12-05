<?php 
get_header();
?>

<div class="container single_post">

<div class="row">
<?php
    if(in_category(4)) {
        
        echo '<div class="col-md-9">';
        }  else {
        echo '<div class="col-md-12">';
    }
    
    
    ?>
   
    
<?php if(have_posts()) while (have_posts()) : the_post(); ?>



<h1><?php the_title() ?></h1>
<p><?php the_excerpt() ?></p>
<p><?php the_content() ?></p>





<?php endwhile; ?>
   
    </div>
          <?php 
                if(in_category(4)){
                    get_sidebar();
                    
                        
                    
            }?>
            
    </div>
</div>
<?php 
get_footer();
?>


