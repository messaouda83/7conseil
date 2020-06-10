<?php

function montheme_supports () {
	add_theme_support('title-tag');
}

function montheme_title ($title) {
	return 'SevenConseil' . $title;
}

function montheme_title_separator () {
	return '/><';
}


// add_theme_support('title-tag'); //Ajoute un title automatiquement
add_action('after_setup_theme', 'montheme_supports');
add_filter('wp_title', 'montheme_title'); // Filtre - title
add_filter('document_title_separator', 'montheme_title_separator'); // Change le séparateur dans le title



// Load Stylesheets
function load_css()
{
	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all'); //<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	wp_enqueue_style('bootstrap'); // insére dans l'en-tête et le pied de page auxquels elles appartiennent de façon automatique, en les chargeant sans avoir à les saisir sur chaque page séparément.

	wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all'); //css local
	wp_enqueue_style('main'); // insére dans l'en-tête et le pied de page auxquels elles appartiennent de façon automatique, en les chargeant sans avoir à les saisir sur chaque page séparément.
}
add_action('wp_enqueue_scripts', 'load_css');

//* Enqueue Font Awesome

function fontawson() {

        wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css' );
}
add_action( 'wp_enqueue_scripts', 'fontawson' );

// Load Javascript
function load_js()
{
    wp_enqueue_script('jquery'); //<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    wp_enqueue_script( 'smoothup', get_template_directory_uri() . '/js/gototop.js', array( 'jquery' ), '',  true );
    wp_enqueue_script( 'toggle', get_template_directory_uri() . '/js/togglechangeform.js', array( 'jquery' ), '',  true );
	wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true); //<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_js');

// Theme Options
add_theme_support('menus'); // Ajoute l'option "Menus" dans Wordpress -> Apparence
add_theme_support('post-thumbnails'); // Ajoute l'option "Image mise en avant" lors de l'édition d'un article
// tailles d'image personnalisées
add_image_size('blog-large', 800, 400, true);
add_image_size('blog-small', 300, 200, true);
add_theme_support('widgets'); // Ajoute l'option "Widgets" dans Wordpress -> Apparence

// Menus
register_nav_menus(

	array(

		'top-menu'  => 'Top Menu Location', // Ajoute l'option "Top Menu Location" dans Wordpress -> Apparence -> Menus
		'mobile-menu'  => 'Mobile Menu Location', // Ajoute l'option "Mobile Menu Location" dans Wordpress -> Apparence -> Menus
		'footer-menu'  => 'Footer Menu Location', // Ajoute l'option "Footer Menu Location" dans Wordpress -> Apparence -> Menus
	)
);
function my_sidebars() {

register_sidebar(

    array(
        'name'=> 'page sidebar',
        'id'=> 'page-sidebar',
        'before_title' => '<h3 class="widgets-title">',
         'after_title' => '</h3>'
    )
    );
    
register_sidebar(

    array(
        'name'=> 'blog sidebar',
        'id'=> 'blog-sidebar',
        'before_title' => '<h3 class="widgets-title">',
         'after_title' => '</h3>'
    )
    );
}
add_action('widgets_init', 'my_sidebars');
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

add_action( 'phpmailer_init', 'send_smtp_email' );
function send_smtp_email( $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = SMTP_HOST;
    $phpmailer->SMTPAuth   = SMTP_AUTH;
    $phpmailer->Port       = SMTP_PORT;
    $phpmailer->SMTPSecure = SMTP_SECURE;
    $phpmailer->Username   = SMTP_USERNAME;
    $phpmailer->Password   = SMTP_PASSWORD;
    $phpmailer->From       = SMTP_FROM;
    $phpmailer->FromName   = SMTP_FROMNAME;
}

/* Header image wordpress.*/
/* 
function my_theme_setup() {
    add_theme_support( 'custom-header', array(
        'width'  => 2000,
        'height' => 500,
    ) );
}
add_action( 'after_theme_setup', 'my_theme_setup' ); */
