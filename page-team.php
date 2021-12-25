<?php 
/*
Template Name:   Наша команда
*/
?>
        <?php 
            get_header();
        ?>

        <div class="specialists" id="specialists">
            <div class="container">
                <div class="title"><?php the_field('about_title_team'); ?></div><!-- Меняем - нана команда - здесь код, после создания нужных полей в плагине AFC, удаляем текс пишем код PHP-->
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <img class="specialists__img" src="<?php the_field('about_img_team'); ?>" alt="наша команда">
                        <!-- Меняем код для фотографии -->
                    </div>
                </div>
            </div>
        </div>

        <?php
            get_footer();
        ?>