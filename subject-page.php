<?php
/*
Template Name: Шаблон страницы для направления
Template Post Type: page
@package math123v2.1
@subpackage math123v2.1
@since math123 2.1.0
*/
get_header();
/**
 * Получаем все кастомные поля для текущей записи
 */
$custom_fields = get_post_custom();
//print_r($custom_fields);
//var_dump($custom_fields['kartinka_k_napravleniyu'][0]);
$class_modifikator = get_field('vybor_napravleniya');
?>
<?php
    /**
     * Изменение цвета кнопок
     */
    switch ($class_modifikator){
        case 'math':
            $btn_color = 'purple';
            break;
        case 'phyth':
            $btn_color = 'green';
            break;
        case 'prog':
            $btn_color = 'orang';
            break;
        case 'biznes':
            $btn_color = 'blue';
            break;
        default:
            $btn_color = 'green';
            break;
    }
?>
    <!-- Здесь html/php код шаблона -->

    <!-- START CONTENT-->

    <section class="pages <?=(!empty($class_modifikator))?$class_modifikator:'phyth';?>">
        <div class="container">

            <div class="<?=(!empty($class_modifikator))?$class_modifikator:'phyth';?>-about">
                <h2>
                    <?php the_title();?>
                </h2>
                <div class="<?=(!empty($class_modifikator))?$class_modifikator:'phyth';?>-about-text">
                    <h4>
                        <?php if(!empty(get_field('zagolovok_pervogo_bloka'))) {
                            echo get_field('zagolovok_pervogo_bloka');
                        }
                        ?>
                    </h4>
                    <?php if(!empty(get_field('opisanie_dlya_pervogo_bloka'))) {
                        echo get_field('opisanie_dlya_pervogo_bloka');
                    }
                    ?>
                </div>
                <div class="<?=(!empty($class_modifikator))?$class_modifikator:'phyth';?>-about-footer">
                    <?php if(!empty(get_field('kartinka_k_napravleniyu')['url'])):?>
                        <img src="<?=get_field('kartinka_k_napravleniyu')['url'];?>" alt="<?=get_field('kartinka_k_napravleniyu')['alt']?>" srcset="">
                    <?php endif;?>
                    <div class="<?=(!empty($class_modifikator))?$class_modifikator:'phyth';?>-about-footer-text">
                        <?php if(!empty(get_field('tekst_sleva_ot_bloka'))):?>
                            <?=get_field('tekst_sleva_ot_bloka');?>
                        <?php endif;?>
                        <?php if(!empty(get_field('link_dlya_knopki_podrobnej'))):?>
                            <a href="<?=get_field('link_dlya_knopki_podrobnej');?>" class="btn-sub <?=$btn_color;?>">Подробней</a>
                        <?php endif;?>
                    </div>
                </div>
            </div>

            <!-- Связаться с руководителем направления -->
            <?php if(!empty(get_field('svyazatsya_s_rukovoditelem_napravleniya'))):
                echo do_shortcode(get_field('svyazatsya_s_rukovoditelem_napravleniya'));
            endif;?>

        </div>

        <!-- Анонсы  -->
        <div class="<?=(!empty($class_modifikator))?$class_modifikator:'phyth';?>-anons">
            <div class="separator-row bg-green"></div>
            <div class="separator-row bg-yellow"></div>
            <div class="container">
                <?php if(!empty(get_field('vidzhet_s_anonsami'))):?>
                    <?=do_shortcode(get_field('vidzhet_s_anonsami'));?>
                <?php endif;?>
            </div>
        </div>

        <!-- Открытое направление -->
        <div class="<?=(!empty($class_modifikator))?$class_modifikator:'phyth';?>-open">
            <div class="container">
                <h2>
                    <?php if(!empty(get_field('zagolovok_dlya_otkrytogo_napravleniya'))):?>
                        <?=get_field('zagolovok_dlya_otkrytogo_napravleniya');?>
                    <?php else:?>
                        Группы открытого направления
                    <?php endif;?>
                </h2>
                <div class="<?=(!empty($class_modifikator))?$class_modifikator:'phyth';?>-open-desc">

                    <?php
                    /**
                     * Изменение цвета кнопок
                     */
                    switch ($class_modifikator){
                        case 'math':
                            /**
                             * Получаем статьи из категории №20 "Группы открытого направления математике"
                             */
                            $category  = 20;
                            break;
                        case 'phyth':
                            /**
                             * Получаем статьи из категории №24 "Группы открытого направления физика"
                             */
                            $category  = 24;
                            break;
                        case 'prog':
                            /**
                             * Получаем статьи из категории №26 "Группы открытого направления физика"
                             */
                            $category  = 26;
                            break;
                        case 'biznes':
                            /**
                             * Получаем статьи из категории №29 "Группы открытого направления физика"
                             */
                            $category  = 29;
                            break;
                        default:
                            $category  = 20;
                            break;
                    }
                    ?>

                    <?php if(!empty(get_field('opisanie_k_otkrytomu_napravleniyu'))):?>
                        <?=get_field('opisanie_k_otkrytomu_napravleniyu');?>
                    <?php endif;?>

                    <!-- Кнопка для перехода на описание основного направления -->
                    <?php if(!empty(get_field('ssylka_dlya_knopki_podrobnej'))):?>
                        <a href="<?=get_field('ssylka_dlya_knopki_podrobnej');?>" class="btn-sub <?=$btn_color;?>">подробнее</a>
                    <?php endif;?>
                </div>
                <!-- Блоки с открытыми направлениями -->
                <?php

                $posts_open = get_posts( array(
                    'numberposts' => -1,
                    'category'    => $category,
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                /**
                 * Цыклом выводим посты: заголовок, картину, описание, кнопка на переход к статье
                 */
                $arr_posts_open = array();
                foreach ($posts_open as $id_arr => $post){
                    setup_postdata( $post );
                    /**
                     * Получаем миниатюру к посту
                     */
                    if ( has_post_thumbnail() ) {
                        $thumb = get_the_post_thumbnail( $post->ID, 'medium' );
                    } else {
                        $thumb = get_the_post_thumbnail( $post->ID, 'medium' );
                    }

                    $arr_posts_open[$id_arr] = array(
                        'title'     => $post->post_title,
                        'desc'      => $post->post_excerpt,
                        'url'       => $post->guid,
                        'img'       => $thumb
                    );

                }

                wp_reset_postdata(); //сбрасыва

                ?>
                <div class="<?=(!empty($class_modifikator))?$class_modifikator:'phyth';?>-open-wrap">
                    <?php foreach ($arr_posts_open as $item):?>
                        <div class="card-base-type-groups <?=(!empty($class_modifikator))?$class_modifikator:'phyth';?>">
                            <?=(!empty($item['img']))?$item['img']:'<img src="https://via.placeholder.com/420x280">'?>
                            <h4><?=(!empty($item['title']))?$item['title']:'no title';?></h4>
                            <div class="card-base-type-groups-klass">для 3-4 класса</div>
                            <div class="card-base-type-groups-desc">
                                <p>
                                    <?=(!empty($item['desc']))?$item['desc']:'no description';?> <?=(!empty($item['url']))?'<a href="'.$item['url'].'">подробнее.</a>' :'';?>
                                </p>
                            </div>
                            <div class="button">
                                <a href="#" class="btn-sub <?=$btn_color?> text-white">записаться</a>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
        <!-- END -->

        <!-- Конкурсное направление -->
        <?php if(!empty(get_field('zagolovok_konkursnogo_napravleniya'))):?>
        <div class="<?=(!empty($class_modifikator))?$class_modifikator:'phyth';?>-konkurs">
            <div class="container">
                <h2>
                    <?=get_field('zagolovok_konkursnogo_napravleniya');?>
                </h2>
                <div class="<?=(!empty($class_modifikator))?$class_modifikator:'phyth';?>-konkurs-desc">
                    <?php if(!empty(get_field('opisanie_konkursnogo_napravleniya'))):?>
                        <?=get_field('opisanie_konkursnogo_napravleniya');?>
                    <?php endif;?>
                    <?php
                    /**
                     * Изменение цвета кнопок
                     */

                    switch ($class_modifikator){
                        case 'math':
                            /**
                             * Получаем статьи из категории №21 "Группы конкурсного направления математике"
                             */
                            $category = 21;
                            break;
                        case 'phyth':
                            /**
                             * Получаем статьи из категории №23 "Группы конкурсного направления математике"
                             */
                            $category = 23;
                            break;
                        case 'prog':
                            /**
                             * Получаем статьи из категории №27 "Группы конкурсного направления математике"
                             */
                            $category = 27;
                            break;
                        case 'biznes':
                            /**
                             * Получаем статьи из категории №30 "Группы конкурсного направления математике"
                             */
                            $category = 30;
                            break;
                        default:
                            $category = 23;
                            break;
                    }
                    ?>
                    <!-- Кнопка для перехода на описание основного направления -->
                    <?php if(!empty(get_field('ssylka_dlya_knopki_podrobnej'))):?>
                        <a href="<?=get_field('ssylka_dlya_knopki_podrobnej');?>" class="btn-sub <?=$btn_color;?>">подробнее</a>
                    <?php endif;?>
                </div>

                <!-- Блоки с конкурсным направлениями -->
                <?php

                $posts_konkurs = get_posts( array(
                    'numberposts' => -1,
                    'category'    => $category,
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                /**
                 * Цыклом выводим посты: заголовок, картину, описание, кнопка на переход к статье
                 */
                $arr_posts_konkurs = array();
                foreach ($posts_konkurs as $id_arr => $post){
                    setup_postdata( $post );
                    /**
                     * Получаем миниатюру к посту
                     */
                    if ( has_post_thumbnail() ) {
                        $thumb = get_the_post_thumbnail( $post->ID, 'medium' );
                    } else {
                        $thumb = get_the_post_thumbnail( $post->ID, 'medium' );
                    }

                    $arr_posts_konkurs[$id_arr] = array(
                        'title'     => $post->post_title,
                        'desc'      => $post->post_excerpt,
                        'url'       => $post->guid,
                        'img'       => $thumb
                    );

                }

                wp_reset_postdata(); //сбрасыва
                ?>

                <div class="<?=(!empty($class_modifikator))?$class_modifikator:'phyth';?>-konkurs-wrap">
                    <?php
                        /**
                         * Изменение цвета блока
                         */

                        switch ($class_modifikator){
                            case 'math':
                                $block_color = 'purple';
                                break;
                            case 'phyth':
                                $block_color = 'green';
                                break;
                            case 'prog':
                                $block_color = 'orange';
                                break;
                            case 'biznes':
                                $block_color = 'blue';
                                break;
                            default:
                                $block_color = 'green';
                                break;
                        }
                    ?>
                    <?php foreach ($arr_posts_konkurs as $item):?>
                        <div class="card-base-<?=$block_color;?>">
                            <?=(!empty($item['img']))?$item['img']:'<img src="https://via.placeholder.com/420x280">'?>
                            <h4><?=(!empty($item['title']))?$item['title']:'no title';?></h4>
                            <div class="card-base-<?=$block_color;?>-klass">для 3-4 класса</div>
                            <div class="card-base-<?=$block_color;?>-desc">
                                <p>
                                    <?=(!empty($item['desc']))?$item['desc']:'no description';?> <?=(!empty($item['url']))?'<a href="'.$item['url'].'">подробнее.</a>' :'';?>
                                </p>
                            </div>
                            <div class="button">
                                <a href="#" class="btn-sub white">записаться</a>
                            </div>
                        </div>
                    <?php endforeach;?>

                </div>
            </div>
        </div>
        <?php endif;?>
        <!-- Анонсы Прошедших мероприятий  -->
        <div class="<?=(!empty($class_modifikator))?$class_modifikator:'phyth';?>-anons">
            <div class="separator-row bg-green"></div>
            <div class="separator-row bg-yellow"></div>
            <div class="container">
                <!-- Виджет для архива событий -->
                <?php if(!empty(get_field('kod_vidzheta_dlya_arhiva_anonsov'))):?>
                    <?=do_shortcode(get_field('kod_vidzheta_dlya_arhiva_anonsov'));?>
                <?php endif;?>
            </div>
        </div>
    </section>

    <!-- END CONTENT-->

    <!-- Footer -->
<?php
    get_footer();
?>