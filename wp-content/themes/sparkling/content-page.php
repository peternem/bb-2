<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package sparkling
 */
?>

<div class="post-inner-content">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="col-md-8 left-col">
		<header class="entry-header page-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header><!-- .entry-header -->
		
		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'sparkling' ),
					'after'  => '</div>',
				) );
			?>
		<?php
		  // Checks if this is homepage to enable homepage widgets
		  if ( is_front_page() ) :
		    get_sidebar( 'home' );
		  endif;
		?>
		</div><!-- .entry-content -->
		<?php edit_post_link( __( 'Edit', 'sparkling' ), '<footer class="entry-footer"><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span></footer>' ); ?>
	</div>
	<div class="col-md-4 right-col"><?php the_post_thumbnail( 'sparkling-featured', array( 'class' => 'single-featured img-responsive' )); ?></div>
	</article><!-- #post-## -->
</div>