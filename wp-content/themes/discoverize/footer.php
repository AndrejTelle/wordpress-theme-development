<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package discoverize
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="footer-header">
            <a href="../../" class="logo">
                <img alt="logo discoverize" src="/wp-content/themes/discoverize/styles/img/discoverize-icon-logo-white.png">
                <span>discoverize</span>
            </a>
            <?php
            if(is_active_sidebar('footer-header')){
            dynamic_sidebar('footer-header');
            }
            ?>
        </div>
        <div class="footer-inside">
            <div class="footer1">
                <?php
                if(is_active_sidebar('footer-sidebar-1')){
                dynamic_sidebar('footer-sidebar-1');
                }
                ?>
            </div>
            <div class="footer2">
                <?php
                if(is_active_sidebar('footer-sidebar-2')){
                dynamic_sidebar('footer-sidebar-2');
                }
                ?>
            </div>
            <div class="footer2">
                <?php
                if(is_active_sidebar('footer-sidebar-3')){
                dynamic_sidebar('footer-sidebar-3');
                }
                ?>
            </div>
            <div class="footer4">
                <?php
                if(is_active_sidebar('footer-sidebar-4')){
                dynamic_sidebar('footer-sidebar-4');
                }
                ?>
            </div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'discoverize' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'discoverize' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'discoverize' ), 'discoverize', '<a href="http://discoverize.com" rel="designer">Andrej Telle</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
