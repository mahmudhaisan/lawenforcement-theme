<?php



define('TEMPLATES_DIRECTORY_PATH', get_template_directory_uri());
// const TEMPLATES_DIRECTORY_PATH = TEMPLATES_DIRECTORY_PATH;


function lawenforce_assets() {

    load_theme_textdomain('lawenforce', TEMPLATES_DIRECTORY_PATH . '/languages');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails', array('post', 'sliders'));

    add_theme_support('menus');
    register_nav_menus(array(
        'primary' => __('Primary', 'lawenforce')
    ));
}
add_action('after_setup_theme', 'lawenforce_assets');


function lawenforce_cpt() {

    // slider Custom Post
    $labels = array(
        'name'                  => __('sliders', 'slider to show', 'recipe'),
        'singular_name'         => __('slider', 'Post type singular name', 'recipe'),
        'menu_name'             => __('sliders', 'Admin Menu text', 'recipe'),
        'not_found'             => __('No sliders Found', 'Admin Menu text', 'recipe'),
    );

    $args = array(
        'public'    => true,
        'labels'    => $labels,
        'label'     => __('sliders', 'lawenforce'),
        'show_in_rest' => false,
        'menu_icon' => 'dashicons-book',
        'supports' => array('title', 'thumbnail')
    );
    register_post_type('sliders', $args);


    // Testimonials Custom Post
    $labels = array(
        'name'                  => __('Testimonials', 'Post type general name', 'recipe'),
        'singular_name'         => __('Testimonial', 'Post type singular name', 'recipe'),
        'menu_name'             => __('Testimonials', 'Admin Menu text', 'recipe'),
        'not_found'             => __('No Testimonials Found', 'Admin Menu text', 'recipe'),
    );

    $args = array(
        'public'    => true,
        'labels'    => $labels,
        'label'     => __('Testimonials', 'lawenforce'),
        'menu_icon' => 'dashicons-book',
        'show_in_rest'       => true,
        'supports' => array('title', 'editor', 'thumbnail')
    );
    register_post_type('testimonials', $args);
}
add_action('init', 'lawenforce_cpt');


function lawenforce_css_js() {

    // CSS Files
    wp_enqueue_style('owl-carousel', TEMPLATES_DIRECTORY_PATH . '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap', TEMPLATES_DIRECTORY_PATH . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('font-awesome', TEMPLATES_DIRECTORY_PATH . '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('style', TEMPLATES_DIRECTORY_PATH . '/assets/css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('responsive-style', TEMPLATES_DIRECTORY_PATH . '/assets/css/responsive.css', array(), '1.0.0', 'all');

    wp_enqueue_style('main', get_stylesheet_uri());

    // JS Files
    wp_enqueue_script('popper', TEMPLATES_DIRECTORY_PATH . '/assets/js/popper.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('bootstrap', TEMPLATES_DIRECTORY_PATH . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('slick', TEMPLATES_DIRECTORY_PATH . '/assets/js/slick.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('waypoints', TEMPLATES_DIRECTORY_PATH . '/assets/js/jquery.waypoints.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('counterup', TEMPLATES_DIRECTORY_PATH . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('script', TEMPLATES_DIRECTORY_PATH . '/assets/js/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'lawenforce_css_js');


function lawenforce_widgets() {

    register_sidebar(array(
        'name' => __('Footer 1', 'lawenforce'),
        'id'   => 'footer-1',
        'description'   => __('This Widget for Footer 1', 'lawenforce'),
        'before_widget' => '<ul id="%1$s" class="list-unstyled footer-menu lh-35">',
        'after_widget'  => '</ul>',
        'before_title'  => '<h4 class="text-capitalize mb-4">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name' => __('Footer 2', 'lawenforce'),
        'id'   => 'footer-2',
        'description'   => __('This Widget for Footer 2', 'lawenforce'),
        'before_widget' => '<ul id="%1$s" class="list-unstyled footer-menu lh-35">',
        'after_widget'  => '</ul>',
        'before_title'  => '<h4 class="text-capitalize mb-4">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name' => __('Footer 3', 'lawenforce'),
        'id'   => 'footer-3',
        'description'   => __('This Widget for Footer 3', 'lawenforce'),
        'before_widget' => '<ul id="%1$s" class="list-unstyled footer-menu lh-35">',
        'after_widget'  => '</ul>',
        'before_title'  => '<h4 class="text-capitalize mb-4">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name' => __('Main Sidebar', 'lawenforce'),
        'id'   => 'sidebar',
        'description'   => __('This Widget for Main Sidebar', 'lawenforce'),
        'before_widget' => '<div id="%1$s" class="sidebar-widget card p-4 mb-3 border-0">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="text-capitalize mb-4">',
        'after_title'   => '</h4>',
    ));
}


add_action('widgets_init', 'lawenforce_widgets');


// Add custom class to list in menu
function law_enforecement_menu_list_class($ulclass) {

    return preg_replace('/<li /', '<li class="nav-item"', $ulclass);
}

add_filter('wp_nav_menu', 'law_enforecement_menu_list_class');

// add custom class link in menu
function law_enforecement_ul_link_class($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}

add_filter('wp_nav_menu', 'law_enforecement_ul_link_class');


require_once('inc/cmb2/init.php');
require_once('inc/cmb2/functions.php');
