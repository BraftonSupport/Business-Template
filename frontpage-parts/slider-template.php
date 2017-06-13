<?php
/**
 * Slider subsection of page.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Expanse 1.0
 */

$id = get_the_ID();
$number = $id;
$url = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), "full" )[0];
$shadow = get_field('shadow', $id);
$bgc = get_field('background_color', $id);
$tc = get_field('text_color', $id);

$title = get_field('show_title');
$visual_intro_text = get_field('visual_intro_text');

$slider_type = get_field('slider_type');
$custom_slider_post = get_field('custom_slider_post');
$recent_slider = get_field('recent_slider_posts');
$slider_button = get_field('slider_read_more');
$number = get_field('slider_number_of_posts');

$tracking = get_field('tracking');
?>

<section id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="<?php
	if ( !empty($url) ) { echo 'background-image: url('. $url .');'; }
	if ( !empty($bgc) ) { echo ' background-color:'. $bgc .';'; }
	if ( !empty($tc) ) { echo ' color:'. $tc .';'; }
	?>">
	<?php if ( $title ) {  the_title( '<h1>', '</h1>' ); }
	if ( $visual_intro_text ) { echo $visual_intro_text; } ?>
<div class="slider">
	<span class="quotes">&ldquo;</span>
	<div class="slick">
		<?php if ( $slider_type=='choose' && $custom_slider_post ) {
			foreach( $custom_slider_post as $post ) { ?>
				<div>
					<?php
						$name = get_field('name', $post);
						$position = get_field('position', $post);
						$company = get_field('company', $post);
						$location = get_field('location', $post);
						$excerpt= get_post_field('post_content', $post);

						echo '<h4>';
						if (strlen($excerpt) > 135){
							echo implode(' ', array_slice(explode(' ', strip_tags($excerpt)), 0, 26)).'...';
						} else {
							echo strip_tags($excerpt);
						}
						echo '</h4><p class="testimonial">';
						if ($name) { echo '<span class="testimonial-name">'.$name.'</span>'; }
						if ($position) { echo '<span class="testimonial-position">'.$position.'</span>'; }
						if ($company) { echo '<span class="testimonial-company">'.$company.'</span>'; }
						if ($location) { echo '<span class="testimonial-location">'.$location.'</span>'; }
						echo '</p>';

					if ( $slider_button ){ ?>
						<a href="<?php echo get_permalink($post->ID); ?>" class="button">Read More</a>
					<?php } ?>
				</div>
			<?php }
		}
		elseif ($slider_type=='recent'){
			query_posts(array(
				'post_type' => $recent_slider,
				'showposts' => $number
			) );  
			while (have_posts()) : the_post(); ?>
				<div><?php
						$name = get_field('name', $post);
						$position = get_field('position', $post);
						$company = get_field('company', $post);
						$location = get_field('location', $post);
						$excerpt= get_post_field('post_content', $post);

						echo '<h4>';
						$excerpt= get_the_content();
						if (strlen($excerpt) > 135){
							echo implode(' ', array_slice(explode(' ', strip_tags($excerpt)), 0, 26)).'...';
						} else {
							echo strip_tags($excerpt);
						}
						echo '</h4><p class="testimonial">';
						if ($name) { echo '<span class="testimonial-name">'.$name.'</span>'; }
						if ($position) { echo '<span class="testimonial-position">'.$position.'</span>'; }
						if ($company) { echo '<span class="testimonial-company">'.$company.'</span>'; }
						if ($location) { echo '<span class="testimonial-location">'.$location.'</span>'; }
						echo '</p>';

				if ( $slider_button ){ ?>
					<a href="<?php echo get_permalink(); ?>" class="button">Read More</a>
				<?php } ?>

				</div>
			<?php endwhile;
			wp_reset_query();
		} ?>
	</div><span class="quotes">&rdquo;</span>
	<div class="toolbar"></div>

</div>
	<?php
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'expanse' ),
				get_the_title()
			),
			'<footer class="entry-footer"><span class="edit-link">',
			'</span></footer><!-- .entry-footer -->',
			$number
		);
	?>
</section><!-- section -->
<?php if ( $shadow ) { echo '<div class="shadow"></div>'; } ?>