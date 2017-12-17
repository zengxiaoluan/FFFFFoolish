			<footer class="footer" role="contentinfo">
			
				<div id="inner-footer" class="wrap clearfix">
	                		
					<p class="source-org copyright">
						&copy; <?php 
								echo date('Y-m-d', strtotime(get_userdata(1)->user_registered) );
								echo ' - '.date('Y-m-d'); 
							?>
						<?php bloginfo('name'); ?>. 
					</p
					
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->
