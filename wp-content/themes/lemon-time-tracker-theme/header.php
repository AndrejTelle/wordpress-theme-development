<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lemon-timetracker
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!--<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'lemon-time-tracker-theme' ); ?></a>-->

	<header id="masthead" class="site-header header-wrapper" role="banner">
		<div class="header2">
            <div class="logo-wrapper">
                <a class="logo" ui-sref="track">
                    <h2 class="logo-name">lemon</h2>
                    <h2 class="tagline">timetracking made sweet</h2>
                </a>
            </div>
        </div>
        <div class="header3">
            <ul class="user-status">
                <li class="as14"><a href="https://lemontimetracker.com/#/signup" class="as141">Sign up</a></li>
                <li class="as14"><a href="https://lemontimetracker.com/#/login" class="as141">Log in</a></li>
            </ul>
        </div>

		<!-- <div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div>-->
		<!-- .site-branding -->

		<!-- <nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'lemon-time-tracker-theme' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>-->
		<!-- #site-navigation --> 
	</header><!-- #masthead -->

	<div id="content" class="site-content main-wrapper">
		<div class="main">
