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
    function setSearchType(search_cell){
        search_cell.type='search';
    }
    // получить и сохранить ячейку поиска, назначить цвет текста для неё
    var setSearchColor = function(){
            setInt(setSearchType);
            // переопределить функцию
            setSearchColor =function(color){
                (color)? console.log('color: '+color) : console.log('no color...');
                console.log('color: '+color);
                search_cell.style.color='#'+color;
                console.dir(search_cell);
            };
            return cell_id;
        },
        // вернуть id объекта, назначить тип search (асинхронно) и переопределить функцию
        cell_id=setSearchColor();
    console.log('cell_id: '+cell_id);

        $('#'+cell_id).on('blur',function(event){
            var color=(event.type=='blur')? '999':'333';
            console.log('event: '+event.type);
            setSearchColor(color);
        });
}(jQuery));