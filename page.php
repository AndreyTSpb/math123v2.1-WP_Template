<?php
/**
 * Template Name: Шаблон страницы
 * Template Post Type: page
 */

get_header();
?>

<?php
while ( have_posts() ) :

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

endwhile; // End of the loop.
?>

<?php
get_footer();