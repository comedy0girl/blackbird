<?php

    /* Template Name: Home Page */
 
get_header(); ?>

<div class="site-container">
    <div class="row twelve columns slider-container">
        <div class="slick-slider" id="slick-slider"><?php

            if(have_rows('slider_image')) :
                while(have_rows('slider_image')) : the_row(); 
                    $images = get_sub_field('image'); ?>
                    <div class="slide-item" style="background-image: url('<?php echo $images ?>'); height: 400px; background-size: cover !important;"></div><?php
                endwhile;
            endif; ?>
            
        </div>
    </div>


    <div class="twelve columns content">

        <div class="content-inner">
  
             <?php if ( have_posts() ) : 
                while ( have_posts() ) : 
                        the_post(); 
                             the_content(); 
                 endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
           
        </div>         
    </div><?php
                 include (TEMPLATEPATH . '/template-parts/latest-work.php'); ?>  


    <div class="row twelve columns contact-and-follow">
        <div class="one-half column contact-box">
                <div class="headerSpan"><span>Contact Us</span></div><?php
            include (TEMPLATEPATH . '/template-parts/contact-form.php'); ?>
        </div>

        <div class="one-half column instagram-box">
             <div class="headerSpan"><span>Follow us</span></div>
            <div class="insta-inner">
              <script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/22ad858aef0f5c7aa8d10f2f72ab33a2.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
            </div>
        </div>

    </div>

</div>

<?php get_footer(); ?>