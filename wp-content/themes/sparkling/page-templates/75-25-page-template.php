<?php
/**
 * Template Name: 75/25 (no sidebar)
 *
 * This is the template that displays full width page without sidebar
 *
 * @package sparkling
 */

get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">
	  	
	  	<div class="col-md-8">
	  		
		 <?php while ( have_posts() ) : the_post(); ?>
		
		    <?php get_template_part( 'content', 'page' ); ?>
		
		  <?php endwhile; // end of the loop. ?>
	  		
	  	</div>

  		<div class="col-md-4"><img class="img-responsive" src="http://lorempixel.com/425/425/sports/" /></div>
    </main><!-- #main -->

  </div><!-- #primary -->

<?php get_footer(); ?>