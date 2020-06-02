<?php get_header(); ?>

<!--Template général-->
<section class="page-wrap">
	<!--Ajoute de l'espace en haut et en bas-->

	<div class="container">

		<section class="row">

			<div class="col-lg-9">

				<h1 class="mt-5">Résultats de recherche '<?php echo get_search_query();?>'</h1><!--Affiche le nom de la recherche sur la page-->
				<!--<h1><?php the_title(); ?></h1>-->
				<!-- A mettre dans la boucle-->

				<?php get_template_part('includes/section', 'searchresults'); ?>
				<!-- ceci==includes/section-searchresults.php, template pour les résultat de recherche-->

				<?php previous_posts_link(); ?>
				<!--Affiche lien suivant, ne pas oublier de definir le nombre d'article par page dans wordpress-->

				<?php next_posts_link(); ?>

			</div>

		</section> 

	</div>

</section>

<?php get_footer(); ?> 