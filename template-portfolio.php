<?php /* Template Name: Portfolio */ get_header(); ?>

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
			<div class="sous-title">Panel de différents projets</div>

		</div>	
	
	</header>
	<!-- /header -->

	<main role="main">

		<?php include('list-folio.php'); ?>

	</main>

	<script type="text/javascript">
		scrollvitesse();
	</script>

<?php get_footer(); ?>
