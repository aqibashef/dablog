<?php get_header(); ?>
	
	<div class="container">
		
		<div class="row">
		
			<div class="<?php if(get_theme_mod('ys_sidebar_post') == true) { ?>col-sm-12 fullwidth<?php } else {?> col-sm-8 <?php } ?>" >
			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
					<?php get_template_part('content'); ?>
						
				<?php endwhile; ?>
				
				<?php endif; ?>
				
			</div>

			<?php if(get_theme_mod('ys_sidebar_post')) : else : ?>

					<div class="col-sm-4">
						<?php get_sidebar(); ?>					
					</div><!--/.col-sm-4-->

			<?php endif; ?>

<?php get_footer(); ?>