<?php
/**
 * Template Name: Шаблон поста
 * Template Post Type: post
 */

get_header();
?>

<?php
while ( have_posts() ) :
    the_post();

    get_template_part( 'template-parts/content', 'post' );

    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;

endwhile; // End of the loop.
?>

<?php
get_footer();
