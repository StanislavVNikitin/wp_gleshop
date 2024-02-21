<?php

add_filter('woocommerce_enqueue_styles', '__return_false');

// Карточка продукта

remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);
//remove_action('woocommerce_before_shop_loop_item_title','woocommerce_show_product_loop_sale_flash',10);
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_shop_loop_item_title', function () {

    global $product;
    echo '<h4>
            <a href="' . $product->get_permalink() . '">' . $product->get_title() . '</a>
          </h4>';
});

remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
add_filter('woocommerce_product_get_rating_html', function ($html, $rating, $count) {
    $html = '';

    $label = sprintf(__('Rated %s out of 5', 'woocommerce'), $rating);
    $html = '<div class="star-rating" role="img" aria-label="' . esc_attr($label) . '">' . wc_get_star_rating_html($rating, $count) . '</div>';
    return $html;
}, 10, 3);


//custom shortcode

add_shortcode('gleshop_new_products', 'gleshop_new_products');
function gleshop_new_products($atts)
{
    global $woocommerce_loop, $woocommerce;

    extract(shortcode_atts(array(
        'limit' => '6',
        'orderby' => 'date',
        'order' => 'DESC'
    ), $atts));


    $args = array(
        'post_status' => 'publish',
        'post_type' => 'product',
        'posts_per_page' => $limit,
        'orderby' => $orderby,
        'order' => $order,
        'no_found_rows' => 1,
    );

    ob_start();

    $products = new WP_Query($args);

    if ($products->have_posts()) : ?>

        <?php while ($products->have_posts()) : $products->the_post(); ?>

            <?php wc_get_template_part('content', 'new-product'); ?>

        <?php endwhile; // end of the loop. ?>


    <?php endif;

    wp_reset_postdata();

    return '<div class="woocomrce"><div class="owl-carousel owl-theme owl-carousel-full">' . ob_get_clean() . '</div></div>';
}

add_filter( 'woocommerce_add_to_cart_fragments', function ($fragments){
    $fragments['span.cart-badge'] = '<span class="badge text-bg-warning cart-badge bg-warning rounded-circle">' . WC()->cart->get_cart_contents_count() . '</span>';
   return $fragments;
});


/**
 * Change several of the breadcrumb defaults
 */
add_filter( 'woocommerce_breadcrumb_defaults', function () {
    return array(
        'delimiter'   => '',
        'wrap_before' => '<div class="col-12"><nav class="breadcrumbs"><ul>',
        'wrap_after'  => '</ul></nav></div>',
        'before'      => '<li>',
        'after'       => '</li>',
        'home'        => __( 'Home', 'gleshop'),
    );
} );


function gleshop_get_shop_thumb() {
    $html = '';

    if ( is_product_category() ){
        global $wp_query;
        $cat = $wp_query->get_queried_object();
        $thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true );
        $image = wp_get_attachment_url( $thumbnail_id );
        if ( $image ) {
            $html = '<img src="' . $image . '" alt="' . $cat->name . '" class="img-thumbnail">';
        }
    }

    return $html;

}

remove_action('woocommerce_before_shop_loop','woocommerce_output_all_notices',10);
remove_action('woocommerce_shop_loop_subcategory_title', 'woocommerce_template_loop_category_title',10);

add_action('woocommerce_shop_loop_subcategory_title', function ($category){
    echo "<h5 class='mt-2 categories-home'>{$category->name}<span>({$category->count})</span> </h5>";
});
/*add_action('template_redirect', function ()
{
    if (is_product()){
        remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar' ,10);
    }
});*/

remove_action('woocommerce_before_single_product_summary','woocommerce_show_product_sale_flash',10);