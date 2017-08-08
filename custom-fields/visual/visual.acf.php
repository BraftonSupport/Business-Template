<?php
if( function_exists('acf_add_local_field_group') ):
acf_add_local_field_group(array(
	'key'	=> 'visual-section',
	'title'	=> 'Visual Section',
	'fields'=> array (
		array (
			'key' => 'field_59387dfe68d79',
			'label' => 'Show Title',
			'name' => 'show_title',
			'type' => 'checkbox',
			'choices' => array (
				'Show Title?' => 'Show Title?',
			),
			'wrapper' => array (
				'class' => 'showinput',
			),
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
			'formatting' => 'html',
			'wrapper' => array (
				'class' => 'theinput',
			),
		),
		array (
			'key' => 'field_video',
			'label' => 'Video Background',
			'name' => 'show_video',
			'type' => 'checkbox',
			'choices' => array (
				'Show Video?' => 'Show Video?',
			),
			'wrapper' => array (
				'class' => 'showinput',
			),
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
						'field' => 'field_video',
						'operator' => '==',
						'value' => 'Show Video?',
					),
				),
				'allorany' => 'all',
			),
			'wrapper' => array (
				'class' => 'theinput',
			),
		),
		array (
			'key' => 'field_intro',
			'label' => 'Intro Text',
			'name' => 'show_intro',
			'type' => 'checkbox',
			'choices' => array (
				'Show Intro?' => 'Show Intro?',
			),
			'wrapper' => array (
				'class' => 'showinput',
			),
		),
		array (
			'key' => 'field_59234d988808d',
			'label' => 'Text',
			'name' => 'visual_intro_text',
			'type' => 'wysiwyg',
			'conditional_logic' => array (
				'status' => 1,
				'rules' => array (
					array (
						'field' => 'field_intro',
						'operator' => '==',
						'value' => 'Show Intro?',
					),
				),
				'allorany' => 'all',
			),
			'toolbar' => 'full',
			'media_upload' => 'yes',
			'wrapper' => array (
				'class' => 'theinput',
			),
		),
		array (
			'key' => 'field_593825bebc0bb',
			'label' => 'Button?',
			'name' => 'visual_button',
			'type' => 'checkbox',
			'choices' => array (
				'Show button' => 'Show button',
			),
			'wrapper' => array (
				'class' => 'showinput',
			),
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
			'formatting' => 'html',
			'wrapper' => array (
				'class' => 'buttoninput',
			),
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
			'formatting' => 'html',
			'wrapper' => array (
				'class' => 'buttoninput',
			),
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
				1 => 'post',
				2 => 'page',
				3 => 'attachment',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'wrapper' => array (
				'class' => 'buttoninput',
			),
		),
		array (
			'key' => 'field_59246d9212495',
			'label' => 'Tracking',
			'name' => 'tracking',
			'type' => 'text',
			'formatting' => 'html'
		),
	),
	'location' => array (
		array (
			array (
				'param'		=> 'page_type',
				'operator'	=> '==',
				'value'		=> 'child',
				'order_no'	=> 0,
				'group_no'	=> 0,
			),
			array (
				'param'		=> 'page_template',
				'operator'	=> '==',
				'value'		=> 'subsection.php',
				'order_no'	=> 1,
				'group_no'	=> 0,
			),
		),
	),
	'menu_order'=> 1,
	'position'	=> 'normal',
	'style'		=> 'seamless'
));

endif;
?>