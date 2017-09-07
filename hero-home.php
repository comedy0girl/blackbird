<?php

    /* Template Name: Hero Home Page */
 
get_header('hero'); ?>

<div class="site-container">
    <div class="row twelve columns hero-container">
        <div class="row twelve columns hero-navigation"> <?php 
            wp_nav_menu(['theme_location' => 'header-menu' ]); ?>
        </div><?php 
        if ( get_field( 'hero_image') ) { ?>

            <div class="row banner" style="background-image: url('<?php the_field( 'hero_image' ); ?>'); ">
            </div>

            <div class="banner-inner">
                <img src="<?php bloginfo('template_url') ?>/assets/img/logo.png">
            </div>

        <?php } ?>
    </div>

 

    <div class="row twelve columns hero-page-content">
        <div class="row offset-by-one ten columns content-inner">
             <?php if ( have_posts() ) : 
                while ( have_posts() ) : 
                        the_post(); 
                             the_content(); 
                 endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
           
        </div>
    </div>
    <div class="row twelve columns contact-and-follow">
        <div class="one-half column contact-box">
                <h5>Contact Us</h5><?php
            include (TEMPLATEPATH . '/template-parts/contact-form.php'); ?>
        </div>

        <div class="one-half column instagram-box">
            <h5>Follow us</h5>
            <div class="insta-inner">
              <script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/22ad858aef0f5c7aa8d10f2f72ab33a2.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
            </div>
        </div>

    </div>

</div>

<?php get_footer(); ?>