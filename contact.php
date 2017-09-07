<?php

    /* Template Name: Contact Page */
 
get_header(); ?>

<div class="site-container">

    <div class="twelve columns content">
        <div class="offset-by-one ten columns content-inner">
             <?php if ( have_posts() ) : 
                while ( have_posts() ) : 
                        the_post(); 
                             the_content(); 
                 endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div><?php

            include (TEMPLATEPATH . '/template-parts/map.php');
            include (TEMPLATEPATH . '/template-parts/contact-form.php'); ?>
    </div>

</div>

<?php get_footer(); ?>