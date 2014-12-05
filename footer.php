		</div><!--/main-->
	</div><!--/wrapper -->
		
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
<?php
   /* Always have wp_footer() just before the closing </body>
    * tag of your theme, or you will break many plugins, which
    * generally use this hook to reference JavaScript files.
    */
    wp_footer();
?>
</body>
</html>