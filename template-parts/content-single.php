<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gorki
 */

?>
<!-- content-single.php -->
<article id="post-<?php the_ID(); ?>" <?php
 post_class("entry-content card border-left-0 border-right-0 rounded-0 mb-3 page-break");
?>>
  <div class="card-header p-0 rounded-0 d-print-none">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb m-0 rounded-0">
        <li class="breadcrumb-item" aria-current="page"><?php the_category(', ') ?></li>
        <li class="breadcrumb-item active"><?php the_title() ?></li>
      </ol>
    </nav>
  </div>
  <div class="card-body">
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