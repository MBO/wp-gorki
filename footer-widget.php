<?php

if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) {?>
  <div id="footer-widget" class="row m-0 bg-light">
      <div class="container">
          <div class="row">
              <div class="col-12 col-lg-9 offset-lg-3"><div class="row">
                  <?php if ( is_active_sidebar( 'footer-1' )) : ?>
                    <div class="col-12 col-md-4 text-dark bg-light"><?php dynamic_sidebar( 'footer-1' ); ?></div>
                  <?php endif; ?>
                  <?php if ( is_active_sidebar( 'footer-2' )) : ?>
                    <div class="col-12 col-md-4 text-dark bg-light"><?php dynamic_sidebar( 'footer-2' ); ?></div>
                  <?php endif; ?>
                  <?php if ( is_active_sidebar( 'footer-3' )) : ?>
                    <div class="col-12 col-md-4 text-dark bg-light"><?php dynamic_sidebar( 'footer-3' ); ?></div>
                  <?php endif; ?>
                </div></div>
          </div>
      </div>
  </div>

<?php }