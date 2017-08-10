<?php

	register_field_group(array (
		'id' => 'acf_testimonials',
		'title' => 'Testimonials',
		'fields' => array (
			array (
				'key' => 'field_5925fb3a1d91d',
				'label' => 'Name',
				'name' => 'name',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5925fb4e1d91e',
				'label' => 'Position',
				'name' => 'position',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5925fb581d91f',
				'label' => 'Company',
				'name' => 'company',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5925fb5f1d920',
				'label' => 'Location',
				'name' => 'location',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_website',
				'label' => 'Website',
				'name' => 'website',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'testimonials',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));

// Add News Shortcode
function testimonials_shortcode() {
	$q = new WP_Query( array('post_type' =>'testimonials', 'order' => 'DESC' ));
	if( $q->have_posts() ) {
		while( $q->have_posts() ) {
			$name = get_field('name', $post);
			$position = get_field('position', $post);
			$company = get_field('company', $post);
			$location = get_field('location', $post);
			$website = get_field('website', $post);

			$q->the_post();
			$output .= '<p>'get_the_content().'</p>';
			$output .= '<p class="testimonial">- ';
				if (!empty($name)){ $output .= $name; }
				if (!empty($position)){ $output .= ', '.$position; }
				if (!empty($company)){ $output .= ', '.$company; }
				if (!empty($location)){ $output .= ', '.$location; }
				if (!empty($website)){ $output .= '<br/>'.$website; }
			$output .= '</p>';
	    }
	}
	return $output;
}
add_shortcode( 'news', 'news_shortcode' );