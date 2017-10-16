<?php
	register_field_group(array (
		'id' => 'acf_frontpage-sections',
		'title' => 'Frontpage Sections',
		'fields' => array (
			array (
				'key' => 'field_59387dfe68d79',
				'label' => 'Show Title',
				'name' => 'show_title',
				'type' => 'checkbox',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '!=',
							'value' => 'map',
						),
					),
					'allorany' => 'all',
				),
				'choices' => array (
					'Show Title?' => 'Show Title?',
				),
				'default_value' => '',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_5967d139eb418',
				'label' => 'Title',
				'name' => 'subsection_title',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_59387dfe68d79',
							'operator' => '==',
							'value' => 'Show Title?',
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
				'save_format' => 'object',
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
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '!=',
							'value' => 'map',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
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
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'cta',
						),
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'half',
						),
					),
					'allorany' => 'any',
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
							'field' => 'field_593825bebc0bb',
							'operator' => '==',
							'value' => 'Show button',
						),
					),
					'allorany' => 'all',
				),
				'post_type' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_59234671b70d7aw43',
				'label' => 'Add Classes',
				'name' => 'visual_button_classes',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_593825bebc0bb',
							'operator' => '==',
							'value' => 'Show button',
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
					0 => 'search',
					1 => 'post_type',
				),
				'result_elements' => array (
					0 => 'featured_image',
					1 => 'post_type',
					2 => 'post_title',
				),
				'max' => 5,
			),
			array (
				'key' => 'field_59e12f72f80f8',
				'label' => 'taxonomy',
				'name' => 'taxonomy',
				'type' => 'taxonomy',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5924aaf852c2d',
							'operator' => '==',
							'value' => 'choose',
						),
						array (
							'field' => 'field_593ed342a9ba0',
							'operator' => '==',
							'value' => 'choose',
						),
					),
					'allorany' => 'all',
				),
				'taxonomy' => 'category',
				'field_type' => 'checkbox',
				'allow_null' => 0,
				'load_save_terms' => 0,
				'return_format' => 'id',
				'multiple' => 0,
			),
			array (
				'key' => 'field_5924ab7daa9e7',
				'label' => 'Recent Posts',
				'name' => 'recent_posts',
				'type' => 'radio',
				'instructions' => 'You need to turn on the extra post types <a href="themes.php?page=businesstheme_options#es_services">here</a> before this section works.',
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
				'instructions' => 'For best results, choose 3.',
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
					0 => 'search',
					1 => 'post_type',
				),
				'result_elements' => array (
					0 => 'featured_image',
					1 => 'post_type',
					2 => 'post_title',
				),
				'max' => 5,
			),
			array (
				'key' => 'field_592db8331364f',
				'label' => 'Recent Posts',
				'name' => 'recent_slider_posts',
				'type' => 'radio',
				'instructions' => 'You need to turn on the extra post types <a href="themes.php?page=businesstheme_options#es_services">here</a> before this section works.',
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
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '!=',
							'value' => 'map',
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
			array (
				'key' => 'field_594032598fab4',
				'label' => 'Address',
				'name' => 'map_address_1',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'map',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '123 Main St.',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59443c9e3b126',
				'label' => 'Address Line 2',
				'name' => 'map_address_2',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'map',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'Suite 123',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59443c943b125',
				'label' => 'Address Line 3',
				'name' => 'map_address_3',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'map',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'Anytown, State, 123456',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_594032ed8fab5',
				'label' => 'Phone',
				'name' => 'map_phone',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'map',
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
			array (
				'key' => 'field_59e4ec2c4bbcd',
				'label' => 'More phone numbers?',
				'name' => 'more_phone',
				'type' => 'checkbox',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'map',
						),
					),
					'allorany' => 'all',
				),
				'choices' => array (
					'More' => 'More',
				),
				'default_value' => '',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_594c32277eab3',
				'label' => 'Phone 2',
				'name' => 'map_phone_2',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_59e4ec2c4bbcd',
							'operator' => '==',
							'value' => 'More',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'Toll Free',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59e4ea88454fd',
				'label' => 'Phone 2 Number',
				'name' => 'map_phone_2_number',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_59e4ec2c4bbcd',
							'operator' => '==',
							'value' => 'More',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '123-123-1234',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59e4eaea454ff',
				'label' => 'Phone 3',
				'name' => 'map_phone_3',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_59e4ec2c4bbcd',
							'operator' => '==',
							'value' => 'More',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'Fax',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_594c323f7eab4',
				'label' => 'Phone 3 Number',
				'name' => 'map_phone_3_number',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_59e4ec2c4bbcd',
							'operator' => '==',
							'value' => 'More',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '123-123-1234',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_594c324b7eab5',
				'label' => 'Phone 4',
				'name' => 'map_phone_4',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_59e4ec2c4bbcd',
							'operator' => '==',
							'value' => 'More',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'Label',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_594c32647eab6',
				'label' => 'Phone 4 Number',
				'name' => 'map_phone_4_number',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_59e4ec2c4bbcd',
							'operator' => '==',
							'value' => 'More',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '123-123-1234',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_594033168fab6',
				'label' => 'Email',
				'name' => 'map_email',
				'type' => 'email',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'map',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'info@website.com',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_594c32e3805a6',
				'label' => 'Email 2',
				'name' => 'map_email2_field',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'map',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'Sales',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_594c3335805a7',
				'label' => 'Email 2',
				'name' => 'map_email2',
				'type' => 'email',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'map',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'sales@website.com',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_594c3346805a8',
				'label' => 'Email 3 Field',
				'name' => 'map_email3_field',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'map',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'Support',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_594c34c4805a9',
				'label' => 'Email 3',
				'name' => 'map_email3',
				'type' => 'email',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'map',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'support@website.com',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_5940343b8fab8',
				'label' => 'Google API Key',
				'name' => 'google_api',
				'type' => 'text',
				'instructions' => 'Go to <a href="https://developers.google.com/maps/documentation/embed/" target="_blank">this page</a> and get yourself a key. Select a new project then click "Enable API". Copy and paste the result here. It is free and takes less than a minute.',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_592324b7840bb',
							'operator' => '==',
							'value' => 'map',
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
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
			),
		),
		'menu_order' => 0,
	));
	//hides content on parent page
	register_field_group(array (
		'id' => 'acf_parent',
		'title' => 'parent',
		'fields' => array (
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'parent-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'high',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
			),
		),
		'menu_order' => 0, 
	));
?>