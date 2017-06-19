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

$address1 = get_field('map_address_1');
$address2 = get_field('map_address_2');
$address3 = get_field('map_address_3');
$phone = get_field('map_phone');
$email = get_field('map_email');
$api = get_field('google_api');
?>
<section id="post-<?php the_ID(); ?>" <?php post_class('map'); ?> style="<?php
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
				echo '<br/>'.$address2.;
			}
			if ( $address3 ) {
				echo '<br/>'.$address3;
			}
			echo '</p>';
		} if ( $phone ) {
			echo '<p><strong>Phone:</strong><br/><a tel="'.$phone.'"><i class="fa fa-phone" aria-hidden="true"></i> '.$phone.'</a></p>';
		} if ( $email ) {
			echo '<p><strong>Email:</strong><br/><a href="mailto:'.$email.'"><i class="fa fa-envelope" aria-hidden="true"></i> '.$email.'</a></p>';
		}
		echo '</div><iframe src="//www.google.com/maps/embed/v1/place?q='.$address1;
			if ( $address2 ) { echo ', '.$address2; }
			if ( $address3 ) { echo ', '.$address3; }
		echo $address3.'&zoom=12&key='.$api.'" class="half" style="border:none;"></iframe></div>';
	}

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