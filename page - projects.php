<?php /* Template Name: Projects */ ?>


<?php

get_header(); ?>

	<!-- Show recent projects -->

	<div class="main-container">

		<h1 class="page-header-title">Projects.</h1>

		<!-- .grid-sizer empty element, only used for element sizing -->
		<div class="project-grid">

            <?php
                $args = array(
                    'post_type' => array('project'),
                    'posts_per_page' => 100,
                );
                $recent_projects_query = new WP_Query( $args );
            ?>

            <?php if ( $recent_projects_query->have_posts() ) : ?>

                <?php /* Start the Loop */ ?>
                <?php while ( $recent_projects_query->have_posts() ) : $recent_projects_query->the_post(); ?>

                    <?php
                        // Get the project template
                        get_template_part( 'template-parts/content', 'projects-small-cards' );
                    ?>

                <?php endwhile; ?>

            <?php else : ?>

                <?php get_template_part( 'template-parts/content', 'none' ); ?>

                <?php endif; ?>

			</div>

    </div>

<div class="spacer"></div>

<?php get_footer(); ?>
