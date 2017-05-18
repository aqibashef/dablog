<?php
//////////////////////////////////////////////////////////////////
// Customizer - Add CSS
//////////////////////////////////////////////////////////////////
function wpwagon_customizer_css() {
    ?>
    <style type="text/css">
	
		#logo { padding-top:<?php echo get_theme_mod( 'ys_header_padding_top' ); ?>px; padding-bottom:<?php echo get_theme_mod( 'ys_header_padding_bottom' ); ?>px; }
		<?php if(get_theme_mod('ys_promo_border') == true) : ?>.promo-overlay { border:none; }<?php endif; ?>
		
		<?php if(get_theme_mod( 'ys_topbar_bg' )) : ?>#top-bar, .slicknav_menu { background:<?php echo get_theme_mod( 'ys_topbar_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'ys_topbar_nav_color' )) : ?>#nav-wrapper .menu li a{ color:<?php echo get_theme_mod( 'ys_topbar_nav_color' ); ?>; }<?php endif; ?>
		#nav-wrapper .menu li a:hover {  color:<?php echo get_theme_mod( 'ys_topbar_nav_color_hover' ); ?>; }
		
		#nav-wrapper .menu .sub-menu, #nav-wrapper .menu .children { background: <?php echo get_theme_mod( 'ys_drop_bg' ); ?>; }
		#nav-wrapper ul.menu ul a, #nav-wrapper .menu ul ul a { <?php if(get_theme_mod( 'ys_drop_border' )) : ?>border-top: 1px solid <?php echo get_theme_mod( 'ys_drop_border' ); ?>;<?php endif; ?> color:<?php echo get_theme_mod( 'ys_drop_text_color' ); ?>; }
		#nav-wrapper ul.menu ul a:hover, #nav-wrapper .menu ul ul a:hover { color: <?php echo get_theme_mod( 'ys_drop_text_hover_color' ); ?>; background:<?php echo get_theme_mod( 'ys_drop_text_hover_bg' ); ?>; }
		
		.slicknav_nav { background:<?php echo get_theme_mod( 'ys_mobile_bg' ); ?>; }
		.slicknav_nav a { color:<?php echo get_theme_mod( 'ys_mobile_text' ); ?>; }
		.slicknav_menu .slicknav_icon-bar { background-color:<?php echo get_theme_mod( 'ys_mobile_icon' ); ?>; }
		
		#top-social a { color:<?php echo get_theme_mod( 'ys_topbar_social_color' ); ?>; }
		#top-social a:hover { color:<?php echo get_theme_mod( 'ys_topbar_social_color_hover' ); ?>; }
		#top-search i { color:<?php echo get_theme_mod( 'ys_topbar_search_magnify' ); ?>; }
		
		.widget-title { background: <?php echo get_theme_mod( 'ys_sidebar_title_bg' ); ?>; color: <?php echo get_theme_mod( 'ys_sidebar_title_text' ); ?>;}
		.widget-title:after { border-top-color:<?php echo get_theme_mod( 'ys_sidebar_title_bg' ); ?>; }
		<?php if(get_theme_mod( 'ys_sidebar_title_arrow' )) : ?>.widget-title:after { display:none;} <?php endif; ?>
		.social-widget a { color:<?php echo get_theme_mod( 'ys_sidebar_social_icon' ); ?>; }
		.social-widget a:hover { color:<?php echo get_theme_mod( 'ys_sidebar_social_icon_hover' ); ?>; }
		
		#footer { background:<?php echo get_theme_mod( 'ys_footer_bg' ); ?>; }
		#footer-social a { color:<?php echo get_theme_mod( 'ys_footer_social' ); ?>; }
		#footer-social a:hover { color:<?php echo get_theme_mod( 'ys_footer_social_hover' ); ?>; }
		#footer-social { border-color:<?php echo get_theme_mod( 'ys_footer_social_line' ); ?>; }
		.copyright { color:<?php echo get_theme_mod( 'ys_footer_copyright_color' ); ?>; }
		.copyright a { color:<?php echo get_theme_mod( 'ys_footer_copyright_link' ); ?>; }
		
		.post-header h2 a, .post-header h1 { color:<?php echo get_theme_mod( 'ys_post_title' ); ?>; }
		.title-divider { color:<?php echo get_theme_mod( 'ys_post_title_divider' ); ?>; }
		.post-entry p { color:<?php echo get_theme_mod( 'ys_post_text' ); ?>; }
		.post-entry h1, .post-entry h2, .post-entry h3, .post-entry h4, .post-entry h5, .post-entry h6 { color:<?php echo get_theme_mod( 'ys_post_h' ); ?>; }
		.more-link { color:<?php echo get_theme_mod( 'ys_post_readmore_text' ); ?>; }
		a.more-link:hover { color:<?php echo get_theme_mod( 'ys_post_readmore_text_hover' ); ?>; }
		.more-line { color:<?php echo get_theme_mod( 'ys_post_readmore_line' ); ?>; }
		.more-link:hover > .more-line { color:<?php echo get_theme_mod( 'ys_post_readmore_line_hover' ); ?>; }
		.post-share-box.share-buttons a { color:<?php echo get_theme_mod( 'ys_post_share_color' ); ?>; }
		.post-share-box.share-buttons a:hover { color:<?php echo get_theme_mod( 'ys_post_share_color_hover' ); ?>; }
		
		.mc4wp-form { background:<?php echo get_theme_mod( 'ys_sidebar_newsletter_bg' ); ?>; }
		.mc4wp-form label { color:<?php echo get_theme_mod( 'ys_sidebar_newsletter_text' ); ?>; }
		.mc4wp-form button, .mc4wp-form input[type=button], .mc4wp-form input[type=submit] { background:<?php echo get_theme_mod( 'ys_sidebar_newsletter_button_bg' ); ?>; color:<?php echo get_theme_mod( 'ys_sidebar_newsletter_button_text' ); ?>; }
		.mc4wp-form button:hover, .mc4wp-form input[type=button]:hover, .mc4wp-form input[type=submit]:hover { background:<?php echo get_theme_mod( 'ys_sidebar_newsletter_button_bg_hover' ); ?>; color:<?php echo get_theme_mod( 'ys_sidebar_newsletter_button_text_hover' ); ?>; }
		
		a, .post-header .cat a { color:<?php echo get_theme_mod( 'ys_accent_color' ); ?>; }
		.post-header .cat a { border-color:<?php echo get_theme_mod( 'ys_accent_color' ); ?>; }
		
		<?php if(get_theme_mod( 'ys_custom_css' )) : ?>
		<?php echo get_theme_mod( 'ys_custom_css' ); ?>
		<?php endif; ?>
		
    </style>
    <?php
}
add_action( 'wp_head', 'wpwagon_customizer_css' );

?>