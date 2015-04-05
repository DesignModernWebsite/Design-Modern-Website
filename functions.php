<?php

////////////////////////////////////////////////////////////////////
// Theme Information
////////////////////////////////////////////////////////////////////

    $themename = "GierojBootstrap3";
    $developer_uri = "http://nicemoder.website";
    $shortname = "dm";
    $version = '1.0';
    load_theme_textdomain( 'gierojbootstrap3', get_template_directory() . '/languages' );

////////////////////////////////////////////////////////////////////
// include Theme-options.php for Admin Theme settings
////////////////////////////////////////////////////////////////////

   include 'theme-options.php';


////////////////////////////////////////////////////////////////////
// Enqueue Styles (normal style.css and bootstrap.css)
////////////////////////////////////////////////////////////////////
    function gierojbootstrap3_theme_stylesheets()
    {
        wp_register_style('bootstrap.css', get_template_directory_uri() . '/css/bootstrap.css', array(), '1', 'all' );
        wp_enqueue_style( 'bootstrap.css');
        wp_register_style('magnific_popup.css', get_template_directory_uri() . '/css/magnific_popup.css', array(), '1', 'all' );
        wp_enqueue_style( 'magnific_popup.css');
        wp_register_style('wlasny.css', get_template_directory_uri() . '/css/wlasny.css', array(), '1', 'all' );
        wp_enqueue_style( 'wlasny.css');
        wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), array(), '1', 'all' );
    }
    add_action('wp_enqueue_scripts', 'gierojbootstrap3_theme_stylesheets');

//Editor Style
add_editor_style('css/editor-style.css');

////////////////////////////////////////////////////////////////////
// Register Bootstrap JS with jquery
////////////////////////////////////////////////////////////////////
function gierojbootstrap3_scripts() {
    global $version;
    wp_enqueue_script('theme-js', get_template_directory_uri() . '/js/bootstrap.js',array( 'jquery' ),$version,true );
    wp_enqueue_script('wlasny-script',get_stylesheet_directory_uri() . '/js/wlasny.js',array( 'jquery' ));
    wp_enqueue_script('wlasny-script2',get_stylesheet_directory_uri() . '/js/jquery.magnific-popup.js',array( 'jquery' ));
    if ( is_front_page() ) {
        wp_enqueue_script('wlasny-script2',get_stylesheet_directory_uri() . '/js/jssor.js',array( 'jquery' ));
        wp_enqueue_script('jssor_slider',get_stylesheet_directory_uri() . '/js/jssor.slider.mini.js',array( 'jquery' ));
        wp_enqueue_script('stellar',get_stylesheet_directory_uri() . '/js/jquery.stellar.js',array( 'jquery' ));
        wp_enqueue_script('wlasny_home',get_stylesheet_directory_uri() . '/js/wlasny_home.js',array( 'jquery' ));
    }
}
add_action( 'wp_enqueue_scripts', 'gierojbootstrap3_scripts' );
////////////////////////////////////////////////////////////////////
// Add Title Parameters
////////////////////////////////////////////////////////////////////

if(!function_exists('gierojbootstrap3_wp_title')) {

    function gierojbootstrap3_wp_title( $title, $sep ) { // Taken from Twenty Twelve 1.0
        global $paged, $page;

        if ( is_feed() )
            return $title;

        // Add the site name.
        $title .= get_bloginfo( 'name' );

        // Add the site description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            $title = "$title $sep $site_description";

        // Add a page number if necessary.
        if ( $paged >= 2 || $page >= 2 )
            $title = "$title $sep " . sprintf( __( 'Page %s', 'gierojbootstrap3' ), max( $paged, $page ) );

        return $title;
    }
    add_filter( 'wp_title', 'gierojbootstrap3_wp_title', 10, 2 );

}


////////////////////////////////////////////////////////////////////
// Register Custom Navigation Walker include custom menu widget to use walkerclass
////////////////////////////////////////////////////////////////////

    require_once('lib/wp_bootstrap_navwalker.php');
    require_once('lib/bootstrap-custom-menu-widget.php');

////////////////////////////////////////////////////////////////////
// Register Menus
////////////////////////////////////////////////////////////////////

        register_nav_menus(
            array(
                'main_menu' => 'Main Menu',
                'footer_menu' => 'Footer Menu'
            )
        );

////////////////////////////////////////////////////////////////////
// Register the Sidebar(s)
////////////////////////////////////////////////////////////////////

        register_sidebar(
            array(
            'name' => 'Right Sidebar',
            'id' => 'right-sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));

        register_sidebar(
            array(
            'name' => 'Left Sidebar',
            'id' => 'left-sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
        register_sidebar(
            array(
            'name' => 'Footer 1 col',
            'id' => 'footer-1-col',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
        register_sidebar(
            array(
            'name' => 'Footer 2 col',
            'id' => 'footer-2-col',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
        register_sidebar(
            array(
            'name' => 'Footer 3 col',
            'id' => 'footer-3-col',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
        register_sidebar(
            array(
            'name' => 'Footer 4 col',
            'id' => 'footer-4-col',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));

////////////////////////////////////////////////////////////////////
// Register hook and action to set Main content area col-md- width based on sidebar declarations
////////////////////////////////////////////////////////////////////

add_action( 'gierojbootstrap3_main_content_width_hook', 'gierojbootstrap3_main_content_width_columns');

function gierojbootstrap3_main_content_width_columns () {

    global $dm_settings;

    $columns = '12';

    if ($dm_settings['right_sidebar'] != 0) {
        $columns = $columns - $dm_settings['right_sidebar_width'];
    }

    if ($dm_settings['left_sidebar'] != 0) {
        $columns = $columns - $dm_settings['left_sidebar_width'];
    }

    echo $columns;
}

function gierojbootstrap3_main_content_width() {
    do_action('gierojbootstrap3_main_content_width_hook');
}

////////////////////////////////////////////////////////////////////
// Add support for a featured image and the size
////////////////////////////////////////////////////////////////////

    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size(300,300, true);

////////////////////////////////////////////////////////////////////
// Adds RSS feed links to for posts and comments.
////////////////////////////////////////////////////////////////////

    add_theme_support( 'automatic-feed-links' );


////////////////////////////////////////////////////////////////////
// Set Content Width
////////////////////////////////////////////////////////////////////

if ( ! isset( $content_width ) ) $content_width = 800;

if ( ! function_exists( 'twentythirteen_post_nav' ) ) :
    
function gierojbootstrap3_post_nav() {
	global $post;

	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous )
		return;
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'gierojbootstrap3' ); ?></h1>
		<div class="nav-links">

			<?php previous_post_link( '%link', _x( '<span class="meta-nav">&larr;</span> %title', 'Previous post link', 'gierojbootstrap3' ) ); ?>
			<?php next_post_link( '%link', _x( '%title <span class="meta-nav">&rarr;</span>', 'Next post link', 'gierojbootstrap3' ) ); ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif; 

function _wp_render_title_tag() {
	if ( ! current_theme_supports( 'title-tag' ) ) {
		return;
	}

	// This can only work internally on wp_head.
	if ( ! did_action( 'wp_head' ) && ! doing_action( 'wp_head' ) ) {
		return;
	}

	echo '<title>' . wp_title( '|', false, 'right' ) . "</title>\n";
}

?>