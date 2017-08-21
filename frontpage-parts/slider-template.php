<?php
/**
 * Slider subsection of page.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Expanse 1.0
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

$title = get_field('show_title');
$titletext = ($template_count==0)?'<h1>'.get_field('subsection_title').'</h1>':'<h2>'.get_field('subsection_title').'</h2>';
$visual_intro_text = get_field('visual_intro_text');

$slider_type = get_field('slider_type');
$custom_slider_post = get_field('custom_slider_post');
$recent_slider = get_field('recent_slider_posts');
$slider_button = get_field('slider_read_more');
$slide_number = get_field('slider_number_of_posts');

$tracking = get_field('tracking');
$classes = array('testimonals');
if ($section_class){
	$classes[] = $section_class;
}
if (!$url && !$bgc ) {
	$classes[] = "gradient";
}
?>
<section id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?> style="<?php
	if ( !empty($url) ) { echo 'background-image: url('. $url .');'; }
	if ( !empty($bgc) ) { echo ' background-color:'. $bgc .';'; }
	if ( !empty($tc) ) { echo ' color:'. $tc .';'; }
	?>"><div class="site-inner">

	<?php if ( $title ) { echo $titletext; }
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
							$website = get_field('website', $post);
							$excerpt= get_the_excerpt();

							echo '<h4>';
							if (strlen($excerpt) > 135){
								echo implode(' ', array_slice(explode(' ', strip_tags($excerpt)), 0, 26)).'...';
							} else {
								echo strip_tags($excerpt);
							}
							echo '</h4><p class="testimonial-meta">';
							if ($name) { echo '<span class="testimonial-name">'.$name.'</span>'; }
							if ($position) { echo '<span class="testimonial-position">'.$position.'</span>'; }
							if ($company) { echo '<span class="testimonial-company">'.$company.'</span>'; }
							if ($location) { echo '<span class="testimonial-location">'.$location.'</span>'; }
							if ($website) { echo '<br/><a href="http://'.$website.'" target="_blank"><span class="testimonial-website">'.$website.'</span></a>'; }
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
					'posts_per_page' => $slide_number
				) );  
				while (have_posts()) : the_post(); ?>
					<div><?php
							$name = get_field('name', $post);
							$position = get_field('position', $post);
							$company = get_field('company', $post);
							$location = get_field('location', $post);
							$website = get_field('website', $post);
							$excerpt= get_the_excerpt();

							echo '<h4>';
							$excerpt= get_the_content();
							if (strlen($excerpt) > 135){
								echo implode(' ', array_slice(explode(' ', strip_tags($excerpt)), 0, 26)).'...';
							} else {
								echo strip_tags($excerpt);
							}
							echo '</h4><p class="testimonial-meta">';
							if ($name) { echo '<span class="testimonial-name">'.$name.'</span>'; }
							if ($position) { echo '<span class="testimonial-position">'.$position.'</span>'; }
							if ($company) { echo '<span class="testimonial-company">'.$company.'</span>'; }
							if ($location) { echo '<span class="testimonial-location">'.$location.'</span>'; }
							if ($website) { echo '<br/><a href="http://'.$website.'" target="_blank"><span class="testimonial-website">'.$website.'</span></a>'; }
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

	</div><!-- /slider -->

</div><!-- /site-inner -->
	<?php
		wp_reset_query();
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