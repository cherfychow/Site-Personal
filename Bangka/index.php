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
                <div class="photo-title">
                     <div class="post-title">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						 <?php the_date('F d, Y', '<h2 class="date">', '</h2>'); ?>
                     </div>
                    <div class="caption">
                        <?php the_excerpt(); ?> &nbsp;<a href="<?php the_permalink(); ?>">Read &rarr;</a>
                    </div>
                </div>
                
                <div class="photoset-grid">
                    <div class="photoset">
                            <div class="photo">
                              <?php if ( has_post_thumbnail() ) : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div>

            <!-- Text Post
            <div class="post">
                <div class="text-post">
                    <h3 class="post-title"><a href="{Permalink}">{Title}</a></h3>
                    {block:Date}<h2 class="date">{Month}&nbsp;{DayOfMonthWithZero},&nbsp;{Year}</h2>{/block:Date}
                    {Body}{block:More}<p class="more"><a href="{Permalink}" class="more">Read More</a></p>{/block:More}
                </div>
            </div>

            {/block:Photoset}
            {block:Text}
            <div class="post">
                <div class="text-post">
                    <h3 class="post-title"><a href="{Permalink}">{Title}</a></h3>
                    {block:Date}<h2 class="date">{Month}&nbsp;{DayOfMonthWithZero},&nbsp;{Year}</h2>{/block:Date}
                    {Body}
                </div>
            </div>
            {/block:Text}
          
          {/block:PermalinkPage}
          {/block:Posts}

                
            -->
            
           <?php endwhile; ?>
            <!-- End of the main loop -->

            <!-- PAGINATION -->

            <div id="pagination" class="page">
                <?php previous_posts_link( '&larr; &nbsp; Newer' ); ?>
                <?php next_posts_link( 'Older &nbsp; &rarr;' ); ?>
            </div>

            <?php else : ?>
            <p><?php _e('Sorry, there is nothing here at the moment!'); ?></p>
            <?php endif; ?>
         

<?php get_footer(); ?>