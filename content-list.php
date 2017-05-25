<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12 list-item'); ?>>
	
	<?php if(has_post_thumbnail()) : ?>
	<div class="post-img">
		<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('misc-thumb'); ?></a>
	</div>
	<?php endif; ?>
	
	<div class="list-content">
	
		<div class="post-header">

            <?php if(!get_theme_mod('ys_post_cat')) : ?>
                <?php $primary_category = get_post_meta(get_the_ID(), 'primary_category')[0]; ?>
                <?php if(isset($primary_category)): ?>
                    <?php $category_term = get_term($primary_category); ?>
                <?php else: ?>
                    <?php $category_term = get_the_category()[0]; ?>
                <?php endif; ?>
                <span class="cat"><a href="<?php echo get_term_link($category_term->term_id); ?>"><?php echo $category_term->name; ?></a></span>
            <?php endif; ?>
			
			<?php if(is_single()) : ?>
				<h1><?php the_title(); ?></h1>
			<?php else : ?>
				<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php endif; ?>
			
			<span class="list-title-divider"></span>
			
		</div>
		
		<div class="post-entry">
							
			<p><?php echo ys_string_limit_words(get_the_excerpt(), 39); ?>&hellip;</p>
							
		</div>
		
		<div class="list-meta">
		<?php if(!get_theme_mod('ys_post_date')) : ?>
		<span class="post-date"><?php the_time( get_option('date_format') ); ?></span>
		<?php endif; ?>
		</div>
	
	</div>
	
</article>