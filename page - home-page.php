<?php /* Template Name: Home Page */ ?>


<?php

get_header('home'); ?>

	<!-- Show recent projects -->

	<div class="main-container-fluid-hero">

		<?php putRevSlider("hero-main-slider") ?>
		
		<hr/>

		<div class="main-container">
			<h6>Services.</h6>	

			<div class="home-quick-sections">

				<div class="service-column">
					<i class="fal fa-gem fa-3x"></i>
					<h4>Development & Design</h4>
					<p>Developer with a designed tuned eye, able to mesh both practices smoothly and communicate clearer no matter the job.</p>
				</div>
				
				<div class="service-column">
					<i class="fal fa-server fa-3x"></i>
					<h4>Web & Applications</h4>
					<p>Comprehesive and user-focused websites and applications. Clear communication and modern practices.</p>
				</div>

				<div class="service-column">
					<i class="fal fa-desktop-alt fa-3x"></i>
					<h4>Adaptive</h4>
					<p>Android, Unity 3D, video editing, your project's needs can be met with a wide and passionate skill range.</p>
				</div>

			</div>

		</div>

		<hr/>

		<div class="main-container">
		<h6>Work.</h6>

		<?php
			$args = array(
				'post_type' => array('project'),
				'posts_per_page' => 4,
			);
			$recent_projects_query = new WP_Query( $args );
		?>

		<?php if ( $recent_projects_query->have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( $recent_projects_query->have_posts() ) : $recent_projects_query->the_post(); ?>

				<a href="<?php echo get_permalink(); ?>" class="recent-project">
					<h4><?php echo get_the_title(); ?></h4>
					<p><?php echo get_field('project_short_brief'); ?></p>
				</a>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		<a href="/projects" class="home-view-work">View all work <i class="fal fa-arrow-right" aria-hidden="true"></i></a>	

		</div>

	</div>

<?php get_footer(); ?>
