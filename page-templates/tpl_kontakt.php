<?php
/*
Template Name: Kontakt
*/
?>

<?php get_header(); ?>


<div class="content-wrap" id="PortfolioMainBody">
    <div class="content container clearfix">
        <div class="row">
            <div class="page-content span6" id="PortfolioMainBody" oncontextmenu="window.event.returnValue=false;">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php if (has_post_format('link') ): ?>	
					<h2><?php the_content(); ?></h2>		
				<?php else  : ?>							       
                  <?php the_content(); ?>
				  
				  <?php endif; ?>						
				  <?php endwhile; else: ?>
				  <p><?php _e('Brak wpisów.');?></p>
				  <?php endif; ?>
				 <br>	
            </div>
            
<!-- Content End -->
            
            <div class="sidebar-widgets span3">
            	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("sidebar_2")): ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>