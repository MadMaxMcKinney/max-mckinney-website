<?php 
$id = get_post_thumbnail_id($post->ID);
$bg = wp_get_attachment_url(  $id, 'thumbnail' ); ?>

<div class="portfolio-item-card portfolio-item-big-card wow fadeIn" style="background: url(<?php the_post_thumbnail_url('large'); ?>); background-size: cover; background-position: center;">

    <?php $categories = get_the_category(); ?>

    <div class="portfolio-content-container" >

        <!-- The Title -->
        <a href="<?php echo get_permalink(); ?>"><?php the_title( '<h4>', '</h4>' ); ?></a>

		<div class="blog-category blog-category-<?php echo strtolower(esc_html( $categories[0]->name )) ?> nohover">
			<?php //webontheside_blog_posted_on();

			if ( ! empty( $categories ) ) {
				echo esc_html( $categories[0]->name );
			}

			?>
		</div>
		
		<!--<span class="small-seperator" />-->

	</div>
	
	<!--<span class="portfolio-shape-background" style="background-color: <?php //echo get_field('header_color'); ?> ;"/>-->

</div>
