<?php
/**
 * The template used for displaying halfnhalf subsection of page.
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

$text = get_field('half_text');
$image = get_field('half_image');
$text_position = get_field('text_position');

$tracking = get_field('tracking');
?>
<section id="post-<?php the_ID(); ?>" <?php post_class('halfnhalf'); ?> style="<?php
	if ( !empty($url) && !$video ) { echo 'background-image: url('. $url .');'; }
	if ( !empty($bgc) && !$video ) { echo ' background-color:'. $bgc .';'; }
	if ( !empty($tc) ) { echo ' color:'. $tc .';'; }
	?>"><div class="site-inner">

	<?php
	if ( $title ) {  the_title( '<h1>', '</h1>' ); } ?>
	<div class="container">
	<?php
	if ( $text && $text_position=='left' ) { 
		echo '<div class="half">'.$text.'</div>';
	}
	if( !empty($image) ): 

		// vars
		$url = $image['url'];
		$title = $image['title'];
		$alt = $image['alt'];

		// thumbnail
		$size = 'thumbnail';
		$thumb = $image['sizes'][ $size ];
		$width = $image['sizes'][ $size . '-width' ];
		$height = $image['sizes'][ $size . '-height' ]; ?>

		<div class="half">
			<a href="<?php echo $url; ?>" title="<?php echo $title; ?>">
				<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
			</a>
		</div>

	<?php endif;

	if ( $text && $text_position=='right' ) { 
		echo $text;
	} ?>
	</div>
	<?php wp_link_pages( array(
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