<div class="col-md-3">
                <h1>Sidebar</h1>
                <?php if(!dynamic_sidebar('Post Sidebar')) : ?>
                
                    <div>
                        <?php get_search_form(); ?>
                    </div>
                
                <?php endif; ?>
    </div>