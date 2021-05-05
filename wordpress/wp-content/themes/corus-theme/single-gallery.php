<?php 
/**
 *  Template Name: Gallery Images
 * 
 */
get_header();


$args = array( 'post_type' => 'gallery', 'posts_per_page' => 10 );
$the_query = new WP_Query( $args ); 
?>

<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<h2><?php the_title(); ?></h2>
<div class="entry-content">
    <div class="container">
        <div class="single-item" >
            <?php 
            $image = get_field('field_6092d6213625e');
            $image2 = get_field('field_6092d69336260');
            $image3 = get_field('field_6092d69536261');

            ?>
            <div> <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
            <div> <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
            <div> <img src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
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
