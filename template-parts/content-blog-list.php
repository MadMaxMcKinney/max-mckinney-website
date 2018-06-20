<a href="<?php echo get_permalink(); ?>" class="blog-post-list-item">

	<?php the_title( sprintf( '<h3 class="blog-list-title">', esc_url( get_permalink() ) ), '</h3>' ); ?>

	<p class="blog-excerpt"><?php echo get_the_excerpt(); ?></p>

</a>