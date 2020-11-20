<?php
	$login = '';
 	if (!empty($_SERVER['PHP_AUTH_USER'])) {
		$login = $_SERVER['PHP_AUTH_USER'];
	}
	elseif (empty($_REQUEST['GITPULLPATH'])){
		exit;
	}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="author" content="Mathieu MANGEOT" />
  <meta name="description"
  content="Serveur d'hébergement des sites web étudiants du département MMI" />
  <meta name="keywords" content="MMI, Métiers du Multimédia et de l'Internet"/>
  <title>Hébergement des sites web étudiants</title>
  <style type="text/css">
<!--
body {
	font-family: "Gill Sans", "verdana", arial, sans-serif;
	font-size: 1.1em;
}
h2,h3,h4,h5,h6 {
	color:navy;
}
h1, h2 {
	text-align: center;
}
code {
	font-size:1.2em;
}
// -->
</style>
</head>
<body>
 <header>
  <h1>Hébergement des sites web étudiants</h1>
 </header>
 <section id="git">
  <h2>Utilisation de git (expérimental)</h2>
<?php
		if (!empty($login) && !empty($_REQUEST['GIT']) && !empty($_REQUEST['GITREPOSITORY']) && !empty($_REQUEST['GITCLONEPATH'])) {
			$repository = escapeshellcmd($_REQUEST['GITREPOSITORY']);
			$path = '/home/' . $login . '/www/' . escapeshellcmd($_REQUEST['GITCLONEPATH']); 
			echo "Utilisateur : " . get_current_user(),"<br>";
		    	echo "Commande : " . " git clone $repository $path 2>&1","<br>";
		    	echo "Sortie de commande : " . shell_exec("git clone $repository $path 2>&1"),"<br>";
		} 
		if (!empty($_REQUEST['GITPULLPATH'])) {
			$login = get_current_user();
			$path = '/home/' . $login . '/www/' . escapeshellcmd($_REQUEST['GITPULLPATH']); 
			echo "Utilisateur : " . $login,"<br>";
		    	echo "Commande : " . " cd $path; git pull 2>&1","<br>";
		    	echo "Sortie de commande : " . shell_exec("cd $path; git pull 2>&1"),"<br>";
		} 
?>
<form method="post" style="margin:auto; text-align:center;">
  <p>Git clone <input type="text" name="GITREPOSITORY" size="40" placeholder="https://user:password@github.com/<?php echo $login;?>/projet.git" /> dans <code>/home/<?php echo $login;?>/www/<input type="text" size="40" name="GITCLONEPATH" placeholder="wordpress/wp-content/themes/montheme" /></code></p>
<input type="submit" name="GIT" value="lancer" style="font-weight:bold;padding:3px;margin:3px;" />
</form>
</section>
</body>
</html>