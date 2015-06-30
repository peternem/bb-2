<?php
/**
 * Template Name: 75/25 (no sidebar)
 *
 * This is the template that displays full width page without sidebar
 *
 * @package sparkling
 */

get_header(); ?>
       <?php 
        // if ( is_front_page()) {
            // get_template_part('index-carousel-template');
        // }
        ?>
  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">
	  	
		 <?php while ( have_posts() ) : the_post(); ?>
		
		    <?php get_template_part( 'content', 'page' ); ?>
		
		  <?php endwhile; // end of the loop. ?>
		  <!-- Load calendar script -->
		 
    </main><!-- #main -->

  </div><!-- #primary -->

<?php get_footer(); ?>