<div class="row twelve columns latest">
	<h2>Latest Work</h2>
	<div class="divider">
		<img src="<?php bloginfo('template_url') ?>/assets/img/divider.svg">
	</div>

	<div class="latest-inner"><?php
			$custom_loop = new WP_Query(array( 'posts_per_page' => 4, 'post_type' => 'portfolio' ));
			while ( $custom_loop->have_posts() ) : $custom_loop->the_post();  ?>
			
						<div class="three columns latest-work">
							<div class="latest-img">
								<?php the_post_thumbnail('latest-port-size'); ?>
														</div>
						</div>
				<?php

			endwhile; 
			wp_reset_postdata(); ?>
	</div>
</div>

<div class="row twelve columns link">
		<a href="/portfolio">View more<img src="<?php bloginfo('template_url') ?>/assets/img/blkArrowRight.png"></a>
</div>