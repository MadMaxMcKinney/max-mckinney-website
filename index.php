<?php

get_header(); ?>

	<div class="blog-grid">

		<h1 class="page-header-title">Blog.</h1>

		<?php if ( have_posts() ) : ?>
		
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					* Include the Post-Format-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Format name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content', 'blog-list' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(array('screen_reader_text' => ' ', )); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

	</div>

<?php get_footer(); ?>
