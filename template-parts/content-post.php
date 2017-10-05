<?php
// This is the detail view for blog posts
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('wow fadeIn'); ?>>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	<footer class="entry-footer">
		<?php
        // TODO: ENABLE FOOTER
        //webontheside_entry_footer();
        ?>
	</footer>

</article>
