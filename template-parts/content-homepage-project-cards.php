<?php 
$id = get_post_thumbnail_id($post->ID);
$bg = wp_get_attachment_url(  $id, 'thumbnail' ); ?>

<div class="portfolio-item-card wow fadeIn">

    <?php $categories = get_the_category(); ?>

    <a href="<?php echo get_permalink();?>">
        <div class="portfolio-card-image" style="background: url(<?php the_post_thumbnail_url('large'); ?>); background-size: cover; background-position: center;">

        </div>
    </a>

    <div class="portfolio-content-container" >

        <div class="blog-category blog-category-<?php echo strtolower(esc_html( $categories[0]->name )) ?> nohover">
			<?php //webontheside_blog_posted_on();

			if ( ! empty( $categories ) ) {
				echo esc_html( $categories[0]->name );
			}

			?>
		</div>

        <!-- The Title -->
        <a href="<?php echo get_permalink(); ?>"><?php the_title( '<h4>', '</h4>' ); ?></a>

        <!-- Categories and date -->
        <span class="project-category">
        <p class="project-category-skills">Skills</p>
            <?php 
              echo get_field('project_category');
            ?>
        </span>

		<a href="<?php echo get_permalink();?>" class="m-button m-full m-light">Open Project</a>

    </div>

</div>
