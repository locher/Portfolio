<?php /* Template Name: Homepage */ get_header(); ?>

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

			<div class="big-title"><?php the_field('gros_titre'); ?></div>
			<div class="sous-title"><?php the_field('sous-titre'); ?></div>

			<a class="bt" href="<?php the_field('lien_bouton'); ?>"><?php the_field('texte_bouton'); ?></a>

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

		<?php include('list-folio.php'); ?>

	</main>

	<script type="text/javascript">

	scrollvitesse();
</script>

<?php get_footer(); ?>
