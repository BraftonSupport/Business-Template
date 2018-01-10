<?php

/*Oh gosh, shortcodes! Adding buttons for shortcodes into the WP editor
-----------------------------------------------------------------*/

function the_content_filter($content) {
    $block = join("|",array("row", "half", "third", "fourth","twothirds","threefourths", "compact"));
    $rep = preg_replace("/(<p>)?\[($block)(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]",$content);
    $rep = preg_replace("/(<p>)?\[\/($block)](<\/p>|<br \/>)?/","[/$2]",$rep);
return $rep;
}
add_filter("the_content", "the_content_filter");

$shortcodesarray= array('row','half','third','fourth','twothirds','threefourths','compact');
foreach ($shortcodesarray as $shortcode) {
	add_shortcode( $shortcode, $shortcode.'_shortcode' );
}
function row_shortcode( $atts , $content = null ) {
    $a = shortcode_atts( array( 'class' => '', 'bg-color' => '', 'color' => '', 'bg-image' => '', 'padding' => ''), $atts );
	$html = '<div class="row';
		if ( !empty( $a['class'] ) ) {
			$html.= ' '.esc_attr($a['class']).'"';
		} else {
			$html.= '"';
		}
		if ( !empty( $a['bg-color']) || !empty( $a['color']) || !empty( $a['bg-image']) || !empty( $a['padding'] ) ) {
			$html.= ' style="';
		}
			if ( !empty( $a['bg-color'] ) ) {
				$html.= 'background-color:'. esc_attr($a['bg-color']).'; ';
			}
			if ( !empty( $a['color'] ) ) {
				$html.= 'color:'. esc_attr($a['color']).'; ';
			}
			if ( !empty( $a['bg-image'] ) ) {
				$html.= 'background-image:url('. esc_attr($a['bg-image']).');background-position: center; -webkit-align-self: stretch; -ms-flex-item-align: stretch; align-self: stretch;';
			}
			if ( !empty( $a['padding'] ) || $a['padding'] == '0' ) {
				$html.= 'padding:'. esc_attr($a['padding']).';';
			}
		if ( !empty( $a['bg-color'] ) || !empty( $a['color'] ) || !empty( $a['bg-image'] ) || !empty( $a['padding'] ) || $a['padding'] == '0' ) {
			$html.= '"';
		}
		$html.= '><div class="container site-inner">' . do_shortcode($content) . '</div></div>';
	return $html;
}

function half_shortcode( $atts , $content = null ) {
    $a = shortcode_atts( array( 'class' => '', 'bg-color' => '', 'color' => '', 'bg-image' => '', 'padding' => ''), $atts );
	$html = '<div class="half';
		if ( !empty( $a['class'] ) ) {
			$html.= ' '.esc_attr($a['class']).'"';
		} else {
			$html.= '"';
		}
		if ( !empty( $a['bg-color']) || !empty( $a['color']) || !empty( $a['bg-image']) || !empty( $a['padding'] ) || $a['padding'] == '0' ) {
			$html.= ' style="';
		}
			if ( !empty( $a['bg-color'] ) ) {
				$html.= 'background-color:'. esc_attr($a['bg-color']).'; ';
			}
			if ( !empty( $a['color'] ) ) {
				$html.= 'color:'. esc_attr($a['color']).'; ';
			}
			if ( !empty( $a['bg-image'] ) ) {
				$html.= 'background-image:url('. esc_attr($a['bg-image']).');background-position: center; -webkit-align-self: stretch; -ms-flex-item-align: stretch; align-self: stretch;';
			}
			if ( !empty( $a['padding'] ) || $a['padding'] == '0' ) {
				$html.= 'padding:'. esc_attr($a['padding']).';';
			}
		if ( !empty( $a['bg-color'] ) || !empty( $a['color'] ) || !empty( $a['bg-image'] ) || !empty( $a['padding'] ) || $a['padding'] == '0' ) {
			$html.= '"';
		}
		$html.= '>' . do_shortcode($content) . '</div>';
	return $html;
}

function third_shortcode( $atts , $content = null ) {
    $a = shortcode_atts( array( 'class' => '', 'bg-color' => '', 'color' => '', 'bg-image' => '', 'padding' => ''), $atts );
	$html = '<div class="third';
		if ( !empty( $a['class'] ) ) {
			$html.= ' '.esc_attr($a['class']).'"';
		} else {
			$html.= '"';
		}
		if ( !empty( $a['bg-color']) || !empty( $a['color']) || !empty( $a['bg-image']) || !empty( $a['padding'] ) || $a['padding'] == '0' ) {
			$html.= ' style="';
		}
			if ( !empty( $a['bg-color'] ) ) {
				$html.= 'background-color:'. esc_attr($a['bg-color']).'; ';
			}
			if ( !empty( $a['color'] ) ) {
				$html.= 'color:'. esc_attr($a['color']).'; ';
			}
			if ( !empty( $a['bg-image'] ) ) {
				$html.= 'background-image:url('. esc_attr($a['bg-image']).');background-position: center; -webkit-align-self: stretch; -ms-flex-item-align: stretch; align-self: stretch;';
			}
			if ( !empty( $a['padding'] ) || $a['padding'] == '0' ) {
				$html.= 'padding:'. esc_attr($a['padding']).';';
			}
		if ( !empty( $a['bg-color'] ) || !empty( $a['color'] ) || !empty( $a['bg-image'] ) || !empty( $a['padding'] ) || $a['padding'] == '0' ) {
			$html.= '"';
		}
		$html.= '>' . do_shortcode($content) . '</div>';
	return $html;
}

function fourth_shortcode( $atts , $content = null ) {
    $a = shortcode_atts( array( 'class' => '', 'bg-color' => '', 'color' => '', 'bg-image' => '', 'padding' => ''), $atts );
	$html = '<div class="fourth';
		if ( !empty( $a['class'] ) ) {
			$html.= ' '.esc_attr($a['class']).'"';
		} else {
			$html.= '"';
		}
		if ( !empty( $a['bg-color']) || !empty( $a['color']) || !empty( $a['bg-image']) || !empty( $a['padding'] ) || $a['padding'] == '0' ) {
			$html.= ' style="';
		}
			if ( !empty( $a['bg-color'] ) ) {
				$html.= 'background-color:'. esc_attr($a['bg-color']).'; ';
			}
			if ( !empty( $a['color'] ) ) {
				$html.= 'color:'. esc_attr($a['color']).'; ';
			}
			if ( !empty( $a['bg-image'] ) ) {
				$html.= 'background-image:url('. esc_attr($a['bg-image']).');background-position: center; -webkit-align-self: stretch; -ms-flex-item-align: stretch; align-self: stretch;';
			}
			if ( !empty( $a['padding'] ) || $a['padding'] == '0' ) {
				$html.= 'padding:'. esc_attr($a['padding']).';';
			}
		if ( !empty( $a['bg-color'] ) || !empty( $a['color'] ) || !empty( $a['bg-image'] ) || !empty( $a['padding'] ) || $a['padding'] == '0' ) {
			$html.= '"';
		}
		$html.= '>' . do_shortcode($content) . '</div>';
	return $html;
}

function twothirds_shortcode( $atts , $content = null ) {
    $a = shortcode_atts( array( 'class' => '', 'bg-color' => '', 'color' => '', 'bg-image' => '', 'padding' => ''), $atts );
	$html = '<div class="twothirds';
		if ( !empty( $a['class'] ) ) {
			$html.= ' '.esc_attr($a['class']).'"';
		} else {
			$html.= '"';
		}
		if ( !empty( $a['bg-color']) || !empty( $a['color']) || !empty( $a['bg-image']) || !empty( $a['padding'] ) || $a['padding'] == '0' ) {
			$html.= ' style="';
		}
			if ( !empty( $a['bg-color'] ) ) {
				$html.= 'background-color:'. esc_attr($a['bg-color']).'; ';
			}
			if ( !empty( $a['color'] ) ) {
				$html.= 'color:'. esc_attr($a['color']).'; ';
			}
			if ( !empty( $a['bg-image'] ) ) {
				$html.= 'background-image:url('. esc_attr($a['bg-image']).');background-position: center; -webkit-align-self: stretch; -ms-flex-item-align: stretch; align-self: stretch;';
			}
			if ( !empty( $a['padding'] ) || $a['padding'] == '0' ) {
				$html.= 'padding:'. esc_attr($a['padding']).';';
			}
		if ( !empty( $a['bg-color'] ) || !empty( $a['color'] ) || !empty( $a['bg-image'] ) || !empty( $a['padding'] ) || $a['padding'] == '0' ) {
			$html.= '"';
		}
		$html.= '>' . do_shortcode($content) . '</div>';
	return $html;
}
function threefourths_shortcode( $atts , $content = null ) {
    $a = shortcode_atts( array( 'class' => '', 'bg-color' => '', 'color' => '', 'bg-image' => '', 'padding' => ''), $atts );
	$html = '<div class="threefourths';
		if ( !empty( $a['class'] ) ) {
			$html.= ' '.esc_attr($a['class']).'"';
		} else {
			$html.= '"';
		}
		if ( !empty( $a['bg-color']) || !empty( $a['color']) || !empty( $a['bg-image']) || !empty( $a['padding'] ) || $a['padding'] == '0' ) {
			$html.= ' style="';
		}
			if ( !empty( $a['bg-color'] ) ) {
				$html.= 'background-color:'. esc_attr($a['bg-color']).'; ';
			}
			if ( !empty( $a['color'] ) ) {
				$html.= 'color:'. esc_attr($a['color']).'; ';
			}
			if ( !empty( $a['bg-image'] ) ) {
				$html.= 'background-image:url('. esc_attr($a['bg-image']).');background-position: center; -webkit-align-self: stretch; -ms-flex-item-align: stretch; align-self: stretch;';
			}
			if ( !empty( $a['padding'] ) || $a['padding'] == '0' ) {
				$html.= 'padding:'. esc_attr($a['padding']).';';
			}
		if ( !empty( $a['bg-color'] ) || !empty( $a['color'] ) || !empty( $a['bg-image'] ) || !empty( $a['padding'] ) || $a['padding'] == '0' ) {
			$html.= '"';
		}
		$html.= '>' . do_shortcode($content) . '</div>';
	return $html;
}

function compact_shortcode( $atts , $content = null ) {
    $a = shortcode_atts( array( 'class' => '', 'bg-color' => '', 'color' => '', 'bg-image' => '', 'padding' => ''), $atts );
	$html = '<div class="compact';
		if ( !empty( $a['class'] ) ) {
			$html.= ' '.esc_attr($a['class']).'"';
		} else {
			$html.= '"';
		}
		if ( !empty( $a['bg-color']) || !empty( $a['color']) || !empty( $a['bg-image']) || !empty( $a['padding'] ) || $a['padding'] == '0' ) {
			$html.= ' style="';
		}
			if ( !empty( $a['bg-color'] ) ) {
				$html.= 'background-color:'. esc_attr($a['bg-color']).'; ';
			}
			if ( !empty( $a['color'] ) ) {
				$html.= 'color:'. esc_attr($a['color']).'; ';
			}
			if ( !empty( $a['bg-image'] ) ) {
				$html.= 'background-image:url('. esc_attr($a['bg-image']).');background-position: center; -webkit-align-self: stretch; -ms-flex-item-align: stretch; align-self: stretch;';
			}
			if ( !empty( $a['padding'] ) || $a['padding'] == '0' ) {
				$html.= 'padding:'. esc_attr($a['padding']).';';
			}
		if ( !empty( $a['bg-color'] ) || !empty( $a['color'] ) || !empty( $a['bg-image'] ) || !empty( $a['padding'] ) || $a['padding'] == '0' ) {
			$html.= '"';
		}
		$html.= '>' . do_shortcode($content) . '</div>';
	return $html;
}

add_action( 'init', 'businesstheme_buttons' );
function businesstheme_buttons() {
    add_filter( "mce_external_plugins", "businesstheme_add_buttons" );
    add_filter( 'mce_buttons', 'businesstheme_register_buttons' );
}
function businesstheme_add_buttons( $plugin_array ) {
    $plugin_array['businesstheme'] = get_template_directory_uri() . '/inc/yt-shortcode.js';
    return $plugin_array;
}
function businesstheme_register_buttons( $buttons ) {
    array_push( $buttons, 'Shortcodes' );
    return $buttons;
}

/* Adding More Options to the Wordpress Theme Customizer.
-----------------------------------------------------------------*/

/* Adding the logo to the settings page*/

function businesstheme_site_options( $wp_customize ) {
	$wp_customize->add_setting( 'businesstheme_logo' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'businesstheme_logo', array(
	'label' => __( 'Logo' ),
	'section'  => 'title_tagline',
	'settings' => 'businesstheme_logo',
	) ) );

	$wp_customize->add_setting( 'businesstheme_footerlogo' );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'businesstheme_footerlogo', array(
	'label' => __( 'Logo in the Footer' ),
	'section'  => 'title_tagline',
	'settings' => 'businesstheme_footerlogo',
	) ) );
}

add_action('customize_register', 'businesstheme_site_options');

/* Logo size */

function businesstheme_get_image_id($image_url) {
	global $wpdb;
	$attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image_url )); 
        return $attachment[0]; 
}


/* Enqueuing STUFF!
-----------------------------------------------------------------*/

function businesstheme_scripts() {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'js', get_template_directory_uri(). '/js/js.js', array(), '1.0.0', true );
	wp_enqueue_style( 'css', get_template_directory_uri().'/inc/css.css' );
}
add_action( 'admin_init', 'businesstheme_scripts' );
?>