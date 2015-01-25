jQuery(function($){
    var intId=setInterval(function(){
        var diigo;
        if(diigo=$('[id^="diigo"]')){
            $(diigo).remove();
            console.log('Set null? ─ ' + diigo);
            clearInterval(intId);
        }
    },250);
}(jQuery));
