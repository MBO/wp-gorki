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
<!-- category.php -->

<div class="container mt-3 mb-3">
  <div class="row">
    <div class="col-12 col-lg-9 order-2">
      <div class="text-center">
        <h1><?php single_cat_title() ?></h1>
      </div>
<?php
while ( have_posts() ) : the_post();

	get_template_part( 'template-parts/content', 'category' );

endwhile; // End of the loop.
?>
    </div>

    <?php get_sidebar(); ?>
  </div>
</div>

<?php
get_footer();
