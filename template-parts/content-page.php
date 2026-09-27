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
	<?php
		gorki_post_thumbnail();
	?>
	<?php
		if ( get_the_content() ) {
	?>
	<div class="entry-content card border-left-0 border-right-0 rounded-0 border-print-0">
		<div class="card-body">
			<div class="card-text">
				<?php
					the_content();
				?>
			</div>
		</div>
	</div><!-- .entry-content -->
	<?php
		}
	?>
</article><!-- #post-<?php the_ID(); ?> -->

<!-- /content-page.php -->