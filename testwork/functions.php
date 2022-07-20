<?php
/**
 * Test Work functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Test Work
 */

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );



function test_work_scripts(){
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array('jquery'), '5.2.0', true );
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(),'5.2.0', 'all');
    wp_enqueue_style('test-work-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all');

    // Theme's main style
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500');

}

add_action('wp_enqueue_scripts', 'test_work_scripts');

/*
* Sets uo theme deafults and registers support various Wordpress feautures.
* Note that this function is hooked into the after_setup_theme hook, which
* runs before the init hook. The init hook is too late for some feautures, such 
* as indicating support for post thumbnails.   
*/




function test_work_config(){
    register_nav_menus(
        array(
            'test_work_main_menu' => 'Test Work Main Menu',
            'test_work_footer_menu' => 'Test Work Footer Menu'
        )

    );

     add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 255,
        'single_image_width' => 255,
        'product_grid' => array(
            'default_rows' => 10,
            'min_rows' => 5,
            'max_rows' => 10,
            'default_columns' => 1,
            'min_columns' => 1,
            'max_columns' => 4
        ) 

   ) );

     add_theme_support( 'wc-product-gallery-zoom' );
     add_theme_support( 'wc-product-gallery-lightbox' );
     add_theme_support( 'wc-product-gallery-slider');

     if ( ! isset( $content_width ) ) {
    $content_width = 600;
    }

}


add_action('after_setup_theme', 'test_work_config', 0);

add_action('woocommerce_after_shop_loop_item_title', 'the_excerpt', 1);


