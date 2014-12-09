<!DOCTYPE html>


<html <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    
		<!-- Remy Sharp Shim --> 
		<!--[if lt IE 9]> 
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
		<![endif]-->    

	  	<link rel="stylesheet/less" href="style.less" type="text/css">	
		<!--<link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.min.css">-->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600italic,700,700italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet/css" href="meteor-slides.css" type="text/css">
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
		
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		
		<!-- Timely Calendar Code -->
		<script class="ai1ec-widget-placeholder" data-widget="ai1ec_agenda_widget" data-events_seek_type="events" data-events_per_page="5" data-days_per_page="7">
			(function(){var d=document,s=d.createElement('script'),
			i='ai1ec-script';if(d.getElementById(i))return;s.async=1;
			s.id=i;s.src='http://54.213.153.237/?ai1ec_js_widget';
			d.getElementsByTagName('head')[0].appendChild(s);})();
		</script>

		<?php wp_head(); ?>
	</head>
	<body>
		<header>
		<!--start SCC-HEADER-->
			<div id="scc-header">
				<div id="scc-header-center" >
						<a href="http://www.seattlecentral.edu">
							<div id="header-logo">
								<img src="<?php bloginfo('template_directory');?>/images/seattle-central-college-logo.png" alt="SCC Logo" class="header-logo">
							</div><!--.header-logo-->
						</a>
				</div><!--.scc-header-center-->
			</div><!--#scc-header-->		
		<!--end SCC-HEADER-->

			<div id="sl-header">
				<div id="header-center">

					<h1>
						<a href= "<?php echo get_option('home'); ?>" >Student Leadership</a> at 
						<a href="http://seattlecentral.edu"><span>Seattle Central College</span></a>
					</h1>

				</div><!--#header-center-->	
			</div><!--#sl-header-->		

	
			
			<div id="slider-zone">

			<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
				
				<div id="slider-panel">
				<h3>Creating connections for student success.</h3>
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
