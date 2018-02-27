<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gorki
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="img-fluid">
					<?php gorki_post_thumbnail(); ?>
				</div>
			</div>
		</div>
	</header><!-- .entry-header -->

	<div class="container mt-3 mb-3">
	  <div class="row">
		  <div class="col-12 col-md-8 order-2">
				<div class="entry-content card border-top border-bottom">
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
				</div><!-- .entry-content -->
			</div>

			<?php get_sidebar(); ?>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->

<!-- /content-page.php -->