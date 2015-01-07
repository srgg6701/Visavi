$(function(){
    // показать/спрятать мобильное меню
    $('#menu-left, #menu-right').on('click', function(){
        //console.log(this);
        var main=$('main'),
            show_left_menu='show-left-menu',
            show_right_menu='show-right-menu',
            first_class=show_left_menu,
            second_class=show_right_menu;
        // если клацали по кнопке управления меню слева
        if(this.id=='menu-left'){
            first_class=show_right_menu;
            second_class=show_left_menu;
        }
        if($(main).hasClass(first_class)){
            // показать меню слева
            $(main).removeClass(first_class)
                .addClass(second_class);
        }else{ // переключить показ меню слева
            $(main).toggleClass(second_class);
        }
    });
});
