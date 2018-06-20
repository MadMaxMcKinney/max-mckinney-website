<?php

get_header(); ?>

	<?php if ( have_posts() ) : ?>
	<?php $color = get_field('theme_color'); ?>

	<style>
		.page-header-fade:after {
			position: absolute;
			content: '';
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background: linear-gradient(to bottom, rgba(0,0,0,0) 0%, <?php echo $color?> 100%);
		}
	</style>

	<div class="page-header-fade" style="background-image: url('<?php echo get_field('header_image'); ?>');">
		<?php the_title( '<h1 class="project-post-title">', '</h1>' ); ?>
	</div>

	<div class="project-grid">

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content', 'project-single' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

	</div>

<?php get_footer(); ?>
