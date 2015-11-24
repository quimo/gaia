// FUNCTIONS  ---------------------------------------------------------

// imageBreakpointSwitch()
// sostituisco le immagini di classe 'responsive'

function imageBreakpointSwitch() {
	$("img.responsive").each(function() {
		var imagepath = $(this).attr('src');
		var dummy = imagepath.split("/");
		var filename = dummy.pop();
		dummy = dummy.join("/");
		var filename = filename.split(".");
		var ext = filename.pop();
		switch(true) {
				case (res_x < breakpoints[0]+1):
						var filename_new = filename.join(".")+'_'+breakpoints[0]+'.'+ext;
					break;
				case (res_x < breakpoints[1]+1):	
						var filename_new = filename.join(".")+'_'+breakpoints[1]+'.'+ext;
					break;
				case (res_x < breakpoints[2]+1):	
						var filename_new = filename.join(".")+'_'+breakpoints[2]+'.'+ext;
					break;	
				case (res_x < breakpoints[3]+1):	
						var filename_new = filename.join(".")+'_'+breakpoints[3]+'.'+ext;
					break;	
				case (res_x < breakpoints[4]+1):	
						var filename_new = filename.join(".")+'_'+breakpoints[4]+'.'+ext;
					break;		
				default:
					return false;
					break;
		}
		var imagepath_new = dummy+'/'+filename_new;
		$(this).attr('src',imagepath_new);
	});
}

// retinaSwitch()
// sostituisco le immagini di classe 'hires'

function retinaSwitch() {
	var pixelRatio = !!window.devicePixelRatio ? window.devicePixelRatio : 1;
	if (pixelRatio > 1) {
        $('img.hires').each(function() {
			var filename = $(this).attr('src');
			var ext = filename.substr(filename.lastIndexOf('.'));
			var filepath = filename.replace(ext,'');
			var retina_filename = filepath+'@2x'+ext;
			$(this).attr('src',retina_filename);
        });
    }
}

// checkMenu()
// gestione del menu mobile / desktop

function checkMenu() {	
	if ($(window).width() < mob_to_desk) { // MOBILE
		//mostro - nascondo il menu 
		$('#togglemenu').click(function(){
			$('nav.header__mainmenu ul.menu').slideToggle();
			if ($('nav.header__mainmenu ul.menu').height() == 1) {
				$(this).html('<i class="fa fa-close"></i>');
			} else {
				$(this).html('<i class="fa fa-bars"></i>');
			}
		});
		
		//mostro le freccette nel menu di primo livello se esiste un secondo livello
		$('nav.header__mainmenu .menu > li').has('ul').append('<div class="arrow lv1"><i class="fa fa-chevron-down"></i></div>');
		$('nav.header__mainmenu .menu > li > div.arrow').on('click',function(){
			$(this).parent().children('ul.submenu').slideToggle(function(){
				if ($(this).css('display') == 'block') {
					 $(this).parent().find('div.arrow.lv1').html('<i class="fa fa-chevron-up"></i>');
				 } else {
					 $(this).parent().find('div.arrow.lv1').html('<i class="fa fa-chevron-down"></i>');
				 }
			}); 
			 
			 
		});
		//mostro le freccette nel menu di secondo livello se esiste un terzo livello
		$('nav.header__mainmenu .submenu > li').has('ul').append('<div class="arrow lv2"><i class="fa fa-chevron-down"></i></div>');
		$('nav.header__mainmenu .submenu > li > div.arrow').on('click',function(){
			$(this).parent().children('ul.submenu > li > .submenu').slideToggle(function(){
				if ($(this).css('display') == 'block') {
					$(this).parent().find('div.arrow.lv2').html('<i class="fa fa-chevron-up"></i>');
				 } else {
					$(this).parent().find('div.arrow.lv2').html('<i class="fa fa-chevron-down"></i>');
				 }
			});
		});
		
	} else { // DESKTOP
		//hover apri / chiudi su tutti i livelli di menu
		$('nav.header__mainmenu .menu li').hoverIntent({
			over: function(){$(this).find('ul').first().fadeIn('fast')},
			out: function(){$(this).find('ul').first().fadeOut('fast')},
			timeout: 100
		});
		//apro l'albero dei menu fino alla pagina corrente
		$('nav.header__mainmenu .submenu li').each(function(index) {
			if ($(this).hasClass('active')) {
				$(this).children('nav.header__mainmenu ul.submenu').show();
				$(this).children('div.arrow').html('<i class="fa fa-chevron-up"></i>');
			}
		});
		//mostro le freccette nel menu di primo livello se esiste un secondo livello
		$('nav.header__mainmenu .menu > li').has('ul').append('<div class="arrow lv1"><i class="fa fa-chevron-down"></i></div>');
		//mostro le freccette nel menu di secondo livello se esiste un terzo livello
		$('nav.header__mainmenu .submenu > li').has('ul').append('<div class="arrow lv2"><i class="fa fa-chevron-right"></i></div>');	
	}
}

// toTop()
// scrolling all'inizio della pagina

function toTop() {
    $('.footer__totop').on('click',function(){
		$('html,body').animate({scrollTop: 0}, 500);
	});
}

// checkTop()
// verifica se sono in cima alla pagina

function checkTop() {
    if ($(window).scrollTop() > 200) return true;
    return false;
}