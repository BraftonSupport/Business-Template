<?php
//-- allowed tags for all these widgets
global $allowed;
$allowed = array(
	'class' => array (),
	'a' => array(
		'href' => array(),
		'class' => array(),
		'title' => array(),
		'target' => array()
	),
	'br' => array(),
	'em' => array(),
	'hr' => array(),
	'i' => array(
		'class' => array()
	),
	'img' => array(
		'class' => array(),
		'alt' => array(),
		'src' => array()
	),
	'li' => array(
		'class' => array(),
	),
	'ol' => array(),
	'p' => array(
		'class' => array()
	),
	'span' => array(
		'class' => array()
	),
	'strong' => array(),
	'sub' => array(),
	'sup' => array(),
	'u' => array(),
	'ul' => array(
		'class' => array()
	)
);

//-- HOH widget blatantly stolen from Ryan Conley, editing and css work by me.

class hohlist extends WP_Widget {

	// constructor
	function __construct() {
		parent::__construct(
		'hoh', 
		__('Headlines on Hompage', 'wp_widget_hoh'), 
		array( 'description' => __( 'Recent Posts but with more options.', 'wp_widget_hoh' ), ) 
		);
	}
	// widget form creation
	function form($instance) {

	// Check values
		if( $instance) {
			$title = esc_attr($instance['title']);
			$byline= $instance['byline'];
			$thumbnails = $instance['thumbnails'];
			$date = $instance['date'];
			$excerpt = $instance['excerpt'];
			$count = absint($instance['count']);
		} else {
			$title = '';
			$count = '';

		} ?>

	<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'wp_widget_hoh'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>
	<table width="100%"><tr><td width="50%"><input id="<?php echo $this->get_field_id('byline'); ?>" name="<?php echo $this->get_field_name('byline'); ?>" type="checkbox" <?php echo ($byline==true)?'checked': ''?> />
	<label for="<?php echo $this->get_field_id('byline'); ?>"><?php _e('Byline', 'wp_widget_hoh'); ?></label></td>
	<td><p><input  id="<?php echo $this->get_field_id('thumnails'); ?>" name="<?php echo $this->get_field_name('thumbnails'); ?>" type="checkbox" <?php echo ($thumbnails==true)?'checked': ''?> />
	<label for="<?php echo $this->get_field_id('thumbnails'); ?>"><?php _e('Thumbnails', 'wp_widget_hoh'); ?></label></td></tr>
	<tr><td><input id="<?php echo $this->get_field_id('date'); ?>" name="<?php echo $this->get_field_name('date'); ?>" type="checkbox" <?php echo ($date==true)?'checked': ''?> />
	<label for="<?php echo $this->get_field_id('date'); ?>"><?php _e('Date', 'wp_widget_hoh'); ?></label></td>
	<td><input id="<?php echo $this->get_field_id('excerpt'); ?>" name="<?php echo $this->get_field_name('excerpt'); ?>" type="checkbox" <?php echo ($excerpt==true)?'checked': ''?> />
	<label for="<?php echo $this->get_field_id('excerpt'); ?>"><?php _e('Excerpt', 'wp_widget_hoh'); ?></label></td></tr></table>
	<p><label for="<?php echo $this->get_field_id('count'); ?>"><?php _e('Number of posts:', 'wp_widget_hoh'); ?></label>
	<input id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>" type="text" value="<?php echo $count; ?>" size="1"/></p>

	<?php }

	// update widget
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		// Fields
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['byline'] = $new_instance['byline'];
		$instance['thumbnails'] = $new_instance['thumbnails'];
		$instance['date'] = $new_instance['date'];
		$instance['excerpt'] = $new_instance['excerpt'];
		$instance['count'] = strip_tags($new_instance['count']);

		return $instance;
	}

	function widget($args, $instance) {
		extract( $args );
		// these are the widget options
		$title = apply_filters('widget_title', $instance['title']);
		$byline= $instance['byline'];
		$thumbnails = $instance['thumbnails'];
		$date = $instance['date'];
		$excerpt = $instance['excerpt'];
		$count = esc_attr($instance['count']);

		echo $before_widget;
		// Display the widget
		echo '<div class="widget-text wp_widget_hoh_box">';

		// Check if title is set
		if ( $title ) {
			echo $before_title . $title . $after_title;
		}

	echo '<ul>';
	$recent = new WP_Query("posts_per_page=$count&order=DESC&orderby=post_date"); while($recent->have_posts()) : $recent->the_post();

		echo '<li>'; ?><a href="<?php echo get_permalink(); ?>">
			<?php if ($thumbnails==true):
				if ( has_post_thumbnail() && ! post_password_required() ) : ?>
					<div class="entry-thumbnail">
						<?php echo get_the_post_thumbnail(get_the_ID(), 'thumbnail'); ?>
					</div>
				<?php endif;
			endif;
			echo '<div class="text">';
			the_title(); ?></a><br />
			<?php if ($byline==true): ?><?php echo "by ".get_the_author()."<br />";?> <?php endif; ?>
			<?php if ($date==true): ?><time datetime="<?php echo date(DATE_W3C); ?>" pubdate ><?php the_time('F jS, Y') ?></time><?php endif; ?>
			<?php if($excerpt==true):?>
				<p class="excerpt"><?php echo substr(get_the_excerpt(),0,105); ?></p>
			<?php endif;
		echo'</div></li>';
	endwhile;

	echo '</ul>';
	echo '</div>';
	echo $after_widget;
	}
}

// register widget
add_action('widgets_init', create_function('', 'return register_widget("hohlist");'));




// LETS SEE IF THIS BREAKS ANYTHING
class contact extends WP_Widget {

	function __construct() {
		parent::__construct(
		'contact', 
		__('Contact Info', 'contact'), 
		array( 'description' => __( 'Contact Info widget and map.', 'contact' ), ) 
		);
	}

	function widget($args, $instance) {
		extract( $args );
		// these are the widget options
		$title = apply_filters( 'widget_title', $instance['title'] );
		$address= wp_kses($instance['address'], $allowed);
		$hours= wp_kses($instance['hours'], $allowed);
		$phone= $instance['phone'];
		$email= sanitize_email($instance['email']);

		echo $before_widget;
		// Display the widget
		echo '<div class="widget-text wp_widget_contact">';

		// Check if title is set
		if ( $title ) { echo $before_title . $title . $after_title; }
		if ( $address ) { echo '<p><i class="fa fa-map-marker"></i> '.$address.'</p>'; }
		if ( $hours ) { echo '<p><i class="fa fa-clock-o"></i> '.$hours.'</p>'; }
		if ( $phone ) { echo '<p><i class="fa fa-phone"></i> '.$phone.'</p>'; }
		if ( $email ) { echo '<p><i class="fa fa-envelope"></i> <a href="mailto:'.$email.'">'.$email.'</a></p>'; }

		echo '</div>';
		echo $after_widget;
	}
		
	// Widget Backend 
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) { $title = $instance[ 'title' ]; } else { $title = __( '', 'contact' ); }
		if ( isset( $instance[ 'address' ] ) ) { $address = $instance[ 'address' ]; } else { $address = __( '', 'contact' ); }
		if ( isset( $instance[ 'hours' ] ) ) { $hours = $instance[ 'hours' ]; } else { $hours = __( '', 'contact' ); }
		if ( isset( $instance[ 'phone' ] ) ) { $phone = $instance[ 'phone' ]; } else { $phone = __( '', 'contact' ); }
		if ( isset( $instance[ 'email' ] ) ) { $email = $instance[ 'email' ]; } else { $email = __( '', 'contact' ); }
		// Widget admin form
		?>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" /></p>

		<p><label for="<?php echo $this->get_field_id( 'address' ); ?>"><?php _e( 'Address:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'address' ); ?>" name="<?php echo $this->get_field_name( 'address' ); ?>" type="text" value="<?php echo esc_attr( $address ); ?>" /></p>

		<p><label for="<?php echo $this->get_field_id( 'hours' ); ?>"><?php _e( 'Hours:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'hours' ); ?>" name="<?php echo $this->get_field_name( 'hours' ); ?>" type="text" value="<?php echo esc_attr( $hours ); ?>" /></p>

		<p><label for="<?php echo $this->get_field_id( 'phone' ); ?>"><?php _e( 'Phone:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'phone' ); ?>" name="<?php echo $this->get_field_name( 'phone' ); ?>" type="text" value="<?php echo esc_attr( $phone ); ?>" /></p>

		<p><label for="<?php echo $this->get_field_id( 'email' ); ?>"><?php _e( 'Email:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" type="text" value="<?php echo esc_attr( $email ); ?>" /></p>

		<?php
	}
		
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['address'] = ( ! empty( $new_instance['address'] ) ) ? strip_tags( $new_instance['address'] ) : '';
		$instance['hours'] = ( ! empty( $new_instance['hours'] ) ) ? strip_tags( $new_instance['hours'] ) : '';
		$instance['phone'] = ( ! empty( $new_instance['phone'] ) ) ? strip_tags( $new_instance['phone'] ) : '';
		$instance['email'] = ( ! empty( $new_instance['email'] ) ) ? sanitize_email( $new_instance['email'] ) : '';
		return $instance;
	}
}

add_action('widgets_init', create_function('', 'return register_widget("contact");'));

?>