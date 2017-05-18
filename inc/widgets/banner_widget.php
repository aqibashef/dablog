<?php
/**
 * Plugin Name: About Widget
 */

add_action( 'widgets_init', 'themewagon_banner_load_widget' );

function themewagon_banner_load_widget() {
	register_widget( 'themewagon_banner_widget' );
}

class themewagon_banner_widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'themewagon_banner_widget', 'description' => __('An Banner Widget', 'themewagon_banner_widget') );

		parent::__construct( 'themewagon_banner_widget', 'Yellowstone: Banner', $widget_ops );
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$image = $instance['image'];
		$link = $instance['link'];
		$target = $instance['target'];
		
		/* Before widget (defined by themes). */
		echo $before_widget;

		?>
			
			<div class="banner-widget">
				<?php if($link) : ?> <a href="<?php echo esc_html($link); ?>" title="<?php echo esc_html($title); ?>" target="<?php if($target) echo '_blank';?>" > <?php endif; ?>
					<?php if($image) : ?>
					<div class="banner-img">
						<img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_html($title); ?>" />
					</div>
					<?php endif; ?>
				<?php if($link) : ?> </a> <?php endif; ?>
			</div>
			
		<?php

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/**
	 * Update the widget settings.
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['image'] = strip_tags( $new_instance['image'] );
		$instance['link'] = strip_tags( $new_instance['link'] );
		$instance['target'] = strip_tags( $new_instance['target'] );

		return $instance;
	}


	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'title' => 'Banner', 'image' => '');
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:96%;" />
		</p>
		
		<!-- image url -->
		<p>
			<label for="<?php echo $this->get_field_id( 'image' ); ?>">Image URL:</label>
			<input id="<?php echo $this->get_field_id( 'image' ); ?>" name="<?php echo $this->get_field_name( 'image' ); ?>" value="<?php echo $instance['image']; ?>" style="width:96%;" /><br />
		</p>

		<!-- link -->
		<p>
			<label for="<?php echo $this->get_field_id( 'link' ); ?>">Link:</label>
			<input id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" value="<?php echo $instance['link']; ?>" style="width:96%;" /><br />
		</p>

		<!-- link target -->
		<p>
			<label for="<?php echo $this->get_field_id( 'target' ); ?>">Open in new tab:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'target' ); ?>" name="<?php echo $this->get_field_name( 'target' ); ?>" <?php checked( (bool) $instance['target'], true ); ?> />
		</p>

	<?php
	}
}

?>