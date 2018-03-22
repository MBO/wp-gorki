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
<?php
while ( have_posts() ) : the_post();

	get_template_part( 'template-parts/content', 'category' );

endwhile; // End of the loop.
?>
<?php
get_footer();
