<?php
/**
 * The sidebar containing the main widget area
 * Changes to navbar with menu for medium and smaller screens
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gorki
 */
$menu = wp_nav_menu( array(
	'echo'            => false,
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

<div class="d-flex d-lg-none col-12 order-1 d-print-none">
  <div class="card">
	  <div class="card-body">
			<nav class="navbar navbar-dark">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#secondary-navbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="secondary-navbar">
					<?php
						wp_nav_menu( array(
							'menu'            => 'aside',
							'theme_location'  => 'menu-aside',
							'container'       => 'div',
							'container_id'    => 'aside-navbar-menu',
							'menu_id'         => false,
							'menu_class'      => 'nav nav-pills flex-column',
							'depth'           => 1,
							'fallback_cb'     => 'bs4navwalker::fallback',
							'walker'          => new bs4navwalker()
						) );
					?>
				</div>
			</nav>
		</div>
	</div>
</div>

<aside id="secondary" class="widget-area col-lg-3 order-1 mt-0 mb-0 d-none d-lg-flex">
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
