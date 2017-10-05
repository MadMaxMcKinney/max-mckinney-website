<?php
// This is the detail view for blog posts
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('wow fadeIn'); ?>>

	<header class="entry-header">

		<?php the_title( '<h1 class="blog-post-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php //webontheside_blog_posted_on(); ?>
		</div>

	</header>

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
