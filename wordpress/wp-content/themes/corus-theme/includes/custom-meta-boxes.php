<?php 
/**
 *  The Custom Metadata for the Gallery Custom Post
 * 
 */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_6092d5d0ae657',
	'title' => 'Slider Images',
	'fields' => array(
		array(
			'key' => 'field_6092d6213625e',
			'label' => 'Slider Image 1',
			'name' => 'slider_image_1',
			'type' => 'image',
			'instructions' => 'Please upload an image',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'medium_large',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => 'jpg, png',
		),
		array(
			'key' => 'field_6092d69336260',
			'label' => 'Slider Image 2',
			'name' => 'slider_image_2',
			'type' => 'image',
			'instructions' => 'Please upload an image',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'medium_large',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => 'jpg, png',
		),
		array(
			'key' => 'field_6092d69536261',
			'label' => 'Slider Image 3',
			'name' => 'slider_image_3',
			'type' => 'image',
			'instructions' => 'Please upload an image',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'medium_large',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
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
	'hide_on_screen' => array(
		0 => 'the_content',
		1 => 'excerpt',
	),
	'active' => true,
	'description' => 'Silder Image',
));

endif;