        <footer class="twelve columns footer" role="contentinfo"><?php 
        	wp_nav_menu(['theme_location' => 'footer', 'menu_class' => 'nav nav--footer']); ?>
        	<div class="row twelve columns social-media">
        		<li><i class="fa fa-facebook-square" aria-hidden="true"></i></li>
        		<li><i class="fa fa-twitter-square" aria-hidden="true"></i></li>
        		<li><i class="fa fa-instagram" aria-hidden="true"></i></li>        		
        	</div>
        	<p class="copyright">
                &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>
             </p>
          
        </footer>

        <?php wp_footer(); ?>

    </body>
</html>