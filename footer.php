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
		<a class="email-link" href="mailto:max@manifolddigital.com">max@manifolddigital.com</a>
		<p class="footer-description">Manifold Digital is the programmed pixels of Max McKinney combining design and development.</p>
	</div>

	<ul class="site-outside-links">
		<li><a href="https://github.com/ManifoldDigital" target="_blank"><i class="fab fa-lg fa-github"></i></a></li>
		<li><a href="https://twitter.com/manifolddigi" target="_blank"><i class="fab fa-lg fa-twitter"></i></a></li>
		<li><a href="https://www.linkedin.com/in/mckinneymax" target="_blank"><i class="fab fa-lg fa-linkedin"></i></a></li>
		<li><a href="http://stackoverflow.com/users/964148/manifolddigital" target="_blank"><i class="fab fa-lg fa-stack-overflow"></i></a></li>
	</ul>

</footer>

<!-- jQuery -->
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<?php wp_footer(); ?>

<!-- Masonry -->
<script src="<?php bloginfo('template_url'); ?>/js/salvattore.min.js" ></script>
<!-- Bootstrap JS -->
<script src="<?php bloginfo('template_url'); ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- WOWjs -->
 <script src="http://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js">‌​</script><script>new WOW().init();</script>
<!-- Main -->
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

</body>
</html>
