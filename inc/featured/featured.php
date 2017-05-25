<div class="featured-area <?php if(!get_theme_mod('ys_promo')) : ?>nopromo<?php endif; ?>">
			
	<div class="sideslides">
	
		<div class="bxslider clearfix">
		
			<?php
				
				$featured_cat = get_theme_mod( 'ys_featured_cat' );
				$get_featured_posts = get_theme_mod('ys_featured_id');
				$number = get_theme_mod( 'ys_featured_slider_slides' );
				
				if($get_featured_posts) {
					$featured_posts = explode(',', $get_featured_posts);
					$args = array( 'showposts' => $number, 'post_type' => array('post', 'page'), 'post__in' => $featured_posts, 'orderby' => 'post__in' );
				} else {
					$args = array( 'cat' => $featured_cat, 'showposts' => $number );
				}

                $featured_cat_term = get_term($featured_cat);
			?>
			
			<?php $feat_query = new WP_Query( $args ); ?>
		
			<?php if ($feat_query->have_posts()) : while ($feat_query->have_posts()) : $feat_query->the_post(); ?>
			
			<div class="feat-item" style="background-image:url(<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'slider-thumb' ); if(!$image) { echo get_template_directory_uri() . '/img/slider-default.png'; } else { echo $image[0]; } ?>);">
				
				<div class="feat-overlay">
					<div class="feat-inner text-center">
                        <div class="feat-inner-wrapper">
                            <span class="cat"><a href="<?php echo get_term_link($featured_cat_term) ?>"><?php echo $featured_cat_term->name; ?></a></span>
                            <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php if(!get_theme_mod('ys_post_share_author')) : ?>
                                <span class="post-share-box share-author">
                                    By <?php the_author_posts_link(); ?>
                                </span> .
                            <?php endif; ?>
                            <?php if(get_comments_number() >= 0): ?>
                                <span class="post-comment-number"> <?php echo get_comments_number(); ?> <?php echo __('Comments') ?></span> .
                            <?php endif; ?>
                            <?php if(!get_theme_mod('ys_post_date')) : ?>
                                <div class="post-date"><?php the_time( get_option('date_format') ); ?></div>
                            <?php endif; ?>
                            <a href="<?php echo get_permalink(); ?>" class="btn feat-more"><?php _e( 'View full post', 'themewagon' ); ?></a>
                        </div>
                    </div>
				</div>
				
			</div>
			
			<?php endwhile; endif; ?>
			
		</div>
	
	</div>
	
</div>