<?php

	/* Template Name: Full Width Page */

?>
<?php get_header(); ?>
	
	<div class="container">
		
		<div class="row">
		
			<div class="col-md-12 fullwidth">
			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
					<?php get_template_part('content', 'page'); ?>
						
				<?php endwhile; ?>
				
				<?php endif; ?>
				
			</div>

<?php get_footer(); ?>