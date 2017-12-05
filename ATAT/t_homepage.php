<?php

/*
Template Name: Homepage
*/

get_header();
get_template_part('carousel','homepage');
?>

<div class="container">
    <?php 
    
    
    $args = array (
        'post_type' => 'swiss_team',
        'numberposts' => -1,
        
    
    );
    
    $team_members = new WP_Query($args);
    
    
    ?>
    
    <?php if($team_members->have_posts()) : ?>
    
    
    <?php  while($team_members->have_posts()) : $team_members->the_post();?>
    
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <h2><?php the_content(); ?></h2>
    

    

    
    <?php endwhile; ?>
    <?php endif; ?>
    
    <?php wp_reset_postdata();  ?>
    
</div>
 


<?php 
get_footer();
?>


