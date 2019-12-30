//Ratio écrans 

resize_screen = function(){
	//récupère la largeur
	desktop_width = jQuery('.img-desktop:not(:hidden) img').width();

	//calcul la hauteur
	dekstop_height = desktop_width * 10 / 16;

	//applique la hauteur
	jQuery('.img-desktop').css('height',dekstop_height);
}

toggle_menu = function(){
	jQuery('.bt-menu').click(function(){
		jQuery(this).toggleClass('open');
		jQuery('.big-header').toggleClass('open');
		jQuery(this).parent().find('.nav').toggleClass('open');	
	});
}

jQuery(window).load(function(){
	toggle_menu();
});

adapt_hauteur = function(){

	var desktop_position = 0;
	var desktop_bordure = 0;
	
	var position_bas = 0;
	var position_haut = 0;

	//Récupère position en hauteur du desktop
	desktop_position = jQuery(".img-desktop:not(:hidden)").offset().top;
	desktop_bordure = 10;

	position_haut = desktop_position - desktop_bordure;

		hauteur_desktop = jQuery('.img-desktop').height();
		hauteur_desktop *= 1.5;

		//jQuery('.slidesjs-container').height(hauteur_desktop);
		//jQuery('.singleslide').height(hauteur_desktop);

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
	var vitesse = 0.25;

	jQuery(".img-peripherique img").each(function(){
		hauteur_image = jQuery(this).height();
		duree_scroll = hauteur_image / vitesse;
		
		jQuery(this).parent().parent().parent().find('.img-peripherique').css('transition-duration', duree_scroll+'ms');
		jQuery(this).hide();
	});
}

//Animations

window.sr = ScrollReveal({mobile:false});
//sr.reveal('.wrapper-top');
sr.reveal('.big-header h1');
sr.reveal('.sous-title');
sr.reveal('.big-title');
sr.reveal('.pad-argument', 50);
sr.reveal('.infos > *', 50);
sr.reveal('.nav_secondary li', 50);
sr.reveal('.wrapper-folio a', { delay: 100, distance: '100px' });
sr.reveal('.offre-wrapper > *', 100);
sr.reveal('.content > *', 100);
sr.reveal('.footer', 200);