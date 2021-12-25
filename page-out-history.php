<?php 
/*
Template Name:   Наша история
*/
?>
        <?php 
            get_header();
        ?>
        
        <div class="aboutus" id="aboutus">
            <div class="container">
                <h1 class="title"><?php the_field('history_title'); ?></h1><!-- Меняем - наша история - здесь код, после создания нужных полей в плагине AFC, удаляем текс пишем код PHP-->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                            <!-- ? Все начиналось с желания  Тоже меняем на код -->
                            <?php the_field('history_subtitle'); ?>
                        </div>
                        <div class="aboutus__text">
                            <!-- Желания сделать как можно больше детей счастливыми. Именно с этой идеи все и зарождалось.
                            <br><br>
                            Первые игрушки, сделанные вручную были классическими плюшевыми медведями, которые разошлись настолько быстро, что нас завалили заказами на несколько месяцев вперед. Именно в то время мы поняли, что идем правильным путем, вкладывая все силы и эмоции в наши игрушки. -->
                            <!-- ? Вместо текста пишем код PHP после создания соответ-их полей в AFC   -->
                            <?php the_field('history_first_descr'); ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field('history_first_img');?>" alt="мир детства">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field('history_second_img');?>" alt="мир детства">
                    </div>
                    <div class="col-lg-6">
                        <div class="subtitle">
                            <!-- Главное - качество   - Меняем на код PHP -->
                            <?php the_field('history_subtitle_two'); ?>
                        </div>
                        <div class="aboutus__text">
                            <!-- Мы делали их вручную, из лучших материалов и не жалея времени. Но мы росли и наш ассортимент расширился и фабричными изделиями.
                            <br><br>
                            Выбирая нас, вы можете быть уверены, что мы всегда следим за качеством закупок и никогда не предоставим вам опасный или некачественный товар. -->
                            <!-- ? Вместо текста пишем код PHP после создания соответ-их полей в AFC   -->
                            <?php the_field('history_second_descr'); ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                            <!-- Современные технологии - Меняем на код PHP -->
                            <?php the_field('history_subtitle_third'); ?>
                        </div>
                        <div class="aboutus__text">
                            <!-- И даже спустя столько лет мы продолжаем создавать игрушки вручную. Как самые простые, так и те, что идут в ногу со временем. Добавляя электроники и оживляя лучших друзей ребятишек, мы всегда следим за качеством и безопасностью. Каждая отдельная игрушка проходит индивидуальный контроль по всем необходимым стандартам.
                            <br><br>
                            Ведь счастливое лицо ребенка - это лучшая награда для нас! -->
                            <!-- ? Вместо текста пишем код PHP после создания соответ-их полей в AFC   -->
                            <?php the_field('history_third_descr'); ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field('history_third_img');?>" alt="мир детства">
                    </div>
                </div>
            </div>
        </div>

        <?php
            get_footer();
        ?>