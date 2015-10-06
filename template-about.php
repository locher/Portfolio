<?php /* Template Name: About */ get_header(); ?>

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

		<div class="text-content about-content">
			<div>
				<?php the_content();?>
			</div>
		</div>

		<div class="about-pads">

			<?php 
				if( have_rows('points_feature') ):
			?>

			<?php while ( have_rows('points_feature') ) : the_row(); ?>
			<?php $icone = get_sub_field('icone'); ?>

			<div class="pad-argument">
				<div>
					<?php if($icone): ?>
						<?php echo file_get_contents($icone[url]); ?>
					<?php endif;?>
					<h2><?php the_sub_field('titre');?></h2>
					<p><?php the_sub_field('sous-titre');?></p>
				</div>
			</div>

			<?php endwhile;?>

			<?php endif; ?>

			<a href="<?php echo site_url(); ?>/contact" class="contact">
				<div>				
					<svg viewBox="0 0 100 100" class="icon">
						<use xlink:href="#icon-contact"></use>
					</svg>
					<span>Contact</span>
				</div>
			</a>
		</div>

	</main>

<?php get_footer(); ?>
