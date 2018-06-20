<?php /* Template Name: Home Page */ ?>


<?php

get_header('home'); ?>

	<!-- Show recent projects -->

	<div class="main-container-fluid-hero">

		<div class="page-grid">

			<h1 class="header-title">Fullstack <br/> Web Dev / Designer</h1>
			<h3 class="header-subtitle">I’m <strong>Max McKinney,</strong> currently contracting in ATX. My background is in <strong>computer science, UI/UX design, and creative problem solving</strong>. I build cars on the side as well.</h3>

			<div class="work-grid">

				<?php
					$args = array(
						'post_type' => array('project'),
						'posts_per_page' => 12,
					);
					$recent_projects_query = new WP_Query( $args );
				?>

				<?php if ( $recent_projects_query->have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( $recent_projects_query->have_posts() ) : $recent_projects_query->the_post(); ?>

						<a href="<?php echo get_permalink(); ?>" class="recent-project">
							<img src="<?php the_post_thumbnail_url('large'); ?>" alt="Project Image">
							<div class="recent-project-content">
								<h4><?php echo get_the_title(); ?></h4>
								<p><?php echo get_field('project_short_brief'); ?></p>
								<p class="read" style="--accent-color: <?php echo get_field('theme_color'); ?>">Read more about it</p>
							</div>
						</a>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>	
			</div>
		</div>

	</div>

<?php get_footer(); ?>
