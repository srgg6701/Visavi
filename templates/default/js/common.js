jQuery(function($){
    var intId=setInterval(function(){
        var diigo;
        if(diigo=$('[id^="diigo"]')){
            $(diigo).remove();
            //console.log('Set null? ─ ' + diigo);
            clearInterval(intId);
        }
    },250);
    //----------------------------------
    // Вызов по событиям объектов после того, как они найдены
    // установить тип ячейки как search
    callIfExists(setSearchType);
    // обработать цвет текста
    callIfExists(handleSearchCell);
    // отправить данные формы
    callIfExists(submitSearchForm,'label.finder-search');
}(jQuery));

// Вызывать callback-функцию
function callIfExists(callback,element){
    var obj, i= 0,
        doInput=setInterval(function() {
            obj=(element)? document.querySelector(element):document.getElementById('mod-finder-searchword');
            if (obj) {
                callback(obj);
                clearInterval(doInput);
            }
            //console.log('i = '+i); console.dir(obj);
            i++;
            if(i>50){
                console.log('Элемент не найден: ' + element);
                clearInterval(doInput);
            }
        },100);
}
// установить тип ячейки как search и цвет текста по умолчанию
function setSearchType(search_cell){
    search_cell.type='search';
    setSearchColor(search_cell);
}
//установить цвет текста ячейки поиска
function setSearchColor(search_cell,color){
    if(!color) color='999';
    search_cell.style.color='#'+color;
}
// обработать цвет текста в зависимости от события ячейки
function handleSearchCell(search_cell){
    $(search_cell).on('blur click keypress',function(event){
        var color=(event.type=='blur')? false:'333';
        //console.log('event: '+event.type);
        setSearchColor(search_cell,color);
    });
}
// отправить данные формы
function submitSearchForm(label){
    $(label).on('click', function(){
        //console.log('submitting...');
        $(this).parents('form').eq(0).submit();
    });

}
