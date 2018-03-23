<?php
/**
 * The sidebar containing the main widget area
 * Changes to navbar with menu for medium and smaller screens
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gorki
 */
?>

<aside id="secondary" class="widget-area col-lg-3 order-1 mt-0 mb-0 d-none d-lg-flex d-print-none">
	<?php
		wp_nav_menu( array(
			'menu'            => 'aside',
			'theme_location'  => 'menu-aside',
			'container'       => 'div',
			'container_id'    => 'aside-menu',
			'menu_id'         => false,
			'menu_class'      => 'nav nav-pills flex-column',
			'depth'           => 1,
			'fallback_cb'     => 'bs4navwalker::fallback',
			'walker'          => new bs4navwalker()
		) );
	?>
</aside><!-- #secondary -->
