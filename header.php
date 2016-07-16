<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/img/icons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#d55252">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/icons/ms-icon-144x144.png">
		<meta name="theme-color" content="#d55252">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<div class="svg-wrapper" aria-hidden="true">
			<?php echo file_get_contents(get_template_directory_uri().'/img/svg-prod/sprite/svgs.svg'); ?>
		</div>		

		<div class="wrapper">

			<header class="header" role="banner">

				<div class="wrapper-top">

					<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php if ( is_front_page()) : ?>
							<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
						<?php else : ?>
							<p class="site-title"><?php bloginfo( 'name' ); ?></p>
						<?php endif;?>
						<p class="baseline"><?php bloginfo('description'); ?></p>
					</a>

					<div class="bt-menu" aria-hidden="true">
						<span>Menu</span>
					</div>

					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>

				</div>

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<?php if (has_post_thumbnail() && !post_password_required()): ?>
				<?php
					$thumb_id = get_post_thumbnail_id();
					$thumb_url_large_array = wp_get_attachment_image_src($thumb_id, 'custom-large', true);
					$thumb_url_large = $thumb_url_large_array[0];
					$thumb_url_medium_array = wp_get_attachment_image_src($thumb_id, 'custom-medium', true);
					$thumb_url_medium = $thumb_url_medium_array[0];
					$thumb_url_small_array = wp_get_attachment_image_src($thumb_id, 'custom-small', true);
					$thumb_url_small = $thumb_url_small_array[0];
					$thumb_url_tiny_array = wp_get_attachment_image_src($thumb_id, 'custom-tiny', true);
					$thumb_url_tiny = $thumb_url_tiny_array[0];
				?>

				<?php endif; ?>

				<?php endwhile; endif; ?>

		
		<style type="text/css">

		@media only screen and (min-width: 1500px){
			.img-background::after{
				background-image: url('<?php echo $thumb_url_large; ?>');
			}
		}

		@media only screen and (min-width: 800px) and (max-width: 1499px){
			.img-background::after{
				background-image: url('<?php echo $thumb_url_medium; ?>');
			}
		}

		@media only screen and (max-width: 799px) and (min-width: 500px){
			.img-background::after{
				background-image: url('<?php echo $thumb_url_small; ?>');
			}
		}

		@media only screen and (max-width: 499px){
			.img-background::after{
				background-image: url('<?php echo $thumb_url_tiny; ?>');
			}
		}
			
	</style>

		<span class="img-background"></span>



