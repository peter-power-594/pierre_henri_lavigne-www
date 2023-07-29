<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
				</div><!-- .barba-container -->
			</div><!-- #barba-wrapper -->
		</div><!-- #main -->
		<footer id="colophon" class="site-footer">
			<?php /* get_sidebar( 'main' ); */ ?>

			<div class="site-info">
				<?php do_action( 'twentythirteen_credits' ); ?>
				<?php
				if ( function_exists( 'the_privacy_policy_link' ) ) {
					the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
				}
				?>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentythirteen' ) ); ?>" class="imprint">
					<?php
					/* translators: %s: WordPress */
					printf( __( 'Proudly powered by %s', 'twentythirteen' ), 'WordPress' );
					?>
				</a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->
	<div id="secondary" class="sidebar-container" role="complementary">
		<div class="sidebar-inner">
			<div id="widget_en" class="widget-area">
				<div id="side_en">
					<div id="widget_profile_en" class="widget widget_block widget_profile">
						<div class="wp-block-group is-layout-flow">
							<div class="wp-block-group__inner-container">
								<h5 class="wp-block-heading">About</h5>
								<p>
									French web professional relocated to Japan, <br />
									I've been coding interfaces for all kind of devices. <br />
									Expert in creating fine-tuned Wordpress solutions.
								</p>
							</div>
						</div>
					</div>
					<div id="widget_oss" class="widget widget_block">
						<div class="wp-block-group is-layout-flow">
							<div class="wp-block-group__inner-container">
								<h5 class="wp-block-heading">Open Source Projets</h5>
								<ul>
									<li>Responsive Slides 2 <a href="https://github.com/peter-power-594/ResponsiveSlides.js" target="_blank" rel="noopener">GitHub</a> | <a href="https://responsive-slides.pierre-henri-lavigne.info/" target="_blank" rel="noopener">Demo</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div><!-- #side_en -->
			</div>
			<div id="widget_fr" class="widget-area">
				<div id="side_fr">
					<div id="widget_profile_fr" class="widget widget_block widget_profile">
						<div class="wp-block-group is-layout-flow">
							<div class="wp-block-group__inner-container">
								<h5 class="wp-block-heading">A propos</h5>
								<p>
									Professionel français de l'internet relocalisé au Japon, <br />
									je code des interfaces pour tous les types d'appareils électroniques.<br />
									Expert dans la création de solutions personnalisées Wordpress.
								</p>
							</div>
						</div>
					</div>
					<div id="widget_oss" class="widget widget_block">
						<div class="wp-block-group is-layout-flow">
							<div class="wp-block-group__inner-container">
								<h5 class="wp-block-heading">Projets Open Source</h5>
								<ul>
									<li>Responsive Slides 2 <a href="https://github.com/peter-power-594/ResponsiveSlides.js" target="_blank" rel="noopener">GitHub</a> | <a href="https://responsive-slides.pierre-henri-lavigne.info/" target="_blank" rel="noopener">Démo</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div><!-- #side_fr -->
			</div>
			<div id="widget_ja" class="widget-area">
				<div id="side_ja">
					<div id="widget_profile_ja" class="widget widget_block widget_profile">
						<div class="wp-block-group is-layout-flow">
							<div class="wp-block-group__inner-container">
								<h5 class="wp-block-heading">このサイトについて</h5>
							</div>
						</div>
					</div>
					<div id="widget_oss" class="widget widget_block">
						<div class="wp-block-group is-layout-flow">
							<div class="wp-block-group__inner-container">
								<h5 class="wp-block-heading">オープンソース</h5>
								<ul>
									<li>Responsive Slides 2 <a href="https://github.com/peter-power-594/ResponsiveSlides.js" target="_blank" rel="noopener">GitHub</a> | <a href="https://responsive-slides.pierre-henri-lavigne.info/" target="_blank" rel="noopener">デモ</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div><!-- #side_ja -->
				<!--div id="block-5" class="widget widget_block">
					<div class="wp-block-group is-layout-flow">
						<div class="wp-block-group__inner-container">
							<h2 class="wp-block-heading">アーカイブ</h2>
							<ul class="wp-block-archives-list wp-block-archives">
								<li><a href="http://www-dev.pierre-henri-lavigne.info/2006/05">May 2006</a></li>
							</ul>
						</div>
					</div>
				</div-->
			</div><!-- .widget-area -->
		</div><!-- .sdiebar-inner -->
	</div><!-- #secondary.sidebar-container -->

	<?php wp_footer(); ?>
</body>
</html>
