<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Silvester
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<a href="<?php the_permalink(); ?>">




				<div class="entry-img">
					<?php the_post_thumbnail(); ?>
				</div>
			</a>

			</article>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</div><!-- #content -->

				<?php silvester_content_nav( 'nav-below' ); ?>
	</div><!-- #primary -->

<?php get_footer(); ?>