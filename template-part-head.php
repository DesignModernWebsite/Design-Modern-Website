<?php global $dm_settings; ?>

<div class="container-fluid dmbs-container">
<div class="row">
    
<?php if ($dm_settings['show_header'] != 0) : ?>
    <div class="container">
        <div class="row dmbs-header">

            <?php if ( get_header_image() != '' || get_header_textcolor() != 'blank') : ?>

            <?php if ( get_header_image() != '' ) : ?>
                <div class="col-md-8 col-xs-12 dmbs-header-img text-center">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" id="logo_naglowek" class="img-responsive" alt="Logo Design Modern Website"/></a>
                </div>
            <?php endif; ?>

            <div class="col-md-6 col-xs-7 dmbs-header-text">
                <?php if ( get_header_textcolor() != 'blank' ) : ?>
                    <h1><a class="custom-header-text-color" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                    <h4 class="custom-header-text-color"><?php bloginfo( 'description' ); ?></h4>
                <?php endif; ?>
                <?php else : ?>
                    <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                    <h4><?php bloginfo( 'description' ); ?></h4>
                <?php endif; ?>
            </div>

        </div>
    </div>
<?php endif; ?>
    <div class="gorna_czesc">
<?php if ($dm_settings['show_slider'] != 0) : ?>
    <?php putRevSlider("home","homepage") ?> 
<?php endif; ?>
    </div>