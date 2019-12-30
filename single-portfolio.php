<?php get_header(); ?>

<style>
	.img-background{
		background-color: <?php the_field('couleur_de_fond');
		?>;
	}
	.slidesjs-pagination li a.active{
		background-color: <?php the_field('couleur_de_fond');
		?>;
	}
</style>

<div class="big-header">

	<h1 class="big-title">
		<?php the_title(); ?>
	</h1>
	<div class="sous-title">
		<?php the_field('sous-titre_page_single');?>
	</div>

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

				?>

		<div class="singleslide">
			<div class="wrapper-img">

				<?php if($img_desktop): ?>
				<div class="img-desktop img-peripherique" style="background-image: url('<?php echo $thumb_desktop; ?>')">
					<img src="<?php echo $thumb_desktop; ?>">
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

				?>

			<div>
				<div class="wrapper-img">
					<?php if($img_desktop): ?>
					<div class="img-desktop img-peripherique" style="background-image: url('<?php echo $thumb_desktop; ?>')">
						<img src="<?php echo $thumb_desktop; ?>">
					</div>
					<?php endif; ?>
				</div>
			</div>

			<?php endwhile;?>

			<?php endif;?>
	</div>

</main>

<script>
	jQuery(window).load(function() {

		scrollvitesse();

	

		resize_screen();
		adapt_hauteur();

		scrollhover();

		jQuery(window).resize(function() {
			resize_screen();
			adapt_hauteur();
		});
		
			//Lance le slider seulement si y a plusieurs slides
		if (jQuery('.wrapper-img').length > 1) {

			jQuery('.singleslide').removeClass('singleslide');

			jQuery('#slides').slidesjs({
				play: {
					interval: 5000
				},
				navigation: {
      active: true,
      effect: "slide"
    }
			});

		}

	});
</script>

<?php get_footer(); ?>