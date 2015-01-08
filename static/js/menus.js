$(function(){
    // показать/спрятать мобильное меню
    $('#menu-left, #menu-right').on('click', function(){
        //console.log(this);
        var body=$('body'),
            show_left_menu='show-left-menu',
            show_right_menu='show-right-menu',
            first_class=show_left_menu,
            second_class=show_right_menu;
        // если клацали по кнопке управления меню слева
        if(this.id=='menu-left'){
            first_class=show_right_menu;
            second_class=show_left_menu;
        }
        if($(body).hasClass(first_class)){
            // показать меню слева
            $(body).removeClass(first_class)
                .addClass(second_class);
        }else{ // переключить показ меню слева
            $(body).toggleClass(second_class);
        }
    });
});
