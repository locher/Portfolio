<?php /* Template Name: Homepage */ get_header(); ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<?php if (has_post_thumbnail() && !post_password_required()): ?>
		<?php
		$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-large', true);
		$thumb_url = $thumb_url_array[0];
		?>

		<?php endif; ?>

	<?php endwhile; endif; ?>

		<span class="img-background" style="background-image: url('<?php echo $thumb_url; ?>');"></span>

		<div class="big-header">

			<div class="big-title">Votre site</div>
			<div class="sous-title">En tout simplicité</div>

			<a href="#">Je vous en dis plus</a>

		</div>	
	
	</header>
	<!-- /header -->

	<main role="main">

		<?php 
			if( have_rows('points_feature') ):
		?>

		<section class="wrapper-pads">

			<?php while ( have_rows('points_feature') ) : the_row(); ?>
			<?php $icone = get_sub_field('icone'); ?>

			<div class="pad-argument">
				<?php echo file_get_contents($icone[url]); ?>
				<h2><?php the_sub_field('titre');?></h2>
				<p><?php the_sub_field('sous-titre');?></p>
			</div>

			<?php endwhile;?>

		</section>

		<?php endif; ?>

		<?php 
			$portfolio = new WP_Query(array(
				'post_type'=>'portfolio'
			));
		?>

		<?php if ($portfolio->have_posts()): ?>

		<section class="wrapper-folio">

			<?php while ($portfolio->have_posts()) : $portfolio->the_post(); ?>

			<?php $img_desktop = get_field('image_desktop'); ?>

			<a href="<?php the_permalink(); ?>" class="pad-folio" style="background-color: <?php the_field('couleur_de_fond'); ?>">

				<div class="wrapper-img">

					<?php if($img_desktop): ?>
						<div class="img-desktop" style="background-image: url('<?php echo $img_desktop['url']; ?>')">
							<img src="<?php echo $img_desktop['url']; ?>">
						</div>					
					<?php endif; ?>
					
				</div>

				<h2><?php the_field('titre_home'); ?></h2>
				<p><?php the_field('sous_titre_home'); ?></p>
			</a>

			<?php endwhile; ?>

		</section>

		<?php endif; ?>

	</main>

<?php get_footer(); ?>
