<?php

if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-bar') ) {?>
    <div id="footer-widget" class="row m-0 bg-light">
        <div class="container">
        <?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>
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
        <?php endif; ?> 
        <?php if ( is_active_sidebar( 'footer-bar') ) : ?>
            <div class="row">
                <div class="col-12 col-lg-9 offset-lg-3 text-center text-muted">
                <small><?php dynamic_sidebar('footer-bar') ?></small>
                </div>
            </div>
        <?php endif; ?>
        </div>
    </div>

<?php }