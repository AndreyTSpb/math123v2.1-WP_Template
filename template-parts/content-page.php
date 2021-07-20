<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 03/07/2021
 * Time: 22:00
 */
?>
<div class="container">
    <div class="row">
        <div class="col-12 mx-auto">
            <h1 class='text-center mb-3 mt-3'><?php the_title();?></h1>
        </div>
        <div class="col-12 mx-auto">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div><!-- .entry-content -->
            </article><!-- #post-<?php the_ID(); ?> -->
        </div>
    </div>
</div>
