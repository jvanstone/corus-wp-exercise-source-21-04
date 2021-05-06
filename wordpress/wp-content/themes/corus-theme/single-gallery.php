<?php 
/**
 *  Template Name: Gallery Images
 * 
 */
get_header();


$args = array( 'post_type' => 'gallery', 'posts_per_page' => 10 );  
$the_query = new WP_Query( $args ); 
$post_meta = get_post_custom($post->ID);
/* foreach ( $post_meta as $key => $value )
if ( $key ==  'image_1' ||  $key ==  'image_2' || $key ==  'image_3' ) { 
    echo $key . "=>" . $value . "<br />";
    foreach ( $value as $imgDiv => $imgValue ) {
        echo $imgDiv. "=>" . $imgValue . "<br />";
    }
}
 */

?>

<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<h2><?php the_title(); ?></h2>
<div class="entry-content">
    <div class="container">
        <div class="single-item" >
            <?php 
           
            $fields = get_fields( $post->ID, false );
        
            if( $fields ): ?>
    
                    <?php foreach( $fields as $name => $value ): ?>

                    <?php 
                    $image = get_field($name);
                    if( !empty( $image ) ): ?>
                      <div> <?php echo wp_get_attachment_image( $image, $size );?> </div>
                    <?php endif; 
                    ?>
                    <?php endforeach; ?>
        
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endwhile;
wp_reset_postdata(); ?>
<?php else:  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php
get_footer();
