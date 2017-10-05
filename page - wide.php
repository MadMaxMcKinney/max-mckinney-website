<?php /* Template Name: Wide Page */ ?>
 
<?php
get_header(); ?>

	<!--<div class="page-title-container">
		<h1 class="page-title"><?php //single_post_title(); ?></h1>
	</div>-->

	<div class="main-container-wide">

        <?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content', 'page' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

	</div>

<?php get_footer(); ?>
