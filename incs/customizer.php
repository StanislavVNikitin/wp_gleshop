<?php

add_action('customize_register', function (WP_Customize_Manager $wp_customize) {

    $wp_customize->add_section('gleshop_theme_options', array(
        'title' => __('Theme options', 'gleshop'),
        'priority' => 10,
    ));

    // phone
    $wp_customize->add_setting('gleshop_phone');
    $wp_customize->add_control('gleshop_phone', array(
        'label' => __('Phone in header', 'gleshop'),
        'section' => 'gleshop_theme_options',
    ));

    // Adress footer
    $wp_customize->add_setting('gleshop_address');
    $wp_customize->add_control('gleshop_address', array(
        'label' => __('Address in footer', 'gleshop'),
        'section' => 'gleshop_theme_options',
    ));

    // Working hours
    $wp_customize->add_setting('gleshop_working_hours');
    $wp_customize->add_control('gleshop_working_hours', array(
        'label' => __('Working hours in footer', 'gleshop'),
        'section' => 'gleshop_theme_options',
    ));

    for ($i=1; $i<4;$i++){

        $setting = 'options_'.$i.'_select';

        $wp_customize->add_setting( $setting, [
            'default'   => 'fa-telegram',     // этот шрифт будет задействован по умолчанию
            'type'      => 'theme_mod', // использовать get_theme_mod() для получения настроек, если указать 'option', то нужно будет использовать функцию get_option()
        ] );

        $wp_customize->add_control( $setting, [
            'section'  => 'gleshop_theme_options', // секция
            'label'    => 'Соцсеть '.$i,
            'type'     => 'select', // выпадающий список select
            'choices'  => [ // список значений и лейблов выпадающего списка в виде ассоциативного массива
                'fa-facebook'     => 'Facebook',
                'fa-instagram'   => 'Instagram',
                'fa-linkedin'   => 'Linkedin',
                'fa-twitter'   => 'Twitter',
                'fa-youtube'   => 'Youtube',
                'fa-vk' => 'VK',
                'fa-odnoklassniki' => 'Odnoklassniki',
                'fa-telegram' => 'Telegram',
            ]
        ] );
        $setting = 'options_'.$i;
        $wp_customize->add_setting( $setting, [
            'type'      => 'theme_mod', // использовать get_theme_mod() для получения настроек, если указать 'option', то нужно будет использовать функцию get_option()
        ] );

        $wp_customize->add_control( $setting, array(
            'section' => 'gleshop_theme_options',
        ) );
    }

});

function gleshop_socnet_link_options(){
    $options_arr = [];
    for ($i=1; $i<5;$i++){
        if(! empty(get_theme_mod('options_'.$i)) ){
            $options_arr[] = array(
                'option_select' => get_theme_mod('options_'.$i.'_select'),
                'option_link' => get_theme_mod('options_'.$i));
        }
    }
    return $options_arr;
}

function gleshop_theme_options() {
    return array(
        'phone' => get_theme_mod('gleshop_phone'),
        'address' => get_theme_mod('gleshop_address'),
        'working_hours' => get_theme_mod('gleshop_working_hours'),
    );
}
