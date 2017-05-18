<?php

	/* Template Name: Page w/ Slider & Promo Boxes */

?>
<?php get_header(); ?>
	
	<div class="container">
		
		<div id="content">
		
			<?php get_template_part('inc/featured/featured'); ?>
			
			<?php get_template_part('inc/promo/promo'); ?>
		
			<div class="row">
		
				<div class="col-sm-8">
				
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
						<?php get_template_part('content', 'page'); ?>
							
					<?php endwhile; ?>
					
					<?php endif; ?>
				</div>

				<div class="col-sm-4">
					<?php get_sidebar(); ?>					
				</div><!--/.col-sm-4-->

			</div>

<?php get_footer(); ?>