<article id="post-<?php the_ID(); ?> post" <?php post_class('blog-post wow fadeIn'); ?>>
	<header>
		<?php the_title( sprintf( '<h2 class="blog-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php webontheside_blog_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
            // Show the excerpt, by default if there isn't one it'll just trim the actual content and show that instead
			the_excerpt();
		?>
        <?php // Here we are checking if a manual excerpt has been added. If there is we need to show a read more button ?>
        <?php if(has_excerpt()) { ?>
            <a class="m-square-button read-more" href='<?php echo get_permalink( get_the_ID() ) ?>'>Read more</a>
        <?php } ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
