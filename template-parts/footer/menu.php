<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 23/07/2021
 * Time: 22:33
 */
?>
<?php

wp_nav_menu( [
    'menu'            => 'footer',
    'container'       => 'ul',
    'menu_class'      => 'footer-menu-one',
    'echo'            => false,
    'fallback_cb'     => 'wp_page_menu',
    'depth'           => 0
] );
?>
