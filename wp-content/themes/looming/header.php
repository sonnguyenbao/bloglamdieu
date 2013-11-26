<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title>
  
 <?php wp_title('|',true,'left'); ?>

</title>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />	
	<?php
$loom_settings = get_option( 'loom_options');
wp_get_archives('type=monthly&format=link'); 		
	if ( isset ($loom_settings['loom_favicon_url']) &&  ($loom_settings['loom_favicon_url']!="") ) { ?>
			<link rel="shortcut icon" href="<?php echo $loom_settings['loom_favicon_url']; ?>" />	
	<?php 
		}	
	
wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div class="wrapper">
	<div class="header">
			<div class="main-menu-container">
				<?php wp_nav_menu(array('theme_location' => 'menu-1', 'container' => 'div', 'container_class' => 'main-menu')); ?>
				<?php wp_nav_menu(array('theme_location' => 'menu-r', 'container' => 'div', 'container_class' => 'r-menu', 'depth' => 1 )); ?>
				
			</div>

		<div class="header-bottom">
			<div class="logo"> 
				<img src="http://localhost/blog/wp-content/uploads/2013/11/bloglogo.png"/>
                <!-- <h1><a href="<?php echo esc_url(home_url()); ?>/"><?php bloginfo('name'); ?></a></h1>
				<div class="site-description"><?php bloginfo( 'description' ); ?></div> -->
			</div>
			<div class="header-advertising"><?php echo(stripslashes ($loom_settings['ad468_code'])); ?> </div>
		</div>
	</div>

					<div class="clear"></div>


