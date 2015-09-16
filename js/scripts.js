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

taille_socle = function(){
	//récupère la largeur du socle
	largeur_socle = jQuery('.img-desktop:before').width();
	//console.log(largeur_socle);
	//on calcul la hauteur
	//on applique la hauteur
}