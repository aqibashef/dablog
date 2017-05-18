<?php get_header(); ?>
	
	<div class="container">
		
		<div class="row">
		
			<div class="col-sm-8">
			
				<div class="error-page">
					
					<h1>404</h1>
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'wpwagon' ); ?></p>
					<?php get_search_form(); ?>
					
				</div>
				
			</div>
			<div class="col-sm-4">
				<?php get_sidebar(); ?>					
			</div><!--/.col-sm-4-->
<?php get_footer(); ?>