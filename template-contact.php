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

	</main>

<?php get_footer(); ?>
