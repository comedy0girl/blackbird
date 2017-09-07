<?php 

    include (TEMPLATEPATH . '/template-parts/_wrapper.php'); ?>


    <header class="header" role="banner">
    <div class="row top-banner">
        <div class="row top-inner">
            <div class="logo-main">
                <a href="/ash-dev/"><img src="<?php bloginfo('template_url') ?>/assets/img/logo.png"></a>
            </div>
            <div class="social-right">
                
                <li><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></li>
                <li><i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i></li>
                <li><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></li> 
                <p><a href="info@blackbird.com">info@blackbird.com</a> | <a href="info@blackbird.com">info@blackbird.com</a></p>
            </div>
        </div>
        <div class="row navigation"> <?php 

            wp_nav_menu(['theme_location' => 'header-menu' ]); ?>

        </div>
        
        
    </div>
</header>


