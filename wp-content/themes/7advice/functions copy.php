<!-- <?php 

//require_once('wp_bootstrap_navwalker.php');
// Load stylesheet

function load_css(){


    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' , array() , false, 'all');
    wp_enqueue_style('bootstrap');
    wp_register_style('main', get_template_directory_uri() . '/css/main.css' , array() , false, 'all');
    wp_enqueue_style('main');
}
    add_action('wp_enqueue_scripts', 'load_css');

//Load Javascript

function load_js(){

wp_enqueue_script('jquery');
wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true );
wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_js');
// Theme options 

add_theme_support('menus');

// Menu
register_nav_menus(

array(
    'top-menu'=>'Top menu location',
    'mobile-menu'=>'mobile menu location',
    'footer-menu'=>'footer menu location',
)

);
function advice_menu_class()
{
    var_dump(func_get_args());
    die();
}
add_action('after_setup_theme', 'advice_supports');
add_action('')
add_filter('nav_menu_css_class', 'advice_menu_class'); -->