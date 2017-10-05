<?php

get_header(); ?>

	<div class="main-container">

	<?php if ( have_posts() ) : ?>

		<h1 class="page-header-title"><?php echo get_the_title(); ?>.</h1>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content', 'post' );
				?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

	</div>

<?php get_footer(); ?>
