
(function($) {

    $.fn.scrollPagination = function(options) {
        
        var settings = {
            nop     : 5, // Количество запрашиваемых из БД записей
            offset  : 0, // Начальное смещение в количестве запрашиваемых данных
            count  : 0,
            lang  : '',
            error   : 'Записей больше нет!', // оповещение при отсутствии данных в БД
            add: 'Показать больше',
            loading: 'Loading...',
            delay   : 500, // Задержка перед загрузкой данных
            scroll  : true, // Если true то записи будут подгружаться при прокрутке странице, иначе только при нажатии на кнопку
            page: ''
        }
        
        // Включение опции для плагина
        if(options) {
            $.extend(settings, options);
        }
        
        return this.each(function() {        
            
            $this = $(this);
            $settings = settings;
            var offset = $settings.offset;
            var count = $settings.count;
            var busy = false; // переменная для обозначения происходящего процесса
            
            // Текст кнопки, на основе параметров
            if($settings.scroll == true) $initmessage = $settings.add;
            else $initmessage = 'Кликни';
            
            $this.append('<div class="ajax__news"></div><div class="loading-bar">'+$initmessage+'</div>');
            
            // Функция AJAX запроса
            function getData() {
                
                // Формируется POST запрос к ajax.php
                $.post('/modules/ajax.php', {
                        
                    action        : 'scrollpagination',
                    number        : $settings.nop,
                    offset        : offset,
                    count         : count,
                    lang          : $settings.lang,
                    page          : $settings.page
                        
                }, function(data) {
                        
                    // Информируем пользователя
                    $this.find('.loading-bar').html($initmessage);
                    //console.log(data);
                    // Если возвращенные данные пусты то сообщаем об этом    
                    
                    if( count<=offset) {
                        $this.find('.loading-bar').html($settings.error);    
                    }
                    else {
                        
                        // Смещение увеличивается
                        offset = offset+$settings.nop;
                            
                        // Добавление полученных данных в DIV ajax__news
                           $this.find('.ajax__news').append(data);
                        
                        // Процесс завершен    
                        busy = false;
                    }    
                        
                });
                    
            }    
            
            getData(); // Запуск функции загрузки данных в первый раз
            
            // Если прокрутка включена
            if($settings.scroll == true) {
                // .. и пользователь прокручивает страницу
                $(window).scroll(function() {
                    
                    // Проверяем пользователя, находится ли он в нижней части страницы
                    if($(window).scrollTop() + $(window).height() > $this.height() && !busy) {
                        
                        // Идет процесс
                        busy = true;
                        
                        // Сообщить пользователю что идет загрузка данных
                        $this.find('.loading-bar').html($settings.loading);
                        
                        // Запустить функцию для выборки данных с установленной задержкой
                        // Это полезно, если у вас есть контент в футере
                        setTimeout(function() {
                            
                            getData();
                            
                        }, $settings.delay);
                            
                    }    
                });
            }
            
            // конент загружен нажатием на кнопку
            $this.find('.loading-bar').click(function() {
            
                if(busy == false) {
                    busy = true;
                    getData();
                }
            
            });
            
        });
    }

})(jQuery);


//============= Mask and international number start ========
;(function(){
    jQuery(function($){
        $.mask.definitions['#']='[0-9]';
        $.mask.definitions['9'] = '';    
        $("form input[type='tel']").mask("+(38) ### ###-##-##",{placeholder:"_"});
    });
    
    var telInput = $("form input[type='tel']");
    
    telInput.intlTelInput({
        initialCountry: 'ua',
        preferredCountries: ['ua' ,'ru'],
        nationalMode: false
    });
    
    $(telInput).on("countrychange", function(e, countryData) {
        $(this).intlTelInput("setNumber", "");    
        $(this).trigger('blur');
        $(this).mask( '+(' + countryData.dialCode + ')' + ' ### ###-##-##',{placeholder:"_"});
    });
  
  })();
//============= Mask and international number start ========

//============= Owl carousel initialisation start ==========
(function() {

    $('.owl-carousel').owlCarousel({
        items: 5,
        loop: true,
        nav: true,
        navText: ['', ''],
        autoplay: true,
        autoplayTimeout: 3000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

})();
//============= Owl carousel initialisation end ==========

/*$('.submit').on('click', function(e){
    e.preventDefault();

    var id=$(this).data('id');
    var elem = $('#'+id);
    var data = elem.serialize();
        
        $.ajax({
            method: 'POST',
            url: '/modules/application.php',
            data: data,
            success: function(dat){
            
             console.log(dat);
              $('#'+id)[0].reset();
             // $.magnificPopup.close();
             $('.succses__form_info').fadeIn();
             setTimeout(function(){
                $('.succses__form_info').fadeOut();
             },2000)
            },
            error: function(dat){
                console.log(dat);
            },
        });            
    
});
*/
var ct = 0;
var addCount = document.createElement('input');
addCount.type = "hidden";
addCount.id = "count";
addCount.name = "count";
addCount.value = "0";
function countme(form) { var form;
    document.getElementById(form).appendChild(addCount);
    document.getElementById('count').value = ++ct;
}


$('.submit').on('click', function(e){
    e.preventDefault();

   var id=$(this).data('id');
   var elem = $('#'+id);
   var data = elem.serialize();
    var inputs = [ "name", "email", "tel"];
    var r = /^[\w\.\d-_]+@[\w\.\d-_]+\.\w{2,4}$/i;
    var error=0;
    
    for (var key in inputs) {
    
        var el=elem[0].elements[inputs[key]]
        var clas=''
        el.classList.value=el.classList.value.replace(" error","")
    
        if (el.value.length<2){ 
        
            clas=' error'; error++;
            }
        if (key==1 && !r.test(el.value)){
            
             clas=' error'; error++;
            }

el.classList.value=el.classList.value+clas
    }
    
    if (error) {  return false;    }
    
       $.ajax({
           method: 'POST',
           url: '/modules/application.php',
           data: data,
           success: function(dat){
           
            $('#'+id)[0].reset();
            // $.magnificPopup.close();
             $('.succses__form_text').html(dat);
            $('.succses__form_info').fadeIn();
            setTimeout(function(){
               $('.succses__form_info').fadeOut();
            },2000)
           },
           error: function(dat){
              // console.log(dat);
           },
       });            
   
    
});