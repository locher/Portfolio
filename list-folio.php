<?php 
	$portfolio = new WP_Query(array(
		'post_type'=>'portfolio'
	));
?>

<?php if ($portfolio->have_posts()): ?>

<section class="wrapper-folio">

	<?php while ($portfolio->have_posts()) : $portfolio->the_post(); ?>

	<?php 
		$img_desktop = get_field('image_desktop');
		$img_tablette = get_field('image_tablette');
		$img_smartphone = get_field('image_smartphone');
	?>

	<a href="<?php the_permalink(); ?>" class="pad-folio" style="background-color: <?php the_field('couleur_de_fond'); ?>">

		<div class="wrapper-img">

			<?php if($img_desktop): ?>
				<div class="img-desktop img-peripherique" style="background-image: url('<?php echo $img_desktop['url']; ?>')">
					<img src="<?php echo $img_desktop['url']; ?>">
				</div>					
			<?php endif; ?>

			<?php if($img_tablette): ?>
				<div class="img-tablette img-peripherique" style="background-image: url('<?php echo $img_tablette['url']; ?>')">
					<img src="<?php echo $img_tablette['url']; ?>">
				</div>					
			<?php endif; ?>

			<?php if($img_smartphone): ?>
				<div class="img-smartphone img-peripherique" style="background-image: url('<?php echo $img_smartphone['url']; ?>')">
					<img src="<?php echo $img_smartphone['url']; ?>">
				</div>					
			<?php endif; ?>
			
		</div>

		<h2><?php the_field('titre_home'); ?></h2>
		<p><?php the_field('sous_titre_home'); ?></p>
	</a>

	<?php endwhile; ?>

</section>

<?php endif; ?>

<script type="text/javascript">

	resize_screen();
	taille_socle();

	jQuery(window).resize(function(){
		resize_screen();
	});

</script>