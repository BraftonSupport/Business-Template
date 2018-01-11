<?php
if(!session_id()) session_start();
/**
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
$style = get_field('style');
$bg = $style['background_color'];
$color = $style['color'];
$bg_image = $style['background_image'];
$video = $style['video_url'];
$class = $style['add_class'];
$other = $style['other'];
get_header(); ?>

<?php if ( $video ) {
	if (strpos($video, 'youtube.com') == true || strpos($video, '.webm') == false && strpos($video, '.mp4') == false) {
		$videoid = preg_replace('/https:\/\/www.youtube.com\/watch\?v=/', '', $video);
	?>

		<div id="video"></div>
		
		<script async src="https://www.youtube.com/iframe_api"></script>
		<script>
		 function onYouTubeIframeAPIReady() {
		  var player;
		  player = new YT.Player('video', {
		    videoId: '<?php echo $videoid; ?>', // YouTube Video ID
		    width: 1000,               // Player width (in px)
		    height: 750,              // Player height (in px)
		    playerVars: {
		      autoplay: 1,        // Auto-play the video on load
		      controls: 1,        // Show pause/play buttons in player
		      showinfo: 0,        // Hide the video title
		      modestbranding: 1,  // Hide the Youtube Logo
		      loop: 1,            // Run the video in a loop
		      fs: 1,              // Hide the full screen button
		      rel: 0,
		      playsinline: 1,
		      cc_load_policy: 1, // Hide closed captions
		      iv_load_policy: 3,  // Hide the Video Annotations
		      autohide: 0         // Hide video controls when playing
		    },
		    events: {
		      onReady: function(e) {
		        e.target.mute();
		      }
		    }
		  });
		 }
		</script>
	<?php } else {
		$vidstring = chop($video, '.webm');
		$vidstring = chop($vidstring, '.mp4'); ?>
		<button id="vidpause"><i class="fa fa-pause" aria-hidden="true"></i></button>
		<video playsinline autoplay muted loop id="video">
			<source src="<?php echo $vidstring; ?>.webm" type="video/webm">
			<source src="<?php echo $vidstring; ?>.mp4" type="video/mp4">
		</video>
	<?php }
}
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php // check if the flexible content field has rows of data
		if( have_rows('content') ):
			// loop through the rows of data
			$sectionrow=0;
			while ( have_rows('content') ) : the_row();
				if( get_row_layout() == 'visual' ):
					get_template_part( 'template-parts/content', 'visual' );
				elseif( get_row_layout() == 'list' ): 
					get_template_part( 'template-parts/content', 'list' );
				elseif( get_row_layout() == 'validation' ):
					get_template_part( 'template-parts/content', 'validation' );
				elseif( get_row_layout() == 'row' ): 
					get_template_part( 'template-parts/content', 'row' );
				elseif( get_row_layout() == 'cta' ): 
					get_template_part( 'template-parts/content', 'cta' );
				elseif( get_row_layout() == 'map' ):
					get_template_part( 'template-parts/content', 'map' );
				endif;
				$sectionrow++;
			endwhile;
		endif; ?>

		<section class="<?php if ( $class ) { echo $class; } if ( $other && in_array('full', $other) ) { echo ' full'; } ?>"
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
		<?php if ( $other && in_array('shadow', $other) ) { echo '<hr class="shadow"/>'; } ?>
		</section>

	</main><!-- .site-main -->

<?php if ( $video ) { ?>
	<script>
	var vid = document.getElementById("bgvid"),
	pauseButton = document.getElementById("vidpause");
	function vidFade() {
		vid.classList.add("stopfade");
	}
	vid.addEventListener('ended', function() {
		// only functional if "loop" is removed 
		 vid.pause();
		// to capture IE10
		vidFade();
	});
	pauseButton.addEventListener("click", function() {
		vid.classList.toggle("stopfade");
		if (vid.paused) {
	vid.play();
			pauseButton.innerHTML = '<i class="fa fa-pause" aria-hidden="true"></i>';
		} else {
			vid.pause();
			pauseButton.innerHTML = '<i class="fa fa-play" aria-hidden="true"></i>';
		}
	})
	</script>
<?php } ?>

</div><!-- .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
