<?php /* Template Name: Méthodologie */ get_header(); ?>

		<div class="big-header">

			<h1 class="big-title"><?php the_title(); ?></h1>
			<div class="sous-title"><?php the_field('sous-titre'); ?></div>

		</div>	
	
	</header>
	<!-- /header -->

	<main role="main">
		
		<section class="offre-wrapper">
			<div class="section-title">
				<h2>Compétences</h2>
				<p>Vous avez un besoin ? Nous avons des solutions</p>
			</div>
			
			<div class="img-args">
				<img src="<?php echo get_template_directory_uri(); ?>/img/peripherique_home.png" alt="">
			
			
				<div class="argu">
					
					<?php 
						$offres = new WP_Query(array(
							'post_type'=>'offres',
							'order_by' => 'menu_order',
							'order' => 'asc'
						));
					?>

					<?php if ($offres->have_posts()): ?>
					<?php while ($offres->have_posts()) : $offres->the_post(); ?>
				
					<div>
						<h3><?php the_title();?></h3>
						<p><?php the_excerpt();?></p>
						<a href="<?php the_permalink();?>">+ d'info</a>
					</div>
					
					<?php endwhile;?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
					
				</div>
			
			</div>
			
		</section>

		<?php 
			if( have_rows('points_feature') ):
		?>
		
		<div class="section-title">
			<h2>Méthodologie</h2>
			<p>Comment se passe un projet ?</p>
		</div>

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
