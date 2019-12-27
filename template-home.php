<?php /* Template Name: Homepage */ get_header(); ?>
		
		<a class="ico-scroll" id="bt-scroll" >
				<div class="icons-scroll">
					<svg viewBox="0 0 100 100" height="30px" width="30px" class="icon"><use xlink:href="#icon-mouse"></use></svg>
				</div>
				
		</a>

		<div class="big-header">

			<div class="big-title"><?php the_field('gros_titre'); ?></div>
			<div class="sous-title"><?php the_field('sous-titre'); ?></div>

			<a class="bt" href="<?php the_field('lien_bouton'); ?>"><?php the_field('texte_bouton'); ?></a>

		</div>	
	
	</header>
	<!-- /header -->

	<main role="main" id="main">

		<?php include('list-folio.php'); ?>

	</main>
	
	<script>
jQuery('#bt-scroll').click(function(){
	jQuery(document).scrollTo(jQuery('#main'), 400);
});</script>

<?php get_footer(); ?>
