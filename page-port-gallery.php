<?php

    /* Template Name: Portfolio Gallery Page */
 
get_header(); ?>

<div class="twelve columns content">

        <div class="offset-by-one ten columns content-inner">
  
             <?php if ( have_posts() ) : 
                while ( have_posts() ) : 
                        the_post(); 
                             the_content(); 
                 endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
           
        </div>         
</div>


<?php get_footer(); ?>