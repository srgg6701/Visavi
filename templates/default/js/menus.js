$(function(){
    /**
    АХТУНГ! Синхронизировать величину разрешения (480)
    для мобильных устройств с mediaquery */
    if(screen.availWidth<=480){
        // получить ширину меню и body
        // вычислить ширину #page
        var body=$('body'),
            container=$('#page'),
            leftMenu=$('#left-side'),
            rightMenu=$('#right-side'),
            leftWidth=$(leftMenu).outerWidth(),
            rightWidth=$(rightMenu).outerWidth(),
            commonHeight=$(container).height()+'px',
            duration=200,
            getBodyMarginLeft=function(right){
                var offset=leftWidth;
                if(right) offset+=rightWidth;
                //console.log('%cleftWidth = '+offset,'color: violet');
                return   '-'+offset+'px';
            };
        // Явно задать ширину контейнера с контентом
        $(container).css('width',$(body).outerWidth());
        // Задать высоту боковых меню
        $(leftMenu).css('height',commonHeight);
        $(rightMenu).css('height',commonHeight);
        // Задать ширину body
        $(body).css({
            marginLeft:getBodyMarginLeft(),
            width:$(container).width()+leftWidth+rightWidth+'px'
        });
        // Отобразить меню
        $(leftMenu).show();
        // Скопировать верхнее меню в блок правого меню
        $(rightMenu).append($('#roof menu')).show();
        //console.log('leftWidth: '+leftWidth+'\nrightWidth: '+rightWidth+'\npageWidth: '+$(container).css('width')+'\nbody.width: '+$(body).css('width'));
        // показать/спрятать мобильное меню
        $('#menu-left, #menu-right').on('click', function(){
            // если клацали по кнопке управления меню слева
            var shadow=$('<div/>').css({
                background:   'black',
                bottom:             '0',
                opacity:            '0.35',
                position:           'fixed',
                top:                '0',
                zIndex:             '1'
                //left, right:      ?
            });
            $(container).prepend(shadow);
            // Если состояние меню - по умолчанию
            if($(body).css('margin-left')==getBodyMarginLeft()){
                var mrgLeft,Left,Right;
                // показать левое меню
                if(this.id=='menu-left'){
                    mrgLeft=0;
                    Left=leftWidth+'px';
                    Right=0;
                }else{ // показать правое меню
                    mrgLeft=getBodyMarginLeft(true);
                    Left=0;
                    Right=rightWidth+'px';
                }
                // выдвинуть левое/правое меню
                $(body).animate({ marginLeft: mrgLeft},duration, function(){
                    // навести тень
                    $(shadow).css({
                        left:Left,
                        right:Right
                    })
                });
            }
            // Убрать меню и тени
            var dropMenus=function(){
                $(shadow).remove();
                $(body).animate({ marginLeft: getBodyMarginLeft()},duration);
            };
            $(shadow).on('click mouseenter', dropMenus);
            //$([leftMenu.get(0),rightMenu.get(0)]).on('mouseleave', dropMenus);
        });
    }
});
