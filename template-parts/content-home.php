<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 03/07/2021
 * Time: 21:47
 */

/**
 * Для вывода по шорткоду использовать такую конструкцию, прямые шорткоды не работают
 */
//слайдер
echo apply_filters('the_content', get_post_meta($post->ID, 'slider', true));

//запись в группы
echo apply_filters('the_content', get_post_meta($post->ID, 'zapis_v_grupu', true));
?>
    <!-- О НАС -->
    <section class="about-us">
        <div class="container">
            <h2>центр <span>раз-два-три!</span> работает для вас!</h2>
            <div class="about-us-text">
                <?=get_field('about_us')['obshhee_opisanie'];?>
            </div>

            <div class="about-us-circles row-3">

                <a href="<?=get_field('about_us')['link_cyrcle_1']['url'];?>" class="about-us-circle yelow-frame radius">
                    <img src="<?php bloginfo('template_url');?>/assets/img/lamp-1.png" alt="" srcset="">
                    <p>развиваем интеллект <br>и мышление</p>
                </a>
                
                <a href="<?=get_field('about_us')['link_cyrcle_2']['url'];?>" class="about-us-circle yelow-frame radius">
                    <img src="<?php bloginfo('template_url');?>/assets/img/uspeh.png" alt="" srcset="" style="width: 54px; height: 55px;">
                    <p>перспектива успеха</p>
                </a>
                
                <a href="<?=get_field('about_us')['link_cyrcle_3']['url'];?>" class="about-us-circle yelow-frame radius">
                    <img src="<?php bloginfo('template_url');?>/assets/img/oculus.png" alt="" srcset="" style="width: 91px; height: 36px; margin-top: 10px;">
                    <p>увлеченные преподаватели</p>
                </a>
                
            </div>

            <div class="about-us-circles row-2">
                
                <a href="<?=get_field('about_us')['link_cyrcle_4']['url'];?>" class="about-us-circle yelow-frame radius" style="justify-self: end;">
                    <img src="<?php bloginfo('template_url');?>/assets/img/finger.png" alt="" srcset="" style="width: 43px; height: 40px;">
                    <p>более <br>2000 детей <br>30 площадок</p>
                </a>
                
                <a href="<?=get_field('about_us')['link_cyrcle_5']['url'];?>" class="about-us-circle yelow-frame radius" style="justify-self: start;">
                    <img src="<?php bloginfo('template_url');?>/assets/img/cup.png" alt="" srcset="" style="width: 49px; height: 51px;">
                    <p>организатор <br>городских <br>олипиад</p>
                </a>

            </div>

            <div class="about-us-circles-567 row-2">
                
                <a href="<?=get_field('about_us')['link_cyrcle_1']['url'];?>" class="about-us-circle yelow-frame radius">
                    <img src="<?php bloginfo('template_url');?>/assets/img/lamp-1.png" alt="" srcset="" style="width: 49px; height: 51px;">
                    <p>развиваем интеллект <br>и мышление</p>
                </a>
                
                <a href="<?=get_field('about_us')['link_cyrcle_2']['url'];?>" class="about-us-circle yelow-frame radius">
                    <img src="<?php bloginfo('template_url');?>/assets/img/uspeh.png" alt="" srcset="" style="width: 49px; height: 51px;">
                    <p>перспектива успеха</p>
                </a>
                
            </div>

            <div class="about-us-circles-567 row-1">
                
                <a href="<?=get_field('about_us')['link_cyrcle_3']['url'];?>" class="about-us-circle yelow-frame radius">
                    <img src="<?php bloginfo('template_url');?>/assets/img/oculus.png" alt="" srcset="" style="width: 91px; height: 36px; margin-top: 10px;">
                    <p>увлеченные преподаватели</p>
                </a>

            </div>

            <div class="about-us-circles-567 row-2">
                
                <a href="<?=get_field('about_us')['link_cyrcle_4']['url'];?>" class="about-us-circle yelow-frame radius" >
                    <img src="<?php bloginfo('template_url');?>/assets/img/finger.png" alt="" srcset="" style="width: 49px; height: 51px;">
                    <p>более <br>2000 детей <br>30 площадок</p>
                </a>
                <?php $c5 = get_field('about_us')['link_cyrcle_5']['url'];?>
                <a href="<?=$c5['url'];?>" class="about-us-circle yelow-frame radius">
                    <img src="<?php bloginfo('template_url');?>/assets/img/cup.png" alt="" srcset="" style="width: 49px; height: 51px;">
                    <p>организатор <br>городских <br>олипиад</p>
                </a>

            </div>

            <!-- Vilka napravlenyy -->
            <?php if(!empty(get_field('about_us')['vilka_napravlenij'])):?>

                <div class="about-us-napravlenia">
                    <?php foreach (get_field('about_us')['vilka_napravlenij'] as $item):?>
                        <div class="about-us-napravlenia-card">
                            <h2><?=$item['title'];?></h2>
                            <div class="about-us-napravlenia-card-body">
                                <img src="<?=$item['img']['url'];?>" alt="">
                                <h4 class="text-purple"><?=$item['type'];?></h4>
                                <p>
                                    <?=$item['text'];?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>

            <?php endif;?>
            
            <!-- Perehod na napravlenya-->
            <div class="about-us-napravlenia-buttons">
                <a href="/napravleniya/math/" class="btn-subject math">математика</a>
                <a href="/napravleniya/olimpiadnay_fizika/" class="btn-subject phyth">физика</a>
                <a href="/napravleniya/prog/" class="btn-subject prog">программирование</a>
                <a href="/napravleniya/biznes/" class="btn-subject biznes">бизнес-курс</a>
            </div>
        </div>
    </section>

    <!-- НАШИ ДОСТИЖЕНИЯ -->
    <section class="our-progress">
        <div class="separator-row bg-green"></div>
        <div class="separator-row bg-yellow"></div>
        <h2 class="text-white">наши УЧАЩИЕСЯ ПОБЕЖДАЮТ НА ОЛИМПИАДАХ</h2>
        <a href="<?= get_field('nashi_uchashhiesya_pobezhdayut_na_olimpiadah')['link'];?>"><img src="<?= get_field('nashi_uchashhiesya_pobezhdayut_na_olimpiadah')['img']['url'];?>" alt="" srcset=""></a>
    </section>

    <!-- НАШИ ПРЕПОДАВАТЕЛИ -->
    <?= apply_filters('the_content', get_post_meta($post->ID, 'teachers', true));?>

    <!-- MAPS -->
    <section class="maps">
        <div class="container">
            <h2><?= get_field('maps')['title'];?></h2>
                <?= do_shortcode(get_field('maps')['short-code-map']);?>
            <div class="maps-new-place">
                <h4>Не нашли нас рядом с домом?</h4>
                <div class="maps-new-place-form">
                    <form action="">
                        <input type="text" placeholder="город" class="radius">
                        <div class="select-pink">
                            <select name="metro" id="">
                                <option value="">м. Ленинский пр.</option>
                                <option value="">м. Пр. Блдбшевиков</option>
                                <option value="">м. Пр. Мужества</option>
                                <option value="">м. Нарвская</option>
                            </select>
                        </div>
                        <button type="submit" class="btn-sub">напишите нам</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="slider-hr"></div>

    <!--  ВИДЕО ОТЗЫВЫ -->
    <section class="video">
        <div class="container">
            <h2>ЧТО ДАЛИ ЗАНЯТИЯ ВАШЕМУ РЕБЕНКУ?</h2>
            <div class="video-wrap">
                <?php
                // параметры по умолчанию
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'category'    => 13,
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );
                foreach( $posts as $id_arr => $post ){
                    setup_postdata($post);
                    // формат вывода the_title() ...
                    //echo '<pre>';
                    //print_r($post->ID);
                    //echo '</pre>';
                    //$media = get_attached_media( 'video', $post->ID );
                    //print_r( $media );
                    $arr_link = explode('/',get_field('link_video'));
                    ?>
                    <div class="video-item purple-frame">
                        <iframe src="https://www.youtube.com/embed/<?=array_pop($arr_link);?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>
                    <?php
                }
                wp_reset_postdata(); // сброс
                ?>
            </div>
        </div>
    </section>

<?php //the_field('video');?>
