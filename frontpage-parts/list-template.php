<?php
/**
 * The template used for displaying custom post type subsection of page.
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

$type = get_field('type');
$custom_post = get_field('custom_post');
$recent_posts = get_field('recent_posts');
$number_of_posts = get_field('number_of_posts');

$custom_show = get_field('custom_show');
	if( $custom_show && in_array('featured', $custom_show) ) { $featured = 1; } else { $featured = 0; }
	if( $custom_show && in_array('circle', $custom_show) ) { $circle = 1; } else { $circle = 0; }
	if( $custom_show && in_array('title', $custom_show) ) { $titlepost = 1; } else { $titlepost = 0; }
	if( $custom_show && in_array('excerpt', $custom_show) ) { $excerpt = 1; } else { $excerpt = 0; }
	if( $custom_show && in_array('button', $custom_show) ) { $button = 1; } else { $button = 0; }

$extra_text = get_field('extra_text');
$text_underneath = get_field('text_underneath');
$tracking = get_field('tracking');
$classes = array('list');
if (!$url && !$bgc ) {
	$classes[] = "gradient";
}
?>
<section id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?> style="<?php
	if ( !empty($url) ) { echo 'background-image: url('. $url .');'; }
	if ( !empty($bgc) ) { echo ' background-color:'. $bgc .';'; }
	if ( !empty($tc) ) { echo ' color:'. $tc .';'; } ?>"><div class="site-inner">

	<?php if ( $title ) {  the_title( '<h1>', '</h1>' ); }
	if ( $visual_intro_text ) { echo $visual_intro_text; } ?>
	<div class="container<?php
	if ( $type=='choose' && $custom_post ) :
		echo ' count'.count($custom_post);
	elseif ($type=='recent'):
		echo ' count'.$number_of_posts;
	endif;
	?>">
	<?php if ( $type=='choose' && $custom_post ) {
		foreach( $custom_post as $post ) { ?>
			<div>
				<?php if ( $featured ){
					?>
					<div class="list-featured-image"><?php
					if ( has_post_thumbnail( $post ) ){
						echo '<a href="'.get_permalink($post->ID).'">';
						if ( $circle ) {
							echo get_the_post_thumbnail( $post, 'full', array( 'class' => 'round' ) );
						} else {
							echo get_the_post_thumbnail( $post, 'full' );
						}
						echo '</a>';
					} elseif ( wp_attachment_is_image( $post ) ) {
						if ( $circle ) {
							echo '<img src="'.wp_get_attachment_image_src( $post, 'full', true )[0].'" class="round">';
						} else {
							echo '<img src="'.wp_get_attachment_image_src( $post, 'full', true )[0].'">';
						}
					}
					?></div><?php
				}
				if ( $titlepost ){?>
					<h3><a href="<?php echo get_permalink($post->ID); ?>"><?php 
					$titlestring = get_the_title($post);
					if (strlen($titlestring) > 65){
						$titlestring = implode(' ', array_slice(explode(' ', $titlestring), 0, 10)).'...';
					}
					echo $titlestring;
					?></a></h3>
				<?php }
				if ( $excerpt ){
					$content= get_post_field('post_content', $post);
					$the_excerpt= substr($content,0,strpos($content,'.')+1);
					if (strlen($the_excerpt) > 125){
						echo '<p>'.implode(' ', array_slice(explode(' ', strip_tags($the_excerpt)), 0, 15)).'...</p>';
					} else {
						echo '<p>'.strip_tags($the_excerpt).'</p>';
					}
				}
				if ( $button ){ ?>
					<a href="<?php echo get_permalink($post->ID); ?>" class="button">Read More</a>
				<?php } ?>
			</div>
		<?php }
	}
	if ($type=='recent'){
		$recent_query = new WP_Query(
			array( 
				'post_type' => $recent_posts,
				'showposts' => $number_of_posts
			)
		);
		while ($recent_query->have_posts()) : $recent_query->the_post(); ?>
			<div class="recent-posts list-template">
				<?php if ( $featured && $circle && has_post_thumbnail() ){
					?><div class="list-post-featured-image"><?php
				 	the_post_thumbnail('mediumsquared', ['class' => 'round']);
					 ?></div><?php
				} elseif($featured && has_post_thumbnail()){
					?><div class="list-post-featured-image"><?php
					the_post_thumbnail('mediumsquared');
					?></div><?php
				}
				if ( $titlepost ){ ?>
					<h3><a href="<?php the_permalink() ?>"><?php
					$titlestring = get_the_title($post);
					if (strlen($titlestring) > 65){
						$titlestring = implode(' ', array_slice(explode(' ', $titlestring), 0, 10)).'...';
					}
					echo $titlestring;
					?></a></h3>
				<?php }
				if ( $excerpt ){
					echo '<p>';
					$content= get_the_content();
					$the_excerpt= substr($content,0,strpos($content,'.')+1);
					if (strlen($the_excerpt) > 125){
						echo implode(' ', array_slice(explode(' ', strip_tags($the_excerpt)), 0, 15)).'...';
					} else {
						echo strip_tags($the_excerpt);
					}
					echo '</p>';
				}
				if ( $button ){ ?>
					<a href="<?php echo get_permalink(); ?>" class="button">Read More</a>
				<?php } ?>
			</div>
		<?php endwhile;
		wp_reset_postdata();
	} ?>
	</div>
	<?php if ( $extra_text&&$text_underneath ) {
		echo $text_underneath;
	} ?>

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
</div></section><!-- section -->
<?php if ( $shadow ) { echo '<div class="shadow"></div>'; } ?>