<?php
// This is the detail view for blog posts
?>

	<div class="project-details <?php if( !get_field('show_project_overview') ) echo "hide" ?>">
		<div>
			<h4>Role</h4>
			<p><?php echo get_field("project_role")?></p>
		</div>
		<div>
			<h4>Client</h4>
			<p><?php echo get_field("project_client")?></p>
		</div>
		<div>
			<h4>Agency</h4>
			<p><?php echo get_field("project_agency")?></p>
		</div>
		<div>
			<h4>Date</h4>
			<p><?php echo get_field("project_date")?></p>
		</div>
		<div class="project-brief">
			<h4>Brief</h4>
			<p><?php echo get_field("project_brief")?></p>
		</div>
	</div>

	<h4>Case Study</h4>

	<?php the_content(); ?>
