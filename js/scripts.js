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

adapt_hauteur = function(){
	//Récupère position en hauteur du desktop

	var desktop_position = jQuery(".img-desktop").offset().top;
	var desktop_bordure = 10;

	var position_haut = desktop_position - desktop_bordure;

	//Récupère position en hauteur du smartphone

	var smartphone_position = jQuery(".img-smartphone").offset().top;
	var smartphone_bordure = 12;
	var hauteur_smartphone = jQuery(".img-smartphone").height()

	var position_bas = smartphone_position + smartphone_bordure + hauteur_smartphone;

	//on y ajoute sa hauteur

	//On calcule la hauteur total

	var hauteur_affichage = position_bas - position_haut;

	//On y ajoute un peu de marge
	hauteur_affichage+= 40;

	//On balance la hauteur à tous les wrapper parents

	jQuery('.slidesjs-container').height(hauteur_affichage);
}

