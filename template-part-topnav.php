
<?php if ( has_nav_menu( 'main_menu' ) ) : ?>

    <div class=" dmbs-top-menu">
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="navbar-fly">
                <div class="container">
<!--                    <div class="row">-->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-1-collapse">
                                <span class="sr-only"><?php _e('Toggle navigation','gierojbootstrap3'); ?></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <img alt="Brand" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_male.png">
                              </a>
                        </div>

                        <?php
                        wp_nav_menu( array(
                                'theme_location'    => 'main_menu',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse navbar-1-collapse',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker())
                        );
                        ?>
<!--                    </div>-->
                </div>
            </div>
        </nav>
    </div>

<?php endif; ?>