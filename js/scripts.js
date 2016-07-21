//Ratio écrans 

resize_screen = function(){
	//récupère la largeur
	desktop_width = jQuery('.img-desktop:not(:hidden) img').width();
	tablette_width = jQuery('.img-tablette:not(:hidden) img').width();
	smartphone_width = jQuery('.img-smartphone:not(:hidden) img').width();

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
	jQuery('nav .accueil a').prepend('<svg viewBox="0 0 100 100" class="icon"><use xlink:href="#icon-home"></use></svg>');
	jQuery('nav .realisation a').prepend('<svg viewBox="0 0 100 100" class="icon"><use xlink:href="#icon-portfolio"></use></svg>');
	jQuery('nav .methodologie a').prepend('<svg viewBox="0 0 100 100" class="icon"><use xlink:href="#icon-responsive"></use></svg>');
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

	var desktop_position = 0;
	var desktop_bordure = 0;
	var smartphone_position = 0;
	var smartphone_bordure = 0;
	var smartphone_position = 0;
	var smartphone_bordure = 0;
	var position_bas = 0;
	var position_haut = 0;
	var hauteur_smartphone = 0;

	//Récupère position en hauteur du desktop
	desktop_position = jQuery(".img-desktop:not(:hidden)").offset().top;
	desktop_bordure = 10;

	position_haut = desktop_position - desktop_bordure;


	//Si y a une image smartphone
	if(jQuery(".wrapper-img").find('.img-smartphone').length > 0){

		//Récupère position en hauteur du smartphone (si elle existe)	

		smartphone_position = jQuery(".img-smartphone:not(:hidden)").offset().top;
		smartphone_bordure = 12;
		hauteur_smartphone = jQuery(".img-smartphone:not(:hidden)").height();

		position_bas = smartphone_position + smartphone_bordure + hauteur_smartphone;		

		//on y ajoute sa hauteur

		//On calcule la hauteur total

		hauteur_affichage = position_bas - position_haut;

		//On y ajoute un peu de marge
		hauteur_affichage+= 40;

		//On balance la hauteur à tous les wrapper parents

		jQuery('.slidesjs-container').height(hauteur_affichage);
		jQuery('.singleslide').height(hauteur_affichage);
	}


	//Si y a pas d'image smartphone mais une image tablette
	else if(jQuery(".wrapper-img").find('.img-tablette').length > 0){

		//Récupère position en hauteur du smartphone (si elle existe)	

		tablette_position = jQuery(".img-tablette:not(:hidden)").offset().top;
		tablette_bordure = 12;
		hauteur_tablette = jQuery(".img-tablette:not(:hidden)").height();

		position_bas = tablette_position + tablette_bordure + hauteur_tablette;		

		//on y ajoute sa hauteur

		//On calcule la hauteur total

		hauteur_affichage = position_bas - position_haut;

		//On y ajoute un peu de marge
		hauteur_affichage+= 40;

		//On balance la hauteur à tous les wrapper parents

		jQuery('.slidesjs-container').height(hauteur_affichage);
		jQuery('.singleslide').height(hauteur_affichage);
	}

	//Si y a juste le desktop
	else{
		hauteur_desktop = jQuery('.img-desktop').height();
		hauteur_desktop *= 1.5;

		jQuery('.slidesjs-container').height(hauteur_desktop);
		jQuery('.singleslide').height(hauteur_desktop);

	}
}

//Le hover des images sur single folio
scrollhover = function(){

	jQuery('.img-peripherique').mouseover(function(){
		jQuery(this).css('background-position', 'bottom');
	});

	jQuery('.img-peripherique').mouseout(function(){
		jQuery(this).css('background-position', 'top');
	});

}

//harmoniser la vitesse du scroll
scrollvitesse = function(){
	var vitesse = 0.5;

	jQuery(".img-peripherique img").each(function(){
		hauteur_image = jQuery(this).height();
		duree_scroll = hauteur_image / vitesse;
		
		jQuery(this).parent().parent().parent().find('.img-peripherique').css('transition-duration', duree_scroll+'ms');
		jQuery(this).hide();
	});
}


	
window.sr = ScrollReveal({mobile: false});

//home header
sr.reveal('a.pad-folio');