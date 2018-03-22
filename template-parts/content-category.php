<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gorki
 */

?>
<!-- content-category.php -->
<article id="post-<?php the_ID(); ?>" <?php
 post_class("entry-content card border-left-0 border-right-0 round-0 mb-3 ");
?>>

  <div class="card-body">
  <div class="card-title">
    <?php the_title( '<h1 class="entry-title display-3">', '</h1>' ); ?>
  </div>
  <div class="card-text">
  <?php
    the_content();

    wp_link_pages( array(
      'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gorki' ),
      'after'  => '</div>',
    ) );
  ?>
  </div>
  </div>
</article><!-- #post-<?php the_ID(); ?> .entry-content -->

<!-- /content-category.php -->