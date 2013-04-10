<?php get_header(); ?>

<!-- debut div contenu -->

<div id="page">
	<div id="corps">
		<?php fil_ariane();?>
	
		<?php if(have_posts()) :
			//On affiche quoi comme titre pour les pages d'archives ?
			titres_archives();
			?>
	
			<?php while(have_posts()) : the_post(); ?>
	
			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry">
					<?php
					//On affiche quoi pour le corps du contenu ?
					//the_content();
					//the_content("...lire la suite de " . get_the_title('', '', false));
					the_excerpt();
					?>
				</div>
			</div>
	
		<?php endwhile; else :
			//404 Que fait-on ?
			contenu_introuvable();
			?>
	
		<?php endif;
	
		//On affiche quelle pagination ?
		//multi_pages_navi();
		pages_prec_suiv();
		?>
	</div><!-- fin div corps -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
