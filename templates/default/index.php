<?php
/**
 * License  GPL
 */
defined('_JEXEC') or die;
$app = JFactory::getApplication();
$leftbar = 1;
$rightbar = 1;
$tmpl_path = $this->baseurl . "/templates/" . $this->template . "/";
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?=$tmpl_path?>css/default.css" type="text/css" />
    <script src="<?=$tmpl_path?>js/min/jquery.min.js"></script>
    <script src="<?=$tmpl_path?>js/min/menus.min.js"></script>
    <script src="<?=$tmpl_path?>js/common.js"></script>
  </head>
  <body>
	<div id="message">
	  <jdoc:include type="modules" name="message" style="xhtml" />
	</div>
	<header>
        <section id="roof">
        <?php   //
                if ($this->countModules('top-menu')):?>
            <jdoc:include type="modules" name="top-menu" style="none" />
        <?php   endif;
                //
                if ($this->countModules('search')) : ?>
            <div>
            <jdoc:include type="modules" name="search" style="none" />
            </div>
        <?php   endif;
                //
                if ($this->countModules('cards')) : ?>
            <jdoc:include type="modules" name="cards" style="none" />
        <?php   endif;?>
        </section>
        <section id="visavi">
            <div id="discount" class="color-pink">
        <?php   //
                if ($this->countModules('logotype')) : ?>
            <jdoc:include type="modules" name="logotype" style="none" />
        <?php   endif;
                //
                if ($this->countModules('discounts-on-banner')) : ?>
            <jdoc:include type="modules" name="discounts-on-banner" style="none" />
        <?php   endif;?>
            </div>
        <?php   //
                if ($this->countModules('contacts')) : ?>
            <jdoc:include type="modules" name="contacts" style="none" />
        <?php   endif;?>
        </section>
        <section id="banner">
            <div id="slider">
                <div id="slider-controls">
                    <div><span>◄</span></div>
                    <div><span>■</span></div>
                    <div><span>►</span></div>
                </div>
            </div>
        <?php   //
                if ($this->countModules('trinity-buttons')) : ?>
        <jdoc:include type="modules" name="trinity-buttons" style="none" />
        <?php   endif;?>
        </section>
        <?php   //
                if ($this->countModules('roof-mobile')) : ?>
        <jdoc:include type="modules" name="roof-mobile" style="none" />
        <?php   endif;
                //
                if ($this->countModules('all-services')) : ?>
        <jdoc:include type="modules" name="all-services" style="none" />
        <?php   endif;
                //
                if ($this->countModules('join-us')) : ?>
        <jdoc:include type="modules" name="join-us" style="none" />
        <?php   endif;
                //
                if ($this->countModules('main-menu')) : ?>
        <jdoc:include type="modules" name="main-menu" style="none" />
        <?php   endif;?>
	</header>
	<main id="content" role="main">
        <?php   //
                if ($this->countModules('breadcrumbs')) : ?>
        <jdoc:include type="modules" name="breadcrumbs" style="none" />
        <?php   endif;?>
        <div class="left-panel">
        <?php   // популярные услуги
                if ($this->countModules('popular-services')) : ?>
        <jdoc:include type="modules" name="popular-services" style="none" />
        <?php   endif;
                // лазерная эпиляция
                if ($this->countModules('laser-epilation')) : ?>
        <jdoc:include type="modules" name="laser-epilation" style="none" />
        <?php   endif;
                // акции и скидки
                if ($this->countModules('actions-and-discounts')) : ?>
        <jdoc:include type="modules" name="actions-and-discounts" style="none" />
        <?php   endif;
                // наши заслуги
                if ($this->countModules('our-achievements')) : ?>
        <jdoc:include type="modules" name="our-achievements" style="none" />
        <?php   endif;?>
        </div>
		<jdoc:include type="component" />
	</main>
	<footer>
		<?php   //
                if ($this->countModules('footer-notice')) : ?>
        <jdoc:include type="modules" name="footer-notice" style="none" />
        <?php   endif;?>
        <div>
            <div></div>
        <?php   //
                if ($this->countModules('bottom-menu')):?>
        <jdoc:include type="modules" name="bottom-menu" style="none" />
        <?php   endif;?>
            <div><img src="static/images/sources/counter-rambler.gif"><img src="static/images/sources/counter-2.gif"></div>
        </div>
        <?php   //
                if ($this->countModules('social-buttons')) : ?>
        <jdoc:include type="modules" name="social-buttons" style="none" />
        <?php   endif;?>
	</footer>
  </body>
</html>