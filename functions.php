<?php
/*
Author: Yvonne Tse
URL: http://yvonnetse.com/
Version: Business Theme 1.0
*/
define("businesstheme", dirname(__FILE__));
include_once get_template_directory().'/custom-fields/fields.php';
include businesstheme.'/inc/themesettings.php';
include businesstheme.'/inc/themewidgets.php';
include businesstheme.'/inc/template-tags.php';

/**
 * Business Theme only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'businesstheme_setup' ) ) :


function businesstheme_setup() {

	load_theme_textdomain( 'businesstheme', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'businesstheme' ),
		'social'  => __( 'Social Links Menu', 'businesstheme' ),
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

	add_editor_style( array( 'css/editor-style.css', businesstheme_fonts_url() ) );
}
endif; // businesstheme_setup
add_action( 'after_setup_theme', 'businesstheme_setup' );

function businesstheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'businesstheme_content_width', 840 );
}
add_action( 'after_setup_theme', 'businesstheme_content_width', 0 );

/**
 * Register widget areas.
 */
function businesstheme_widgets_init() {
	$options = get_option( 'businesstheme_options' );
	if ( !empty($options['es_home']) ) {
		register_sidebar( array(
			'name'		  => __( 'Home Sidebar', 'businesstheme' ),
			'id'			=> 'home-sidebar',
			'description'   => 'Appears on homepage in the sidebar.',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
	if ( !empty($options['es_page']) ) {
		register_sidebar( array(
			'name'		  => __( 'Pages Sidebar', 'businesstheme' ),
			'id'			=> 'pages-sidebar',
			'description'   => 'Appears on pages in the sidebar.',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
	if ( !empty($options['es_blog']) ) {
		register_sidebar( array(
			'name'		  => __( 'Blog Sidebar', 'businesstheme' ),
			'id'			=> 'blog-sidebar',
			'description'   => __( 'Appears on blog and blog posts in the sidebar.' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
	if ( !empty($options['es_contact']) ) {
		register_sidebar( array(
			'name'		  => __( 'Contact Page Sidebar', 'businesstheme' ),
			'id'			=> 'contact-sidebar',
			'description'   => __( 'Appears on the contact page template in the sidebar.' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
	if ( !empty($options['es_header']) ) {
		register_sidebar( array(
			'name'		  => __( 'Header', 'businesstheme' ),
			'id'			=> 'header',
			'description'   => 'This is located in the header area. Only 1 widget pls.',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
	if ( !empty($options['es_above']) ) {
		register_sidebar( array(
			'name'		  => __( 'Above Header', 'businesstheme' ),
			'id'			=> 'top',
			'description'   => 'Tippy top of the site. No more than 2 widgets pls.',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<p>',
			'after_title'   => '</p>',
		) );
	}
	if ( !empty($options['es_features']) ) {
		register_sidebar( array(
			'name'		  => __( 'Features', 'businesstheme' ),
			'id'			=> 'features',
			'description'   => 'This is located below the banner on the home page. Perfect time to break out the feature widget! Use up to 4 widgets.',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
	if ( !empty($options['es_footer']) ) {
		register_sidebar( array(
			'name'		  => __( 'Footer Left Widget', 'businesstheme' ),
			'id'			=> 'footer-left',
			'description'   => 'This is located in the footer. Use only 1 widget.',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
		register_sidebar( array(
			'name'		  => __( 'Footer Middle Widget', 'businesstheme' ),
			'id'			=> 'footer-middle',
			'description'   => 'This is located in the footer. Use only 1 widget.',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
		register_sidebar( array(
			'name'		  => __( 'Footer Right Widget', 'businesstheme' ),
			'id'			=> 'footer-right',
			'description'   => 'This is located in the footer. Use only 1 widget.',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
}
add_action( 'widgets_init', 'businesstheme_widgets_init' );

/**
 * Register Post Types.
 */
function businesstheme_posttypes_init() {
	$options = get_option( 'businesstheme_options' );

	if ( !empty($options['es_services']) ) {
		$services_labels = array(
			'name'				=> 'Services',
			'singular_name'		=> 'Service',
			'menu_name'			=> 'Services',
			'add_new_item'		=> 'Add New Service',
		);
		$services_args = array(
			'labels'			=> $services_labels,
			'menu_icon'			=> 'dashicons-star-filled',
			'public'			=> true,
			'capability_type'	=> 'page',
			'taxonomies'		=> array('services'),
			'has_archive'		=> true,
			'hierarchical'		=> true,
			'supports'			=> array( 'title', 'page-attributes', 'editor', 'thumbnail', 'revisions' )
		);
		register_post_type('services', $services_args);
	}

	if ( !empty($options['es_team']) ) {
		$team_labels = array(
			'name'				=> 'Team',
			'singular_name'		=> 'Team Member',
			'menu_name'			=> 'Team',
			'add_new_item'		=> 'Add New Team Member'
		);
		$team_args = array(
			'labels'			=> $team_labels,
			'menu_icon'			=> 'dashicons-groups',
			'public'			=> true,
			'capability_type'	=> 'page',
			'taxonomies'		=> array('team'),
			'has_archive'		=> true,
			'supports'			=> array( 'title', 'editor', 'thumbnail', 'revisions' )
		);
		register_post_type('team', $team_args);
	}

	if ( !empty($options['es_events']) ) {
		$events_labels = array(
			'name'				=> 'Events',
			'singular_name'		=> 'Event',
			'menu_name'			=> 'Events',
			'add_new_item'		=> 'Add New Event'
		);
		$events_args = array(
			'labels'			=> $events_labels,
			'menu_icon'			=> 'dashicons-calendar',
			'public'			=> true,
			'capability_type'	=> 'post',
			'taxonomies'		=> array('events'),
			'has_archive'		=> true,
			'supports'			=> array( 'title', 'editor', 'thumbnail', 'revisions' )
		);
		register_post_type('events', $events_args);
	}

	if ( !empty($options['es_testimonials']) ) {
		$testimonials_labels = array(
			'name'				=> 'Testimonials',
			'singular_name'		=> 'Testimonial',
			'menu_name'			=> 'Testimonials',
			'add_new_item'		=> 'Add New Testimonials'
		);
		$testimonials_args = array(
			'labels'			=> $testimonials_labels,
			'menu_icon'			=> 'dashicons-format-chat',
			'public'			=> true,
			'capability_type'	=> 'post',
			'taxonomies'		=> array('testimonials'),
			'has_archive'		=> true,
			'supports'			=> array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' )
		);
		register_post_type('testimonials', $testimonials_args);
	}
}
add_action( 'widgets_init', 'businesstheme_posttypes_init' );


/**
 * HOH custom excerpt
 */
function excerpt($limit) {
	return wp_trim_words(get_the_excerpt(), $limit, custom_read_more());
}


add_filter(
	'the_excerpt',
	function ($excerpt) {
		$excerpt= substr($excerpt,0,strpos($excerpt,'.')+1);
		if (strlen($excerpt) > 125){
			return implode(' ', array_slice(explode(' ', strip_tags($excerpt)), 0, 15)).'...';
		} else {
			return strip_tags($excerpt);
		}
	}
);


if ( ! function_exists( 'businesstheme_fonts_url' ) ) :
/**
 * Register Google fonts for Business Theme.
 *
 * Create your own businesstheme_fonts_url() function to override in a child theme.
 *
 * @since Business Theme 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function businesstheme_fonts_url() {
	$fonts_url = '';
	$fonts	 = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'businesstheme' ) ) {
		$fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
	}

	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'businesstheme' ) ) {
		$fonts[] = 'Montserrat:400,700';
	}

	/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'businesstheme' ) ) {
		$fonts[] = 'Inconsolata:400';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 */
function businesstheme_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'businesstheme_javascript_detection', 0 );


/**
 * Enqueue all the things!
 */
function businesstheme_enqueuingallthethings() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'businesstheme-fonts', businesstheme_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );
	wp_enqueue_style( 'font-awesome.min', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');

	// Theme stylesheet.
	wp_enqueue_style( 'businesstheme-style', get_stylesheet_directory_uri() . '/style.css' );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'businesstheme-ie', get_template_directory_uri() . '/css/ie.css', array( 'businesstheme-style' ), '20150930' );
	wp_style_add_data( 'businesstheme-ie', 'conditional', 'lt IE 10' );

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'businesstheme-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'businesstheme-style' ), '20151230' );
	wp_style_add_data( 'businesstheme-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'businesstheme-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'businesstheme-style' ), '20150930' );
	wp_style_add_data( 'businesstheme-ie7', 'conditional', 'lt IE 8' );

	// Load the html5 shiv.
	wp_enqueue_script( 'businesstheme-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
	wp_script_add_data( 'businesstheme-html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'businesstheme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151112', true );

	// Slider
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_script( 'slick.min', get_template_directory_uri() . '/js/slick.min.js', array(), '1', true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'businesstheme-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20151104' );
	}

	wp_enqueue_script( 'businesstheme-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20151204', true );

	wp_localize_script( 'businesstheme-script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'businesstheme' ),
		'collapse' => __( 'collapse child menu', 'businesstheme' ),
	) );

	$options = get_option( 'businesstheme_options' );
	if ( !empty($options['stickynav']) ) {
		wp_enqueue_script( 'sticky', get_template_directory_uri() . '/js/sticky.js', array(), '1.0.0', true );
	}
}
add_action( 'wp_enqueue_scripts', 'businesstheme_enqueuingallthethings' );


/**
 * Adds custom classes to the array of body classes.
 */
function businesstheme_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of group-blog to sites with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of sidebar to sites without active sidebar.
	if ( is_page_template('contact.php') && is_active_sidebar('contact-sidebar') ) {
		$classes[] = 'has-sidebar';
	}
	if ( is_front_page() && is_active_sidebar('home-sidebar') ) {
		$classes[] = 'has-sidebar';
	}
	if ( !is_front_page() && !is_page_template('contact.php') && is_page() && is_active_sidebar('pages-sidebar') ) {
		$classes[] = 'has-sidebar';
	}
	if ( !is_page() && is_active_sidebar('blog-sidebar') ) {
		$classes[] = 'has-sidebar';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'businesstheme_body_classes' );

/**
 * Converts a HEX value to RGB.
 */
function businesstheme_hex2rgb( $color ) {
	$color = trim( $color, '#' );

	if ( strlen( $color ) === 3 ) {
		$r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
		$g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
		$b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
	} else if ( strlen( $color ) === 6 ) {
		$r = hexdec( substr( $color, 0, 2 ) );
		$g = hexdec( substr( $color, 2, 2 ) );
		$b = hexdec( substr( $color, 4, 2 ) );
	} else {
		return array();
	}

	return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 */
function businesstheme_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	840 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';

	if ( 'page' === get_post_type() ) {
		840 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	} else {
		840 > $width && 600 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		600 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'businesstheme_content_image_sizes_attr', 10 , 2 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 */
function businesstheme_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		! is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'businesstheme_post_thumbnail_sizes_attr', 10 , 3 );

function businesstheme_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	if ( is_singular() ) :
	?>

	<div class="post-thumbnail">
		<?php the_post_thumbnail( 'full' ); ?>
	</div><!-- .post-thumbnail -->

	<?php else : ?>

	<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
		<?php the_post_thumbnail( 'full', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
	</a>

	<?php endif; // End is_singular()
}

add_action( 'after_setup_theme', 'services_thumb' );
function services_thumb() {
    add_image_size( 'mediumsquared', 300, 300, true ); // (cropped)
}


/**
 * Modifies tag cloud widget arguments to have all tags in the widget same font size.
 */
function businesstheme_widget_tag_cloud_args( $args ) {
	$args['largest'] = 1;
	$args['smallest'] = 1;
	$args['unit'] = 'em';
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'businesstheme_widget_tag_cloud_args' );

/**
 * ACF Rule Type: Parent Page Template
 *
 * @author Bill Erickson
 * @see http://www.billerickson.net/acf-custom-location-rules
 *
 * @param array $choices, all of the available rule types
 * @return array
 */
function ea_acf_rule_type_parent_page_template( $choices ) {
	$choices['Page']['parent_page_template'] = 'Parent Page Template';
	return $choices;
}
add_filter( 'acf/location/rule_types', 'ea_acf_rule_type_parent_page_template' );

/**
 * ACF Rule Values: Parent Page Template
 *
 * @author Bill Erickson
 * @see http://www.billerickson.net/acf-custom-location-rules
 *
 * @param array $choices, available rule values for this type
 * @return array
 */
function ea_acf_rule_values_parent_page_template( $choices ) {
	$templates = get_page_templates();
	foreach($templates as $k => $v) {
		$choices[$v] = $k;
	}
	return $choices;
}
add_filter( 'acf/location/rule_values/parent_page_template', 'ea_acf_rule_values_parent_page_template' );
/**
 * ACF Rule Match: Parent Page Template
 *
 * @author Bill Erickson
 * @see http://www.billerickson.net/acf-custom-location-rules
 *
 * @param boolean $match, whether the rule matches (true/false)
 * @param array $rule, the current rule you're matching. Includes 'param', 'operator' and 'value' parameters
 * @param array $options, data about the current edit screen (post_id, page_template...)
 * @return boolean $match
 */
function ea_acf_rule_match_parent_page_template( $match, $rule, $options ) {
	
	if ( ! $options['post_id'] || 'page' !== get_post_type( $options['post_id'] ) )
		return false;
		
	$parent = get_post( $options['post_id'] )->post_parent;
	if( empty( $parent ) )
		return false;
		
	$is_template_match = $rule['value'] == get_page_template_slug( $parent );
	
	if ( '==' == $rule['operator'] ) { 
		$match = $is_template_match;
	
	} elseif ( '!=' == $rule['operator'] ) {
		$match = ! $is_template_match;
	}
	
	return $match;
}
add_filter( 'acf/location/rule_match/parent_page_template', 'ea_acf_rule_match_parent_page_template', 10, 3 );

/*
 * Function for ommiting sections from search and only returning the parent
 */

 function post_res($posts, $query){
	$required_fields = array( //array of fields to check for to determine if this is a section page
		'subsections_templates'
	);
	 if($query->is_search()){ //Is this a search query
		 for($i=0;$i<count($posts);$i++){
			 $post = $posts[$i];
			if($post->post_parent){ //Does this post have a parent
				//Query for value of the template field
				$meta = get_post_meta($post->ID);
				
				if(array_intersect_key($meta, array_flip($required_fields))){ //is this a section page
					$parent = get_post($post->post_parent);				
					$parent->post_excerpt = $post->excerpt;
					$posts[$i] = $parent;	
				}
			}
		 }
		//replace the content of the post parent with the child content that match the search term
	 }
	 return $posts;
 }
 add_filter('posts_results', 'post_res', 10, 2);

 // adding dropdown for subsection templates
 	register_field_group(array (
		'id' => 'acf_subsections',
		'title' => 'Subsections',
		'fields' => array (
			array (
				'key' => 'field_592324b7840bb',
				'label' => 'Front page subsections',
				'name' => 'subsections_templates',
				'type' => 'select',
				'instructions' => 'Pick a template.',
				'choices' => array (
					'visual' => 'Visual',
					'list' => 'Services or List',
					'slider' => 'Validation',
					'half' => 'Half',
					'full' => 'Full',
					'cta' => 'CTA',
					'map' => 'Map',
				),
				'default_value' => '',
				'allow_null' => 1,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_type',
					'operator' => '==',
					'value' => 'child',
					'order_no' => 0,
					'group_no' => 0,
				),
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'subsection.php',
					'order_no' => 1,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
			),
		),
		'menu_order' => 0,
	));
	//hides content on parent page
	// register_field_group(array (
	// 	'id' => 'acf_parent',
	// 	'title' => 'parent',
	// 	'fields' => array (
	// 	),
	// 	'location' => array (
	// 		array (
	// 			array (
	// 				'param' => 'page_template',
	// 				'operator' => '==',
	// 				'value' => 'parent-page.php',
	// 				'order_no' => 0,
	// 				'group_no' => 0,
	// 			),
	// 		),
	// 	),
	// 	'options' => array (
	// 		'position' => 'normal',
	// 		'layout' => 'no_box',
	// 		'hide_on_screen' => array (
	// 			0 => 'the_content',
	// 		),
	// 	),
	// 	'menu_order' => 0,
	// ));