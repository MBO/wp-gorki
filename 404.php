<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Gorki
 */

get_header(); ?>

<div class="container mt-3 mb-3">
  <div class="row">
    <div class="col-12 col-lg-9 order-2">
			<div class="gorki-jumbotron text-end">
				<h1 class="display-4">Nie znaleziono strony</h1>
				<p class="lead text-end">Ten błąd oznacza, że strona pod podanym adresem nie istnieje.</p>
				<hr>
				<p class="text-end">Skorzystaj z menu po lewej lub kliknij:</p>
				<p class="lead text-end">
					<a class="btn btn-primary btn-lg" href="<?php echo esc_url( home_url( '/' ) ); ?>">Strona główna</a>
				</p>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php
get_footer();
