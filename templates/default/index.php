<?php
/**
 * License  GPL
 */
defined('_JEXEC') or die;
$app = JFactory::getApplication();
$leftbar = 1;
$rightbar = 1;
$tmpl_path = $this->baseurl . "/templates/" . $this->template . "/";
//var_dump("<pre>",$this,"</pre>"); die();
if($show=JFactory::getApplication()->input->get('reveal')):
    $reveal=$show=='all' ? $this : $this->$show;
    echo "<div style='background-color: whitesmoke; padding:20px; border: solid 3px #ccc;'><pre>";
    var_dump($reveal);
    echo '</pre><hr>file: ' . __FILE__ . '<br>line: '.__LINE__.'<hr></div>';
endif;
$document=JFactory::getDocument();
require_once 'helper.php';
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php /*<jdoc:include type="head" />*/ ?>
    <title><?php echo $document->title;?></title>
    <meta name="description" content="<?php
        echo str_replace('"',"'",$document->getMetadata('description'));?>">
    <meta name="keywords" content="<?php
        echo str_replace('"',"'",$document->getMetadata('keywords')); ?>">
    <link rel="stylesheet" href="<?=$tmpl_path?>css/default.css" type="text/css" />
    <script src="<?=$tmpl_path?>js/min/jquery.min.js"></script>
    <script src="<?=$tmpl_path?>js/min/menus.min.js"></script>
    <script src="<?=$tmpl_path?>js/common.js"></script>
  </head>
  <body>
	<div id="message">
	  <jdoc:include type="modules" name="message" style="xhtml" />
	</div>
    <div id="page">
	    <header>
            <section id="roof">
            <?php   //
                    if ($this->countModules('top-menu')):?>
                <jdoc:include type="modules" name="top-menu" style="none" />
            <?php   endif;
                    //
                    if ($this->countModules('search')) : ?>
                <jdoc:include type="modules" name="search" style="none" />
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
                $position='main-menu';
                if ($this->countModules($position)) :
                    handleMainMenu($position);
                    /*ob_start();?>
        <jdoc:include type="modules" name="main-menu" style="none" />
        <?php       $main_menu=ob_get_contents();
                    ob_end_clean();
                    //$main_menu=preg_replace('/">/i','"><div><div>', $main_menu);
                    //$main_menu=preg_replace('/<\/a>/i','<div><div></a>', $main_menu);
                    $menus=explode("</a>",$main_menu);
                    var_dump("<pre>",$menus,"</pre>");
                    //echo "<div>Main menu start</div>" . $main_menu . "<div>Main menu finish</div>";
                    */
                endif;?>
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
    </div>
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
    <?php
$test_stylesheets='test_css';
$test_js='test_js';
/*
Joomla:
$css_test=JFactory::getSession()->get($test_stylesheets);
*/
$inc_tests=false;
$css_test=isset($_SESSION[$test_stylesheets])||isset($_GET[$test_stylesheets]);
$js_test= isset($_SESSION[$test_js])||isset($_GET[$test_js]);
    if($inc_tests||$css_test||$js_test):?>
<script>
    var sheet,
        sheets = document.querySelectorAll('link[href][rel="stylesheet"]'),
        script,
        scripts = document.querySelectorAll('script[src]');
    <?php
    if($css_test):?>
    for (var i in sheets) {
        sheet = sheets[i];
        if (sheet.href)
            console.log(sheet.href);
    }
    console.log('%cTo turn these messages off, add the "<?=$test_stylesheets?>=-1" param to the URL.', 'color: blue;');
    <?php
    else:?>
    console.log('%cAdd the "<?=$test_js?>" param to the URL to see attached stylesheets.', 'color: violet;');
    <?php
    endif;
    if($js_test):?>
    for (var i in scripts) {
        script = scripts[i];
        if (script.src)
            console.log(script.src);
    }
    console.log('%cTo turn these messages off, add the "<?=$test_js?>=-1" param to the URL.', 'color: green;');
    <?php
    else:?>
    console.log('%cAdd the "<?=$test_js?>" param to the URL to see attached js.', 'color: brown;');
    <?php
    endif;?>
</script>
    <?php
    endif;
    ?>
  </body>
</html>