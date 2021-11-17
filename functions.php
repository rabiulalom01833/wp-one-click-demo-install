<?php

require (get_theme_file_path('/inc/hin-customizer.php'));
require_once get_template_directory() . '/inc/hazlo-required-plugin.php';
require_once get_template_directory() . '/inc/one-click-demo-import.php';



function hin_setup_theme(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
 

}
add_action('after_setup_theme','hin_setup_theme');


function register_my_menus() {
    register_nav_menus(array(
        'main-menu' => __('Home Menu' , 'Hin')
    ));
}
add_action( 'init', 'register_my_menus' );


function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function atg_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'topnav') {
      $classes[] = 'nav-link';
    }
    return $classes;
  }
  add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

  function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
 }
 add_filter('wp_nav_menu','add_menuclass');



function hin_menu(){
    wp_enqueue_style( 'style', get_stylesheet_uri() ); 
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.1', 'all'); 
    wp_enqueue_style( 'all', get_template_directory_uri() . '/assets/css/all.min.css', array(), '1.1', 'all'); 
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.1', 'all'); 
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.1', 'all'); 
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style-2.css', array(), '1.1', 'all'); 
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.1', 'all'); 
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'magnific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'mCustomScrollbar', get_template_directory_uri() . '/assets/js/jquery.mCustomScrollbar.concat.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'Circle', get_template_directory_uri() . '/assets/js/jQuery-Circle-progressbar.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'ripples', get_template_directory_uri() . '/assets/js/jquery.ripples-min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array ( 'jquery' ), 1.1, true);
}

add_action('wp_enqueue_scripts','hin_menu');


function ocdi_after_import_setup() {
	// Assign menus to their locations.
	$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
			'main-menu' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function
		)
	);

	// Assign front page and posts page (blog page).
	$front_page_id = get_page_by_title( 'Home' );
	$blog_page_id  = get_page_by_title( 'Blog' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'ocdi/after_import', 'ocdi_after_import_setup' );