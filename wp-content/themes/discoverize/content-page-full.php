<?php
/**
 * Template Name: Full Width
 *
 * @package discoverize
 */

get_header(); ?>

	<div id="primary" class="content-area content-area-full-width">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page-no-header' );

				// comments turned off for now
				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
