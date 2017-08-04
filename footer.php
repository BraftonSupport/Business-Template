<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Expanse 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php if ( is_active_sidebar( 'footer-left' )||is_active_sidebar( 'footer-middle' )||is_active_sidebar( 'footer-right' ) ) :
				if ( get_theme_mod( 'expanse_logo' ) ) { ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo">
				<?php
					// set the image url
					$image_url = esc_url( get_theme_mod( 'expanse_logo' ) );
								 
					// store the image ID in a var
					$image_id = expanse_get_image_id($image_url);
								 
					// retrieve the thumbnail size of our image
					$image_thumb = wp_get_attachment_image_src($image_id, 'medium'); ?>

					<img src='<?php echo $image_thumb[0]; ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
				</a>
			<?php } else { ?>
				<p class="logo"><strong><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></strong></p>
			<?php }

			wp_nav_menu( array(
				'theme_location' => 'social',
				'menu_class'     => 'social-navigation',
			) );
			
			echo '<div class="container">';
			dynamic_sidebar( 'footer-left' );
			dynamic_sidebar( 'footer-middle' );
			dynamic_sidebar( 'footer-right' );
			echo '</div>';
		endif; ?>
			
		<div class="site-info">
			<?php
				/**
				 * Fires before the expanse footer text for footer customization.
				 *
				 * @since Expanse 1.0
				 */
				do_action( 'expanse_credits' );
			?>
			<div class="site-inner site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></a></div>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
