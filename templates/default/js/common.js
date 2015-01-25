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
    $('label.finder-search').on('click', function(){
        console.log('submitting...');
        $(this).parents('form').eq(0).submit();
    });
    // установить тип ячейки как search
    setInt(setSearchType);
    // обработать цвет текста
    setInt(handleSearchCell);
}(jQuery));

// Вызывать callback-функцию
function setInt(callback){
    var search_cell,
        cell_id = 'mod-finder-searchword',
        doInput=setInterval(function() {
            if (search_cell = document.getElementById(cell_id)) {
                callback(search_cell);
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
        console.log('event: '+event.type);
        setSearchColor(search_cell,color);
    });
}
