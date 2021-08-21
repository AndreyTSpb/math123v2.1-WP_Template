<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 03/07/2021
 * Time: 21:15
 */
?>
    <div class="separator-row bg-purple"></div>
    <div class="separator-row bg-green"></div>
    <div class="separator-row bg-yellow"></div>
    <footer class="footer">
        <div class="footer-wrap">
            <div class="footer-logo">
                <img src="img/logo.png" alt="" srcset="">
                <div class="footer-logo-docs">
                    <ul>
                        <li>
                            <a href="/doc_pdf/dogovor.pdf" target="_blank">
                                Текст типового договора
                            </a>
                        </li>
                        <li>
                            <a href="/doc_pdf/Polzovatelskoe_soglashenie.pdf" target="_blank">
                                Текст пользовательского соглашения об использовании сайта «РАЗ-ДВА-ТРИ! ЦЕНТР ОЛИМПИАДНОЙ МАТЕМАТИКИ, ФИЗИКИ И ПРОГРАММИРОВАНИЯ» и его сервисов.
                            </a>
                        </li>
                        <li>
                            <a href="/doc_pdf/Politika_obrabotki_personalnykh_dannykh_1-2-3.pdf" target="_blank">
                                Политика обработки персональных данных.
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <?php get_template_part( 'template-parts/footer/menu' ); ?>
            
            <div class="footer-social">
                <a href="<?php the_field('vk_link', 2);?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-vk"></i></a>
                <a href="https://www.youtube.com/Math123" target="_blank" rel="noopener noreferrer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                    </svg>
                </a>
                <a href="https://www.instagram.com/math_123.ru" target="_blank" rel="noopener noreferrer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                    </svg>
                </a>
            </div>
        </div>
    </footer>

    <!-- Footer Mobile -->
    <footer class="footer-mobile">
        <div class="footer-mobile-social">
            <a href="<?php the_field('vk_link', 2);?>" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_url');?>/assets/img/Vk.svg" alt="" srcset=""></a>
            <a href="https://www.youtube.com/Math123" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_url');?>/assets/img/youtube.svg" alt="" srcset=""></a>
            <a href="https://www.instagram.com/math_123.ru" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_url');?>/assets/img/instagram_2.svg" alt="" srcset=""></a>
        </div>
        <div class="footer-mobile-form">
            <?= do_shortcode('[contact-form-7 id="155" title="Обратная связь"]');?>
        </div>
        <div class="footer-mobile-docs dropdown">
            <button class="footer-mobile-docs-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-folder"></i> документы <b>скачать</b>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a href="/doc_pdf/dogovor.pdf" target="_blank">Текст типового договора</a><br>
                <a href="/doc_pdf/Polzovatelskoe_soglashenie.pdf" target="_blank">
                    Текст пользовательского соглашения об использовании сайта «РАЗ-ДВА-ТРИ! ЦЕНТР ОЛИМПИАДНОЙ МАТЕМАТИКИ, ФИЗИКИ И ПРОГРАММИРОВАНИЯ» и его сервисов.
                </a><br>
                <a href="/doc_pdf/Politika_obrabotki_personalnykh_dannykh_1-2-3.pdf" target="_blank">
                    Политика обработки персональных данных.
                </a>
            </div>
        </div>
        <div class="footer-mobile-circle">
            <img src="<?php bloginfo('template_url');?>/assets/img/lamp.png" alt="" srcset="">
            <p>
                мы учим учиться
            </p>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-select-one-subject">
            <div class="modal-content">
                <div class="select-groups-grid-item grean">
                    <div class="select-groups-grid-item-notice">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="select-groups-grid-item-form">
                        <div class="spinner-border" role="status">
                            <span class="visually-hidden">Загрузка...</span>
                        </div>
                        <form action="" style="display: none;">
                            <div class="select">
                                <select name="" id="" onchange="this.style.color='black'">
                                    <option value="" style="display:none">площадка</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                </select>
                            </div>
                            <div class="select">
                                <select name="" id="" onchange="this.style.color='black'">
                                    <option value="" style="display:none">Класс</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                </select>
                            </div>
                            <div class="select">
                                <select name="" id="" onchange="this.style.color='black'">
                                    <option value="" style="display:none">преподаватель</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                </select>
                            </div>
                            <div class="select">
                                <select name="" id="" onchange="this.style.color='black'">
                                    <option value="" style="display:none">кол-во занятий</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                </select>
                            </div>
                            <div class="select">
                                <select name="" id="" onchange="this.style.color='black'">
                                    <option value="" style="display:none">расписание</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                </select>
                            </div>
                            <div class="select">
                                <select name="" id="" onchange="this.style.color='black'">
                                    <option value="" style="display:none">цена</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                    <option value="1">we</option>
                                </select>
                            </div>
                            <div class="select-groups-grid-item-form-footer">
                                <button class="btn ">записаться</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>

<!-- Написать Ведушему направления -->
<div class="modal fade grey" id="mailTeach" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="mailTeachLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mailTeachLabel">связаться с руководителем</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div style="display: none;">
                        <input type="hidden" name="_wpcf7" value="155">
                        <input type="hidden" name="_wpcf7_version" value="5.4">
                        <input type="hidden" name="_wpcf7_locale" value="ru_RU">
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f155-o1">
                        <input type="hidden" name="_wpcf7_container_post" value="0">
                        <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="ФИО">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="E-Mail">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Телефон">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <textarea class="form-control" name="text" id="" cols="20" rows="5">Сообщения</textarea>
                        </div>
                    </div>
                    <button class="btn-sub green mt-2">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- User-mobile-menu-->
    <?php if(isset($_COOKIE['id_user']) AND !empty((int)$_COOKIE['id_user']) AND isset($_COOKIE['session_id']) AND !empty($_COOKIE['session_id'])):?>
        <section class="slide-menu">
            <ul>
                <li class="d-sm-none"><a href="#" data-toggle="tooltip" data-placement="right" title="На Главную"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="right" title="На Верх"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></li>
                <li><a href="https://user.math123.ru/mydostigenija" data-toggle="tooltip" data-placement="right" title="мои достижения"><i class="fas fa-trophy"></i></a></li>
                <li><a href="https://user.math123.ru/myhomework" data-toggle="tooltip" data-placement="right" title="мои задания"><i class="fas fa-book"></i></a></li>
                <li><a href="https://user.math123.ru/messag" data-toggle="tooltip" data-placement="right" title="Мои Сообщения"><i class="fa fa-envelope-open" aria-hidden="true"></i></a></li>
                <li><a href="https://user.math123.ru/mygroups" data-toggle="tooltip" data-placement="right" title="Мои Группы"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a></li>
                <li><a href="https://user.math123.ru/lk" data-toggle="tooltip" data-placement="right" title="Мои Данные"><i class="fa fa-id-card" aria-hidden="true"></i></a></li>
                <li><a href="https://user.math123.ru/logoff" data-toggle="tooltip" data-placement="right" title="Выход"><i class="fas fa-sign-out-alt"></i></a></li>
                <!--li>
                    <a href="#" class="d-block d-sm-none"><i class="fa fa-sign-in" aria-hidden="true"></i> Вход</a>
                </li-->
            </ul>
        </section>
    <?php else:?>
        <section class="slide-menu">
            <ul>
                <li class="d-sm-none"><a href="#" data-toggle="tooltip" data-placement="right" title="На Главную"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="right" title="На Верх"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></li>
                <li>
                    <a href="https://user.math123.ru/login" class="d-block d-sm-none"><i class="fa fa-sign-in" aria-hidden="true"></i> Вход</a>
                </li>
            </ul>
        </section>
    <?php endif;?>

    <?php do_shortcode('[math123_btn_rec_to_group subject=1]record[/math123_btn_rec_to_group]');?>
    <?php
    wp_footer();
    ?>
    </body>
</html>
