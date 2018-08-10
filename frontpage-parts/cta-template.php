<?php
/**
 * The template used for displaying cta subsection of page.
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


$titletext = ($template_count==0)?'<h1>'.get_field('subsection_title').'</h1>':'<h2>'.get_field('subsection_title').'</h2>';$title = get_field('show_title');
$visual_intro_text = get_field('visual_intro_text');

$visual_button = get_field('visual_button');
$visual_button_text = get_field('visual_button_text');
$visual_button_link = get_field('visual_button_link');
$visual_button_class = get_field('visual_button_classes');
$tracking = get_field('tracking');

$classes = array('cta');
if ($section_class){
	$classes[] = $section_class;
}
if (!$url && !$bgc && !$url ) {
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
	?>"><div class="container site-inner">

	<?php
	if ( $title ) { echo $titletext; }
	if ( $visual_intro_text ) {
		if ( $visual_button ) { echo '<div class="hasbutton">'; }
		echo $visual_intro_text;
		if ( $visual_button ) { echo '</div>'; }
	}
	if ( $visual_button ) {
		echo '<a href="'.$visual_button_link.'" class="button '.$visual_button_class;
		if ( !$title || !$visual_intro_text ) {
			echo ' centered';
		}
		echo '">'.$visual_button_text.'</a>';
	}

	wp_link_pages( array(
		'before'	  => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'businesstheme' ) . '</span>',
		'after'	   => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
		'pagelink'	=> '<span class="screen-reader-text">' . __( 'Page', 'businesstheme' ) . ' </span>%',
		'separator'   => '<span class="screen-reader-text">, </span>',
	) );
	wp_reset_query();
	?>
	</div>

	<?php edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'businesstheme' ),
			get_the_title()
		),
		'<footer class="entry-footer"><span class="edit-link">',
		'</span></footer><!-- .entry-footer -->',
		$number
	); ?></section><!-- section -->
<?php if ( $other && in_array('shadow', $other) ) { echo '<div class="shadow"></div>'; } ?>