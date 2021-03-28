<?php
/*
 * @package Cher Chow
 * @subpackage Bangka
 * Template Name: Masonry
 */

get_header(); ?>


<div id="content" style="width: 90%; left: 5%;">
    <div class="post">          
        <?php
        $args = array(
            'post_type'      => 'page',
            'posts_per_page' => -1,
            'post_parent'    => $post->ID, // Get this pages id and find the children
            'order'          => 'ASC',
            'orderby'        => 'rand'
         );


        $parent = new WP_Query( $args );

        if ( $parent->have_posts() ) : ?>

        <div class="grid">

           <?php while ( $parent->have_posts() ) : $parent->the_post();
                // Featured image
                 $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
           ?>
                <div class="grid-thumb">
                    <a href="<?php the_permalink()?>">
                        <img src="<?php echo $feat_image[0]; ?>" alt="" />
                    </a>
                </div><!-- /.child -->
          <?php endwhile; ?>

        </div><!-- /.child-grid -->

        <?php endif; wp_reset_query(); ?>
        
    </div>

<?php get_footer(); ?>