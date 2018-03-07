<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gorki
 */
?>

<aside id="secondary" class="widget-area col-12 col-md-4 col-lg-3 order-1">
	<?php
		wp_nav_menu( array(
			'menu'            => 'aside',
			'theme_location'  => 'menu-aside',
			'container'       => 'div',
			'container_id'    => 'aside-menu',
			// 'container_class' => 'collapse navbar-collapse',
			'menu_id'         => false,
			// 'menu_class'      => 'navbar-nav nav-column nav-pills',
			'menu_class'      => 'nav flex-column nav-pills',
			'depth'           => 1,
			'fallback_cb'     => 'bs4navwalker::fallback',
			'walker'          => new bs4navwalker()
		) );
		
		if (is_active_sidebar(' sidebar-1 ')) {
			dynamic_sidebar( 'sidebar-1' );
		}
	?>
</aside><!-- #secondary -->
