<?php get_header(); ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<?php if (has_post_thumbnail() && !post_password_required()): ?>
		<?php
		$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-large', true);
		$thumb_url = $thumb_url_array[0];
		?>

		<?php endif; ?>

	<?php endwhile; endif; ?>

		<style>
			.img-background::after,
			.slider,
			.padAvant{
				background-color: <?php the_field('couleur_de_fond'); ?> !important;
			}

			.wrapper-content h2{
				color: <?php the_field('couleur_texte'); ?>;
			}

			.wrapper-content h2 span svg{
				fill: <?php the_field('couleur_texte'); ?>;
			}

		</style>

		<span class="img-background" style="background-image: url('<?php echo $thumb_url; ?>');"></span>

		<div class="big-header">

			<h1 class="big-title"><?php the_title(); ?></h1>
			<div class="sous-title"><?php the_field('sous-titre_page_single');?></div>

		</div>	
	
	</header>
	<!-- /header -->

	<main role="main">
		
		<div class="wrapper-big">


			<div class="slider" id="slides">

				<?php //Le 1er slide, c'est l'apercu

					$img_desktop = get_field('image_desktop');
					$img_tablette = get_field('image_tablette');
					$img_smartphone = get_field('image_smartphone');
				?>

				<div>
					<div class="wrapper-img">

						<?php if($img_desktop): ?>
							<div class="img-desktop img-peripherique" style="background-image: url('<?php echo $img_desktop['url']; ?>')">
								<img src="<?php echo $img_desktop['url']; ?>">
							</div>					
						<?php endif; ?>

						<?php if($img_tablette): ?>
							<div class="img-tablette img-peripherique" style="background-image: url('<?php echo $img_tablette['url']; ?>')">
								<img src="<?php echo $img_tablette['url']; ?>">
							</div>					
						<?php endif; ?>

						<?php if($img_smartphone): ?>
							<div class="img-smartphone img-peripherique" style="background-image: url('<?php echo $img_smartphone['url']; ?>')">
								<img src="<?php echo $img_smartphone['url']; ?>">
							</div>					
						<?php endif; ?>
						
					</div>

				</div>

				<?php 
					if( have_rows('galerie') ):
					//Seulement après on check si y a d'autres images
				?>

				<?php while ( have_rows('galerie') ) : the_row(); ?>
				<?php $image_desktop = get_sub_field('image_desktop'); ?>
				<?php $image_tablette = get_sub_field('image_tablette'); ?>
				<?php $image_smartphone = get_sub_field('image_smartphone'); ?>

				<div>
					<div class="wrapper-img">
						<?php if($image_desktop): ?>
							<div class="img-desktop img-peripherique" style="background-image: url('<?php echo $image_desktop['url']; ?>')">
								<img src="<?php echo $image_desktop['url']; ?>">
							</div>					
						<?php endif; ?>

						<?php if($image_tablette): ?>
							<div class="img-tablette img-peripherique" style="background-image: url('<?php echo $image_tablette['url']; ?>')">
								<img src="<?php echo $image_tablette['url']; ?>">
							</div>					
						<?php endif; ?>

						<?php if($image_smartphone): ?>
							<div class="img-smartphone img-peripherique" style="background-image: url('<?php echo $image_smartphone['url']; ?>')">
								<img src="<?php echo $image_smartphone['url']; ?>">
							</div>					
						<?php endif; ?>
					</div>
				</div>

				<?php endwhile;?>
			</div>

			<?php endif;?>

			<div class="wrapper-content">
				<div class="pad1">
					<h2><span><?php echo file_get_contents(get_template_directory_uri().'/img/svg-prod/contexte.svg'); ?></span>Contexte</h2>
					<div class="text-content"><?php the_field('contexte'); ?></div>
						
				</div>
				<div class="wrapper-mini">
					<div class="content-mini"><p><?php the_field('texte_info_1'); ?></p></div>
					<div class="content-mini"><p><?php the_field('texte_info_2'); ?></p></div>
					<div class="content-mini padAvant"><span><?php echo file_get_contents(get_template_directory_uri().'/img/svg-prod/date.svg'); ?></span><?php the_field('date_de_creation'); ?></div>
					<a href="<?php the_field('lien_site'); ?>" class="content-mini padAvant"><span><?php echo file_get_contents(get_template_directory_uri().'/img/svg-prod/lien.svg'); ?></span>Voir le site</a>
				</div>

				<?php 
					if( have_rows('couleurs') ):
				?>

				<div class="pad2">
					<h2><span class="couleur"><?php echo file_get_contents(get_template_directory_uri().'/img/svg-prod/couleurs.svg'); ?></span>Couleurs</h2>


						<?php while ( have_rows('couleurs') ) : the_row(); ?>

						<div class="single-color">
							<div>
								<div class="couleur-principale" data-color="<?php the_sub_field('couleur_principale'); ?>" style="background-color: <?php the_sub_field('couleur_principale'); ?>"></div>
							</div>
							<div class="variantes">

								<?php if(get_sub_field('variante_clair')): ?>
								<div data-color="<?php the_sub_field('variante_clair'); ?>" style="background-color: <?php the_sub_field('variante_clair'); ?>"></div>
								<?php endif;?>

								<?php if(get_sub_field('variante_foncee')): ?>
								<div data-color="<?php the_sub_field('variante_foncee'); ?>" style="background-color: <?php the_sub_field('variante_foncee'); ?>"></div>
								<?php endif;?>
							</div>

							<span class="text-couleur"><?php the_sub_field('couleur_principale'); ?></span>
						</div>

						<?php endwhile;?>

				</div>

				<?php endif; ?>


				<div class="pad3">rien</div>
			</div>
		</div>

	</main>

	<script>

	jQuery('.single-color div').mouseover(function(){

		couleur = jQuery(this).attr('data-color');

		if(couleur){
			jQuery(this).parent().parent().find('.text-couleur').text(couleur);
		}
	});

	jQuery('#slides').slidesjs({
		play: {
			auto: true,
			interval: 5000
		}
	});

	resize_screen();

	jQuery(window).resize(function(){
		resize_screen();
	});

</script>

<?php get_footer(); ?>
