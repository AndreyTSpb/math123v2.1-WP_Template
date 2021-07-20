<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 07/07/2021
 * Time: 10:08
 */
?>
<nav class="main" id='menu-header'>
    <div class="container">
        <div class="main-wrap">
            <div class="main-wrap-close">
                <span class="close"><i class="fa fa-times" aria-hidden="true"></i></span>
            </div>
            <?php

            wp_nav_menu( [
                'menu'            => 'Main',
                'container'       => 'ul',
                'menu_class'      => 'main-menu',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'depth'           => 0
            ] );
            ?>
            <ul class="main-menu-user">
                <li><a href="#" class="active">мои достижения</a></li>
                <li><a href="#">мои задания</a></li>
                <li><a href="#">мои сообщения</a></li>
                <li><a href="#">мои группы/оплаты</a></li>
                <li><a href="#">мои данные</a></li>
                <li><a href="#">выход</a></li>
            </ul>
        </div>
    </div>
</nav>