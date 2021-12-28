<?php
    add_action('wp_enqueue_scripts', 'childhood_scripts');

    function childhood_scripts(){
        wp_enqueue_style('childhood-style', get_stylesheet_uri());
        wp_enqueue_script('childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);

        
    }

    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );
    
    add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
        function filter_nav_menu_link_attributes($atts, $item, $args){
            if($args->menu === 'Main'){
                $atts['class'] = 'header__nav-item';

                if($item->current){
                    $atts['class'] .= ' header__nav-item-active';
                }
                // выше условие для меню, чтобы оно встало согласно нашей верстке и при активации подсвечивалось
                // print_r($item); //для определния необходимого нам ID пишем эту строку кода, сохраняем, далее заходим на страницу в постом и обновляем её, далее ctrl+f набирем [ID] и ищем нужный нам   
                if($item->ID === 196 && (in_category( 'soft_toys' ) || in_category('edu_toys'))){
                    $atts['class'] .= ' header__nav-item-active';
                };
                // выше - это условие для подсветки меню, когда заходим на страницу с постом
            };
            return $atts;
        }
?>