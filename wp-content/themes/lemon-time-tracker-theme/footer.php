<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lemon-timetracker
 */

?>

	   </div>
    </div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<p class="footer1">
            <i class="footer11"></i>lemon time tracker is built with <i class="footer12"></i> and dedication by <a href="http://teamaton.com/">teamaton</a> |
            <a ui-sref="imprint">imprint</a> - <span>2016</span>
        </p>
        <!-- <div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'lemon-time-tracker-theme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'lemon-time-tracker-theme' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'lemon-time-tracker-theme' ), 'lemon-time-tracker-theme', '<a href="http://makeatrail.com" rel="designer">Andrej Telle</a>' ); ?>
		</div>
        -->
        <!-- .site-info --> 
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
