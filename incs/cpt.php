<?php

add_action( 'init', 'register_post_types' );

function register_post_types(){

    register_post_type( 'slider', [
        'labels' => [
            'name'               => __('Slider','gleshop'), // основное название для типа записи
            'singular_name'      => __('Slider','gleshop'), // название для одной записи этого типа
            'add_new'            => __('Add new slide','gleshop'), // для добавления новой записи
            'add_new_item'       => __('New slide','gleshop'), // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => __('Edit','gleshop'), // для редактирования типа записи
            'new_item'           => __('New slide','gleshop'), // текст новой записи
            'view_item'          => __('View','gleshop'), // для просмотра записи этого типа.
            'menu_name'          => __('Slider','gleshop'), // название меню
            'all_items'          => __('All slides','gleshop'),
        ],
        'public'                 => true,
        'show_in_rest'        => false,
        'menu_icon'           => 'dashicons-format-gallery',
        'supports'            => array( 'title', 'editor','thumbnail',), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'

    ] );

}
