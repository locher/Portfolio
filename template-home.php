<?php /* Template Name: Homepage */ get_header(); ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<?php if (has_post_thumbnail() && !post_password_required()): ?>
		<?php
		$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-large', true);
		$thumb_url = $thumb_url_array[0];
		?>

		<?php endif; ?>

		<span class="img-background" style="background-image: url('<?php echo $thumb_url; ?>');"></span>

		<div class="big-header">

			<span class="big-title">Votre site</span>
			<span class="sous-title">En tout simplicité</span>

			<a href="#">Je vous en dis plus</a>

		</div>	
	
	</header>
	<!-- /header -->

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

		

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>
	<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
