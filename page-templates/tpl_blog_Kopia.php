<?php
/*
Template Name: Blog Posts K
*/
?>
<?php get_header(); ?>

<div class="content-wrap">
    <div class="content container clearfix">
        <div class="row">
            <div class="page-content span6">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php if (has_post_format('link') ): ?>	 
					<h2><?php the_content(); ?></h2>		
				<?php else  : ?>							
                    <h1><?php the_title(); ?></h1>	
                  <?php the_content(); ?>
				  
				  <?php endif; ?>						
				  <?php endwhile; else: ?>
				  <p><?php _e('Brak wpis�w.');?></p>
				  <?php endif; ?>
				 <br>
                <nav class="single-nav">
				<span class="nav-prev"><?php previous_post_link('%link', 'Poprzedni wpis', TRUE ); ?></span>
				<span class="nav-next"><?php next_post_link('%link', 'Nast�pny wpis', TRUE ); ?></span>
				</nav>
				<br>
				<br>
				<div class="comment-wrap">
				
				<?php  comments_template(); ?>
				
				</div>
				
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