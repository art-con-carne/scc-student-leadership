<!DOCTYPE html>


<html <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    
		<!-- Remy Sharp Shim --> 
		<!--[if lt IE 9]> 
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
		<![endif]-->    

	  	<link rel="stylesheet/less" href="style.less" type="text/css">	
		<link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.min.css"				
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600italic,700,700italic' rel='stylesheet' type='text/css'>
				
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />

		<?php /*wp_head();*/ ?>
	</head>
	<body>
		<header>
		<!--start SCC-HEADER-->
			<div id="scc-header">
				<div id="scc-header-center" >
						<a href="http://www.seattlecentral.edu">
							<div id="header-logo">
								<img src="images/seattle-central-college-logo.png" alt="So where's the Logo already?">
							</div><!--.header-logo-->
						</a>
				</div><!--.scc-header-center-->
			</div><!--#scc-header-->		
		<!--end SCC-HEADER-->

			<div id="sl-header">
				<div id="header-center">

					<h1>
						<a href= "<?php echo get_option('home'); ?>" >Student Leadership</a> at 
						<a href="http://seattlecentral.edu"><span>Seattle Central College</span>
					</h1>

				</div><!--#header-center-->	
			</div><!--#sl-header-->		

	
			
			<div id="slider-zone">
				<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
				<div id="slider-panel">
				</div><!--#slider-panel-->		
			</div><!--#slider-zone-->

			<!-- START NAVIGATION -->

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

			<!-- END NAVIGATION -->
<!--************************end header**********************-->

	</header>
