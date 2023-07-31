<?php


class TwentyThirteenApp {


	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'my_theme_enqueue_styles' ), 99999 );
		add_filter( 'wpcf7_autop_or_not', '__return_false' );
		add_action( 'acf/input/admin_head', array( $this, 'my_acf_admin_head' ) );
		add_action( 'after_setup_theme', array( $this, 'theme_ready' ) );

	}


	public function my_theme_enqueue_styles() {
		wp_enqueue_style( 'root-style',
			get_template_directory_uri() . '/style.css',
			array(),  // If the parent theme code has a dependency, copy it to here.
			'20230523'
		);
		wp_enqueue_style( 'my-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),  // If the parent theme code has a dependency, copy it to here.
			'202307081056'
		);
		wp_enqueue_style( 'google-fonts',
			'https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300&family=Syne:wght@600&display=swap',
			array(),
			null
		);
		# Ne pas charger certaines dépendances Gutenberg
		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style( 'wp-block-library-theme' );
		wp_dequeue_style( 'wc-blocks-style' );
		wp_dequeue_style( 'twentythirteen-block-style' );
		# Ne pas charger la police par défaut du thème
		wp_dequeue_style( 'twentythirteen-fonts' );
		$base_uri = get_stylesheet_directory_uri();
		wp_enqueue_script( 'jquery-vintage', 'https://cdn.jsdelivr.net/gh/rendro/vintageJS@1.1.5/dist/jquery.vintage.min.js', [ 'jquery' ], '1.1.5', true );
		wp_enqueue_script( 'jquery-musketeer', $base_uri . '/assets/js/jquery.musketeer-bundle.min.js', [ 'jquery-vintage' ], '0.5.0', true );
		wp_add_inline_script( 'jquery-musketeer', 'musketeer.options = { debug: /dev/.test( window.location.host ) ? 1 : 0, i18n: { base: "en-US", langs: [ "en-US", "fr-FR", "ja-JP" ], selector:".i18n-%lang", menu: "#i18n-switch" } }' );
		wp_enqueue_script( 'jquery-2013', $base_uri . '/assets/js/jquery-2013.js', [ 'jquery-musketeer' ], '0.5.0', true );
	}



	public function my_acf_admin_head() {
		echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/assets/css/acf.css" media="(min-width:1300px)" />';
	}


	public function theme_ready() {
		remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
		remove_action( 'in_admin_header', 'wp_global_styles_render_svg_filters' );
	}


}

new TwentyThirteenApp();


/* Below are global functions called in the templates */


function twentythirteen_entry_date( $display = true, $lang = 'en' ) {
	if ( $lang === 'en' ) :
		$date_format = 'F j, Y';
	elseif ( $lang === 'fr' ) :
		$date_format = 'j/n/Y';
	elseif ( $lang === 'ja' ) :
		$date_format = 'Y年n月j日';
	endif;

	$date = sprintf(
		'<span class="date"><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a></span>',
		esc_url( get_permalink() ),
		/* translators: %s: Post title. */
		esc_attr( sprintf( get_field( 'title_' . $lang ) ) ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date( $date_format ) )
	);

	if ( $display ) {
		echo $date;
	}

	return $date;
}


function twentythirteen_entry_meta( $lang = 'en' ) {
	if ( ! has_post_format( 'link' ) && 'post' === get_post_type() ) {
		twentythirteen_entry_date( true, $lang );
	}

	$categories_list = get_the_category_list( wp_get_list_item_separator() );
	if ( $categories_list ) {
		echo '<span class="categories-links">' . $categories_list . '</span>';
	}

	$tags_list = get_the_tag_list( '', wp_get_list_item_separator() );
	if ( $tags_list && ! is_wp_error( $tags_list ) ) {
		echo '<span class="tags-links">' . $tags_list . '</span>';
	}
}


/* Below are tests */

/*
add_filter( 'wp_insert_post_data' , 'filter_post_data' , 99, 2 );
function filter_post_data( $data , $postarr ) {
	$data[ 'post_content' ] = preg_replace( '#(<div class="postie-[a-zA-Z0-9-_]+">|<\/div>)#', '', $data[ 'post_content' ] );
	return $data;
}
*/