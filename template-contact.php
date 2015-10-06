<?php /* Template Name: Contact */ get_header(); ?>

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

			<h1 class="big-title"><?php the_title(); ?></h1>
			<div class="sous-title"><?php the_field('sous-titre'); ?></div>

		</div>	
	
	</header>
	<!-- /header -->

	<main role="main" class="about-main">

		<div class="text-content about-content form">
			<?php echo do_shortcode(get_field('formulaire_contact')); ?>
		</div>

		<div class="about-pads contact-pads">

			<div class="pad-argument">
				<div>
					<svg viewBox="0 0 100 100" class="icon">
						<use xlink:href="#icon-phone"></use>
					</svg>
					<h2>Téléphone</h2>
					<p><?php the_field('telephone'); ?></p>
				</div>
			</div>

			<div class="pad-argument">
				<div>
					<svg viewBox="0 0 100 100" class="icon">
						<use xlink:href="#icon-mail"></use>
					</svg>
					<h2>Mail</h2>
					<p><?php the_field('mail'); ?></p>
				</div>
			</div>

			<div class="pad-argument">
				<div>
					<svg viewBox="0 0 100 100" class="icon">
						<use xlink:href="#icon-address"></use>
					</svg>
					<h2>Adresse</h2>
					<p><?php the_field('adresse'); ?></p>
				</div>
			</div>



			<a href="<?php echo site_url(); ?>/realisations" class="contact">
				<div>				
					<svg viewBox="0 0 100 100" class="icon">
						<use xlink:href="#icon-portfolio"></use>
					</svg>
					<span>Réalisations</span>
				</div>
			</a>
		</div>

	</main>

<?php get_footer(); ?>
