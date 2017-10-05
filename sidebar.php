<div class="sidebar">

        <div class="site-logo-container">
            <img class="site-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/max-v2.png" />
            <h2 class="site-title"><a href="<?php echo get_site_url();?>">Max McKinney</a></h2>
            <p class="sub-site-title">Developer and Designer</p>
        </div>
        

        <?php wp_nav_menu( array( 'theme_location' => 'side-menu', 'fallback_cb' => false, 'container' => false, 'menu_class' => 'site-pages' ) ); ?>

        <ul class="site-outside-links">
            <li><a href="https://github.com/MaxMcKinney" target="_blank"><i class="fa fa-github"></i></a></li>
            <li><a href="https://www.linkedin.com/in/mckinneymax" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="http://stackoverflow.com/users/964148/doubleelite" target="_blank"><i class="fa fa-stack-overflow"></i></a></li>
        </ul>

    </div>
