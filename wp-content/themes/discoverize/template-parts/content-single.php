<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Popperscores
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<p class="entry-meta">
			<?php discoverize_posted_on(); ?>			
			<?php discoverize_entry_footer(); ?>
		</p>
		<p class="entry-info">		
			
		</p>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'discoverize' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<!-- currently not needed -->
	<!-- <footer class="entry-footer">
		
	</footer> --><!-- .entry-footer -->
</article><!-- #post-## -->