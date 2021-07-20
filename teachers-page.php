<?php
/*
Template Name: Шаблон страницы "Наши преподаватели"
Template Post Type: page
@package math123v2.1
@subpackage math123v2.1
@since math123 2.1.0
*/
get_header();
/**
 * Получаем все кастомные поля для текущей записи
 */
//$custom_fields = get_post_custom();
//print_r($custom_fields);
//var_dump($custom_fields['kartinka_k_napravleniyu'][0]);
//$class_modifikator = get_field('vybor_napravleniya');

$the_post = get_post();

/**
 * Пулучаем данные о преподе из постов
 */
function teacher_get_posts($category){
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
    /**
     * OBJECT
     * [post_author] => 1
     * [post_date] => 2021-04-13 14:18:27
     * [post_date_gmt] => 2021-04-13 11:18:27
     * [post_content] => Контент страницы
     * [post_title] => Иванова Мария
     * [post_excerpt] => ИТМО, к.м.н., зав. кафедрой... - описание
     * [post_status] => publish
     * [comment_status] => closed
     * [post_name] => ivanova-mariya
     * [guid] => http://math123-wordpress.local/?p=205
     *
     */
    $teachers_arr = array();
    foreach ($posts as $id_arr => $post){

        $teach = teacher_get_custom_fields($post->ID);
        $teachers_arr[$post->ID] = array(
            "photo"  => $teach['img'],
            "rating" => $teach['rating'],
            "subject"=> $teach['subject'],
            "name"   => $post->post_title,
            "desc"   => $post->post_excerpt,
            "link"   => $post->guid
        );
    }
    wp_reset_postdata(); // сброс
    return $teachers_arr;
}


/**
 * Получаем кастомпые поля к записе
 */
function teacher_get_custom_fields($id){
    $fields = get_fields($id);
    /**
     * ARRAY
     * [Fotoprepodavatelya] =>[
     *      [ID] => 211,
     *      [id] => 211,
     *      [title] => иванова мария,
     *      [filename] => teacher.png,
     *      [url] => http://math123-wordpress.local/wp-content/uploads/2021/04/teacher.png,
     *      [link] => http://math123-wordpress.local/teachers/ivanova-mariya/attachment/teacher/
     *      [description] => иванова мария
     *      [uploaded_to] => 205,
     *      .....
     * ],
     * [Predmetkotoryjprepodaet] => Математика,
     * [Rejtingprepodavatelya] => 3
     *
     */

    $new_arr = array(
        'img' => $fields['Fotoprepodavatelya']['url'],
        'subject' => $fields['Predmetkotoryjprepodaet'],
        'rating' => math123_teacher_rating($fields['Rejtingprepodavatelya'])
    );
    return $new_arr;
}

/**
 * 31 - math
 * 32 - phyth
 * 33 - prog
 * 34 - biznes
 */
$get_teach_math    = teacher_get_posts(31);
$get_teach_phyth   = teacher_get_posts(32);
$get_teach_prog    = teacher_get_posts(33);
$get_teach_biznes  = teacher_get_posts(34);

?>

    <!-- START CONTENT-->
    <!-- START CONTENT-->
    <section class="pages teachers">
        <div class="container">
            <h1><?=$the_post->post_title;?></h1>
            <div class="teachers-desc">
                <?=$the_post->post_content;?>
            </div>
            <!-- Вкладки с предметами -->
            <div class="teachers-subjects">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item math">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Математика
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <?php if(isset($get_teach_math) AND !empty($get_teach_math)):?>
                                    <?php foreach ($get_teach_math as $id_teach => $teacher):?>
                                        <div class="our-teacher-item">
                                            <div class="our-teacher-item-grid">
                                                <img class="purple-frame radius" src="<?=$teacher['photo'];?>" alt="">
                                                <div class="our-teacher-item-name">
                                                    <?=$teacher['name'];?>
                                                </div>
                                                <div class="our-teacher-item-info">
                                                    Преподаватель:<?=$teacher['subject'];?>.<br>
                                                    Стаж работы-5 лет
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item phyth">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Физика
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <?php if(isset($get_teach_phyth) AND !empty($get_teach_phyth)):?>
                                    <?php foreach ($get_teach_phyth as $id_teach => $teacher):?>
                                        <div class="our-teacher-item">
                                            <div class="our-teacher-item-grid">
                                                <img class="green-frame radius" src="<?=$teacher['photo'];?>" alt="">
                                                <div class="our-teacher-item-name">
                                                    <?=$teacher['name'];?>
                                                </div>
                                                <div class="our-teacher-item-info">
                                                    Преподаватель:<?=$teacher['subject'];?>.<br>
                                                    Стаж работы-5 лет
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item prog">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Программирование
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <?php if(isset($get_teach_prog) AND !empty($get_teach_prog)):?>
                                    <?php foreach ($get_teach_prog as $id_teach => $teacher):?>
                                        <div class="our-teacher-item">
                                            <div class="our-teacher-item-grid">
                                                <img class="orange-frame radius" src="<?=$teacher['photo'];?>" alt="">
                                                <div class="our-teacher-item-name">
                                                    <?=$teacher['name'];?>
                                                </div>
                                                <div class="our-teacher-item-info">
                                                    Преподаватель:<?=$teacher['subject'];?>.<br>
                                                    Стаж работы-5 лет
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item biznes">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                Бизнес
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <?php if(isset($get_teach_biznes) AND !empty($get_teach_biznes)):?>
                                    <?php foreach ($get_teach_biznes as $id_teach => $teacher):?>
                                        <div class="our-teacher-item">
                                            <div class="our-teacher-item-grid">
                                                <img class="blue-frame radius" src="<?=$teacher['photo'];?>" alt="">
                                                <div class="our-teacher-item-name">
                                                    <?=$teacher['name'];?>
                                                </div>
                                                <div class="our-teacher-item-info">
                                                    Преподаватель:<?=$teacher['subject'];?>.<br>
                                                    Стаж работы-5 лет
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTENT-->
    <!-- END CONTENT-->

    <!-- Footer -->
<?php
get_footer();
?>