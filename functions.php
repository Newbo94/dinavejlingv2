
<?php
/*
	==========================================
	 Include scripts
	==========================================
*/
function dina_script_enqueue() {
	//css
wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'all');

	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/dinavejling.css', array(), '1.0.0', 'all');

    wp_enqueue_style('headercss', get_template_directory_uri() . '/css/header.css', array(), '1.0.1', 'all');


    wp_enqueue_style('footercss', get_template_directory_uri() . '/css/footer.css', array(), '1.0.0', 'all');

    wp_enqueue_style('home', get_template_directory_uri() . '/css/home.css', array(), '1.0.0', 'all');

		    wp_enqueue_style('kontakt', get_template_directory_uri() . '/css/kontakt.css', array(), '1.0.0', 'all');
				/* 1.0.0 = den version af css, man kan evt ændre det sidste 0, for at fortælle den at der er en ny funktion*/

	//js

	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.4', true);
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/dinavejling.js', array(), '1.0.0', true);

}

add_action( 'wp_enqueue_scripts', 'dina_script_enqueue');

/*
	==========================================
	 Activate menus
	==========================================
*/
function dina_theme_setup() {

	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');

}

add_action('init', 'dina_theme_setup');

/*
	==========================================
	 Theme support function
	==========================================
*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image','video'));



function theme_slug_setup() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_slug_setup' );
