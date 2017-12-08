<?php
/**
 * The template used for displaying halfnhalf subsection of page.
 *
 * @package WordPress
 * @subpackage Business_Theme
 * @since Business Theme 1.0
 */
if(!session_id()) session_start();
$template_count = $_SESSION['template_count'];
$id = get_the_ID();

$number = $id;
$url = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), "full" )[0];
$other = get_field('other', $id);
$section_class = get_field('section_class', $id);
$bgc = get_field('background_color', $id);
$tc = get_field('text_color', $id);

$title = get_field('show_title');
$titletext = ($template_count==0)?'<h1>'.get_field('subsection_title').'</h1>':'<h2>'.get_field('subsection_title').'</h2>';

$text = get_field('half_text');
$image = get_field('half_image');
$text_position = get_field('text_position');

$visual_button = get_field('visual_button');
$visual_button_text = get_field('visual_button_text');
$visual_button_link = get_field('visual_button_link');
$visual_button_class = get_field('visual_button_classes');

$tracking = get_field('tracking');
$classes = array('halfnhalf');
if ($section_class){
	$classes[] = $section_class;
}
if (!$url && !$bgc ) {
	$classes[] = "gradient";
}
if ( $other && in_array('fullscreen', $other) ) {
	$classes[] = "fullscreen";
}
?>
<section id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?> style="<?php
	if ( !empty($url) && !$video ) { echo 'background-image: url('. $url .');'; }
	if ( !empty($bgc) && !$video ) { echo ' background-color:'. $bgc .';'; }
	if ( !empty($tc) ) { echo ' color:'. $tc .';'; }
	?>"><div class="site-inner">

	<div class="container">
	<?php
	if ( $text && $text_position=='left' ) {
		echo '<div class="half">';
		if ( $title ) { echo $titletext; }
		echo $text;
		if ( $visual_button ) {
			echo '<a href="'.$visual_button_link.'" class="button '.$visual_button_class.'">'.$visual_button_text.'</a>';
		}
		echo '</div>';
	}
	if( !empty($image) ): 

		// vars
		$url = $image['url'];
		$alt = $image['alt'];

		// thumbnail
		$size = 'large';
		$thumb = $image['sizes'][ $size ];
		$width = $image['sizes'][ $size . '-width' ];
		$height = $image['sizes'][ $size . '-height' ]; ?>

		<div class="half">
			<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
		</div>

	<?php endif;

	if ( $text && $text_position=='right' ) { 
		echo '<div class="half">';
		if ( $title ) { echo $titletext; }
		echo $text;
		if ( $visual_button ) {
			echo '<a href="'.$visual_button_link.'" class="button">'.$visual_button_text.'</a>';
		}
		echo '</div>';
	} ?>
	</div>
	<?php wp_link_pages( array(
		'before'	  => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'businesstheme' ) . '</span>',
		'after'	   => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
		'pagelink'	=> '<span class="screen-reader-text">' . __( 'Page', 'businesstheme' ) . ' </span>%',
		'separator'   => '<span class="screen-reader-text">, </span>',
	) );

	wp_reset_query();
	?>

	<?php edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'businesstheme' ),
			get_the_title()
		),
		'<footer class="entry-footer"><span class="edit-link">',
		'</span></footer><!-- .entry-footer -->',
		$number
	); ?>
</div></section><!-- section -->
<?php if ( $other && in_array('shadow', $other) ) { echo '<div class="shadow"></div>'; } ?>