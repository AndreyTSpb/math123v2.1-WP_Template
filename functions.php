<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 03/07/2021
 * Time: 20:22
 */
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package math123v2.1
 * @subpackage math123v2.1
 * @since math123 2.1.0
 */

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '2.1.1' );
}

function math123v21_scripts() {
    /**
     * Подключаем стили
     */
    //get_stylesheet_uri() - бфзовый файл стилей
    wp_enqueue_style( 'math123v21-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css', _S_VERSION );
    wp_enqueue_style( 'math123v21-style', get_stylesheet_uri(), array(), _S_VERSION, 'screen' );

    /**
     * Подключаем скрипты поштучно
     */
    //Bootstrap
    wp_enqueue_script('math123v21-bootstrap-popper', "https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js", array('jquery'), null, true);
    wp_enqueue_script('math123v21-bootstrap-js', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js", array('jquery'), null, true);
    //Yandex map
    wp_enqueue_script('math123v21-yandex', "https://api-maps.yandex.ru/2.1/?lang=ru_RU", array('jquery'), null, true);
    wp_enqueue_script('math123v21-slick', get_template_directory_uri().'/assets/js/slick.min.js', array('jquery'), null, true);
    wp_enqueue_script('math123v21-script', get_template_directory_uri().'/assets/js/script.js', array('jquery'), null, true);

    wp_enqueue_script('undescore', includes_url('js') . '/underscore.min.js' );
    wp_enqueue_script('undescore', includes_url('js') . '/lodash.min.js' );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    /**
     * Адд меню
     */
    add_theme_support( 'menus' );
}
add_action( 'wp_enqueue_scripts', 'math123v21_scripts', 99999 );

/**
 * Убираем слеш
 */
function no_page_slash( $string, $type ){
    if($type == 'single')
        $string = untrailingslashit($string);
    return $string;
}

if( is_page(1833) ){
    echo ('tyt');
    exit;
    add_filter('user_trailingslashit', 'no_page_slash', 70, 2);
}

/**
 * добавление превью к постам
 */
if ( function_exists( 'add_theme_support' ) ){
    add_theme_support( 'post-thumbnails', array( 'post' ) ); // добавить для постов
    add_theme_support( 'post-thumbnails', array( 'page' ) ); // добавить для страниц

    set_post_thumbnail_size( 300, 220, true );
}