<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package Cher Chow
 * @subpackage Bangka
 */

get_header(); ?>

<div id="content">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
    <div class="single-post">
        
         <div class="single-post-title">
            <h3 class="single-post"><?php the_title(); ?></h3>
            <?php the_date('F d, Y', '<h2 class="date">', '</h2>'); ?>
         </div>

		<div class="single-post-content">
				<?php the_content(); ?>
		</div>
        
	</div>
    
    <?php endwhile; ?>
            <!-- End of the main loop -->
     <?php else : ?>
    <p><?php _e('Sorry, there is nothing here at the moment!'); ?></p>
    <?php endif; ?>
    


<?php get_footer(); ?>