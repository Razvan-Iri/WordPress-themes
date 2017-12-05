 <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        
       <?php   

  $args = array(
   'category_name' => 'homepage-slider',
    'posts_per_page' => 5,  
       
   );
   
          $first = true;
          
 $homepage_post_list=new WP_Query($args);
 
    if($homepage_post_list -> have_posts()){
        while($homepage_post_list ->have_posts()){
            $homepage_post_list->the_post();
            
          if($first) {
              
              echo '<div class="item active">';
              $first = false;
              
          }  else {
              echo '<div class="item">';
              
          }
            
 the_post_thumbnail('homepage-slider');   
    
echo '<div class="container"><div class="carousel-caption">';
echo  '<h1>'.get_the_title().'</h1>';
            
echo '<p>'.get_the_excerpt().'</p>';
            
echo '<p><a class="btn btn-lg btn-primary" href="'.get_the_permalink().'" role="button">'.get_the_title().'</a></p>';
              
echo '</div></div></div>';          
       
        
        }
        
        wp_reset_postdata();
    
    }else {
    echo 'Nu exista articole';
    }
     ?>
        
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
    







