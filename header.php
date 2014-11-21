<!DOCTYPE html>
<?php include 'header-scc.php'; ?>

<html <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    
		<!-- Remy Sharp Shim --> 
		<!--[if lt IE 9]> 
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
		<![endif]-->    

	  	<link rel="stylesheet/less" href="style.less" type="text/css">
		<script src="http://lesscss.googlecode.com/files/less-1.0.21.min.js"></script>
				
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />

		<?php wp_head(); ?>
	</head>
	<body>
		<header>
					
			<div id="slscc-head">
				<div id="header-center">

					<h1>
						<a href= "<?php echo get_option('home'); ?>" ><strong>Student Leadership</strong> at 
							<span id="sl-at-header">Seattle Central College</span>
						</a>
					</h1>
				<div class="slscc-rule"></div> <!--orange rule-->
				</div><!--#header-center-->	
			</div><!--#slscc-head-->		

	
			
			<div id="slider-zone">
			<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
				<div id="slider-panel">
					
				</div><!--#slider-panel-->		
			</div><!--#slider-zone-->

			<!-- START NAVIGATION -->
			<div class="slscc-rule"></div> <!--orange rule-->
			<nav>
				<div id="nav-main">
					<div id="nav-center">
						<?php wp_nav_menu( array( 
							'theme_location' => 'main-menu' ,
							'menu' => 'Main Menu' ,
							'container'  => 'ul', 
						) ); ?>	
					</div><!--#nav-center-->		
				</div><!--#nav-main-->		
			</nav>
			<div class="slscc-rule"></div> <!--orange rule-->
			<!-- END NAVIGATION -->
<!--************************end header**********************-->

	</header>
