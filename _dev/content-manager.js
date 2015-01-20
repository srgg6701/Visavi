$(function(){
    // распарсить URL и получить сегменты
    var baseParams = getBaseUrl(),
        urlBase   = baseParams.urlBase,
        params    = baseParams.params,
        prefixes  = getResolutionsSet();
    //console.log('location.href = '+location.href);
    // todo: remove on production
    // ----------------------------------------------------
    // Добавить базовый URL
    if( location.href.indexOf('localhost')!=-1
        || location.href.indexOf('127.0.0.1')!=-1){
        //$('title').before('<base href="http://127.0.0.1:8080/projects/visavi/">');
        //console.log('params = '+params);
        if(!params) params=getSectionByDefault();
        for(var i= 0, pref, j=prefixes.length; i<j; i++){
            pref = prefixes[i]+'_';
            if(params.indexOf(pref)!=-1)
                break;
        }
        var url;
        $($('nav a').toArray().concat($('#left-side a').toArray()))
            .each(function(index,element){
                url=this.href.substring(this.href.lastIndexOf('/')+1);
                console.log('%curl = '+url, 'color:brown');
                $(element).attr('href', '?section='+pref+url);
                console.log(this.href);
            });
    }
    // Загрузить тестовый компонент и контент шаблонов
    if( location.href.indexOf('?')!=-1){
        document.title = window.outerWidth;
        // set base URL
        window.onresize=function(){
            document.title = window.outerWidth;
        };

        // console.log('params: '+params);
        $.get(urlBase+'_dev/debug/dev.php'+params,
            function(data){
                //console.log('data: '+data);
                // загрузить тестовый копонент
                $('body').prepend(data);
                // загрузить контент
                loadTemplate();
            });
    }else{ // загрузить контент БЕЗ подгрузки тестовой среды
        loadTemplate();
        console.log('No url params...');
    }
});
// info: удалить (если используются серверные сценарии) или модифицировать (если используется JS-framework).
// Разобраться с загружаемым шаблоном
function loadTemplate(){
    var segment_pos,
        section=getSectionByDefault();
    if((segment_pos = location.href.indexOf('='))!=-1){ // если найдено, возвращает позицию, с которой будем начинать извлекать section (после сдвига на 1)
        segment_pos+=1; // скорректировать позицию
        section=(location.href.indexOf('&')!=-1)?
            location.href.substring(segment_pos,location.href.indexOf('&')) : location.href.substring(segment_pos);
        //-----------------------------------------------
        // Отобразить <nav> для секции mobile_default
        if(section.indexOf('mobile_default')!=-1){
            $('nav').show();
            $('#join-us').show();
        }
    }
    //console.log('url: templates/'+section+'.html');
    // Загрузить шаблон в #content
    getComponentArea().load(getPath(true)+section+'.html', function(){
        //console.log('section='+section);
        // добавить левую панель (с модулями меню) в main
        if (section.indexOf('1280_')!=-1)
            loadLeftPanel(section);
    });
}
// подгружить контент в левую панель
function loadLeftPanel(section){

    console.log('section = ' + section);

    var urlBase = getBaseUrl().urlBase,
        main = $('main'),
        leftPanel=$('<div/>', { class: 'left-panel' });

    // добавить к main левую панель
    $(main).prepend(leftPanel);

    // загрузить модули в левое меню
    switch(section){
        case '1280_default': // если страница по умолчанию, загрузить модуль "Популярные услуги"
            $.get(urlBase + getPath()+'popular.html', function (data) {
                $(leftPanel).append(data);
                loadModule(leftPanel,'actions','achievement');
            });
            break;
        case '1280_action': case '1280_actions': // единичная акция, акции и скидки
            loadModule(leftPanel,'discounts','achievement');
            break;
        case '1280_care': case '1280_contacts':  case '1280_epilation'://
            loadModule(leftPanel,'care','actions');
            break;
    }
    // если любая страница кроме загружаемой по умолчанию, добавить breadcrumbs
    if(section!='1280_default'){
        var bread_class="breadcrumbs",
            breadcrumbs=$('<div/>',{
                class:bread_class
            });
        getComponentArea().prepend(breadcrumbs);
        $('.'+bread_class).load( getPath()+bread_class+'.html');
    }
}
/**
 * Загрузить модули
 */
function loadModule(leftPanel,module,module_next){
    $.get(getBaseUrl().urlBase + getPath() +module+'.html', function (data){
        $(leftPanel).append(data);
        if(module_next)
            loadModule(leftPanel,module_next);
    });
}
/**
 * Получить и распарсить параметры Url
 * @returns {{tail: number, urlBase: string, params: string}}
 */
function getBaseUrl(){
    var tail      = location.href.lastIndexOf('/')+1,
        urlBase   = location.href.substring(0,tail),
        params    = location.href.substr(tail);
    return{
        tail:tail,
        urlBase:urlBase,
        params:params
    }
}
/**
 * Получить путь извлечения шаблонов
 */
function getPath(short){
    var tmpl = 'templates/';
    if(!short) tmpl+='subtemplates/';
    return tmpl;
}
/**
 * Получить область компонента
 */
function getComponentArea(){
    return $('#content');
}
/**
 *
 */
function getSectionByDefault(){
    return getResolutionsSet()[0]+'_default';
}
/**
 *
 */
function getResolutionsSet(){
    return ['1280','1024','768','mobile'];
}