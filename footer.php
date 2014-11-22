		</div><!--/main-->
	</div><!--/wrapper -->
		
		<div id="footer-scc">
			<div id="nav-footer">
				<div class="slscc-rule"></div> <!--orange rule-->
				<div id="footer-center">
					<nav>
						<div id="footer">
							<?php wp_nav_menu( array( 
								'theme_location' => 'footer-menu' ,
								'menu' => 'Footer Menu' ,
								'container'  => 'ul', 
							) ); ?>
						</div><!--#footer-->
					</nav>
				</div><!--#footer-center-->
			</div><!--#sl-footer-->
			<div id="scc-footer"><!-- SCC footer goes here-->
				    
				
				
					<img src="<?php bloginfo('template_directory');?>/images/SCC/seattle-central-college-stack.svg" alt="SCC Logo"/>
			

			
			
			
			</div><!--#scc-footer-->
		</footer>
		
<?php include 'footer-scc.php'; ?>

</body>
</html>