<?php get_header(); ?>
	
	<div class="container">
		
		<?php if(get_theme_mod( 'ys_featured_slider' ) == true) : ?>
			<?php include(locate_template('inc/featured/featured.php')); ?>
		<?php endif; ?>
	
		<?php if(get_theme_mod( 'ys_promo' ) == true) : ?>
			<?php include(locate_template('inc/promo/promo.php')); ?>
		<?php endif; ?>
		
		<div class="row">
			<div class="<?php
							if(get_theme_mod('ys_sidebar_homepage') == true) { 
								echo 'col-sm-12 fullwidth';
							} else {
								echo 'col-sm-8'; 
							} 
							if(get_query_var('paged') == 0 && get_theme_mod('ys_home_layout') == 'full_grid') echo ' full_grid';
						?>">
				
					<?php $index = 0; //counting posts ?>

					<?php if(get_theme_mod('ys_home_layout') == 'grid' || get_theme_mod('ys_home_layout') == 'full_grid') : ?><ul class="row sp-grid"><?php endif; ?>
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); $index++; ?>
						
						<?php if(get_theme_mod('ys_home_layout') == 'grid') : ?>
						
							<?php include(locate_template('content-grid.php')); ?>
						
						<?php elseif(get_theme_mod('ys_home_layout') == 'list') : ?>
						
							<?php include(locate_template('content-list.php')); ?>
							
						<?php elseif(get_theme_mod('ys_home_layout') == 'full_list') : ?>
						
							<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
								<?php include(locate_template('content.php')); ?>
							<?php else : ?>
								<?php include(locate_template('content-list.php')); ?>
							<?php endif; ?>
						
						<?php elseif(get_theme_mod('ys_home_layout') == 'full_grid') : ?>
						
							<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
								<?php include(locate_template('content.php')); ?>
							<?php else : ?>
								<?php include(locate_template('content-grid.php')); ?>
							<?php endif; ?>
						
						<?php else : ?>
							
							<?php include(locate_template('content.php')); ?>
							
						<?php endif; ?>	
							
					<?php endwhile; ?>
					
					<?php if(get_theme_mod('ys_home_layout') == 'grid' || get_theme_mod('ys_home_layout') == 'full_grid') : ?></ul><?php endif; ?>
					
						<?php the_posts_pagination(array(
                            'mid_size'          => 2,
                            'prev_text'         => __('<i class="fa fa-angle-left"></i> Previous', 'wpwagon'),
                            'next_text'         => __('Next <i class="fa fa-angle-right"></i>', 'wpwagon')
                        )); ?>
					
					<?php endif; ?>
			</div><!--/.col-sm-8-->

			<?php if(get_theme_mod('ys_sidebar_homepage')) : else : ?>

				<div class="col-sm-4">
					<?php get_sidebar(); ?>					
				</div><!--/.col-sm-4-->

			<?php endif; ?>

		</div><!--/.row-->

<?php get_footer(); ?>