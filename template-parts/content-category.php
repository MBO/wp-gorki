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
 post_class("entry-content card border-left-0 border-right-0 round-0 mb-3 page-break");
?>>
  <?php
    if ( is_singular() ) :
  ?>
    <div class="card-header p-0 rounded-0 d-print-none">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb m-0 rounded-0">
          <li class="breadcrumb-item" aria-current="page"><?php the_category(', ') ?></li>
          <li class="breadcrumb-item active"><?php the_title() ?></li>
        </ol>
      </nav>
    </div>
  <?php
    endif;
  ?>
  <div class="card-body">
    <div class="card-title text-center">
      <?php 
      if ( is_singular() ) :
      ?>
        <h1 class="">
          <!-- <a href="<?php echo esc_url( get_category_link( get_the_category()[0]->term_id ) ) ?>" class="text-dark font-weight-bold"> -->
          <?php echo get_the_category()[0]->name ?>
          <!-- </a> -->
        </h1>
        <h2 class="entry-title"><?php the_title() ?></h2>
      <?php
      else :
      ?>
        <h2 class="entry-title">
          <a href="<?php echo esc_url( get_permalink($post->ID) ) ?>" rel="bookmark" class="text-dark font-weight-bold">
            <?php the_title() ?>
          </a>
        </h2>
      <?php
      endif;
      ?>
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