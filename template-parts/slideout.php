<!-- Begin mobile menu -->
	<div class="mobile_menu_wrapper">
	    <div class="menu-side-mobile-menu-container">
	    <ul class="closeRow">
	   		<li><a id="close_mobile_menu" href="javascript:;"><i class="fa fa-times fa-2"></i></a></li>
	   		
	   	</ul>
	    <div class="card effect__click">
	    	
		     <div class="card__front">
		
		    	<ul id="mobile_main_menu">
		    		 <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			    </ul>
			</div>

			  	<div id="text-2" class="widget widget_text" style="padding: 1em;"">
			   		<?php dynamic_sidebar('mobileMenu_sidebar'); ?>
				</div>
			        	
			</div>
		</div><!-- card effect end -->
		    
	</div><!-- menu end -->