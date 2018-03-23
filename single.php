<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Gorki
 */

get_header(); ?>
  <!-- single.php -->
<div class="container mt-3 mb-3">
  <div class="row">
    <div class="col-12 col-lg-9 order-2">
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
