<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    
		<!-- Remy Sharp Shim --> 
		<!--[if lt IE 9]> 
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
		<![endif]-->    

	  	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />

		<?php /*?> Always have wp_head() just before the closing </head>
	   	tag of your theme. Many plugins use this hook to add 
       	elements to <head> such as styles, scripts, and meta tags.
	  	<?php */?>
	  	<?php wp_head(); ?>
	</head>
	<body>
		<div id="wrapper">
			<header>
				<div id="scc">
					<h1>
					<a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
					</h1>
					<p class="description"><?php bloginfo('description'); ?></p>
				</div><!--#scc-->
			</header>

			<div id="slscc-head">
				<div id="header-center">
					<h1>
						<a href= "<?php echo get_option('home'); ?>" >Student Leadership at 
							<span>Seattle Central College</span>
						</a>
					</h1>
				</div><!--#header-center-->	
			</div><!--#slscc-head-->		

			<div id="slider-zone">
				<div id="slider-panel">
					<!--Slider goes here-->
				</div><!--#slider-panel-->		
			</div><!--#slider-zone-->

			<!-- START NAVIGATION -->
			<nav>
				<div id="main">
					<div id="nav-center">
						<?php wp_nav_menu( array( 
							'theme_location' => 'main-menu' ,
							'menu' => 'Main Menu' ,
							'container'  => 'ul', 
						) ); ?>	
					</div><!--#nav-center-->		
				</div><!--#main-->		
			</nav>
			<!-- END NAVIGATION -->
<!--************************end header**********************-->

