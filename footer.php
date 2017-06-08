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
			echo '<div class="site-inner container">';
			dynamic_sidebar( 'footer-left' );
			dynamic_sidebar( 'footer-middle' );
			dynamic_sidebar( 'footer-right' );
			echo '</div><br class="clear"/>';
		endif; ?>
			
		<div class="site-info"><div class="site-inner container">
			<?php
				/**
				 * Fires before the expanse footer text for footer customization.
				 *
				 * @since Expanse 1.0
				 */
				do_action( 'expanse_credits' );
			?>
			<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></a></span>
			<br class="clear"/>
		</div></div><!-- .site-info -->
	</footer><!-- .site-footer -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
