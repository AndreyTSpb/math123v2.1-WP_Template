<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 29/07/2021
 * Time: 12:44
 */
/*
    Template Name: Шаблон страницы для категории "Справочного раздела"
    Template Post Type: category
    @package math123v2.1
    @subpackage math123v2.1
    @since math123 2.1.0
*/
get_header();
?>
    <!-- START CONTENT-->
    <section class="pages category-reference-section">
        <div class="container">
            <!-- Взято из кастомных полей для категории  -->
            <h1><?php the_wpaffcp_h1();?></h1>
            <div class="pages-desc">
                <?php the_wpaffcp_cat_text();?>
            </div>

            <div class="accordion accordion-flush" id="accordionFlushExample">
                <?php
                $terms = get_category( get_query_var('cat'));
                $cat_id = $terms->cat_ID;

                /**
                 * получаем дочернии категориии у родительской
                 */
                $cat_args = array(
                    'child_of' => $cat_id,
                    'orderby' => 'name',
                    'order' => 'ASC'
                );
                $categories=get_categories($cat_args);
                if(!empty($categories)) {
                    /**
                     * Перебираем полученые категории
                     */
                    foreach ($categories as $category) { ?>
                        <?php
                            /**
                             * Для изменения тилей у карточек используем $caterory->slug
                             */
                            switch ($category->slug){
                                case 'reference-section-math':
                                    $style = 'math';
                                    $button = "purple";
                                    break;
                                case 'reference-section-phyth':
                                    $style = 'phyth';
                                    $button = "green";
                                    break;
                                case 'reference-section-prog':
                                    $style = 'prog';
                                    $button = "orang";
                                    break;
                                case 'reference-section-biznes':
                                    $style = 'biznes';
                                    $button = "blue";
                                    break;
                                default:
                                    $style = 'grey';
                                    $button = "purple";
                                    break;
                            }
                        ?>
                        <div class="accordion-item <?=$style?>">
                            <h2 class="accordion-header" id="flush-heading<?=$category->term_id;?>">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?=$category->term_id;?>" aria-expanded="false" aria-controls="flush-collapse<?=$category->term_id;?>">
                                    <?=$category->name;?>
                                </button>
                            </h2>
                            <div id="flush-collapse<?=$category->term_id;?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?=$category->term_id;?>" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <?php

                                        $args = array(
                                            'showposts' => -1,
                                            'category__in' => array($category->term_id),
                                            'caller_get_posts' => 1,
                                            'order'       => 'ASC'
                                        );

                                        $posts = get_posts($args);

                                        if ($posts) {
                                            $kol = 0;
                                            /**
                                             * Если есть посты то отображаем их
                                             */
                                            ?>   <!-- start acordion -->
                                                 <div class="accordion accordion-flush" id="accordionFlushExample<?=$category->term_id;?>">

                                                     <?php foreach($posts as $post) {
                                                        setup_postdata($post);
                                                        /**
                                                         * Получаем миниатюру к посту
                                                         */
                                                        if ( has_post_thumbnail() ) {
                                                            $thumb = get_the_post_thumbnail( $post->ID, 'medium' );
                                                        } else {
                                                            $thumb = '<img src="https://imgholder.ru/300x220/8493a8/adb9ca&text=IMAGE+HOLDER&font=kelson">';
                                                        }

                                                        $arr_posts = array(
                                                            'title'     => $post->post_title,
                                                            'desc'      => $post->post_excerpt,
                                                            'url'       => $post->guid,
                                                            'img'       => $thumb
                                                        );

                                                        ?>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="flush-heading<?=$post->ID;?>">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?=$post->ID;?>" aria-expanded="false" aria-controls="flush-collapse<?=$post->ID;?>">
                                                                        <?=$post->post_title;?>
                                                                    </button>
                                                                </h2>
                                                                <div id="flush-collapse<?=$post->ID;?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?=$post->ID;?>" data-bs-parent="#accordionFlushExample<?=$category->term_id;?>">
                                                                    <div class="accordion-body">
                                                                        <?php the_content();?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php
                                                        $kol++;
                                                        wp_reset_postdata();
                                                        }
                                                     ?>
                                                     <!-- /end acordion -->
                                                 </div>
                                        <?php
                                        }else{
                                            /**
                                             * Иначе пишем что постов нету
                                             */
                                            echo "В постов ".$category->name." еще нет!)))";
                                        }

                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php }
                }
                ?>
            </div>
        </div>
    </section>

<?php
    get_footer();
?>