 <div class="header-container container-fluid no-padding">
        <div class="row no-margin">
            <div class="col-xl-12 no-padding">
                <header class="header-container background-image text-center" style="background-image: url(<?php header_image()?>);">
                    <div class="container header-content table no-margin">
                        <div class="table-cell">   
                            <div>
                                <div class="logo-container">
                                    <div class="logo-image">
                                            
                                            <?php
// Display the Custom Logo
the_custom_logo();


?>
                                    </div>
                                    </div>
                                </div>
                            <h1 class="site-title"><?php bloginfo('name'); ?></h1>
                            <h2 class="site-desscription"><?php bloginfo('description'); ?></h2>
                        </div><!--table-cell-->
                    </div><!--.header-content-->
                      <nav class="navbar navbar-expand-sm no-padding no-margin">
                         <div class="container-fluid no-padding">   
                           <button class="custom-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
                            <span class="navbar-toggler-icon"></span>
                            </button>
 
                        <div class="collapse navbar-collapse" id="navbar-content">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'secondary-menu', // Defined when registering the menu
                                'menu_id'        => 'secondaryMenu',
                                'container'      => false,
                                'depth'          => 2,
                                'menu_class'     => 'navbar-nav ml-auto',
                                'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
                                'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
                            ) );
                            ?>
                        </div>
                      </div>
                    </nav>
                </header>
            </div>
     </div>
</div>