<?php

get_header();
the_post(); ?>

	<header>
		<div class="single-post-informations">

			<legend> Article <code> the_post() </code> : </legend>
			<h2> Titre de l'article <code>the_title()</code> : <a href="<?php the_permalink(); ?>">
			<?php the_title(); ?></a></h2>

		<div> <small> Date et auteur : <?php the_time('j F Y à G:i'); ?>
			<?php the_author_posts_link(); ?> </small></div>
		</div>
	</header>

	<div>
		<fieldset>
			<legend> Contenu de l'article :</legend>
			<?php the_content(); ?>
		</fieldset>
	</div>

	<section>
		Cet article a <?php comments_number( 'aucun commentaire', 'un commentaire', '% commentaires' ); ?>
		<span>Posté dans la catégorie : <?php the_category( ',' ); ?> </span>

	</section>

	<fieldset>
		<legend>Commentaires : </legend>
		<?php
			if( comments_open() || get_comments_number() ):
				comments_template();
		endif;
		?>

	</fieldset>

	<?php get_footer(); ?>
