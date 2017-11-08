<?php
/**
 * The template used for displaying visual subsection of page.
 *
 * @package WordPress
 * @subpackage Business_Theme
 * @since Business Theme 1.0
 */
if(!session_id()) session_start();
$template_count = $_SESSION['template_count'];
$id = get_the_ID();
$number = $id;

$url = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), "full" )[0];
$other = get_field('other', $id);
$section_class = get_field('section_class', $id);
$bgc = get_field('background_color', $id);
$tc = get_field('text_color', $id);

$video = get_field('video');

$title = get_field('show_title');
$titletext = ($template_count==0)?'<h1>'.get_field('subsection_title').'</h1>':'<h2>'.get_field('subsection_title').'</h2>';
$visual_intro_text = get_field('visual_intro_text');

$visual_button = get_field('visual_button');
$visual_button_text = get_field('visual_button_text');
$visual_button_link = get_field('visual_button_link');
$visual_button_class = get_field('visual_button_classes');
$tracking = get_field('tracking');

$classes = array('visual');
if ($section_class){
	$classes[] = $section_class;
}
if (!$url && !$bgc ) {
	$classes[] = "gradient";
}
if ( $other && in_array('fullscreen', $other) ) {
	$classes[] = "fullscreen";
}
?>
<section id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?> style="<?php
	if ( !empty($url) && !$video ) { echo 'background-image: url('. $url .');'; }
	if ( !empty($bgc) && !$video ) { echo ' background-color:'. $bgc .';'; }
	if ( !empty($tc) ) { echo ' color:'. $tc .';'; }
	?>">

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
	} ?><div class="site-inner">
	
	<?php
	if ( $title ) { echo $titletext; }
	if ( $visual_intro_text ) { echo $visual_intro_text; }
	if ( $visual_button ) {
		echo '<a href="'.$visual_button_link.'" class="button '.$visual_button_class.'">'.$visual_button_text.'</a>';
	}

	wp_link_pages( array(
		'before'	  => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'businesstheme' ) . '</span>',
		'after'	   => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
		'pagelink'	=> '<span class="screen-reader-text">' . __( 'Page', 'businesstheme' ) . ' </span>%',
		'separator'   => '<span class="screen-reader-text">, </span>',
	) );
	wp_reset_query();
	?>

	<?php edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'businesstheme' ),
			get_the_title()
		),
		'<footer class="entry-footer"><span class="edit-link">',
		'</span></footer><!-- .entry-footer -->',
		$number
	); ?>
</div></section><!-- section -->
<?php if ( $other && in_array('shadow', $other) ) { echo '<div class="shadow"></div>'; } ?>
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