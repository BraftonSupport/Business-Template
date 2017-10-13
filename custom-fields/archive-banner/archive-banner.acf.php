<?php
    register_field_group(array (
		'id' => 'acf_category',
		'title' => 'category',
		'fields' => array (
			array (
				'key' => 'field_59e0dcbe428dd',
				'label' => 'banner image',
				'name' => 'banner_image',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'ef_taxonomy',
					'operator' => '==',
					'value' => 'category',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
    ));
