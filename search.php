<?php get_header(); ?>


<div class="content-wrap">
    <div class="content container clearfix">
        <div class="row">
            <div class="page-content span6">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>	
                  <?php the_content(); ?>
				  <?php endwhile; else: ?>
				  <p><?php _e('Nic nie znaleziono.');?></p>
				  <?php endif; ?>
                
            </div>
            
<!-- Content End -->
            
            <div class="sidebar-widgets span3">
            	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("sidebar_1")): ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>