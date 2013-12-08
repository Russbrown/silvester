<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Silvester
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="single-content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

		<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>