<?php

class PC_Shortcode {
    
    public function __construct() {
        
        add_shortcode( 'primary-category', array( $this, 'pc_display' ) );
        
    }
    
    public function pc_display( $atts ) {
        
        // Set valid shortcode attributes
    	$a = shortcode_atts( array(
    		'name' => 'uncategorized'
    	), $atts );
    
    	// Set query args to display any post type with a primary category set to name attribute from shortcode
    	$pc_query_args = array( 
    		'post_type'     => 'any', 
    		'meta_key'      => 'primary_category', 
    		'meta_value'    => $a['name'] 
    	);
    
    	// Create custom query
    	$pc_query = new WP_Query( $pc_query_args );
    
    	// Loop through posts returned by query
    	if( $pc_query->have_posts() ) {
    
    		echo '<ul>';
    	
    		while ( $pc_query->have_posts() ) {
    
    			$pc_query->the_post();
    
    			echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
    
    		}
    
    		echo '</ul>';
    
    	} else {
    	    
    	    echo "Sorry, there are no posts with that primary category.";
    	    
    	}
    
    	// reset postdata
    	wp_reset_postdata();
        
    }
    
    
    
}