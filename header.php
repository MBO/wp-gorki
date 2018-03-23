<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gorki
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php include "sidebar-mobile.php"; ?>
<div id="page" class="site bg-light">
	<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'gorki' ); ?></a>

	<header id="masthead" class="site-header navbar-static-top d-print-none" role="banner">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 box-shadow">
			<div class="container">
				<span class="d-block-inline d-lg-none">
					<button class="btn btn-link pl-0" type="button" id="mobile-menu-toggler">
						<span class="navbar-toggler-icon"></span>
					</button>
				</span>
				
				<a class="site-title navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><strong><?php bloginfo( 'name' ); ?></strong></a>

				<?php
				wp_nav_menu( array(
					'menu'            => 'top',
					'theme_location'  => 'menu-top',
					'container'       => 'div',
					'container_id'    => 'top-menu',
					'container_class' => 'collapse navbar-collapse',
					'menu_id'         => false,
					'menu_class'      => 'navbar-nav ml-auto',
					'depth'           => 1,
					'fallback_cb'     => 'bs4navwalker::fallback',
					'walker'          => new bs4navwalker()
				) );
				?>
			</div>
		</nav>

		<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
	</header><!-- #masthead -->

