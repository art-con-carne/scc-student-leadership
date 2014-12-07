
		<footer>
		
			<div id="nav-footer">
			
				<div id="footer-center">

							<?php wp_nav_menu( array( 
								'theme_location' => 'footer-menu' ,
								'menu' => 'Footer Menu' ,
								'container'  => 'ul', 
							) ); ?>

				</div><!--#footer-center-->
				
			</div><!--#nav-footer-->
			
		</footer>
		
<?php get_template_part("footer", "scc"); ?>

</body>
</html>