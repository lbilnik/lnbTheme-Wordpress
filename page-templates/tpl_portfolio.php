
<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>


<div class="content-wrap" id="PortfolioMainBody">
    <div class="content container clearfix">
        <div class="row">
            
			<div class="container">
		<!-- GALERIA -->
			<div class="container-fluid clearfix">
				<div class="row">
					<div id="Galeria">
							
							<div class="col-sm-6 col-md-4">
								<ul>
									<li>
										<a href="http://lnbtheme.5v.pl/prace-3d/">
										<img src="<?php bloginfo('template_url'); ?>/img/grafika_3dG2.jpg" />
										</a>
									</li>
									<li>
										<a href="http://lnbtheme.5v.pl/photoshop/">
										<img src="<?php bloginfo('template_url'); ?>/img/PhotoshopPrace.png" />
										</a>
									</li>
									<li>
										<a href="http://lnbtheme.5v.pl/wektorowe/">
										<img src="<?php bloginfo('template_url'); ?>/img/Wketorowe.png" />
										</a>
									</li>
								</ul>
							</div>
									
					</div>
				</div>
			</div>
			
			<div class="page-content span12" id="PortfolioMainBody">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php if (has_post_format('link') ): ?>	
					
					<h2><?php the_content(); ?></h2>		
				<?php else  : ?>					
				 <?php the_content(); ?>
				  <?php endif; ?>	
								
				  <?php endwhile; else: ?>
				  <p><?php _e('Brak wpisów.');?></p>
				  <?php endif; ?>

            </div>
            
<!-- Content End -->
            
            
        </div>
    </div>
</div>

<?php get_footer(); ?>