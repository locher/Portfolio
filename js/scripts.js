//Ratio écrans 

resize_screen = function(){
	//récupère la largeur
	desktop_width = jQuery('.img-desktop img').width();
	tablette_width = jQuery('.img-tablette img').width();
	smartphone_width = jQuery('.img-smartphone img').width();

	//calcul la hauteur
	dekstop_height = desktop_width * 10 / 16;
	tablette_height  = tablette_width * 4 / 3 ;
	smartphone_height = smartphone_width * 1334 / 750 + 10;

	//applique la hauteur
	jQuery('.img-desktop').css('height',dekstop_height);
	jQuery('.img-tablette').css('height',tablette_height);
	jQuery('.img-smartphone').css('height',smartphone_height);
}

icones_menu = function(){
	jQuery('nav .realisation a').prepend('<svg viewBox="0 0 100 100" class="icon"><use xlink:href="#icon-portfolio"></use></svg>');
	jQuery('nav .methodologie a').prepend('<svg viewBox="0 0 100 100" class="icon"><use xlink:href="#icon-methode"></use></svg>');
	jQuery('nav .about a').prepend('<svg viewBox="0 0 100 100" class="icon"><use xlink:href="#icon-user"></use></svg>');
	jQuery('nav .contact a').prepend('<svg viewBox="0 0 100 100" class="icon"><use xlink:href="#icon-contact"></use></svg>');
	jQuery('.submit').append('<svg viewBox="0 0 100 100" class="icon"><use xlink:href="#icon-envoyer"></use></svg>');
}

toggle_menu = function(){
	jQuery('.bt-menu').click(function(){
		jQuery(this).toggleClass('open');
		jQuery('.big-header').toggleClass('open');
		jQuery(this).parent().find('.nav').toggleClass('open');	
	});
}

jQuery(window).load(function(){
	icones_menu();
	toggle_menu();
});