<?php
/*
Template Name: Шаблон страницы "о кружке"
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
//var_dump($custom_fields['kartinka_k_napravleniyu'][0]);
//$class_modifikator = get_field('vybor_napravleniya');

$the_post = get_post();
/**
 *  [title_1] => Array ( [0] => Развить )
 *  [text_1] => Array ( [0] => интеллектуальные способности, логику и аналитическое мышление детей )
 *  [title_2] => Array ( [0] => Научить )
 *  [text_2] => Array ( [0] => ребят учиться самостоятельно с удовольствием и интересом! )
 *  [title_3] => Array ( [0] => Способствовать )
 *  [text_3] => Array ( [0] => формированию у учащихся адекватной самооценки, умению отстаивать свою точку зрения, уважая при этом мнение других. )
 *  [title_4] => Array ( [0] => Воспитать )
 *  [text_4] => Array ( [0] => характер победителя: сильную волю, умение справляться с неудачами, не зазнаваться при победах, все время учиться и двигаться вперед к новым вершинам. )
 *  [title_5] => Array ( [0] => Подготовить )
 *  [text_5] => Array ( [0] => ко взрослой жизни человека, способного решать сложные задачи и добиваться поставленных целей честным путем )
 */
?>

    <!-- START CONTENT-->
    <section class="pages about-page">
        <div class="container">
            <h1>
                <?= $the_post->post_title;?>
            </h1>
            <div class="about-page-text">
                <?= $the_post->post_content;?>
            </div>
            <div class="about-page-img">
                <div class="grid-item post-1">
                    <div class="grid-item-text">
                        <h4><?=$custom_fields['title_1'][0]?></h4>
                        <p><?=$custom_fields['text_1'][0]?></p>
                    </div>
                </div>
                <div class="grid-item post-2">
                </div>
                <div class="grid-item post-3">
                    <div class="grid-item-text">
                        <h4><?=$custom_fields['title_2'][0]?></h4>
                        <p><?=$custom_fields['text_2'][0]?></p>
                    </div>
                </div>
                <div class="grid-item post-4">
                    <div class="grid-item-text">
                        <h4><?=$custom_fields['title_3'][0]?></h4>
                        <p><?=$custom_fields['text_3'][0]?></p>
                    </div>
                </div>
                <div class="grid-item post-5">
                    <img src="<?php bloginfo('template_url');?>/assets/img/mishen.png" alt="" srcset="">
                    <img class="arow-green" src="<?php bloginfo('template_url');?>/assets/img/arow-green.png" alt="" srcset="">
                    <img class="arow-red" src="<?php bloginfo('template_url');?>/assets/img/arow-red.png" alt="" srcset="">
                    <img class="arow-blue" src="<?php bloginfo('template_url');?>/assets/img/arow-blue.png" alt="" srcset="">
                    <img class="arow-grey" src="<?php bloginfo('template_url');?>/assets/img/arow-grey.png" alt="" srcset="">
                    <img class="arow-orange" src="<?php bloginfo('template_url');?>/assets/img/arow-orange.png" alt="" srcset="">
                </div>
                <div class="grid-item post-6">
                </div>
                <div class="grid-item post-7">
                </div>
                <div class="grid-item post-8">
                    <div class="grid-item-text">
                        <h4><?=$custom_fields['title_4'][0]?></h4>
                        <p><?=$custom_fields['text_4'][0]?></p>
                    </div>
                </div>
                <div class="grid-item post-9">
                    <div class="grid-item-text">
                        <h4><?=$custom_fields['title_5'][0]?></h4>
                        <p><?=$custom_fields['text_5'][0]?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTENT-->

    <!-- Footer -->
<?php
get_footer();
?>