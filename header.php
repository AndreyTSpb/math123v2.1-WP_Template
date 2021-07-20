<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 03/07/2021
 * Time: 21:07
 */
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package math123v2.1
 * @subpackage math123v2.1
 * @since math123 2.1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primary Meta Tags -->
    <meta name="description" content="<?php bloginfo('description');?>" />
    <meta name="keywords" content="<?php bloginfo('keywords');?>" />
    <meta name="yandex-verification" content="a0d6286edbb5fc0e" />


    <!--ADD STILES-->
    <?php wp_head();?>

    <!--FontAwesome-->
    <script defer src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" integrity="sha384-haqrlim99xjfMxRP6EWtafs0sB1WKcMdynwZleuUSwJR0mDeRYbhtY+KPMr+JL6f" crossorigin="anonymous"></script>

</head>

<body <?php body_class(); ?>>
<?php get_template_part( 'template-parts/header/site-header' ); ?>
<?php get_template_part( 'template-parts/header/menu' ); ?>