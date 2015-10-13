<?php /* Template Name: Méthodologie */ get_header(); ?>

		<div class="big-header">

			<h1 class="big-title"><?php the_title(); ?></h1>
			<div class="sous-title"><?php the_field('sous-titre'); ?></div>

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
				<?php if($icone): ?>
					<?php echo file_get_contents($icone[url]); ?>
				<?php endif;?>
				<h2><?php the_sub_field('titre');?></h2>
				<p><?php the_sub_field('sous-titre');?></p>
			</div>

			<?php endwhile;?>

		</section>

		<?php endif; ?>

	</main>

<?php get_footer(); ?>
