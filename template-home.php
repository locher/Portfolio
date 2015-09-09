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

		<section class="wrapper-pads">
			<div class="pad-argument">
				<?php echo file_get_contents(get_template_directory_uri()."/img/svg-prod/poigneemain.svg"); ?>
				<h2>Proximité</h2>
				<p>Réponses à vos questions en 24h</p>
			</div>
			<div class="pad-argument">
				<?php echo file_get_contents(get_template_directory_uri()."/img/svg-prod/methode.svg"); ?>
				<h2>Transparence</h2>
				<p>Aucun tabou, tout est expliqué</p>
			</div>
			<div class="pad-argument">
				<?php echo file_get_contents(get_template_directory_uri()."/img/svg-prod/poigneemain.svg"); ?>
				<h2>Ergonomie</h2>
				<p>sites Facile à utiliser & à mettre à jour</p>
			</div>
			<div class="pad-argument">
				<?php echo file_get_contents(get_template_directory_uri()."/img/svg-prod/portfolio.svg"); ?>
				<h2>Satisfaction</h2>
				<p>Tout est réunis pour un projet réussi</p>
			</div>
		</section>

	</main>

<?php get_footer(); ?>
