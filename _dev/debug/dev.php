<!--
1. Добавить директиву подключения этого файла на тестируемую стр. перед тестируемым блоком (обычно - 1-й уровень внутри BODY)
include_once '[path]/dev.php'; -->
<!--
2. Подключить jQuery, jQueryUI
-->
<?php
ob_start();
/**
 * Настройки подложки: */
$site_name = 'visavi'; 
define("HTTP_BASE_PATH",'http://'.$_SERVER['HTTP_HOST']."/projects/".$site_name.'/'); 
// Идентификатор главного тестируемого блока:
define("MAIN_BLOCK","#page");
// Идентификатор блока с меню тестовых разделов
define("DEBUG_MENU","debug-menu");
// Идентификатор ссылки для управления видимостью меню тестовых разделов
define("DEBUG_LINKS","debug-liks");
// Имя директори с изображениями
define("IMGS_DIR","pixel-perfect");
// Изображения для страниц:
$substrates = array(    // класс => имя файла изображения
    // 320
    'mobile_default'=>'mobile_default.gif',
    'mobile_left'=>'mobile_left.gif',
    'mobile_right'=>'mobile_right.gif',
    'mobile_actions'=>'mobile_actions.gif',
    'mobile_epilation'=>'mobile_epilation.gif',
    'mobile_bikini'=>'mobile_bikini.gif',
    // 768
    '768_default'=>'768_default.gif',
    '768_action'=>'768_action.gif',
    '768_epilation'=>'768_epilation.gif',
    // 1024
    '1024_default'=>'1024_default.gif',
    '1024_action'=>'1024_action.gif',
    '1024_epilation'=>'1024_epilation.gif',
    // 1280
    '1280_default'=>'1280_default.gif',
    '1280_action'=>'1280_action.gif',
    '1280_actions'=>'1280_actions.gif',
    '1280_epilation'=>'1280_epilation.gif',
    '1280_contacts'=>'1280_contacts.gif',
    '1280_care'=>'1280_care.gif',
);
// Путь расположения изображений относительно документа:
$substrate_path = __DIR__.'/'.IMGS_DIR.'/';
// Тени
$box_shadow = '0 4px 8px rgba(0, 0, 0, 0.5), 0 -14px 20px 2px rgba(0, 0, 0, 0.1) inset';?>
<style>
    /* end of test block*/
    #controls {
        background-color: white;
        -webkit-box-shadow: <?php echo $box_shadow;?>;
        -moz-box-shadow: <?php echo $box_shadow;?>;
        box-shadow: <?php echo $box_shadow;?>;
        padding: 2px 4px;
        position: fixed;
        right: 50%;
        padding: 10px;
        padding-top: 0;
        -webkit-transform: translateX(50%);
        -moz-transform: translateX(50%);
        -ms-transform: translateX(50%);
        -o-transform: translateX(50%);
        opacity: 0;
        transform: translateX(50%);
        white-space: nowrap;
        z-index: 2;
    }
    #controls:hover {
        opacity: 1;
    }
	#<?php echo DEBUG_LINKS;?>{
		color: navy;
		cursor:default;
	}
	.<?php echo DEBUG_MENU;?>{
		display:none;
	}
	.<?php echo DEBUG_MENU;?> a{
		display:table;
		font-family:Arial, Helvetica;
		padding:2px 4px;
		text-decoration:none;
	}
	.<?php echo DEBUG_MENU;?> a:hover{
		background-color:lightblue;
	}	
    #opacity-range {
        margin-left: 20px;
        width: 80px;
    }
    .sbstr {
        background-repeat: no-repeat;
        height: 568px;
        margin: -36px;
        opacity: 0.5;
        position: absolute;
        top: 31px;
        width: 100%;
        z-index: -1
    }
    #substrate-wrapper {
        bottom: 0;
        margin: auto;
        /*max-width: 1100px;*/
        position: absolute;
        top: 0;
        z-index: -1;
    }
    <?php   // установить ширину блока с подложкой
            foreach($substrates as $class=>$substrate):
                $sPath = $substrate_path . $substrate;
                if(!file_exists($sPath)) $wrongPaths[]=$sPath;
                ?>
    #substrate.<?php echo $class;?> {
        background: url(<?php echo $sPath;?>) no-repeat;
        background-position-x: -242px;
    }
    <?php   endforeach;?>
    #substrate {
        height: 2000px;
        margin: 0 auto;
        max-width: 1366px;
        overflow: hidden;
    }
    .error_warning{
        color:red;
    }
    #img_1280_default{
        margin-left: -90px;
    }
</style>
<?php
if(isset($wrongPaths)):
    foreach ($wrongPaths as $wPath) {?>
    <div class="error_warning">
        Не найден файл подложки <?php echo $wPath;?>
    </div>
<?php
    }

endif;
$section = $_GET['section'];
if(!$section) $section='default';
//
if(!defined("MAIN_BLOCK")){?>
    <div class="error_warning"><b>Ошибка!</b>
        <p>Не указан идентификатор контейнера для тестирования (MAIN_BLOCK)</p>
    </div>
<?
}
?>
<div id="controls">
<?php   
$show_substrate=true; // не показывать подложку

if(isset($_GET['sbstr'])&&$_GET['sbstr']=='false')
            $show_substrate=false;
elseif(!$show_substrate&&isset($_GET['sbstr']))
            $show_substrate=true;

if($show_substrate):?>
    <label>
        <input type="checkbox" id="sbstr"<?php
	$opacity=(isset($_GET['opa']))? $_GET['opa']:0;
	if($opacity>0):?> checked="checked" <?php endif;?> />Подложка
    </label>
    <label title="Прозрачность подложки">
        <input type="range" id="opacity-range" min="0"  max="100" value="<?php echo $opacity*100;?>" />
    </label>
    &nbsp;
    <label title="Прозрачность контента">
        <input type="range" id="opacity-range-content" min="0"  max="100" value="100" />
    </label>
    &nbsp;
    <span id="<?php echo DEBUG_LINKS;?>">Ссылки</span>
<?php   
endif;?>
	<div class="<?php echo DEBUG_MENU;?>">
    	<hr/>
<?php
// построить меню ссылок:
foreach($substrates as $alias=>$image):
?>
	<a href="?section=<?php echo $alias?>"><?php echo $alias;?></a>	
<?php
endforeach;?>
	</div>
</div>
<?php 
if($show_substrate):?>
<div id="substrate-wrapper">
    <div style="opacity: <?php echo $opacity;?>;" id="substrate">
    	<img id="img_<?php echo $section;?>" src="<?php echo HTTP_BASE_PATH?>_dev/debug/<?php echo IMGS_DIR;?>/<?php echo $substrates[$section];?>">
    </div>
</div>
<?php 
endif; ?>
<script>
    $(function(){
        //console.log('script location: '+location.href);
        var page = $('<?php echo MAIN_BLOCK;?>'),
            checkbox =$('#sbstr'),
            substrate = $('#substrate'),
            range = $('#opacity-range'),
            tested_content = $('#opacity-range-content'),
            w = $('body').width(),// вычислить отступ слева для подложки
            sbOffset=((w-$(page).width())/ 2)/w * 100 + '%',
            setRange = function(){
                if($(substrate).is(':visible'))
                    $(range).val(parseInt($(substrate).css('opacity'))*100);
                else
                    $(range).val('0');
            },
            changeOpacity = function(input){
                return parseInt(input.value)/100
            };
        //console.log('sbOffset: '+sbOffset);
        $('#substrate-wrapper').css({
            left:sbOffset,
            right:sbOffset
        });

        $(checkbox).on('click', function(){
            // если подложка скрыта
            if($(substrate).css('opacity')==0){
                $(substrate).css('opacity',1);
                $(tested_content).val('50').trigger('input');
                setRange();
            }else{
                $(substrate).fadeToggle(200,setRange);
            }
        });
        $(range).on('input', function(){
            var cbox=$(checkbox)[0], opa = changeOpacity(this);
            if(opa>0) {
                if(!cbox.checked) cbox.checked=true;
            }else
                cbox.checked=false;
            $(substrate).css({
                display:'block',
                opacity:opa
            });
        });
        $(tested_content).on('input', function(){
            $(page).css('opacity', changeOpacity(this));
        });
		$('#<?php echo DEBUG_LINKS?>').on('click', function(){
			$('.<?php echo DEBUG_MENU;?>').toggle();
		});
        //$('#controls').draggable();
    });
</script><?php
$content=ob_get_contents();
ob_clean();
echo $content;