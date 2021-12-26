<?php
    get_header();
?>

    <div id="primary" class="content-area" >

        <main id="main" class="site-main">

            <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', get_post_type() );
                
            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->

    </div>        

    <div class="container toys">
                <h2 class="subtitle">Возможно вам понравиться</h2>
                <div class="toys__wrapper">
                <?php
                    // параметры по умолчанию. Код скачан с wp-kama.ru 
                    $posts = get_posts( array(
                        'numberposts' => 3,//количество постов, которые надо выводить на странице, ы данном случаи указываем, что все
                        'category_name'    => "soft_toys", //Здесь правим в  category_name, так как выводим посты определенной категории согласно рубрике
                        'orderby'     => 'date', //сотритурем посты по датеgit 
                        'order'       => 'ASC', //выводим посты в обратном порядке
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    foreach( $posts as $post ){
                        setup_postdata( $post ); //прерываем тут код PHP чтобы вставить для выполнения смешанный код HTML и PHP
                        ?>

                            <div class="toys__item" style="background-image: url(<?php 
                                            if (has_post_thumbnail()){
                                                the_post_thumbnail_url();
                                            } else {
                                                echo get_template_directory_uri() . "/assets/img/not-found.jpg";
                                            }
                                             ;?>)">
                                <div class="toys__item-info">
                                    <div class="toys__item-title"><?php the_title(); ?></div>
                                    <div class="toys__item-descr">
                                        <!-- Классика. Должен быть у каждого ребенка!                             -->
                                        <?php the_field('toys_descr'); ?>
                                    </div>
                                    <div class="minibutton toys__trigger">Подробнее</div>
                                </div>
                            </div>
                          

                        <?php //возобновляем прерванный выше код PHP 
                    }

                    wp_reset_postdata(); // сброс
                
                ?>        
                </div>
                
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="toys__alert">
                            <span>Не нашли то, что искали?</span> Свяжитесь с нами - и мы с радостью создадим любую игрушку по вашему желанию. Вы можете выбрать все: размер, материал, формы...!
                        </div>
                    </div>
                </div>
            </div>

<?php
    get_footer();