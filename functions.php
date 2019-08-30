<?php

function load_stylesheet(){

  wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
  wp_enqueue_style('bootstrap');

  wp_register_style('style', get_template_directory_uri().'/style.css');
  wp_enqueue_style('style');

  wp_register_style('fontawesone', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css');
  wp_enqueue_style('fontawesone');

}

function include_jquery(){

  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', '', '3.3.1', true);
  add_action('wp_enqueue_scripts', 'jquery');

}

function load_scripts(){

  wp_register_script('popperjs', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', '', '1.14.7', true);
  wp_enqueue_script('popperjs');

  wp_register_script('bootstrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', '', '4.3.1', true);
  wp_enqueue_script('bootstrapjs');

  wp_register_script('script', get_template_directory_uri().'/assets/js/script.js', '', 1, true);
  wp_enqueue_script('script');

}

function wpb_widgets_init() {

    register_sidebar( array(
        'name'          => 'Custom Header Widget Area',
        'id'            => 'custom-header-widget',
        'before_widget' => '<div class="chw-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="chw-title">',
        'after_title'   => '</h1>',
    ) );

    register_sidebar( array(
        'name' => 'Footer Sidebar 1',
        'id' => 'footer-sidebar-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Footer Sidebar 2',
        'id' => 'footer-sidebar-2',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Footer Sidebar 3',
        'id' => 'footer-sidebar-3',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Sidebar 1',
        'id' => 'sidebar-1',
        'description' => 'Appears on the left of the page',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>'
    ) );
}
add_action( 'widgets_init', 'wpb_widgets_init' );

function my_init(){
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('menus');
  $header = array(
    'default-image' => get_template_directory_uri().'/assets/images/front-page-header.jpg',
    'default-text-color' => 'ffffff',
    'header-text' => true,
    'width' => 1400,
    'height' => 500

  );
  add_theme_support('custom-header', $header);
}

add_action('wp_enqueue_scripts', 'load_stylesheet');
add_action('wp_enqueue_scripts', 'include_jquery');
add_action('wp_enqueue_scripts', 'load_scripts');
add_action('after_setup_theme', 'my_init');

register_nav_menus(
  array(
    'top-menu' => __('Top Menu', 'my-custom-theme'),
    //'bottom-menu' => __('Bottom Menu', 'my-custom-theme')
  )
);

function custom_excerpt_length($length){
  return 30;
}

add_filter('excerpt_length', 'custom_excerpt_length', 999);

function posts_link_attributes(){
  return 'class="page-link"';
}

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function post_link_class($format){
  $format = str_replace('href=', 'class="page-link" href=', $format);
  return $format;
}

add_filter('next_post_link', 'post_link_class');
add_filter('previous_post_link', 'post_link_class');

// Register Custom Navigation Walker
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

require get_template_directory() . '/inc/customizer.php';

/*function add_menu_li_class(){
  return array('nav-item');
}

add_filter('nav_menu_css_class', 'add_menu_li_class', 1, 3);

function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="nav-link active"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');*/
?>
