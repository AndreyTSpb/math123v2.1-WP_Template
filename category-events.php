<?php
/*
Template Name: Шаблон страницы для направления
Template Post Type: category
@package math123v2.1
@subpackage math123v2.1
@since math123 2.1.0
*/
get_header();
?>

<!-- START CONTENT-->
<section class="pages category-events">
    <div class="container">
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
                                case 'math_events':
                                    $style = 'math';
                                    $button = "purple";
                                    break;
                                case 'phyth_events':
                                    $style = 'phyth';
                                    $button = "green";
                                    break;
                                case 'prog_events':
                                    $style = 'prog';
                                    $button = "orang";
                                    break;
                                case 'biznes_events':
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
                                    'caller_get_posts' => 1
                                );
                                $posts = get_posts($args);

                                if ($posts) {
                                    /**
                                     * Если есть посты то отображаем их
                                     */
                                    foreach($posts as $post) {
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

                                        <div class="card-base-anonce">
                                            <h4><?=$arr_posts['title'];?></h4>
                                            <div class="card-base-anonce-body">
                                                <?=$arr_posts['img'];?>
                                                <p><?=$arr_posts['desc'];?></p>
                                                <a href="<?=$arr_posts['url'];?>" class="btn-sub <?=$button;?>">Подробней</a>
                                            </div>
                                        </div>

                                        <?php
                                        wp_reset_postdata();
                                    }
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
<!-- END CONTENT-->

<!-- Footer -->
<?php
get_footer();
?>
