
// PREPROS INCLUDE ---------------------------------------------------------

//@prepros-prepend jquery-2.1.1.min.js
//@prepros-prepend picturefill.min.js
//@prepros-prepend jquery.hoverIntent.minified.js
//@prepros-prepend owl-carousel/owl.carousel.js
//@prepros-prepend functions.js

// VARIABLES  ---------------------------------------------------------

var res_x = $(window).width();
var res_y = $(window).height();
var breakpoints = Array(320,480,768,1024,1200);     //imageBreakpointSwitch()
var mob_to_desk = 768;                              //soglia per il menu mobile

// ON DOCUMENT READY  ---------------------------------------------------------

$(function(){
	checkMenu();
	toTop();
    $('#main-slider').owlCarousel({
        navigation: true,
		pagination: true,
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem : true
    });
    console.log('ready');
});

// ON DOCUMENT READY + LOADED IMAGES  ---------------------------------------------------------

$(window).on("load", function() {
    console.log('loaded');
});

// OTHER LISTENERS  ---------------------------------------------------------

//reload pagina al cambio orientamento device
if (window.DeviceOrientationEvent) {
    window.addEventListener("orientationchange", function(){
        location.reload();
	});
}

//se sono al top della pagina nasconde il bottone totop
$(window).on("scroll",function(){
    if (checkTop()) $('.footer__totop').fadeIn();
    else $('.footer__totop').fadeOut();
});