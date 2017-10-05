<!-- The post meta Color value is set for each post in the WP Editor -->
<div class="project" style="background-color: <?php echo get_post_meta(get_the_ID(), 'Color', true); ?>">
    <div class="main-container">
        <?php the_title( '<h2>', '</h2>' ); ?>
        <?php 
            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                the_post_thumbnail('medium');
            } 
        ?>
        <?php the_excerpt(); ?>
        <a href="<?php echo get_permalink(); ?>" class="read-more">Read more</a>
    </div>
</div>
