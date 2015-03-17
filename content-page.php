<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Silvester
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->
</article><!-- #post-## -->
