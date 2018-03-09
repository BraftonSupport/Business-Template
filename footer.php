<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Business_Theme
 * @since Business Theme 1.0
 */
$options = get_option( 'businesstheme_options' );
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container site-inner">
			<?php if ( get_theme_mod( 'businesstheme_footerlogo' ) ) { ?>
				<?php
					// set the image url
					$image_url = esc_url( get_theme_mod( 'businesstheme_footerlogo' ) );?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo">
					<img src='<?php echo $image_url; ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
				</a>
			<?php }

			wp_nav_menu( array(
				'theme_location' => 'social',
				'menu_class'     => 'social-navigation',
				'container'=> '',
			) ); ?>
		</div>
		<?php if ( is_active_sidebar( 'footer-left' )||is_active_sidebar( 'footer-middle' )||is_active_sidebar( 'footer-right' ) ) :
			echo '<div class="container site-inner">';
			dynamic_sidebar( 'footer-left' );
			dynamic_sidebar( 'footer-middle' );
			dynamic_sidebar( 'footer-right' );
			echo '</div>';
		endif; ?>
			
		<div class="site-info">
			<?php
				/**
				 * Fires before the Business Theme footer text for footer customization.
				 *
				 * @since Business Theme 1.0
				 */
				do_action( 'businesstheme_credits' );
			?>
			<div class="site-inner site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></a></div>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
