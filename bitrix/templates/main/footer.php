<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>

<script type="text/javascript" >
    $().ready(function(){
        $(function(){
            $('#slides').slides({
                preload: true,
                generateNextPrev: false,
                play: 1000,
                effect: 'fade',
                preloadImage: '/bitrix/templates/.default/content/loading.gif'
            });
        });
    });
</script>

<div class="sl_slider" id="slides">
    <div class="slides_container">
        <div>
            <div>
                <img src="<?=SITE_DIR."bitrix/templates/.default/"?>/content/1.jpg" alt="" />
                <h2><a href="">Диваны и кресла</a></h2>
                <p>Новая комбинация для ТВ БЕСТО не просто предмет мебели – она разработана, также, для мультимедиа. Провода и сетевые кабели можно хранить внутри комбинации или протянуть через отверстие для вентиляции. Секция полок обеспечивает эффективное использование стены, освобождая место на полу.</p>
                <a href="" class="sl_more">Подробнее &rarr;</a>
            </div>
        </div>
        <div>
            <div>
                <img src="<?=SITE_DIR."bitrix/templates/.default/"?>/content/1.jpg" alt="" />
                <h2><a href="">Диваны и кресла</a></h2>
                <p>Новая комбинация для ТВ БЕСТО не просто предмет мебели – она разработана, также, для мультимедиа. Провода и сетевые кабели можно хранить внутри комбинации или протянуть через отверстие для вентиляции. Секция полок обеспечивает эффективное использование стены, освобождая место на полу.</p>
                <a href="" class="sl_more">Подробнее &rarr;</a>
            </div>
        </div>
    </div>
</div>


<!--- // end slider area --->

<div class="main_container homepage">

    <!-- events -->
    <div class="ev_events">
        <div class="ev_h">
            <h3>Ближайшие события</h3>
            <a href="" class="ev_allevents">Все мероприятия &rarr;</a>
        </div>
        <ul class="ev_lastevent">
            <li>
                <h4><a href="">29 августа 2012, Москва</a></h4>
                <p>Семинар производителей мебели России и СНГ, Обсуждение тенденций.</p>
            </li>
            <li>
                <h4><a href="">30 августа 2012, Санкт-Петербург</a></h4>
                <p>Открытие шоу-рума на Невском проспекте. Последние модели в большом ассортименте.</p>
            </li>
            <li>
                <h4><a href="">31 августа 2012, Краснодар</a></h4>
                <p>Открытие нового магазина в нашей дилерской сети.</p>
            </li>
        </ul>
        <div class="clearboth"></div>
    </div>
    <!-- // end events -->
    <div class="cn_hp_content">
        <div class="cn_hp_category">
            <ul>
                <li>
                    <img src="<?=SITE_DIR."bitrix/templates/.default/"?>/content/1.png" alt=""/>
                    <h2><a href="">Мягкая мебель</a></h2>
                    <p>Диваны, кресла и прочая мягкая мебель <a class="cn_hp_categorymore" href="">&rarr;</a></p>
                    <div class="clearboth"></div>
                </li>
                <li>
                    <img src="<?=SITE_DIR."bitrix/templates/.default/"?>/content/2.png" alt=""/>
                    <h2><a href="">Офисная мебель</a></h2>
                    <p>Диваны, столы, стулья <a class="cn_hp_categorymore" href="">&rarr;</a></p>
                    <div class="clearboth"></div>
                </li>
                <li>
                    <img src="<?=SITE_DIR."bitrix/templates/.default/"?>/content/3.png" alt=""/>
                    <h2><a href="">Мебель для кухни</a></h2>
                    <p>Полки, ящики, столы и стулья <a class="cn_hp_categorymore" href="">&rarr;</a></p>
                    <div class="clearboth"></div>
                </li>
                <li>
                    <img src="<?=SITE_DIR."bitrix/templates/.default/"?>/content/4.png" alt=""/>
                    <h2><a href="">Детская мебель</a></h2>
                    <p>Кровати, стулья, мягкая детская мебель <a class="cn_hp_categorymore" href="">&rarr;</a></p>
                    <div class="clearboth"></div>
                </li>
            </ul>
            <a href="" class="cn_hp_category_more">Все разделы каталога &rarr;</a>
        </div>
        <div class="cn_hp_post">
            <div class="cn_hp_post_new">
                <h3>Новинки</h3>
                <img src="<?=SITE_DIR."bitrix/templates/.default/"?>/content/7.png" alt=""/>
                <p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
                <div class="clearboth"></div>
            </div>
            <div class="cn_hp_post_action">
                <h3>Акции</h3>
                <img src="<?=SITE_DIR."bitrix/templates/.default/"?>/content/7.png" alt=""/>
                <p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
                <div class="clearboth"></div>
            </div>
            <div class="cn_hp_post_bestsellersn">
                <h3>Хиты продаж</h3>
                <img src="<?=SITE_DIR."bitrix/templates/.default/"?>/content/7.png" alt=""/>
                <p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
                <div class="clearboth"></div>
            </div>
        </div>
        <div class="cn_hp_lastnews">
            <h3><a href="">Новости</a></h3>
            <ul>
                <li>
                    <h4><a href="">29 августа 2012</a></h4>
                    <p>Поступление лучших офисных кресел из Германии</p>
                </li>
                <li>
                    <h4><a href="">29 августа 2012</a></h4>
                    <p>Мастер-класс дизайнеров из Италии для производителей мебели</p>
                </li>
                <li>
                    <h4><a href="">29 августа 2012</a></h4>
                    <p>Открытие нашего нового офиса рядом с метро Измайлово</p>
                </li>
                <li>
                    <h4><a href="">29 августа 2012</a></h4>
                    <p>Наша дилерская сеть расширилась теперь ассортимент наших товаров доступен в Казани</p>
                </li>
            </ul>
            <br/>
            <a href="" class="cn_hp_lastnews_more">Все новости &rarr;</a>
        </div>
        <div class="clearboth"></div>
    </div>
</div>

<script type="text/javascript" >
    $(document).ready(function(){

        $("#foo").carouFredSel({
            items:2,
            prev:'#rwprev',
            next:'#rwnext',
            scroll:{
                items:1,
                duration:2000
            }
        });
    });
</script>

<div class="rw_reviewed">
    <div class="rw_slider">
        <h4>Отзывы</h4>
        <ul id="foo">
            <li>
                <div class="rw_message">
                    <img src="<?=SITE_DIR."bitrix/templates/.default/"?>/content/8.png" class="rw_avatar" alt=""/>
                    <span class="rw_name">Сергей Антонов</span>
                    <span class="rw_job">Руководитель финансового отдела “Банк+”</span>
                    <p>“Покупал офисные стулья и столы, остался очень доволен! Низкие цены, быстрая доставка, обслуживание на высоте! Спасибо!”</p>
                    <div class="clearboth"></div>
                    <div class="rw_arrow"></div>
                </div>
            </li>
            <li>
                <div class="rw_message">
                    <img src="<?=SITE_DIR."bitrix/templates/.default/"?>/content/8.png" class="rw_avatar" alt=""/>
                    <span class="rw_name">Дмитрий Иванов</span>
                    <span class="rw_job">Генеральный директор группы компаний "Офис+"</span>
                    <p>“В магзине предоставили потрясающий выбор расцветок, а также, получил большую скидку по карте постоянного клиента.”</p>
                    <div class="clearboth"></div>
                    <div class="rw_arrow"></div>
                </div>
            </li>
            <li>
                <div class="rw_message">
                    <img src="<?=SITE_DIR."bitrix/templates/.default/"?>/content/8.png" class="rw_avatar" alt=""/>
                    <span class="rw_name">Сергей Антонов</span>
                    <span class="rw_job">Руководитель финансового отдела “Банк+”</span>
                    <p>“Покупал офисные стулья и столы, остался очень доволен! Низкие цены, быстрая доставка, обслуживание на высоте! Спасибо!”</p>
                    <div class="clearboth"></div>
                    <div class="rw_arrow"></div>
                </div>
            </li>
        </ul>
        <div id="rwprev"></div>
        <div id="rwnext"></div>
        <a href="" class="rw_allreviewed">Все отзывы</a>
    </div>
</div>

<?require_once ($_SERVER['DOCUMENT_ROOT']."/bitrix/templates/.default/include/footer.php")?>
</div>
</body>
</html>