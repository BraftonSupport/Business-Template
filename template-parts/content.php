<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Business_Theme
 * @since businesstheme 1.0
 */
$options = get_option( 'businesstheme_options' );
$blog = $options['blog_layout'];
$thumbnail = get_the_post_thumbnail_url();
?>
<article id="post-<?php the_ID(); ?>"<?php post_class($blog); if ($blog=="rich") { ?> style="background-image: url(<?php echo $thumbnail; ?>);"<?php } ?>>

	<?php if ($blog!=="rich") { businesstheme_post_thumbnail(); } ?>

	<header class="entry-header">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span class="sticky-post"><?php _e( 'Featured', 'businesstheme' ); ?></span>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<footer class="entry-footer">
		<?php businesstheme_entry_meta(); ?>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'businesstheme' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_excerpt( sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'businesstheme' ),
				get_the_title()
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'businesstheme' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'businesstheme' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->
	
</article><!-- #post-## -->
