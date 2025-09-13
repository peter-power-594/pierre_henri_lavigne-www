<?php


define( 'WP_RETRO_MSN_EMOJIS_UPPERCASE', 1 );
define( 'FRENCH_POST_ONLY', 'This post is only available for French readers at the moment.' );

class McLuhanApp {


	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'theme_ready' ) );

		remove_action( 'wp_head', 'feed_links_extra', 3 );
		remove_action( 'wp_head', 'feed_links', 2 );

		remove_action( 'wp_head', 'rsd_link' );
		remove_action( 'wp_head', 'wlwmanifest_link' );

		remove_action( 'wp_head', 'wp_generator' );
		remove_action( 'wp_head', 'rel_canonical' );

		remove_action( 'wp_head', 'wp_shortlink_wp_head' );
		remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
	}


	public function my_theme_custom_styles() {
		wp_enqueue_style( 'my-style', get_stylesheet_directory_uri() . '/style.css', array(), '202509131604' );
	}

	public function theme_ready() {
		if ( ! is_admin() ) :
			add_action( 'wp_enqueue_scripts', array( $this, 'my_theme_custom_styles' ), 99999 );
		endif;
		remove_action( 'template_redirect', 'wp_shortlink_header', 11 );
		remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
		remove_action( 'in_admin_header', 'wp_global_styles_render_svg_filters' );
	/*
		if ( function_exists( 'retro_msn_emojis' ) ) :
			add_filter( 'post_markdown2html', array( retro_msn_emojis(), 'parse_emoticons' ), 20, 1 );
			add_filter( 'field_markdown2html', array( retro_msn_emojis(), 'parse_emoticons' ), 20, 1 );
		endif;
	*/
	}


}

new McLuhanApp();
