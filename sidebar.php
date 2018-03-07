<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gorki
 */
?>

<aside id="secondary" class="widget-area col-12 col-md-4 col-lg-3 order-1 mt-0 mb-0 d-flex">
	<div class="card mt-0 mb-0">
		<div class="card-body">
			<h5 class="card-title">Menu</h5>
			<div class="card-text">
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
				?>
			</div>
		</div>
		<?php if (is_active_sidebar(' sidebar-1 ')) { ?>
		<div class="card-body">
			<div class="card-text">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div>
		</div>
		<?php } ?>
	</div>
</aside><!-- #secondary -->
