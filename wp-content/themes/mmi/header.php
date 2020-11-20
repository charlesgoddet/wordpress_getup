<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset' ); ?>"/>
		<title><?php bloginfo('name');?> - <?php bloginfo('description');?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/site.css">
		
		<!-- Obligatoire -->

		<?php wp_head(); ?>
	 </head>
	</header>
		<h1> Titre du site : <?php bloginfo ( 'name' ); ?> </h1>
		<h2> Description du site : <?php bloginfo( 'description' ); ?> </h2>
		<nav id = "menuprincipal">
			<div id = "legendemenuprincipal"> Menu principal </div>
			<!-- Ajout de l'accueil dans le menu principal -->
			<?php wp_page_menu('show_home=1'); ?>

		</nav>
	</heauder>
</html>