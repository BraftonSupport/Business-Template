<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Expanse 1.0
 */

$color = get_post_meta( get_queried_object_id(), 'textcolor', true );
$class = get_post_meta( get_queried_object_id(), 'class', true );
$bg = get_post_meta( get_queried_object_id(), 'bgcolor', true );
$shadow = get_post_meta( get_queried_object_id(), 'shadow', true );
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="<?php if ( $class ) { echo $class; } ?>"
			style="<?php
			if ( $bg ) { echo 'background-color: ' . $bg . ';'; }
			if ( $color ) { echo 'color: ' . $color . ';'; }
			?>" >
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// End of the loop.
		endwhile;
		?>
			<?php if ( $shadow ) { echo '<hr class="shadow"/>'; } ?>
		</section>

	</main><!-- .site-main -->

</div><!-- .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
