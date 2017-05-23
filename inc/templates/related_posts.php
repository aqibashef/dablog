<?php 

$orig_post = $post;
global $post;

$categories = get_the_category($post->ID);

if ($categories) {

	$category_ids = array();

	foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
	
	$args = array(
		'category__in'     => $category_ids,
		'post__not_in'     => array($post->ID),
		'posts_per_page'   => 2, // Number of related posts that will be shown.
		'ignore_sticky_posts' => 1,
		'orderby' => 'rand'
	);

	$my_query = new wp_query( $args );
	if( $my_query->have_posts() ) { ?>
		<div class="post-related"><div class="post-box"><h4 class="post-box-title"><span><?php _e('You Might Also Like', 'themewagon'); ?></span></h4></div>
		<div class="row text-center">
			<?php while( $my_query->have_posts() ) {
				$my_query->the_post();?>
					<div class="col-sm-6 item-related">
						<div class="item-related-wrapper">
						<div class="cat_info clearfix">
                            <?php if(!get_theme_mod('ys_post_cat')) : ?>
                                <span class="cat"><?php the_category(' '); ?></span>
                            <?php endif; ?>
                        </div>
						<?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) : ?>
						<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('misc-thumb'); ?></a>
						<?php endif; ?>
						
						<h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
						<span class="date"><?php the_time( get_option('date_format') ); ?></span>
						</div>
					</div>
			<?php
			}
		echo '</div>';
		echo '</div>';
	}
}
$post = $orig_post;
wp_reset_query();

?>