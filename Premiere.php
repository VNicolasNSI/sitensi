


<html>

<?php 

try {
    $bdd = new PDO('mysql:host=sql7.freesqldatabase.com;dbname=sql7800701', 'sql7800701', 'bfhPTiR56K');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

?>

<head>
<title>GoofyAhhSite</title>

<meta charset="utf-8">

<link rel="stylesheet" href="base.css">

</head>

<body>

<section>
	<header class="header"> 
		<nav>
			<a class="nav2" role="button" href="index.php">Acceuil</a></li>
			<a class="nav1" role="button" href="premiere.php">Première</a></li>
			<a class="nav2" role="button" href="terminale.php">Terminale</a></li>
			<a class="nav2" role="button" href="projet">Projet</a></li>
			<a class="nav2" role="button" href="defis">Défis</a></li>
		</nav>
	</header>
</section>
<section>
	<section class="haut">
		<article>
			<h1>BONJOUR nom de l'éleve !</h1>
			<hr>
		</article>
	</section>
	<section class="partie1">
		<article class="connexion">
			<a role="button" href="..\nsi-pauls-\index.html" class="button">DÉCONNEXION</a>
		</article>
	</section>
	<section class="partie2">
		<h1>Parcours de première</h1><br>
		<article class="connexion">
			<a role="button" href="depot.php" class="attributa">
			<img width="50" height="50" title="1" src="https://cdn-icons-png.flaticon.com/512/80/80942.png">
			Cours PDF
			</a>
		</article>
		<article class="connexion">
			<a role="button" href="synthese.php" class="attributa">
			<img width="50" height="50" title="8" src="https://cdn-icons-png.flaticon.com/512/722/722013.png">
			Synthèse / Progression
			</a>
		</article>
		<article class="connexion">
			<a role="button" href="quizz.php" class="attributa">
			<img width="50" height="50" title="0" src="https://cdn-icons-png.flaticon.com/512/3400/3400784.png">
			Testez-Vous !
			</a>
		</article>
		<article class="connexion">
			<a role="button" href="code.php" class="attributa">
			<img width="50" height="50" title="9" src="https://cdn-icons-png.flaticon.com/512/345/345535.png">
			Rentrer un code
			</a>
		</article>
	</section>	
</section>
</section>
<footer> 
	<p>Posté par Samuel, le <time datetime="2025-05-09">5 septembre 2025</time>
	<a href="https://lycee-serusier-carhaix.ac-rennes.fr/">Le site de notre merveilleux lycée !!!!!!</a>
	</p>
</footer>
</body>
</html>