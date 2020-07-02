
<?php
/*
Template Name: photoshop
*/
?>

<?php get_header(); ?>

<div class="content-wrap" id="PortfolioMainBody">
    <div class="content container clearfix">
        <div class="row">
            <div class="page-content span10" id="PortfolioMainBody">
                
				<div class="container-fluid clearfix">
					<div class="row">
						<div id="Galeria">
								
								<div class="col-4 col-sm-6 col-md-4">
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
										
						</div>
					</div>
				</div>
                		
            </div>
            
<!-- Content End -->
            
            
        </div>
    </div>
</div>

<?php get_footer(); ?>