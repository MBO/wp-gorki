<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gorki
 */

?>

	<!-- </div><!- - #content -->
	<footer id="colophon" class="site-footer col-12 order-4 d-print-none">
		<?php get_template_part( 'footer-widget' ); ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
