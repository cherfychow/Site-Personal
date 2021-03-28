<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cher Chow
 * @subpackage clean field studio
 */

get_header(); ?>

<div id="content">
            
          <?php if ( have_posts() ) : ?>

          <?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() ); ?>
          
            <div class="post">
                <h3 class="post-title"><?php the_title(); ?></h3>
                    <?php the_content(); ?>
            </div>    
            
           <?php endwhile; ?>
            <!-- End of the main loop -->

            <?php else : ?>
            <p><?php _e('Sorry, there is nothing here at the moment!'); ?></p>
            <?php endif; ?>
         
</div>
<?php get_footer(); ?>