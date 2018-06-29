<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package webontheside
 */

?>

<footer class="page-footer">

	<div class="page-footer-container">
		<a class="email-link" href="mailto:hello@maxmckinney.com">hello@maxmckinney.com</a>
		<!--<p class="footer-description">I’m a developer and designer with a focus in web and native mobile development. I build cars on the side.</p>-->
	</div>

	<ul id="menu-main-menu" class="site-pages footer-pages">
		<li><a href="https://www.linkedin.com/in/mckinneymax" target="_blank"><i class="fab fa-lg fa-linkedin"></i></a></li>
		<li><a href="https://medium.com/@maxmckinney" target="_blank"><i class="fab fa-lg fa-medium"></i></a></li>
		<li><a href="https://500px.com/maxmckinney" target="_blank"><i class="fab fa-lg fa-500px"></i></a></li>
		<li><a href="https://dribbble.com/MaxMcKinney" target="_blank"><i class="fab fa-lg fa-dribbble"></i></a></li>
		<li><a href="https://twitter.com/timmaxmckinney" target="_blank"><i class="fab fa-lg fa-twitter"></i></a></li>
		<li><a href="https://github.com/MaxMcKinney" target="_blank"><i class="fab fa-lg fa-github"></i></a></li>
	</ul>

</footer>

<!-- jQuery -->
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<?php wp_footer(); ?>

 <!-- Medium Zoom -->
<script src="<?php bloginfo('template_url'); ?>/js/medium-zoom.min.js" ></script>
<!-- Main -->
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

</body>
</html>
