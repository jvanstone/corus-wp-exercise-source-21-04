<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Corus_One
 * @since Corus One 1.0
 */

 // This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}


if ( ! function_exists( 'corus_setup' ) ) {

function corus_setup() {
		/*
		* Let WordPress manage the document title.
		* This theme does not use a hard-coded <title> tag in the document head,
		* WordPress will provide it for us.
		*/
		add_theme_support( 'title-tag' );

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

        // Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		/*
			* Creating a function to create our CPT
		*/
 
function custom_post_type() {
 
	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Gallery', 'Post Type General Name', 'corusone' ),
			'singular_name'       => _x( 'Gallery', 'Post Type Singular Name', 'corusone' ),
			'menu_name'           => __( 'Gallery', 'corusone' ),
			'parent_item_colon'   => __( 'Main Gallery', 'corusone' ),
			'all_items'           => __( 'All Galleries', 'corusone' ),
			'view_item'           => __( 'View Gallery', 'corusone' ),
			'add_new_item'        => __( 'Add New Gallery', 'corusone' ),
			'add_new'             => __( 'Add New', 'corusone' ),
			'edit_item'           => __( 'Edit Gallery', 'corusone' ),
			'update_item'         => __( 'Update Gallery', 'corusone' ),
			'search_items'        => __( 'Search Gallery', 'corusone' ),
			'not_found'           => __( 'Not Found', 'corusone' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'corusone' ),
		);
		 
	// Set other options for Custom Post Type
		 
		$args = array(
			'label'               => __( 'Galleries', 'corusone' ),
			'description'         => __( 'Gallery', 'corusone' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy. 
			'taxonomies'          => array( 'genres' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/ 
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,
	 
		);
		 
		// Registering your Custom Post Type
		register_post_type( 'Gallery', $args );
	 
	}
	 
	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not 
	* unnecessarily executed. 
	*/
	 
	add_action( 'init', 'custom_post_type', 0 );

        
    }
}
add_action( 'after_setup_theme', 'corus_setup' );


/**
 * Enqueue scripts and styles.
 *
 * @since Corus One 1.0
 *
 * @return void
 */
 function corus_scripts() { 
    
    wp_enqueue_style( 'corus-one-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/components/slick-slider/slick.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'slick-css-theme', get_template_directory_uri() . '/components/slick-slider/slick-theme.css', array(), wp_get_theme()->get( 'Version' ) );
	
	wp_enqueue_script( 'jQuery' , 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', array(), wp_get_theme()->get( 'Version' ) ); 
	wp_enqueue_script( 'slick-slider', get_template_directory_uri() . '/components/slick-slider/slick.min.js', array('jQuery'), wp_get_theme()->get( 'Version' ), true );
	wp_enqueue_script( 'slick-setup', get_template_directory_uri() . '/components/slick-slider/slick-setup.js', array('jQuery'), wp_get_theme()->get( 'Version' ), true );

}
 add_action( 'wp_enqueue_scripts', 'corus_scripts' );


 /**
  * Include the Custom Meta Data for Gallery. 
  *
  */
 include 'includes/custom-meta-boxes.php';
