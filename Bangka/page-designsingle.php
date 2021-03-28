<?php
/*
 * @package Cher Chow
 * @subpackage Bangka
 * Template Name: Design work single
 */

get_header(); ?>
<style>
    .design-right p {display: none;}
    .about-content figure img, .about-content figure {display: none;}
    .design-right figure, .design-right figure img {display: block; max-width: 100%;}
    figure {margin: 20px 0;}
    @media screen and (min-width: 850px) {
    div.design-right
        {width: 55%;
        top: 0;
        float: right;
        text-align: left;
        height: auto;
        display: block;
        font-size: 16px;
        margin: 0;
        z-index: 40;}
    
    div.design-left
        {width: 40%!important;
        top: 0!important;
        float: left;
        display: block;
        padding: 0;
        margin: 0 5% 0 0;
        z-index: 50;
        }
        
        h3 {font-size: 7vw!important}
    }
    
    @media screen and (max-width: 850px) {
        div.post-title h3, div.post-title {text-align: left!important;}
    }
</style>

<div id="content">
    <div class="post">
    <?php if ( have_posts() ) : ?>

  <?php
    // Start the loop.
    while ( have_posts() ) : the_post(); ?>
            
    <!-- Left Column-->
    <div class="design-left">
        <div class="post-title">
            <h3 style="mix-blend-mode: normal; color:#000000;"><?php the_title(); ?></h3>
        </div>
         <h2 style="margin-bottom: 30px; margin-top: 0;">
             <?php foreach((get_the_category()) as $category){
                echo $category->name."<br>";
                }	?>
         </h2>

         <p>
         <?php $content = get_the_content();
            $content = preg_replace("/<img[^>]+\>/i", "", $content); 		  
            $content = apply_filters('the_content', $content);
            $content = str_replace(']]>', ']]>', $content);
            echo $content; ?>
         </p>
    </div>
    
    <!-- Right Column, Images-->
        
    <div class="design-right">
        <?php the_content(); ?> <!-- only images-->
    </div>
    
<?php endwhile; ?>
            <!-- End of the main loop -->

            <?php else : ?>
            <p><?php _e('Sorry, there is nothing here at the moment!'); ?></p>
            <?php endif; ?>
</div>
 
<div class="post" style="min-height: 50px;"></div>


<?php get_footer(); ?>