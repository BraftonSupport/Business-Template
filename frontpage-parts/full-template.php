<?php
/**
 * The template used for displaying full subsection of page.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Expanse 1.0
 */
$id = get_the_ID();
$url = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), "full" )[0];
$shadow = get_field('shadow', $id);
$bgc = get_field('background_color', $id);
$tc = get_field('text_color', $id);

$title = get_field('show_title');
$visual_intro_text = get_field('visual_intro_text');

$tracking = get_field('tracking');
$classes = array('full');
if (!$url && !$bgc ) {
	$classes[] = "gradient";
}
?>
<section id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?> style="<?php
	if ( !empty($url) && !$video ) { echo 'background-image: url('. $url .');'; }
	if ( !empty($bgc) && !$video ) { echo ' background-color:'. $bgc .';'; }
	if ( !empty($tc) ) { echo ' color:'. $tc .';'; }
	?>"><div class="site-inner">

	<?php
	if ( $title ) {  the_title( '<h1>', '</h1>' ); }
	if ( $visual_intro_text ) { echo $visual_intro_text; }

	wp_link_pages( array(
		'before'	  => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'expanse' ) . '</span>',
		'after'	   => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
		'pagelink'	=> '<span class="screen-reader-text">' . __( 'Page', 'expanse' ) . ' </span>%',
		'separator'   => '<span class="screen-reader-text">, </span>',
	) ); ?>

	<?php edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'expanse' ),
			get_the_title()
		),
		'<footer class="entry-footer"><span class="edit-link">',
		'</span></footer><!-- .entry-footer -->'
	); ?>
</div></section><!-- section -->
<?php if ( $shadow ) { echo '<div class="shadow"></div>'; } ?>