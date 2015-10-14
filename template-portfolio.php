<?php /* Template Name: Portfolio */ get_header(); ?>

		<div class="big-header">

			<h1 class="big-title"><?php the_title(); ?></h1>
			<div class="sous-title">Panel de différents projets</div>

		</div>	
	
	</header>
	<!-- /header -->

	<main role="main">
		<?php include('list-folio.php'); ?>
	</main>

<?php get_footer(); ?>
