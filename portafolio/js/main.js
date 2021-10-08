$(document).ready(function () {
   var banner={
       padre: $('#banner'),
       numeroSlides: $('#banner').children('.slide').length,
       posicion:1
   }

   var info={
    padre: $('#info'),
    numeroSlides: $('#info').children('.slide').length,
    posicion:1
    }
   banner.padre.children('.slide').first().css({
       'left':0
   });
   info.padre.children('.slide').first().css({
    'left':0
   });

   var altoBanner = function(){
       var alto = banner.padre.children('.slide').outerHeight();

       banner.padre.css({
           'height': alto + 'px'
       });
   }

   var altoInfo = function(){
    var alto = info.padre.children('.active').outerHeight();

    info.padre.animate({
        'height': alto + 'px'
    });
}
   altoBanner();
   altoInfo();

   $(window).resize(function(){
       altoBanner();
       altoInfo();
   });



/*----------------------Banner--------------------*/

/*------------------Boton siguiente---------------*/
$('#banner-next').on('click', function(e){
    e.preventDefault();

    if(banner.posicion < banner.numeroSlides){
        //Nos aseguramos de que los demas slides empiecen desde la derecha.
        banner.padre.children().not('.active').css({
            'left':'100%'
        });
        //Quitamos la clase active y se la ponemos al siguiente elmento, y lo animamos.
        $('#banner .active').removeClass('active').next().addClass('active').animate({
            'left':'0'
        });
        //Animamos el slide anterior para que se deslice hacia la izquierda.
        $('#banner .active').prev().animate({
            'left':'-100%'
        })      

        banner.posicion = banner.posicion + 1;
    } else {
        //Hace que el slide activo (es decir el ultimo), se anime hacia la derecha
        $('#banner .active').animate({
            'left':'-100%'
        });
        //Seleccionamos todos los slides que no tengan la clase .active
        //y los posicionamos a la derecha
        banner.padre.children().not('.active').css({
            'left':'100%'
        });
        //Eliminamos la clase active y se la ponemos al primer elemento.
        //Despues lo animamos.
        $('#banner .active').removeClass('active');
        banner.padre.children('.slide').first().addClass('active').animate({
            'left': 0
        });
        //Reseteamos la posicion a 1
        banner.posicion = 1;
    } 

   
});

/*------------------Botón anterior---------------*/
$('#banner-prev').on('click',function(e){
    e.preventDefault();
    if (banner.posicion > 1) {
        banner.padre.children().not('.active').css({
            'left': '-100%'
        });
        $('#banner .active').animate({
            'left': '100%'
        });

        $('#banner .active').removeClass('active').prev().addClass('active').animate({
            'left': 0
        });
        
        banner.posicion = banner.posicion -1;
    }else{
        banner.padre.children().not('.active').css({
            'left': '-100%'
        });

        $('#banner .active').animate({
            'left': '100%'
        });

        $('#banner .active').removeClass('active');
        banner.padre.children().last().addClass('active').animate({
            'left':0
        });
        banner.posicion = banner.numeroSlides;
    }

   



 });


/*----------------------Info--------------------*/

/*------------------Boton siguiente---------------*/
$('#info-next').on('click', function(e){
    e.preventDefault();

    if(info.posicion < info.numeroSlides){
        //Nos aseguramos de que los demas slides empiecen desde la derecha.
        info.padre.children().not('.active').css({
            'left':'100%'
        });
        //Quitamos la clase active y se la ponemos al siguiente elmento, y lo animamos.
        $('#info .active').removeClass('active').next().addClass('active').animate({
            'left':'0'
        });
        //Animamos el slide anterior para que se deslice hacia la izquierda.
        $('#info .active').prev().animate({
            'left':'-100%'
        })      

        info.posicion = info.posicion + 1;
    } else {
        //Hace que el slide activo (es decir el ultimo), se anime hacia la derecha
        $('#info .active').animate({
            'left':'-100%'
        });
        //Seleccionamos todos los slides que no tengan la clase .active
        //y los posicionamos a la derecha
        info.padre.children().not('.active').css({
            'left':'100%'
        });
        //Eliminamos la clase active y se la ponemos al primer elemento.
        //Despues lo animamos.
        $('#info .active').removeClass('active');
        info.padre.children('.slide').first().addClass('active').animate({
            'left': 0
        });
        //Reseteamos la posicion a 1
        info.posicion = 1;
    } 

    altoInfo();
   
});

/*------------------Botón anterior---------------*/
$('#info-prev').on('click',function(e){
    e.preventDefault();
    if (info.posicion > 1) {
        info.padre.children().not('.active').css({
            'left': '-100%'
        });
        $('#info .active').animate({
            'left': '100%'
        });

        $('#info .active').removeClass('active').prev().addClass('active').animate({
            'left': 0
        });
        
        info.posicion = info.posicion -1;
    }else{
        info.padre.children().not('.active').css({
            'left': '-100%'
        });

        $('#info .active').animate({
            'left': '100%'
        });

        $('#info .active').removeClass('active');
        info.padre.children().last().addClass('active').animate({
            'left':0
        });
        info.posicion = info.numeroSlides;
    }

    altoInfo();



 });

});

       
    
    