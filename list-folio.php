<?php 
	$portfolio = new WP_Query(array(
		'post_type'=>'portfolio',
	));

	if ( is_front_page()){

	$portfolio = new WP_Query(array(
		'post_type'=>'portfolio',
		'posts_per_page' => '8'
	));
			
	}
?>

<?php if ($portfolio->have_posts()): ?>

<section class="wrapper-folio">

	<?php while ($portfolio->have_posts()) : $portfolio->the_post(); ?>

	<?php 

		$img_desktop = get_field('image_desktop');
		if($img_desktop){
			$size_desktop = 'catfolio-desktop';
			$thumb_desktop = $img_desktop['sizes'][ $size_desktop ];
			$width_desktop = $img_desktop['sizes'][ $size_desktop . '-width' ];
			$height_desktop = $img_desktop['sizes'][ $size_desktop . '-height' ];
		}

		$img_tablette = get_field('image_tablette');
		if($img_tablette){
			$size_tablette = 'catfolio-tablette';
			$thumb_tablette = $img_tablette['sizes'][ $size_tablette ];
			$width_tablette = $img_tablette['sizes'][ $size_tablette . '-width' ];
			$height_tablette = $img_tablette['sizes'][ $size_tablette . '-height' ];
		}

		$img_smartphone = get_field('image_smartphone');
		if($img_smartphone){
			$size_smartphone = 'catfolio-smartphone';
			$thumb_smartphone = $img_smartphone['sizes'][ $size_smartphone ];
			$width_smartphone = $img_smartphone['sizes'][ $size_smartphone . '-width' ];
			$height_smartphone = $img_smartphone['sizes'][ $size_smartphone . '-height' ];
		}
	?>

	<a href="<?php the_permalink(); ?>" class="pad-folio" style="background-color: <?php the_field('couleur_de_fond'); ?>">

		<div class="wrapper-img">

			<?php if($img_desktop): ?>
				<div class="img-desktop img-peripherique" style="background-image: url('<?php echo $thumb_desktop; ?>')">
					<div class="wrapper-peripherique">
						<img src="<?php echo $thumb_desktop; ?>" width="<?php echo $width_desktop; ?>" height="<?php echo $height_desktop; ?>">
					</div>
				</div>					
			<?php endif; ?>

			<?php if($img_tablette): ?>
				<div class="img-tablette img-peripherique" style="background-image: url('<?php echo $thumb_tablette; ?>')">
					<div class="wrapper-peripherique">
						<img src="<?php echo $thumb_tablette; ?>">
					</div>
				</div>					
			<?php endif; ?>

			<?php if($img_smartphone): ?>
				<div class="img-smartphone img-peripherique" style="background-image: url('<?php echo $thumb_smartphone; ?>')">
					<div class="wrapper-peripherique">
						<img src="<?php echo $thumb_smartphone; ?>">
					</div>	
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

jQuery(window).load(function(){

	resize_screen();
	scrollvitesse();

	jQuery(window).resize(function(){
		resize_screen();
	});

});



</script>