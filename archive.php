<?php

get_header('white'); ?>

	<header class="post-header post-header-default">

		<h1 class="blog-single-post-title"><?php
		$categories = get_the_category();
		echo esc_html( $categories[0]->name ); ?>
		</h1>

	</header>

	<div class="main-container-fluid">

		<div class="post-container">

			<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'blog-featured-list' );
				?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</div>

	</div>

<?php get_footer(); ?>
