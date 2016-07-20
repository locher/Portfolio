<?php /* Template Name: Homepage */ get_header(); ?>
		
		<a class="ico-scroll" id="bt-scroll" >
				<div class="icons-scroll">
					<svg viewBox="0 0 100 100" height="30px" width="30px" class="icon"><use xlink:href="#icon-mouse"></use></svg>
				</div>
				
		</a>

		<div class="big-header">

			<div class="big-title"><?php the_field('gros_titre'); ?></div>
			<div class="sous-title"><?php the_field('sous-titre'); ?></div>

			<a class="bt" href="<?php the_field('lien_bouton'); ?>"><?php the_field('texte_bouton'); ?></a>

		</div>	
	
	</header>
	<!-- /header -->

	<main role="main" id="main">
		
		<section class="offre-wrapper">
			<div class="section-title">
				<h2>Les offres</h2>
				<p>Vous avez un besoin ? Nous avons des solutions</p>
			</div>
			
			<div class="img-args">
				<img src="<?php echo get_template_directory_uri(); ?>/img/peripheriques.png" alt="">
			
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
					
				</div>
			
			</div>
			
		</section>

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

		<?php include('list-folio.php'); ?>

	</main>
	
	<script>
jQuery('#bt-scroll').click(function(){
	console.log('clic');
	jQuery(document).scrollTo(jQuery('#main'), 400);
});</script>

<?php get_footer(); ?>
