<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post featured'); ?>>

	<div class="entry-meta">

		<?php $categories = get_the_category(); ?>

		<?php // Custom Fields from Advanced Custom Fiels

		$headerImageURL = get_field('header_image');
		$headerGradientColor = get_field('header_gradient_color');
		$cardHeight = get_field('height');

		// Create class for post-header and the custom header that is define on the option checked in the post settings (ACF)
		$postClassBase = "blog-thumbnail-featured-";
		$postClassCategory = "default";

		// Check what the custom field is and change the class category to it
		// This is checking the value of the displayed name of the 'select' field, not the value portion
		if($headerGradientColor == "unity") {
			$postClassCategory = "unity";
		} else if($headerGradientColor == "android") {
			$postClassCategory = "android";	
		} else if($headerGradientColor == "development") {
			$postClassCategory = "development";
		}
		
		// Create the complete post class "post-header post-header-*CATEGORYNAME*"
		$postClass = $postClassBase . $postClassCategory;

		?>

		<?php if ( has_post_thumbnail() ) { ?>

			<div style="background: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center; height: <?php echo $cardHeight; ?>px;" class="blog-post-thumbnail <?php echo $postClass ?>" >

				<div class="blog-category blog-category-absolute blog-category-<?php echo strtolower(esc_html( $categories[0]->name )) ?>">
					<?php //webontheside_blog_posted_on();

					if ( ! empty( $categories ) ) {
						echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
					}

					webontheside_blog_posted_on();

					?>
				</div>

				<?php the_title( sprintf( '<a class="m-button m-white m-borderless m-fullscreen read-more" href="%s">', esc_url( get_permalink() ) ), '</a>' ); ?>

				<div class="tag-container">
					<ul>
					<?php
						$posttags = get_the_tags();
							if ($posttags) {
							foreach($posttags as $tag) {
								echo '<li> ' . $tag->name . '</li>'; 
							}
						}
					?>
					</ul>
				</div>

			</div>

		<?php } ?>
		

	</div><!-- .entry-meta -->

</article><!-- #post-## -->