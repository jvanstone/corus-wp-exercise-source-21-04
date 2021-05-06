<?php 
/**
 *  The Custom Metadata for the Gallery Custom Post
 * 
 */

 if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_60932dddc7cfc',
		'title' => 'Images',
		'fields' => array(
			array(
				'key' => 'field_60932e06a2679',
				'label' => 'Image 1',
				'name' => 'image_1',
				'type' => 'image',
				'instructions' => 'Insert image.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'id',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => 1000,
				'max_height' => '',
				'max_size' => '',
				'mime_types' => 'jpg, png',
			),
			array(
				'key' => 'field_60932e41a267a',
				'label' => 'Image 2',
				'name' => 'image_2',
				'type' => 'image',
				'instructions' => 'Insert image.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'id',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => 1000,
				'max_height' => '',
				'max_size' => '',
				'mime_types' => 'jpg, png',
			),
			array(
				'key' => 'field_60932e4aa267b',
				'label' => 'Image 3',
				'name' => 'image_3',
				'type' => 'image',
				'instructions' => 'Insert image.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'id',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => 1000,
				'max_height' => '',
				'max_size' => '',
				'mime_types' => 'jpg, png',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'gallery',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'acf_after_title',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	
	endif;