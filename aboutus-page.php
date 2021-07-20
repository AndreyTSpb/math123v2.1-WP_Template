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
//$custom_fields = get_post_custom();
//print_r($custom_fields);
//var_dump($custom_fields['kartinka_k_napravleniyu'][0]);
//$class_modifikator = get_field('vybor_napravleniya');

$the_post = get_post();
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

            </div>
        </div>
    </section>
    <!-- END CONTENT-->

    <!-- Footer -->
<?php
get_footer();
?>