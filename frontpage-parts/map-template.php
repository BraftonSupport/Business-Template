<?php
/**
 * The template used for displaying full subsection of page.
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
$shadow = get_field('shadow', $id);
$section_class = get_field('section_class', $id);
$bgc = get_field('background_color', $id);
$tc = get_field('text_color', $id);

$address1 = get_field('map_address_1');
$address2 = get_field('map_address_2');
$address3 = get_field('map_address_3');

$phone = get_field('map_phone');
$phone_2_label = get_field('map_phone_2');
$phone_2_number = get_field('map_phone_2_number');
$phone_3_label = get_field('map_phone_3');
$phone_3_number = get_field('map_phone_3_number');
$phone_4_label = get_field('map_phone_4');
$phone_4_number = get_field('map_phone_4_number');

$email = get_field('map_email');
$email2_field = get_field('map_email2_field');
$email2 = get_field('map_email2');
$email3_field = get_field('map_email3_field');
$email3 = get_field('map_email3');

$api = get_field('google_api');

$classes = array('map');
if (!$url && !$bgc ) {
	$classes[] = "gradient";
}
if ($section_class){
	$classes[] = $section_class;
}
?>
<section id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?> style="<?php
	if ( !empty($url) && !$video ) { echo 'background-image: url('. $url .');'; }
	if ( !empty($bgc) && !$video ) { echo ' background-color:'. $bgc .';'; }
	if ( !empty($tc) ) { echo ' color:'. $tc .';'; }
	?>"><div class="site-inner">

	<?php
	if ( $api ) {
		echo '<div class="container"><div class="half">';
		if ( $address1 ) {
			echo '<p><strong>Address:</strong><br/><i class="fa fa-map-marker" aria-hidden="true"></i> '.$address1;
			if ( $address2 ) {
				echo '<br/>'.$address2;
			}
			if ( $address3 ) {
				echo '<br/>'.$address3;
			}
			echo '</p>';

			$phone_2_label = get_field('map_phone_2');
			$phone_2_number = get_field('map_phone_2_number');
			$phone_3_label = get_field('map_phone_3');
			$phone_3_number = get_field('map_phone_3_number');
			$phone_4_label = get_field('map_phone_4');
			$phone_4_number = get_field('map_phone_4_number');

		} if ( $phone ) {
			echo '<p><strong>Phone:</strong><br/><a href="tel:'.$phone.'"><i class="fa fa-phone" aria-hidden="true"></i> '.$phone.'</a></p>';
		} if ( $phone_2_number ) {
			echo '<p><strong>'.$phone_2_label.':</strong><br/><a href="tel:'.$phone_2_number.'"><i class="fa fa-phone" aria-hidden="true"></i> '.$phone_2_number.'</a></p>';
		} if ( $phone_3_number ) {
			echo '<p><strong>'.$phone_3_label.':</strong><br/><a href="tel:'.$phone_3_number.'"><i class="fa fa-phone" aria-hidden="true"></i> '.$phone_3_number.'</a></p>';
		} if ( $phone_4_number ) {
			echo '<p><strong>'.$phone_4_label.':</strong><br/><a href="tel:'.$phone_4_number.'"><i class="fa fa-phone" aria-hidden="true"></i> '.$phone_4_number.'</a></p>';
		} if ( $email ) {
			echo '<p><strong>Email:</strong><br/><a href="mailto:'.$email.'"><i class="fa fa-envelope" aria-hidden="true"></i> '.$email.'</a></p>';
		} if ( $email2 ) {
			echo '<p><strong>'.$email2_field.':</strong><br/><a href="mailto:'.$email2.'"><i class="fa fa-envelope" aria-hidden="true"></i> '.$email2.'</a></p>';
		} if ( $email3 ) {
			echo '<p><strong>'.$email3_field.':</strong><br/><a href="mailto:'.$email3.'"><i class="fa fa-envelope" aria-hidden="true"></i> '.$email3.'</a></p>';
		}
		echo '</div><iframe src="//www.google.com/maps/embed/v1/place?q='.$address1;
			if ( $address2 ) { echo ' '.$address2; }
			if ( $address3 ) { echo ' '.$address3; }
		echo '&zoom=12&key='.$api.'" class="half" style="border:none;"></iframe></div>';
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
<?php if ( $shadow ) { echo '<div class="shadow"></div>'; } ?>