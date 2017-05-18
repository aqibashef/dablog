<?php get_header(); ?>
	
	<div class="container">
		
		<div class="row">
			<div class="<?php if(get_theme_mod('ys_sidebar_archive') == true) { ?>col-sm-12 fullwidth<?php } else {?> col-sm-8 <?php } if(get_theme_mod('ys_archive_layout') == 'full_grid') echo 'full_grid'?>" >
			
				<div class="archive-box">
	
					<span><?php _e( 'All Posts By', 'wpwagon' ); ?></span>
					<h1><?php the_post(); echo get_the_author(); ?></h1>
					
				</div>
			
				<?php if(get_theme_mod('ys_archive_layout') == 'grid' || get_theme_mod('ys_archive_layout') == 'full_grid') : ?><ul class="row sp-grid"><?php endif; ?>
				
				<?php rewind_posts(); if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<?php if(get_theme_mod('ys_archive_layout') == 'grid') : ?>
					
						<?php get_template_part('content', 'grid'); ?>
					
					<?php elseif(get_theme_mod('ys_archive_layout') == 'list') : ?>
					
						<?php get_template_part('content', 'list'); ?>
						
					<?php elseif(get_theme_mod('ys_archive_layout') == 'full_list') : ?>
					
						<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
							<?php get_template_part('content'); ?>
						<?php else : ?>
							<?php get_template_part('content', 'list'); ?>
						<?php endif; ?>
					
					<?php elseif(get_theme_mod('ys_archive_layout') == 'full_grid') : ?>
					
						<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
							<?php get_template_part('content'); ?>
						<?php else : ?>
							<?php get_template_part('content', 'grid'); ?>
						<?php endif; ?>
					
					<?php else : ?>
						
						<?php get_template_part('content'); ?>
						
					<?php endif; ?>	
						
				<?php endwhile; ?>
				
				<?php if(get_theme_mod('ys_archive_layout') == 'grid' || get_theme_mod('ys_archive_layout') == 'full_grid') : ?></ul><?php endif; ?>
				
					<?php wpwagon_pagination(); ?>
				
				<?php else : ?>
					
					<?php get_template_part('content', 'none'); ?>
					
				<?php endif; ?>
				
			</div>


			<?php if(get_theme_mod('ys_sidebar_archive')) : else : ?>

				<div class="col-sm-4">
					<?php get_sidebar(); ?>					
				</div><!--/.col-sm-4-->

			<?php endif; ?>

<?php get_footer(); ?>