<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 25/07/2021
 * Time: 15:14
 */
/*
Template Name: Шаблон страницы "ГАЛЕРЕЯ СЛАВЫ ЦЕНТРА РАЗ-ДВА-ТРИ"
Template Post Type: page
@package math123v2.1
@subpackage math123v2.1
@since math123 2.1.0
*/
get_header();

/**
 * Пулучаем данные о преподе из постов
 */
function winers_city_rating_get_posts($category){
    // для преподавателей категория 5
    // параметры по умолчанию
    $posts = get_posts( array(
        'numberposts' => -1,
        'category'    => $category,
        'orderby'     => 'date',
        'order'       => 'ASC',
        'post_type'   => 'post',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ) );

    $winers_arr = array();
    foreach ($posts as $id_arr => $post){

        $winer = winers_city_rating_get_custom_fields($post->ID);
        $winers_arr[$post->ID] = array(
            "photo"  => $winer['foto_pobeditelya'],
            "fio"    => $winer['fio'],
            "link"   => $post->guid,
            "title"  => $post->post_title
        );
    }
    wp_reset_postdata(); // сброс
    return $winers_arr;
}
/**
 * Получаем кастомпые поля к записе
 */
function winers_city_rating_get_custom_fields($id){
    $fields = get_fields($id);

    $new_arr = array(
        'foto_pobeditelya' => $fields['foto_pobeditelya']['url'],
        'fio' => $fields['fio']
    );
    return $new_arr;
}


/**
 * Получаем посты из рубрики Фото и видео с мероприятий 38 photo_video_events
 */
function video_event_get_posts($category){
    // для преподавателей категория 5
    // параметры по умолчанию
    $posts = get_posts( array(
        'numberposts' => -1,
        'category'    => $category,
        'orderby'     => 'date',
        'order'       => 'ASC',
        'post_type'   => 'post',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ) );

    $video_arr = array();
    foreach ($posts as $id_arr => $post){
        setup_postdata( $post );
        /**
         * Получаем все вставленное видео в статью
         */
        $media = get_media_embedded_in_content(
            apply_filters( 'the_content', get_the_content() ), ''
        );

        $video_arr[$post->ID] = array(
            "link"   => $post->guid,
            "title"  => $post->post_title,
            "img"    => get_the_post_thumbnail( $post->ID, 'medium' ),
            "video"  => $media
        );
    }
    wp_reset_postdata(); // сброс
    return $video_arr;
}


?>
    <!-- START CONTENT-->
    <section class="pages hall-glory-page">
        <div class="container">
            <h1>
                <?php the_title();?>
            </h1>
            <!-- Отображение постов из рубрики "ПОБЕДИТЕЛИ ГОРОДСКОГО РЕЙТИНГА" 37 winers_city_rating в link ссылка на статью-->
            <div class="hall-glory-page-winners">
                <h2>Победители городского рейтинга</h2>
                <div class="our-teacher-wraper">
                    <?php $get_winners = winers_city_rating_get_posts(37);?>
                    <?php if(!empty($get_winners)):?>
                        <?php foreach ($get_winners as $winer):?>
                            <div class="our-teacher-item">
                                <div class="our-teacher-item-grid">

                                    <img class="purple-frame radius" src="<?=$winer['photo']?>" alt="">
                                    <div class="our-teacher-item-name">
                                        <?=$winer['fio']?>
                                    </div>
                                    <div class="our-teacher-item-info">
                                        <?=$winer['title']?>
                                    </div>

                                </div>
                            </div>
                        <?php endforeach;?>
                    <?php endif;?>
                </div>
            </div>

            <!-- Фото и видео с мероприятий -->
            <div class="video-from-events">
                <h2>Фото и видео с мероприятий</h2>
                <?php $post_event = video_event_get_posts(38);?>
                <div class="video-from-events-wrap">
                    <?php if(!empty($post_event)):?>
                        <?php foreach ($post_event as $post):?>
                        <!-- Button trigger modal -->
                        <div class="button-open-modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <?=$post['img'];?>
                            <h4><?=$post['title']?></h4>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel"><?=$post['title']?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="video-wrap">
                                            <?php if(!empty($post['video'])):?>
                                                <?php foreach ($post['video'] as $video):?>
                                                    <div class="video-item purple-frame">
                                                        <?=$video;?>
                                                    </div>
                                                <?php endforeach;?>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    <?php endif;?>
                </div>
            </div>

        </div>
    </section>
    <!-- END CONTENT-->
<?php
    get_footer();
?>
