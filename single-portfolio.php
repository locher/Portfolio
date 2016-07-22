<?php get_header(); ?>
		
		<style>			
			.img-background,
			.more-bt{
				background-color: <?php the_field('couleur_de_fond'); ?>;
			}
		</style>

		<div class="big-header">

			<h1 class="big-title"><?php the_title(); ?></h1>
			<div class="sous-title"><?php the_field('sous-titre_page_single');?></div>
			
			<div class="infos">
				<div class="date_site">
						<span>
							<svg viewBox="0 0 100 100" width="30" height="30" class="icon">
							  <use xlink:href="#icon-date"></use>
							</svg>
						</span>
						<?php the_field('date_de_creation'); ?>
					</div>
				<?php if(get_field('lien_site')): ?>
					<a href="<?php the_field('lien_site'); ?>" class="lien_site">
						<div>
							<span>
								<svg viewBox="0 0 100 100" width="30" height="30" class="icon">
									<use xlink:href="#icon-lien"></use>
								</svg>
							</span>
							<span class="text-link">Voir le site</span>
						</div>
					</a>
				<?php endif; ?>
			</div>

			<div class="link-other">				 	

				<?php $prev_post = get_adjacent_post(false,'',false); ?>

				 <?php if ( is_a( $prev_post, 'WP_Post' ) ): ?>

				 	<a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="previous-link">
				 		<div>
					 		Projet précédent <br>
					 		<span><?php echo get_the_title( $prev_post->ID ); ?></span>
				 		</div>
				 		
				 	</a>

				 <?php endif; ?>

				 <?php $next_post = get_adjacent_post(false,'',true); ?>

				 <?php if ( is_a( $next_post, 'WP_Post' ) ): ?>

				 	<a href="<?php echo get_permalink( $next_post->ID ); ?>" class="next-link">
				 		<div>
					 		Projet suivant<br>
					 		<span><?php echo get_the_title( $next_post->ID ); ?></span>	
				 		</div>			 		
				 	</a>

				 <?php endif; ?>

			</div>

		</div>	
	
	</header>
	<!-- /header -->

	<main role="main" class="content">
	
		<div class="text-content">
			<h2>Contexte</h2>
			<div class="text-content">
				<?php the_field('contexte'); ?>
			</div>			
		</div>		

		<div class="slider" id="slides">

				<?php //Le 1er slide, c'est l'apercu

					$img_desktop = get_field('image_desktop');
					if($img_desktop){
						$size_desktop = 'slider-desktop';
						$thumb_desktop = $img_desktop['sizes'][ $size_desktop ];
						$width_desktop = $img_desktop['sizes'][ $size_desktop . '-width' ];
						$height_desktop = $img_desktop['sizes'][ $size_desktop . '-height' ];
					}

					$img_tablette = get_field('image_tablette');
					if($img_tablette){
						$size_tablette = 'slider-tablette';
						$thumb_tablette = $img_tablette['sizes'][ $size_tablette ];
						$width_tablette = $img_tablette['sizes'][ $size_tablette . '-width' ];
						$height_tablette = $img_tablette['sizes'][ $size_tablette . '-height' ];
					}

					$img_smartphone = get_field('image_smartphone');
					if($img_smartphone){
						$size_smartphone = 'slider-smartphone';
						$thumb_smartphone = $img_smartphone['sizes'][ $size_smartphone ];
						$width_smartphone = $img_smartphone['sizes'][ $size_smartphone . '-width' ];
						$height_smartphone = $img_smartphone['sizes'][ $size_smartphone . '-height' ];
					}
				?>

				<div class="singleslide">
					<div class="wrapper-img">

						<?php if($img_desktop): ?>
							<div class="img-desktop img-peripherique" style="background-image: url('<?php echo $thumb_desktop; ?>')">
								<img src="<?php echo $thumb_desktop; ?>">
							</div>					
						<?php endif; ?>

						<?php if($img_tablette): ?>
							<div class="img-tablette img-peripherique" style="background-image: url('<?php echo $thumb_tablette; ?>')">
								<img src="<?php echo $thumb_tablette; ?>">
							</div>					
						<?php endif; ?>

						<?php if($img_smartphone): ?>
							<div class="img-smartphone img-peripherique" style="background-image: url('<?php echo $thumb_smartphone; ?>')">
								<img src="<?php echo $thumb_smartphone; ?>">
							</div>					
						<?php endif; ?>
						
					</div>

				</div>

				<?php 
					if( have_rows('galerie') ):
					//Seulement après on check si y a d'autres images
				?>

				<?php while ( have_rows('galerie') ) : the_row(); ?>

				<?php

					$img_desktop = get_sub_field('image_desktop');
					if($img_desktop){
						$size_desktop = 'slider-desktop';
						$thumb_desktop = $img_desktop['sizes'][ $size_desktop ];
						$width_desktop = $img_desktop['sizes'][ $size_desktop . '-width' ];
						$height_desktop = $img_desktop['sizes'][ $size_desktop . '-height' ];
					}

					$img_tablette = get_sub_field('image_tablette');
					if($img_tablette){
						$size_tablette = 'slider-tablette';
						$thumb_tablette = $img_tablette['sizes'][ $size_tablette ];
						$width_tablette = $img_tablette['sizes'][ $size_tablette . '-width' ];
						$height_tablette = $img_tablette['sizes'][ $size_tablette . '-height' ];
					}

					$img_smartphone = get_sub_field('image_smartphone');
					if($img_smartphone){
						$size_smartphone = 'slider-smartphone';
						$thumb_smartphone = $img_smartphone['sizes'][ $size_smartphone ];
						$width_smartphone = $img_smartphone['sizes'][ $size_smartphone . '-width' ];
						$height_smartphone = $img_smartphone['sizes'][ $size_smartphone . '-height' ];
					}
				?>

				<div>
					<div class="wrapper-img">
						<?php if($img_desktop): ?>
							<div class="img-desktop img-peripherique" style="background-image: url('<?php echo $thumb_desktop; ?>')">
								<img src="<?php echo $thumb_desktop; ?>">
							</div>					
						<?php endif; ?>

						<?php if($img_tablette): ?>
							<div class="img-tablette img-peripherique" style="background-image: url('<?php echo $thumb_tablette; ?>')">
								<img src="<?php echo $thumb_tablette; ?>">
							</div>					
						<?php endif; ?>

						<?php if($img_smartphone): ?>
							<div class="img-smartphone img-peripherique" style="background-image: url('<?php echo $thumb_smartphone; ?>')">
								<img src="<?php echo $thumb_smartphone; ?>">
							</div>					
						<?php endif; ?>
					</div>
				</div>

				<?php endwhile;?>

				<?php endif;?>
			</div>
			
		<?php if(get_field('lien_site')): ?>
			<a href="<?php the_field('lien_site'); ?>" class="more-bt">Voir le site</a>
		<?php endif; ?>
			
	</main>

	<script>

	jQuery(window).load(function(){

		scrollvitesse();

		//Lance le slider seulement si y a plusieurs slides
		if(jQuery('.wrapper-img').length > 1){

			jQuery('.singleslide').removeClass('singleslide');

			jQuery('#slides').slidesjs({
				play: {
					//auto: true,
					interval: 5000
				}
			});

		}

		resize_screen();
		adapt_hauteur();

		scrollhover();

		jQuery(window).resize(function(){
			resize_screen();
			adapt_hauteur();
		});

	});

</script>

<?php get_footer(); ?>
