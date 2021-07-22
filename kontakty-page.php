<?php
/*
Template Name: Шаблон страницы для контактов
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
?>
    <!-- START CONTENT-->
    <section class="pages">
        <div class="container">
            <h2>
                <?php the_title();?>
            </h2>
            <?php the_content(); ?>
        </div>
    </section>
    <!-- END CONTENT-->

    <!-- Footer -->
<?php
    get_footer();
?>