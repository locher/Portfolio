<?php get_header(); ?>
		
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<div class="big-header">

			<h1 class="big-title"><?php the_title();?></h1>
			
		</div>	
	
	</header>
	<!-- /header -->

	<main role="main" class="content">
	

		
		<div class="text-content">
			<?php the_content();?>
		</div>
		
</main>
		
		<?php endwhile; endif; ?>
		

<?php get_footer(); ?>
