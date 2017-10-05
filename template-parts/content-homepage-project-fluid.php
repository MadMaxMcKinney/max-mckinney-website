<div class="container-fluid portfolio-item-fluid-container" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">

    <?php $categories = get_the_category(); ?>

    <div class="portfolio-content-container wow fadeInUp" data-wow-offset="50" >

        <div class="blog-category blog-category-<?php echo strtolower(esc_html( $categories[0]->name )) ?>">
			<?php //webontheside_blog_posted_on();

			if ( ! empty( $categories ) ) {
				echo esc_html( $categories[0]->name );
			}

			?>
		</div>

        <!-- The Title -->
        <a href="<?php echo get_permalink(); ?>"><?php the_title( '<h1>', '</h1>' ); ?></a>
        <span class="project-category">
            <?php
              echo get_field('project_category')
            ?>
        </span>
        <!-- The snippet -->
        <?php
			the_excerpt();
		?>
        <!-- View more -->
        <div class="">
            <a href="<?php echo get_permalink();?>" class="m-button m-wide">View Details</a>
        </div>

    </div>

</div>
