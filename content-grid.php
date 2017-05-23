<li class="col-sm-6">
	<article id="post-<?php the_ID(); ?>" <?php post_class('grid-item'); ?>>
		
		<div class="post-header text-center">
			
			<?php if(!get_theme_mod('ys_post_cat')) : ?>
			<span class="cat"><?php the_category(' '); ?></span>
			<?php endif; ?>

            <?php if(has_post_thumbnail()) : ?>
                <div class="post-img">
                    <a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('misc-thumb'); ?></a>
                </div>
            <?php endif; ?>
			
			<?php if(is_single()) : ?>
				<h1><?php the_title(); ?></h1>
			<?php else : ?>
				<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php endif; ?>

            <?php if(!get_theme_mod('ys_post_share_author')) : ?>
                <span class="post-share-box share-author">
				By <?php the_author_posts_link(); ?>
			</span> .
            <?php endif; ?>
            <?php if(!get_theme_mod('ys_post_date')) : ?>
                <div class="post-date"><?php the_time( get_option('date_format') ); ?></div>
            <?php endif; ?>
			
		</div>
		
		<div class="post-entry text-center">
							
			<p><?php echo ys_string_limit_words(get_the_excerpt(), 31); ?>&hellip;</p>
            <p class="text-center"><a href="<?php echo get_permalink() ?>" class="more-link"><span class="more-button"><?php _e( 'View full post', 'wpwagon' ); ?></span></a>
        </div>
		
	</article>
</li>