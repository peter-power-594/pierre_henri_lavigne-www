<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php if ( is_single() && ! is_search() ) : ?>
	<header class="entry-header">
	<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail( 'ogimage' ); ?>
			<?php the_content(); ?>
		</div>
	<?php endif; ?>
	</header>
<?php endif; ?>

	<div id="post_en" lang="en">
		<header class="entry-header">
			<?php if ( is_singular() ) : ?>
			<h1 class="entry-title"><?php the_field( 'title_en' ); ?></h1>
			<?php else : ?>
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_field( 'title_en' ); ?></a>
			</h1>
			<?php endif; // is_singular() ?>
			<div class="entry-meta">
				<?php twentythirteen_entry_meta( 'en' ); ?>
				<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
		<div class="entry-summary">
		<?php
			if ( function_exists( 'mmd' ) ) :
				echo mmd()->markdown2html( get_field( 'excerpt_en' ) );
			else :
				echo '<p>' . get_field( 'excerpt_en' ) . '</p>';
			endif;
		?>
		</div><!-- .entry-summary -->
		<?php if ( ! is_search() && is_singular() ) : ?>
		<div class="entry-content">
			<?php
				if ( ! get_field( 'not_ready_en' ) ) : 
					the_field( 'content_en' );
				endif;
			?>
		</div><!-- .entry-content -->
		<?php endif; ?>
	</div><!-- #post_en -->

	<div id="post_fr" lang="fr">
		<header class="entry-header">
			<?php if ( is_singular() ) : ?>
			<h1 class="entry-title"><?php the_field( 'title_fr' ); ?></h1>
			<?php else : ?>
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_field( 'title_fr' ); ?></a>
			</h1>
			<?php endif; // is_singular() ?>
			<div class="entry-meta">
				<?php twentythirteen_entry_meta( 'fr' ); ?>
				<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
		<div class="entry-summary">
		<?php
			if ( function_exists( 'mmd' ) ) :
				echo mmd()->markdown2html( get_field( 'excerpt_fr' ) );
			else :
				echo '<p>' . get_field( 'excerpt_fr' ) . '</p>';
			endif;
		?>
		</div><!-- .entry-summary -->
		<?php if ( ! is_search() && is_singular() ) : ?>
		<div class="entry-content">
			<?php
				if ( ! get_field( 'not_ready_fr' ) ) : 
					the_field( 'content_fr' );
				endif;
			?>
		</div><!-- .entry-content -->
		<?php endif; ?>
	</div><!-- #post_fr -->


	<div id="post_ja" lang="ja">
		<header class="entry-header">
			<?php if ( is_singular() ) : ?>
			<h1 class="entry-title"><?php the_field( 'title_ja' ); ?></h1>
			<?php else : ?>
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_field( 'title_ja' ); ?></a>
			</h1>
			<?php endif; // is_singular() ?>
			<div class="entry-meta">
				<?php twentythirteen_entry_meta( 'ja' ); ?>
				<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
		<div class="entry-summary">
		<?php
			if ( function_exists( 'mmd' ) ) :
				echo mmd()->markdown2html( get_field( 'excerpt_ja' ) );
			else :
				echo '<p>' . get_field( 'excerpt_ja' ) . '</p>';
			endif;
		?>
		</div><!-- .entry-summary -->
		<?php if ( ! is_search() && is_singular() ) : ?>
		<div class="entry-content">
			<?php
				if ( ! get_field( 'not_ready_ja' ) ) : 
					the_field( 'content_ja' );
				endif;
			?>
		</div><!-- .entry-content -->
		<?php endif; ?>
	</div><!-- #post_ja -->

</article><!-- #post -->
