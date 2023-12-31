<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<script> document.documentElement.className = document.documentElement.className.replace( 'no-js', 'js' ); </script>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js?ver=3.7.0"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="hfeed site">

		<header id="masthead" class="site-header">
	<?php if ( is_home() || is_front_page() ) : ?>
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</a>
	<?php else : ?>
			<p class="home-link">
				<span class="site-title"><?php bloginfo( 'name' ); ?></span>
			</p>
	<?php endif; ?>
			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation">
					<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
					<a class="screen-reader-text skip-link" href="#content">
						<?php
						/* translators: Hidden accessibility text. */
						_e( 'Skip to content', 'twentythirteen' );
						?>
					</a>
					<?php
					$i18n = array(
						'<a href="#post_en" lang="en-US" hreflang="en-US" class="en no-barba" title="English"><abbr title="English">EN</abbr></a>',
						'<a href="#post_fr" lang="fr-FR" hreflang="fr-FR" class="fr no-barba"><abbr title="Français">FR</abbr></a>',
						'<a href="#post_ja" lang="ja-JP" hreflang="ja-JP" class="ja no-barba"><abbr title="日本語">JA</abbr></a>'
					);
					echo str_replace( '</ul>', '<li id="i18n-switch">' . implode( ' || ', $i18n ) . '</li></ul>', wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_class'     => 'nav-menu',
							'menu_id'        => 'primary-menu',
							'echo'           => false
						)
					) );
					?>
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<div id="main" class="site-main">
			<div id="barba-wrapper">
				<div class="barba-container">
