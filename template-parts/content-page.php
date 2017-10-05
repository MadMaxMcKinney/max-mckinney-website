<?php
// This is for PAGES
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>

	<div class="entry-content wow fadeIn">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
