<?php get_header(); ?>

		<div class="big-header">

			<div class="big-title">Erreur 404</div>
			<div class="sous-title">La page que vous recherchez n'existe pas (ou plus) :(</div>

			<a class="bt" href="<?php echo home_url(); ?>">Retour à l'accueil</a>

		</div>	
	
	</header>
	<!-- /header -->

	<main role="main">
		<?php include('list-folio.php'); ?>
	</main>

<?php get_footer(); ?>
