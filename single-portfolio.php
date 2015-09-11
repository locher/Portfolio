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
			<div class="slider">
				slider
			</div>
			<div class="wrapper-content">
				<div class="pad1">
					<h2>Typographie</h2>
				</div>
				<div class="wrapper-mini">
					<div class="content-mini">mini</div>
					<div class="content-mini">mini</div>
					<div class="content-mini padAvant">mini</div>
					<div class="content-mini padAvant">mini</div>
				</div>
				<div class="pad2">
					<h2>Couleurs</h2>
				</div>
				<div class="pad3">rien</div>
			</div>
		</div>

	</main>

<?php get_footer(); ?>
