<?php
if(!session_id()) session_start();
/**
* Template Name: Parent page
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Business_Theme
 * @since businesstheme 1.0
 */
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php

		$args = array(
		    'post_parent' => $post->ID,
		    'post_type' => 'page',
		    'orderby' => 'menu_order',
		    'order' => 'ASC',
		    'posts_per_page' => -1
		);

		$child_query = new WP_Query( $args );
		$template_count = 0;
		?>

		<?php while ( $child_query->have_posts() ) : $child_query->the_post();

			$template = get_field('subsections_templates', get_the_ID() );
			$_SESSION['template_count']=$template_count;
			if ($template=='visual'){
				get_template_part( 'frontpage-parts/visual', 'template' );
			} elseif ($template=='list'){
				get_template_part( 'frontpage-parts/list', 'template' );
			} elseif ($template=='slider'){
				get_template_part( 'frontpage-parts/slider', 'template' );
			} elseif ($template=='half'){
				get_template_part( 'frontpage-parts/halfnhalf', 'template' );
			} elseif ($template=='full'){
				get_template_part( 'frontpage-parts/full', 'template' );
			} elseif ($template=='cta'){
				get_template_part( 'frontpage-parts/cta', 'template' );
			} elseif ($template=='map'){
				get_template_part( 'frontpage-parts/map', 'template' );
			}
			
			$template_count++;
		endwhile;
		wp_reset_query();
		?>

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>
