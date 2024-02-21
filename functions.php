<?php

add_action('after_setup_theme',function (){
    load_theme_textdomain('gleshop',get_template_directory() .'/languages');
	add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
	add_theme_support('title-tag');
    add_theme_support('post_thumbnail');

    register_nav_menus(
        array(
            'header_menu' => __('Header menu', 'gleshop'),
            'footer_menu' => __('Footer menu', 'gleshop'),
        )
    );
});

add_action('wp_enqueue_scripts',function (){

	wp_enqueue_style('gleshop-gogle-font','https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
	wp_enqueue_style('gleshop-fontawesome',get_template_directory_uri() . '/dist/fontawesome-free-6.5.1-web/css/all.min.css');
	wp_enqueue_style('gleshop-bootstrap',get_template_directory_uri() . '/dist/bootstrap-5.3.2-dist/css/bootstrap.min.css');
	wp_enqueue_style('gleshop-owl-carousel', get_template_directory_uri() . '/dist/owelcarousel/owl.carousel.min.css');
	wp_enqueue_style('gleshop-owl-theme', get_template_directory_uri() . '/dist/owelcarousel/owl.theme.default.min.css');
    wp_enqueue_style('gleshop-fancybox', get_template_directory_uri() . '/dist/fancybox/fancybox.css');
	wp_enqueue_style('gleshop-style', get_template_directory_uri() . '/assets/css/style.css');

	wp_enqueue_script('jquery');
	wp_enqueue_script('gleshop-bootstrap',get_template_directory_uri() . '/dist/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js',array(),false,true);
	wp_enqueue_script('gleshop-owl-carousel',get_template_directory_uri() . '/dist/owelcarousel/owl.carousel.min.js',array(),false,true);
    wp_enqueue_script('gleshop-fancybox',get_template_directory_uri() . '/dist/fancybox/fancybox.umd.js',array(),false,true);
	wp_enqueue_script('gleshop-scripts',get_template_directory_uri() . '/assets/js/scripts.js',array('jquery'),false,true);


});

function gleshop_dump($data)
{
    echo "<pre>". print_r($data) . "</pre>";

};

require_once get_template_directory() . '/incs/woocommerce-hooks.php';
require_once get_template_directory() . '/incs/class-gleshop-header-menu.php';
require_once get_template_directory() . '/incs/customizer.php';
require_once get_template_directory() . '/incs/cpt.php';



add_action( 'widgets_init', 'gleshop_widgets_sidebar_init' );

function gleshop_widgets_sidebar_init() {

    register_sidebar(
        array(
            'name'          => __( 'Sidebar', 'gleshop' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Add widgets here to appear in your sidebar.', 'gleshop' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}