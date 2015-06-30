<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sparkling
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .site-content -->

	<div id="footerArea" class="footer-area container-fluid">
		<div class="containerx footer-inner">
			<div class="row">
				<?php get_sidebar( 'footer' ); ?>
			</div>
		</div>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info containerx">
				<div class="row">
					<div class="col-lg-12">
						<?php sparkling_social(); ?>
					</div>
				</div>
				<div class="row">
					<nav role="navigation" class="col-md-12">
						<?php sparkling_footer_links(); ?>
					</nav>
				</div>
				<div class="row">
					<div class="copyright col-md-12">
						<?php echo of_get_option( 'custom_footer_text', 'sparkling' ); ?>
						<?php //sparkling_footer_info(); ?>
					</div>
				</div>
			</div><!-- .site-info -->
			<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>