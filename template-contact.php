<?php /* Template Name: Contact */ get_header(); ?>

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
