<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12'); ?>>
    <div class="post-inner-wrapper">
	<?php if(has_post_format('gallery')) : ?>
	
		<?php $images = get_post_meta( $post->ID, '_format_gallery_images', true ); ?>
		
		<?php if($images) : ?>
		<div class="post-img">
		<div class="sideslides">
		<ul class="bxslider">
		<?php foreach($images as $image) : ?>
			
			<?php $the_image = wp_get_attachment_image_src( $image, 'full-thumb' ); ?> 
			<?php $the_caption = get_post_field('post_excerpt', $image); ?>
			<li><img src="<?php echo esc_url($the_image[0]); ?>" <?php if($the_caption) : ?>title="<?php echo $the_caption; ?>"<?php endif; ?> /></li>
			
		<?php endforeach; ?>
		</ul>
		</div>
		</div>
		<?php endif; ?>
	
	<?php elseif(has_post_format('video')) : ?>
	
		<div class="post-img">
			<?php $ys_video = get_post_meta( $post->ID, '_format_video_embed', true ); ?>
			<?php if(wp_oembed_get( $ys_video )) : ?>
				<?php echo wp_oembed_get($ys_video); ?>
			<?php else : ?>
				<?php echo $ys_video; ?>
			<?php endif; ?>
		</div>
	
	<?php elseif(has_post_format('audio')) : ?>
	
		<div class="post-img audio">
			<?php $ys_audio = get_post_meta( $post->ID, '_format_audio_embed', true ); ?>
			<?php if(wp_oembed_get( $ys_audio )) : ?>
				<?php echo wp_oembed_get($ys_audio); ?>
			<?php else : ?>
				<?php echo $ys_audio; ?>
			<?php endif; ?>
		</div>
	
	<?php else : ?>
		
		<?php if(has_post_thumbnail()) : ?>
		<?php if(!get_theme_mod('ys_post_thumb')) : ?>
		<div class="post-img">
			<?php if(is_single()) : ?>
				<?php the_post_thumbnail('full-thumb'); ?>
			<?php else : ?>
				<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('full-thumb'); ?></a>
			<?php endif; ?>
		</div>
		<?php endif; ?>
		<?php endif; ?>
		
	<?php endif; ?>

    <div class="post-header text-center">
        <?php if(!is_single()): ?>
        <div class="cat_info clearfix">
            <?php if(!get_theme_mod('ys_post_cat')) : ?>
                <?php $primary_category = get_post_meta(get_the_ID(), 'primary_category')[0]; ?>
                <?php if(isset($primary_category)): ?>
                    <?php $category_term = get_term($primary_category); ?>
                <?php else: ?>
                    <?php $category_term = get_the_category()[0]; ?>
                <?php endif; ?>
                <span class="cat"><a href="<?php echo get_term_link($category_term->term_id); ?>"><?php echo $category_term->name; ?></a></span>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <?php if(is_single()) : ?>
            <h1><?php the_title(); ?></h1>
        <?php else : ?>
            <a href="<?php echo get_permalink(); ?>"><h2 class="header-title"><?php the_title(); ?></h2></a>
        <?php endif; ?>

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
        <?php if(is_single()): ?>
            <div class="row cat">
                In <?php the_category(', '); ?>
            </div>
        <?php endif; ?>
    </div>
	
	<div class="post-entry">
		
		<?php if(is_single()) : ?>
		
			<?php the_content(); ?>
			
		<?php else : ?>
		
			<?php if(get_theme_mod('ys_post_summary') == 'excerpt') : ?>
				
				<p><?php echo ys_string_limit_words(get_the_excerpt(), 80); ?>&hellip;</p>
				<p class="text-center"><a href="<?php echo get_permalink() ?>" class="more-link"><span class="more-button"><?php _e( 'View full post', 'wpwagon' ); ?></span></a>
				
			<?php else : ?>
				
				<?php the_content(__('View full post <span class="more-line"></span>', 'wpwagon')); ?>
				
			<?php endif; ?>
		
		<?php endif; ?>
		
		<?php wp_link_pages(); ?>
		
	</div>
    <?php if(is_single()): ?>
    <?php if(get_theme_mod('ys_post_comment_link') && get_theme_mod('ys_post_share') && get_theme_mod('ys_post_share_author')) : else : ?>
	<div class="post-share">

        <?php if(!get_theme_mod('ys_post_tags')) : ?>
            <?php if(is_single()) : ?>
                <?php if(has_tag()) : ?>
                    <div class="col-sm-12">
                        <div class="post-tags">
                            <?php the_tags("",""); ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>

		<?php if(!get_theme_mod('ys_post_share')) : ?>
		<div class="col-sm-12 post-share-box share-buttons">
            <span>Share:</span>
            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a>
            <a target="_blank" href="https://twitter.com/home?status=Check%20out%20this%20article:%20<?php print wpwagon_social_title( get_the_title() ); ?>%20-%20<?php echo urlencode(the_permalink()); ?>"><i class="fa fa-twitter"></i></a>
            <?php $pin_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
            <a data-pin-do="skipLink" target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo $pin_image; ?>&description=<?php the_title(); ?>"><i class="fa fa-pinterest"></i></a>
            <a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus"></i></a>
        </div>
		<?php endif; ?>
	</div>
	<?php endif; ?>
    <?php endif; ?>


    <?php if(!get_theme_mod('ys_post_author')) : ?>
	<?php if(is_single()) : ?>
		<?php get_template_part('inc/templates/about_author'); ?>
	<?php endif; ?>
	<?php endif; ?>
    </div>
    <?php if(!get_theme_mod('ys_post_related')) : ?>
        <?php if(is_single()) : ?>
            <?php get_template_part('inc/templates/related_posts'); ?>
        <?php endif; ?>
    <?php endif; ?>

    <?php comments_template( '', true );  ?>
</article>