<?php 
$id = get_post_thumbnail_id($post->ID);
$bg = wp_get_attachment_url(  $id, 'thumbnail' ); ?>

<a class="portfolio-item-card portfolio-item-small-card wow fadeIn" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>); background-size: 100%; background-position: center;" href="<?php echo get_permalink(); ?>">

    <?php $categories = get_the_category(); ?>

    <div class="portfolio-content-container" >

        <!-- The Title -->
        <?php the_title( '<h4>', '</h4>' ); ?>

	</div>

	<div class="blog-category blog-category-<?php echo strtolower(esc_html( $categories[0]->name )) ?> nohover">
		<?php //webontheside_blog_posted_on();

		if ( ! empty( $categories ) ) {
			echo esc_html( $categories[0]->name );
		}

		?>
	</div>

</a>
