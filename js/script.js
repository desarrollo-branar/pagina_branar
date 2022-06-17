$(document).ready(function(){




    $('.personal').hiSlide();

    $('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});

	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.ir-arriba').slideDown(300);
		} else {
			$('.ir-arriba').slideUp(300);
		}
	});


var nosotros = $('#nosotros').offset().top,
    servicios = $('#servicios').offset().top,
    productos = $('#productos').offset().top,
    contacto = $('#contacto').offset().top;


    $('#btn-nosotros').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: nosotros - 120
        }, 500);
    });



    $('#btn-servicios').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: servicios - 120
        }, 500);
    });

    $('#btn-productos').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: productos -120
        }, 500);
    });

    $('#btn-contacto').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: contacto -800
        }, 500);
    });





var indice=0;
    $(".paginacion li").eq(indice).css("background-color","orange");
    $(".paginacion li").click(function(){
        
        indice=$(this).index();
        $(".paginacion li").css("background-color","#fff");
        $(this).css("background-color","orange");
        $(".slider-header").hide();
        $(".slider-header").eq(indice).fadeIn();
    });
    setInterval(function(){
        indice++;
        if(indice>3){
            indice=0;
        }
        $(".slider-header").hide();
        $(".slider-header").eq(indice).fadeIn();
        $(".paginacion li").css("background-color","#fff");
        $(".paginacion li").eq(indice).css("background-color","orange");
    },7000);
    $(".derecha").click(function(){
        indice++;
        if(indice>3){
            indice=0;
        }
        $(".slider-header").hide();
        $(".slider-header").eq(indice).fadeIn();
        $(".paginacion li").css("background-color","#fff");
        $(".paginacion li").eq(indice).css("background-color","orange");
    });
    $(".izquierda").click(function(){
        indice--;
        if(indice<0){
            indice=3;
        }
        $(".slider-header").hide();
        $(".slider-header").eq(indice).fadeIn();
        $(".paginacion li").css("background-color","#fff");
        $(".paginacion li").eq(indice).css("background-color","orange");
    });


    

    


});