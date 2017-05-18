<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title( '-', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	
	<?php if(get_theme_mod('ys_favicon')) : ?>
	<link rel="shortcut icon" href="<?php echo get_theme_mod('ys_favicon'); ?>" />
	<?php endif; ?>
	
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

	<div id="top-bar">
		
		<div class="container">
			
			<div id="nav-wrapper">
				<?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'main-menu', 'menu_class' => 'menu' ) ); ?>
			</div>
			
			<div class="menu-mobile"></div>
			
			<?php if(!get_theme_mod('ys_topbar_search_check')) : ?>
			<div id="top-search">
                <?php get_search_form(); ?>
			</div>
			<?php endif; ?>
			
			<?php if(!get_theme_mod('ys_topbar_social_check')) : ?>
			<div id="top-social" <?php if(get_theme_mod('ys_topbar_search_check')) : ?>class="nosearch"<?php endif; ?>>
			
				<?php if(get_theme_mod('ys_facebook')) : ?><a href="http://facebook.com/<?php echo esc_html(get_theme_mod('ys_facebook')); ?>" target="_blank"><i class="fa fa-facebook"></i></a><?php endif; ?>
				<?php if(get_theme_mod('ys_twitter')) : ?><a href="http://twitter.com/<?php echo esc_html(get_theme_mod('ys_twitter')); ?>" target="_blank"><i class="fa fa-twitter"></i></a><?php endif; ?>
				<?php if(get_theme_mod('ys_instagram')) : ?><a href="http://instagram.com/<?php echo esc_html(get_theme_mod('ys_instagram')); ?>" target="_blank"><i class="fa fa-instagram"></i></a><?php endif; ?>
				<?php if(get_theme_mod('ys_pinterest')) : ?><a href="http://pinterest.com/<?php echo esc_html(get_theme_mod('ys_pinterest')); ?>" target="_blank"><i class="fa fa-pinterest"></i></a><?php endif; ?>
				<?php if(get_theme_mod('ys_bloglovin')) : ?><a href="http://bloglovin.com/<?php echo esc_html(get_theme_mod('ys_bloglovin')); ?>" target="_blank"><i class="fa fa-heart"></i></a><?php endif; ?>
				<?php if(get_theme_mod('ys_google')) : ?><a href="http://plus.google.com/<?php echo esc_html(get_theme_mod('ys_google')); ?>" target="_blank"><i class="fa fa-google-plus"></i></a><?php endif; ?>
				<?php if(get_theme_mod('ys_tumblr')) : ?><a href="http://<?php echo esc_html(get_theme_mod('ys_tumblr')); ?>.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i></a><?php endif; ?>
				<?php if(get_theme_mod('ys_youtube')) : ?><a href="http://youtube.com/<?php echo esc_html(get_theme_mod('ys_youtube')); ?>" target="_blank"><i class="fa fa-youtube-play"></i></a><?php endif; ?>
				<?php if(get_theme_mod('ys_dribbble')) : ?><a href="http://dribbble.com/<?php echo esc_html(get_theme_mod('ys_dribbble')); ?>" target="_blank"><i class="fa fa-dribbble"></i></a><?php endif; ?>
				<?php if(get_theme_mod('ys_soundcloud')) : ?><a href="http://soundcloud.com/<?php echo esc_html(get_theme_mod('ys_soundcloud')); ?>" target="_blank"><i class="fa fa-soundcloud"></i></a><?php endif; ?>
				<?php if(get_theme_mod('ys_vimeo')) : ?><a href="http://vimeo.com/<?php echo esc_html(get_theme_mod('ys_vimeo')); ?>" target="_blank"><i class="fa fa-vimeo-square"></i></a><?php endif; ?>
				<?php if(get_theme_mod('ys_linkedin')) : ?><a href="<?php echo esc_html(get_theme_mod('ys_linkedin')); ?>" target="_blank"><i class="fa fa-linkedin"></i></a><?php endif; ?>
				<?php if(get_theme_mod('ys_rss')) : ?><a href="<?php echo esc_url(get_theme_mod('ys_rss')); ?>" target="_blank"><i class="fa fa-rss"></i></a><?php endif; ?>
				
			</div>
			<?php endif ;?>
			
		</div><!--/container-->
		
	</div><!--/top-bar-->
	
	<header id="header" <?php if(!get_theme_mod('ys_featured_slider')) : ?>class="noslider"<?php endif; ?>>
		
		<div class="container">
			
			<div id="logo">
				
				<?php if(!get_theme_mod('ys_logo')) : ?>
					
					<?php if(is_front_page()) : ?>
						<h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a></h1>
					<?php else : ?>
						<h2><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a></h2>
					<?php endif; ?>
					
				<?php else : ?>
					
					<?php if(is_front_page()) : ?>
						<h1><a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url(get_theme_mod('ys_logo')); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a></h1>
					<?php else : ?>
						<h2><a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url(get_theme_mod('ys_logo')); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a></h2>
					<?php endif; ?>
					
				<?php endif; ?>
				
			</div>
			
		</div>
		
	</header>