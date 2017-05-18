<li class="col-sm-6">
	<article id="post-<?php the_ID(); ?>" <?php post_class('grid-item'); ?>>
		
		<?php if(has_post_thumbnail()) : ?>
		<div class="post-img">
			<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('misc-thumb'); ?></a>
		</div>
		<?php endif; ?>
		
		<div class="post-header">
			
			<?php if(!get_theme_mod('ys_post_cat')) : ?>
			<span class="cat"><?php the_category(' '); ?></span>
			<?php endif; ?>
			
			<?php if(is_single()) : ?>
				<h1><?php the_title(); ?></h1>
			<?php else : ?>
				<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php endif; ?>
			
			<span class="title-divider"></span>
			
		</div>
		
		<div class="post-entry">
							
			<p><?php echo ys_string_limit_words(get_the_excerpt(), 31); ?>&hellip;</p>
							
		</div>
		
		<div class="list-meta">
		<?php if(!get_theme_mod('ys_post_date')) : ?>
		<span class="post-date"><?php the_time( get_option('date_format') ); ?></span>
		<?php endif; ?>
		</div>
		
	</article>
</li>