<div class="sidebar">
        <div class="sticky-sidebar-content">
            <img class="site-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/max-v2.png" />
            <h2 class="site-title"><a href="<?php echo get_site_url();?>">Max McKinney</a></h2>
            <p class="sub-site-title">Developer and Designer</p>
            <!--<ul class="site-pages">
                <li>About</li>
                <li>Blog</li>
                <li>Windows Apps</li>
                <li>Android Apps</li>
                <li>Contact</li>
            </ul>-->
            <?php wp_nav_menu( array( 'theme_location' => 'side-menu', 'fallback_cb' => false, 'container' => false, 'menu_class' => 'site-pages' ) ); ?>
            <ul class="site-outside-links">
                <li><a href="https://www.linkedin.com/in/mckinneymax"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="<?php echo get_site_url(); ?>/resume.pdf"><i class="fa fa-file-text"></i></a></li>
                <li><a href="https://github.com/DoubleElite"><i class="fa fa-github"></i></a></li>
                <li><a href="http://stackoverflow.com/users/964148/doubleelite"><i class="fa fa-stack-overflow"></i></a></li>
            </ul>
            <!--<p class="site-copyright">© 2015. All rights reserved.</p>-->
        </div>
    </div>
