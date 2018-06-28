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
