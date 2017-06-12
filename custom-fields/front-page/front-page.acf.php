<?php
	register_field_group(array (
		'id' => 'acf_page-sections',
		'title' => 'Page Sections',
		'fields' => array (
			array (
				'key' => 'field_592324b7840bb',
				'label' => 'Page subsections',
				'name' => 'subsections_templates',
				'type' => 'select',
				'instructions' => 'Pick a template.',
				'choices' => array (
					'visual' => 'Visual',
					'list' => 'Services or List',
					'slider' => 'Validation',
					'half' => 'Half',
				),
				'default_value' => '',
				'allow_null' => 1,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5931b7574ea13',
				'label' => 'Video Url',
				'name' => 'video',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'visual',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59387dfe68d79',
				'label' => 'Title',
				'name' => 'show_title',
				'type' => 'checkbox',
				'choices' => array (
					'Show Title?' => 'Show Title?',
				),
				'default_value' => '',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_59234d988808d',
				'label' => 'Intro Text',
				'name' => 'visual_intro_text',
				'type' => 'wysiwyg',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '!=',
							'value' => 'half',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_593825bebc0bb',
				'label' => 'Button?',
				'name' => 'visual_button',
				'type' => 'checkbox',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'visual',
						),
					),
					'allorany' => 'all',
				),
				'choices' => array (
					'Show button' => 'Show button',
				),
				'default_value' => '',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_59234671b70d7',
				'label' => 'Button Text',
				'name' => 'visual_button_text',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'visual',
						),
						array (
							'field' => 'field_593825bebc0bb',
							'operator' => '==',
							'value' => 'Show button',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => 'Read More',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59234699b70d8',
				'label' => 'Link',
				'name' => 'visual_button_link',
				'type' => 'page_link',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'visual',
						),
						array (
							'field' => 'field_593825bebc0bb',
							'operator' => '==',
							'value' => 'Show button',
						),
					),
					'allorany' => 'all',
				),
				'post_type' => array (
					0 => 'all',
					1 => 'post',
					2 => 'page',
					3 => 'attachment',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5924aaf852c2d',
				'label' => 'Type',
				'name' => 'type',
				'type' => 'radio',
				'instructions' => 'Choose from a list or # of recent posts.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'list',
						),
					),
					'allorany' => 'all',
				),
				'choices' => array (
					'choose' => 'Choose',
					'recent' => 'Recent',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => '',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_59246ad140f13',
				'label' => 'Custom post',
				'name' => 'custom_post',
				'type' => 'relationship',
				'instructions' => 'Choose up to 5.',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'list',
						),
						array (
							'field' => 'field_5924aaf852c2d',
							'operator' => '==',
							'value' => 'choose',
						),
					),
					'allorany' => 'all',
				),
				'return_format' => 'id',
				'post_type' => array (
					0 => 'post',
					1 => 'page',
					2 => 'attachment',
					3 => 'services',
					4 => 'team',
					5 => 'events',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'filters' => array (
					0 => 'post_type',
				),
				'result_elements' => array (
					0 => 'post_type',
					1 => 'post_title',
				),
				'max' => 5,
			),
			array (
				'key' => 'field_5924ab7daa9e7',
				'label' => 'Recent Posts',
				'name' => 'recent_posts',
				'type' => 'radio',
				'instructions' => 'You need to turn on the extra post types <a href="themes.php?page=expanse_options#es_services">here</a> before this section works.',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'list',
						),
						array (
							'field' => 'field_5924aaf852c2d',
							'operator' => '==',
							'value' => 'recent',
						),
					),
					'allorany' => 'all',
				),
				'choices' => array (
					'post' => 'Posts',
					'services' => 'Services',
					'team' => 'Team',
					'events' => 'Events',
					'testimonials' => 'Testimonials',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => '',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_5925e95edc812',
				'label' => 'Number of posts',
				'name' => 'number_of_posts',
				'type' => 'number',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'list',
						),
						array (
							'field' => 'field_5924aaf852c2d',
							'operator' => '==',
							'value' => 'recent',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => 3,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 1,
				'max' => 5,
				'step' => '',
			),
			array (
				'key' => 'field_59246b6966665',
				'label' => 'Show',
				'name' => 'custom_show',
				'type' => 'checkbox',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'list',
						),
					),
					'allorany' => 'all',
				),
				'choices' => array (
					'featured' => 'Featured Image',
					'circle' => 'Round the Featured Images',
					'title' => 'Title',
					'excerpt' => 'Excerpt',
					'button' => 'Read More Button',
				),
				'default_value' => '',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_59249d29a5510',
				'label' => 'Extra Text',
				'name' => 'extra_text',
				'type' => 'true_false',
				'instructions' => 'Extra paragraph underneath posts.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'list',
						),
					),
					'allorany' => 'all',
				),
				'message' => '',
				'default_value' => 0,
			),
			array (
				'key' => 'field_59249e39a5511',
				'label' => 'Text Underneath',
				'name' => 'text_underneath',
				'type' => 'wysiwyg',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'list',
						),
						array (
							'field' => 'field_59249d29a5510',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_592db5811364b',
				'label' => 'Slider Type',
				'name' => 'slider_type',
				'type' => 'select',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'slider',
						),
					),
					'allorany' => 'all',
				),
				'choices' => array (
					'choose' => 'Choose',
					'recent' => 'Recent',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_592db75d1364c',
				'label' => 'Custom Post',
				'name' => 'custom_slider_post',
				'type' => 'relationship',
				'instructions' => 'For best results use only 3.',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'slider',
						),
						array (
							'field' => 'field_592db5811364b',
							'operator' => '==',
							'value' => 'choose',
						),
					),
					'allorany' => 'all',
				),
				'return_format' => 'id',
				'post_type' => array (
					0 => 'all',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'filters' => array (
					0 => 'post_type',
				),
				'result_elements' => array (
					0 => 'post_type',
					1 => 'post_title',
				),
				'max' => 5,
			),
			array (
				'key' => 'field_592db8331364f',
				'label' => 'Recent Posts',
				'name' => 'recent_slider_posts',
				'type' => 'radio',
				'instructions' => 'You need to turn on the extra post types <a href="themes.php?page=expanse_options#es_services">here</a> before this section works.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'slider',
						),
						array (
							'field' => 'field_592db5811364b',
							'operator' => '==',
							'value' => 'recent',
						),
					),
					'allorany' => 'all',
				),
				'choices' => array (
					'post' => 'Posts',
					'services' => 'Services',
					'team' => 'Team',
					'events' => 'Events',
					'testimonials' => 'Testimonials',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => '',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_592dd7515f115',
				'label' => 'Number of Posts',
				'name' => 'slider_number_of_posts',
				'type' => 'number',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'slider',
						),
						array (
							'field' => 'field_592db5811364b',
							'operator' => '==',
							'value' => 'recent',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => 3,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 1,
				'max' => 5,
				'step' => '',
			),
			array (
				'key' => 'field_592dcb3b8bd1c',
				'label' => 'Read More',
				'name' => 'slider_read_more',
				'type' => 'checkbox',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'slider',
						),
					),
					'allorany' => 'all',
				),
				'choices' => array (
					'button' => 'Add Read More button',
				),
				'default_value' => '',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_593ec173437f2',
				'label' => 'Text',
				'name' => 'half_text',
				'type' => 'wysiwyg',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'half',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_593ec263437f3',
				'label' => 'Image',
				'name' => 'half_image',
				'type' => 'image',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'half',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'id',
				'preview_size' => 'large',
				'library' => 'all',
			),
			array (
				'key' => 'field_593ed342a9ba0',
				'label' => 'Text Position',
				'name' => 'text_position',
				'type' => 'radio',
				'instructions' => 'Default is on the right.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'half',
						),
					),
					'allorany' => 'all',
				),
				'choices' => array (
					'left' => 'left',
					'right' => 'right',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'right',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_59246d9212495',
				'label' => 'Tracking',
				'name' => 'tracking',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '!=',
							'value' => 'half',
						),
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '!=',
							'value' => 'slider',
						),
					),
					'allorany' => 'all',
				),
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
					'param' => 'page_type',
					'operator' => '==',
					'value' => 'child',
					'order_no' => 0,
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