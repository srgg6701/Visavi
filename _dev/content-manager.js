$(function(){
    //
    var tail      = location.href.lastIndexOf('/')+1,
        urlBase   = location.href.substring(0,tail),
        params    = location.href.substr(tail);
    //console.log('location.href = '+location.href);
    // todo: remove on production
    // ----------------------------------------------------
    // Загрузить тестовый компонент и контент шаблонов
    if(( location.href.indexOf('localhost')!=-1
        || location.href.indexOf('127.0.0.1')!=-1)
        && location.href.indexOf('?')!=-1){
        document.title = window.outerWidth;
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
                loadTemplate(urlBase);
            });
    }else{ // загрузить контент
        console.log('No url params...');
        loadTemplate(urlBase);
    }
});
// info: удалить (если используются серверные сценарии) или модифицировать (если используется JS-framework).
// Разобраться с загружаемым шаблоном
function loadTemplate(urlBase){
    var segment_pos,
        section='1280_default',
        tmpl = 'templates/'; // шаблон, загружаемый по умолчанию
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
    $('#content').load(tmpl+section+'.html', function(){
        console.log('section='+section);
        // добавить левую панель
        if (section.indexOf('1280_')!=-1)
            loadLeftPanel(urlBase,section);
    });
}
// подгружить контент в левую панель
function loadLeftPanel(urlBase,section){

    console.log('section = ' + section);

    var main = $('main'),
        leftPanel=$('<div/>', { class: 'left-panel' }),
        path = 'templates/subtemplates/';

    // добавить к main левую панель
    $(main).prepend(leftPanel);

    // если страница по умолчанию, загрузить модуль "Популярные услуги"
    if(section=='1280_default'){
        // загрузить модули в левое меню
        $.get(urlBase + path+'popular.html', function (data) {
            $(leftPanel).append(data);
            $.get(urlBase + path+'actions.html', function (data){
                $(leftPanel).append(data);
                $.get(urlBase + path+'achievement.html', function (data){
                    $(leftPanel).append(data);
                });
            });
        });
    }
    // если любая страница кроме загружаемой по умолчанию, добавить breadcrumbs
    if(section!='1280_default'){
        var bread_class="breadcrumbs",
            breadcrumbs=$('<div/>',{
                class:bread_class
            });
        $(main).prepend(breadcrumbs);
        $('.'+bread_class).load( tmpl + 'subtemplates/'+bread_class+'.html');
    }
}