<?php get_header(); ?>

		<div class="big-header">

			<h1 class="big-title"><?php the_title();?></h1>
			
		</div>	
	
	</header>
	<!-- /header -->

	<main role="main" class="content">
	
		<nav class="nav_secondary" role="navigation">
			<?php offre_nav(); ?>
		</nav>
	
		<div class="section-title">
			<h2><?php the_field('titre_page');?></h2>
			<p><?php the_field('sous-titre_page'); ?></p>
		</div>
		
		<div class="text-content">
			<?php the_content();?>
		</div>
		
		<?php
		
			$image = get_field('image');
		
			if( !empty($image) ): 

			// vars
			$url = $image['url'];
			$alt = $image['alt'];

			// thumbnail
			$size = 'slider-desktop';
			$thumb = $image['sizes'][ $size ];
			$width = $image['sizes'][ $size . '-width' ];
			$height = $image['sizes'][ $size . '-height' ];
		
		?>
		
		<img src="<?php echo $thumb; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" class="image_singleOffre">
		
		<?php endif; ?>

		<div class="section-title">
			<h2><?php the_field('titre_arguments');?></h2>
			<p><?php the_field('sous-titre_arguments'); ?></p>
		</div>
			
	</main>
	
	<?php 
		if( have_rows('arguments') ):
	?>

	<section class="wrapper-pads">

		<?php while ( have_rows('arguments') ) : the_row(); ?>
		<?php $icone = get_sub_field('icone_argument'); ?>

		<div class="pad-argument">
			<?php if($icone): ?>
				<?php echo file_get_contents($icone[url]); ?>
			<?php endif;?>
			<h2><?php the_sub_field('titre_argument');?></h2>
			<p><?php the_sub_field('sous-titre_argument');?></p>
		</div>

		<?php endwhile;?>

	</section>

	<?php endif; ?>

<?php get_footer(); ?>