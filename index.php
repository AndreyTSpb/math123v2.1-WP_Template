<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 03/07/2021
 * Time: 20:06
 */
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package math123v2.1
 * @subpackage math123v2.1
 * @since math123 2.1.0
 *
 */
get_header();
?>
<?php
    if ( is_front_page()) :
        the_post();
        get_template_part( 'template-parts/content', 'home' );

    elseif(in_category( 'teachers' )):

        the_post();

        get_template_part( 'template-parts/content', 'page' );
    else:
        the_post();

        get_template_part( 'template-parts/content', 'page' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

    endif;
?>
<?php
    get_footer();
?>