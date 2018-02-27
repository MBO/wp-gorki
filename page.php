<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gorki
 */

get_header(); ?>
	<!-- page.php -->
	<?php /*
	<div id="content" class="site-content col-12 <?php is_active_sidebar( 'sidebar-1' ) ? 'col-md-8 order-3' : '' ?>">
	<div id="primary" class="content-area col-12 col-md-6 order-2">
		<main id="main" class="site-main">
		*/ ?>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

<?php /*
		</main><!-- #main -->
	</div><!-- #primary -->
	</div><!-- #content --> */ ?>
<?php
get_footer();
