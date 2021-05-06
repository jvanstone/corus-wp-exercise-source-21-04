<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package  CorusOne
* @subpackage Corus_One
* @since Corus One 1.0
*/

get_header();


if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();
			 	
    // Get the current post type

		get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
	}


	_e( '<h2><a href="' . get_permalink(5) . '">Go to Gallery</a></h2>' , 'corusone' );

} else {

	// If no content, include the "No posts found" template.
	get_template_part( 'template-parts/content/content-none' );

}


get_footer();