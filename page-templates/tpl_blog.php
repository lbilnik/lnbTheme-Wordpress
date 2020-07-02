
<?php
/*
Template Name: Blog Posts
*/
?>

<?php get_header(); ?>

<div class="content-wrap">
    <div class="content container clearfix">
        <div class="row">
            <div class="page-content span6">
						<?php query_posts('category_name=Blog','post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

						<?php if( have_posts() ): ?>

						<?php while( have_posts() ): the_post(); ?>

					<div id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>

						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(200,220) ); ?></a>
						</br>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						</br>
               

						<?php the_excerpt(__('Kontynuuj Czytanie »','example')); ?>

					</div><!-- /#post-<?php get_the_ID(); ?> -->

						<?php endwhile; ?>

						<div class="navigation">
						<span class="newer"><?php previous_posts_link(__('« Najnowsze','example')) ?></span> <span class="older"><?php next_posts_link(__('Starsze »','example')) ?></span>
						</div><!-- /.navigation -->

					<?php else: ?>

					<div id="post-404" class="noposts">

						<p><?php _e('None found.','example'); ?></p>

						</div><!-- /#post-404 -->

					<?php endif; wp_reset_query(); ?>

					
					
					
				</div>
				<div class="sidebar-widgets span3">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("sidebar_1")): ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
	</div>

<?php get_footer(); ?>