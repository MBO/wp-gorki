<div class="d-lg-none col-12 d-print-none bg-dark" id="sidebar-mobile">
  <div class="d-block clearfix">
	<button type="button" class="btn p-0 border-0 float-end" id="mobile-menu-close" aria-label="Close">
      <span aria-hidden="true" class="display-3 text-light">&times;</span>
    </button>
  </div>
  <?php
		wp_nav_menu( array(
			'menu'            => 'aside',
			'theme_location'  => 'menu-aside',
			'container'       => 'div',
			'container_id'    => 'aside-menu-mobile',
			'menu_id'         => false,
			'menu_class'      => 'nav flex-column',
			'depth'           => 0,
			'fallback_cb'     => false,
		) );
	?>
</div>
<div id="sidebar-mobile-overlay"></div>