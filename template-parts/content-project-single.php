<?php
// This is the detail view for blog posts
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('wow fadeIn'); ?>>

	<div class="entry-content">

		<div class="project-details <?php if( !get_field('show_project_overview') ) echo "hide" ?>">
			<div>
				<h6>Role</h6>
				<p><?php echo get_field("project_role")?></p>
			</div>
			<div>
				<h6>Client</h6>
				<p><?php echo get_field("project_client")?></p>
			</div>
			<div>
				<h6>Agency</h6>
				<p><?php echo get_field("project_agency")?></p>
			</div>
			<div>
				<h6>Date</h6>
				<p><?php echo get_field("project_date")?></p>
			</div>
			<div class="project-brief">
				<h6>Brief</h6>
				<p><?php echo get_field("project_brief")?></p>
			</div>
		</div>

		<?php the_content(); ?>
	</div>

</article>
