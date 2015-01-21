<?php
/**
 * License  GPL
 */
defined('_JEXEC') or die;
$app = JFactory::getApplication();
$leftbar = 1;
$rightbar = 1;
$tmpl_path = $this->baseurl . "/templates/" . $this->template . "/";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<jdoc:include type="head" />
<link rel="stylesheet" href="<?=$tmpl_path?>css/default.css" type="text/css" />
<script src="<?=$tmpl_path?>js/min/jquery.min.js"></script>
<script src="<?=$tmpl_path?>js/min/menus.min.js"></script>
<?php	
	/* if ($this->countModules('MODULE NAME') == 0) CONTENT */
?>
<script src="<?=$tmpl_path?>js/common.js"></script>
</head>
<body> 
	<div id="message">
	  <jdoc:include type="modules" name="message" style="xhtml" />
	</div>
	<header>
        <section id="roof">
            <?php
            if ($this->countModules('top-menu')):
            ?>
                <jdoc:include type="modules" name="top-menu" style="none" />
            <?php
            endif;
            /* ?>
            <menu>
                <li><a href="#" title="О нас">О нас</a>
                </li>
                <li><a href="#" title="Цены">Цены</a>
                </li>
                <li><a href="#" title="Специалисты">Специалисты</a>
                </li>
                <li><a href="#" title="Фотогалерея">Фотогалерея</a>
                </li>
                <li><a href="#" title="Статьи">Статьи</a>
                </li>
                <li><a href="#" title="Отзывы">Отзывы</a>
                </li>
                <li><a href="#" title="Акции" class="active">Акции</a>
                </li>
                <li><a href="#" title="Контакты">Контакты</a>
                </li>
            </menu><?php   */
            if ($this->countModules('search')) : ?>
            <div>
            <jdoc:include type="modules" name="search" style="none" />
            </div>
            <?php endif;
            /*?>
            <div>
                <form>
                    <input type="search" placeholder="Введите ваш запрос">
                    <button>
                        <div>Искать</div>
                    </button>
                </form>
            </div>
            <?php   */
            if ($this->countModules('cards')) : ?>
            <jdoc:include type="modules" name="cards" style="none" />
            <?php endif;
            /*?>
            <div id="cards"><a id="visa" href="#" title="VISA"></a><a id="master" href="#" title="Master Card"></a><a id="wifi" href="#" title="WiFi"></a>
            </div><?php    */ ?>
        </section>
        <section id="visavi">
            <div id="discount" class="color-pink">
                <?php if ($this->countModules('logotype')) : ?>
                <jdoc:include type="modules" name="logotype" style="none" />
                <?php endif;
                if ($this->countModules('discounts-on-banner')) : ?>
                    <jdoc:include type="modules" name="discounts-on-banner" style="none" />
                    <?php /*
                <div id="discount1" class="antique-italic-bold font-size18">Скидка <span class="font-size24">20%</span></div>
                <div id="discount2"><span class="antique-italic-bold font-size18">Скидка <span class="font-size24">20%</span></span><span id="first-visit">при первом посещении на все услуги</span>
                    <div id="discount-more"><span></span><a href="#" class="antique-italic-bold color-pink">подробнее</a><span></span>
                    </div>
                </div>
                <?php */
                endif;
                ?>
            </div>
            <?php if ($this->countModules('contacts')) : ?>
            <jdoc:include type="modules" name="contacts" style="none" />
            <?php endif;
            /*?>
            <div id="contacts">
                <div id="email"></div>
                <div id="phones">
                    <div>+7 (812) 401-03-94</div>
                    <div>+7 (812) 927-22-27</div>
                    <div class="clear-both">г. Санкт-Петербург, ул. Латышских стрелков, д.1, лит.А</div>
                </div>
            </div><?php   */  ?>
        </section>
        <section id="banner">
            <div id="slider">
                <div id="slider-controls">
                    <div><span>◄</span></div>
                    <div><span>■</span></div>
                    <div><span>►</span></div>
                </div>
            </div>
        <?php  if ($this->countModules('trinity-buttons')) : ?>
        <jdoc:include type="modules" name="trinity-buttons" style="none" />
        <?php endif;
        /* ?>
            <div><a id="make-appointment" href="#" title="записаться онлайн">
                    <div>записаться онлайн</div></a></div>
            <div><a id="make-gift" href="#" title="подари сертификат">
                    <div>подари сертификат</div></a></div>
            <div><a id="ask-specialist" href="#" title="задать вопрос специалисту">
                    <div>задать вопрос специалисту</div></a>
            </div><?php    */ ?>
        </section>
        <?php  if ($this->countModules('roof-mobile')) : ?>
        <jdoc:include type="modules" name="roof-mobile" style="none" />
        <?php endif;
         /*?>
        <section id="roof-mobile">
            <h1>Салон красоты</h1>
            <aside id="menu-right">
                <hr>
                <hr>
                <hr>
            </aside>
        </section>
        <?php   */
        if ($this->countModules('all-services')) : ?>
        <jdoc:include type="modules" name="all-services" style="none" />
        <?php endif;
        /*?>
        <section id="all-services">
            <div id="menu-left">
                <section class="centered-vertical">
                    <div>Все</div>
                    <div> услуги</div>
                </section>
            </div>
            <div>
                <section class="centered-vertical"><span class="float-left">Звоните!</span><span>+7 (812) 927-22-27</span></section>
            </div>
        </section>
        <?php
        */
        if ($this->countModules('join-us')) : ?>
        <jdoc:include type="modules" name="join-us" style="none" />
        <?php
        endif;
         /*?>
        <section id="join-us">
            <div><span>Присоединяйтесь:</span><a href="#"><img src="static/images/sources/social-twitter.png"></a><a href="#"><img src="static/images/sources/social-vk.png"></a><a href="#"><img src="static/images/sources/social-fb.png"></a><a href="#"><img src="static/images/sources/social-g+.png"></a>
            </div>
        </section>
        <?php
        */
        if ($this->countModules('main-menu')) : ?>
        <jdoc:include type="modules" name="main-menu" style="none" />
        <?php
        endif;
        /*?>
        <nav>
            <a href="hair-care" title="Парикмахерский зал">
                <div>
                    <div>Парикмахерский зал</div>
                </div></a><a href="limbs-care" title="Уход за руками и ногами">
                <div>
                    <div>Уход за руками и ногами</div>
                </div></a><a href="face-care" title="Уход за лицом">
                <div>
                    <div>Уход за лицом</div>
                </div></a><a href="care" title="Уход за телом">
                <div>
                    <div>Уход за телом</div>
                </div></a><a href="epilation" title="Лазерная эпиляция">
                <div>
                    <div>Лазерная эпиляция</div>
                </div></a><a href="injections" title="Инъекционная косметология">
                <div>
                    <div>Инъекционная косметология</div>
                </div></a><a href="apparatus" title="Аппаратная косметология">
                <div>
                    <div>Аппаратная косметология</div>
                </div></a>
        </nav><?php */?>
	</header>
	<main id="content" role="main">
        <?php
        if ($this->countModules('breadcrumbs')) : ?>
            <jdoc:include type="modules" name="breadcrumbs" style="none" />
        <?php endif;
        ?>
        <div class="left-panel">
        <?php
        // популярные услуги
        if ($this->countModules('popular-services')) : ?>
            <jdoc:include type="modules" name="popular-services" style="none" />
        <?php endif;
        // лазерная эпиляция
        if ($this->countModules('laser-epilation')) : ?>
            <jdoc:include type="modules" name="laser-epilation" style="none" />
        <?php endif;
        // акции и скидки
        if ($this->countModules('actions-and-discounts')) : ?>
            <jdoc:include type="modules" name="actions-and-discounts" style="none" />
        <?php endif;
        // наши заслуги
        if ($this->countModules('our-achievements')) : ?>
            <jdoc:include type="modules" name="our-achievements" style="none" />
        <?php endif;
        ?>
        </div>
		<jdoc:include type="component" />
	</main>
	<footer>
		<?php if ($this->countModules('footer-notice')) : ?>
        <jdoc:include type="modules" name="footer-notice" style="none" />
        <?php endif;
          /*?>
        <div>
            <div><span>ВНИМАНИЕ!</span><span> Салон ВИЗАВИ регулярно проходит аккредитацию и имеет официальную государственную лицензию и сертификат качества на все оказываемые виды услуг!</span></div>
        </div>
        <?php */  ?>
        <div>
            <div></div><?php
            if ($this->countModules('bottom-menu')):
            ?>
            <jdoc:include type="modules" name="bottom-menu" style="none" />
            <?php
            endif;?>
            <!--<menu>
                <li><a href="#" title="О нас">О нас</a></li>
                <li><a href="#" title="Цены">Цены</a></li>
                <li><a href="#" title="Специалисты">Специалисты</a></li>
                <li><a href="#" title="Фотогалерея">Фотогалерея</a></li>
                <li><a href="#" title="Статьи">Статьи</a></li>
                <li><a href="#" title="Отзывы">Отзывы</a></li>
                <li><a href="#" title="Акции">Акции</a></li>
                <li><a href="#" title="Контакты">Контакты</a></li>
            </menu>-->
            <div><img src="static/images/sources/counter-rambler.gif"><img src="static/images/sources/counter-2.gif"></div>
        </div>
        <?php if ($this->countModules('social-buttons')) : ?>
        <jdoc:include type="modules" name="social-buttons" style="none" />
        <?php endif;
        /* ?>
        <div id="copyright">
            <div class="float-left">Copyright © 2014 Salon.ru All Rights Reserved. Designed by Salon.ru</div>
            <div id="social" class="float-right"><a href="#"><img src="static/images/sources/social-twitter.png"></a><a href="#"><img src="static/images/sources/social-vk.png"></a><a href="#"><img src="static/images/sources/social-fb.png"></a><a href="#"><img src="static/images/sources/social-g+.png"></a>
            </div>
        </div>
    <?php  */ ?>
	</footer>
</body>
</html>