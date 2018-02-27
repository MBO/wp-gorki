<?php
  wp_nav_menu( array(
    'menu'            => 'top',
    'theme_location'  => 'menu-aside',
    'container'       => 'div',
    'container_id'    => 'primary-menu',
    'container_class' => 'collapse navbar-collapse',
    'menu_id'         => false,
    'menu_class'      => 'navbar-nav mr-auto flex-column',
    'depth'           => 2,
    'fallback_cb'     => 'bs4navwalker::fallback',
    'walker'          => new bs4navwalker()
  ) );
?>