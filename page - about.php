<?php /* Template Name: About Page */ ?>

<?php

get_header(); ?>

	<div class="main-container-flex">

		<div id="left" style="background: url('<?php echo get_stylesheet_directory_uri();?>/img/bio-bg.jpg'); background-size: cover; background-repeat: none;">

			<div class="home-return wow fadeIn">
				
			</div>
			
			<div class="bio-container wow fadeIn">
				<h1>Hi, I'm Max McKinney</h1>
				<p>I'm a developer and designer. Currently creating in Austin, TX as a Front-end developer at Dell.</p>
				<a href="<?php echo get_site_url(); ?>/resume.pdf" class="m-button m-wide m-center m-white">Download PDF Resume</a>
			</div>
		
		</div>

		<div id="right" class="about-container">

			<div class="information-section wow fadeIn">
				<h6 class="information-section-title">Intro</h6>
				<div class="information-section-container">
					<p>Passionate creativity has driven me from a young age and brought me into the fields of development and design. Years of experience solidified my intrigue with the integration of the two disciplines, and the ability to effectively engage and communicate with an array of team members.</p> 
					<p>My working knowledge in both fields bridges the gap between designer and developer, increasing productivity and continuity for projects.</p>
				</div>
			</div>

			<div class="information-section wow fadeIn">
				<h6 class="information-section-title">Skills</h6>
				<div class="information-section-container">
					<p><strong>Development(Desktop/Mobile):</strong> Java, C#, Android Dev, Windows 10 UWP</p>
					<p><strong>Development(Web):</strong> HTML5/CSS3/Javascript, Node.js, React, Angular 2, PHP, Bootstrap, Django, Meteor, Wordpress</p>
					<p><strong>Design:</strong> Full Adobe Suite (Photoshop, Illustrator, After Effects, Premiere Pro, Indesign, etc), Blender, 3DS Max, Axure, InVision</p>	
				</div>
			</div>

			<div class="information-section wow fadeIn">
				<h6 class="information-section-title">Experience</h6>
				<div class="information-section-container">

					<div class="information-section-container-inner">
						<p><strong>Dell - Frontend Developer</strong></p>
						<span class="information-section-exp-date">Mar 2015 - Present</span>
						<ul>
							<li>Implemented a new design language in the form of a web toolkit for Dell based on Bootstrap and
	created productiorready JavaScript and modern HTML5/CSS3</li>
							<li>Collaborated with many different lead software engineers and front end developers to create
			cohesive software that fit the various team’s needs across internal departments</li>
							<li>Created prototype web applications to showcase the new design tools and how to use the new
	design language</li>
							<li>Co-developed the public facing website for displaying the toolkit to the public </li>
						</ul>
					</div>
					
					<div class="information-section-container-inner wow fadeIn">
						<p><strong>Dell - Soft. Eng. (and) UI/UX Design & Animation</strong></p>
						<span class="information-section-exp-date">Jan 2013 - Mar 2015</span>
						<ul>
							<li>Took existing design concepts and animated user experience for executive presentations</li>
							<li>Interfaced with diverse design team including illustrators, modelers, UI designers on a daily basis</li>
							<li>Created dynamic files to allow for easier future changes/adjustments</li>
							<li>Transferred static designs into dynamic animations (Photoshop/AfterEffects) </li>
							<li>Created final animation (AfterEffects)</li>
							<li>Developed prototype Android applications to showcase functionality (Java/XML/Parse)</li>
						</ul>
					</div>

					<div class="information-section-container-inner wow fadeIn">
						<p><strong>Trapdoor Technologies - App Dev / UI Anim.</strong></p>
						<span class="information-section-exp-date">Dec 2014 - Feb 2015</span>
						<ul>
							<li>Created iOS app UI animations for the main Kickstarter video</li>
							<li>Created functional app in Unity 3D to showcase the functionality</li>
						</ul>
					</div>
					
				</div>
			</div>
			

		</div>


	</div>

<?php get_footer(); ?>
