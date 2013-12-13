<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Silvester
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="footer-column">
			<h2>INFO</h2>
			<p> Digital Producer, dirtyface.co.uk, thestylo.co.uk</p>
		</div>
		<div class="footer-column">
			<h2>CONTACT</h2>
			<p>silvester(dot)alan(at)gmail(dot)com</p>
			<?php mailchimpSF_signup_form(); ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
  $(document).ready(function() {
    $(".spacer1").lettering();
    $(".spacer2").lettering();
  });
</script>

</body>
</html>