<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package discoverize
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php discoverize_posted_on(); ?>
			<?php discoverize_entry_footer(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			// original full length display
			// the_content( sprintf(
			// 	wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'discoverize' ), array( 'span' => array( 'class' => array() ) ) ),
			// 	the_title( '<span class="screen-reader-text">"', '"</span>', false )
			// ) );

			the_excerpt();

			// pagination turned off
			// wp_link_pages( array(
			// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'discoverize' ),
			// 	'after'  => '</div>',
			// ) );
		?>
	</div><!-- .entry-content -->
	<div class="continue-reading">
		<a class="continue-reading-link" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
			<?php
				printf(
					wp_kses( __( 'Continue reading %s', 'discoverize' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				);
			?>
		</a>
	</div>

	<!-- currently not needed
	<footer class="entry-footer">
		
	</footer> -->
	<!-- .entry-footer -->
</article><!-- #post-## -->
