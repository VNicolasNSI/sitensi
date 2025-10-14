


<html>

<?php 

session_start();

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
		<section class="page1">
			<article>
				<h1 class="avantpage">Page d'acceuil éléve</h1>
			<article>
			<nav>
				<a class="nav1" role="button" href="index.php">Acceuil</a></li>
				<a class="nav2" role="button" href="premiere.php">Première</a></li>
				<a class="nav2" role="button" href="terminale.php">Terminale</a></li>
				<a class="nav2" role="button" href="projet.php">Projet</a></li>
				<a class="nav2" role="button" href="defis.php">Défis</a></li>
			</nav>
			<article><hr></article>
		</section>
	</header>
</section>
<section class="haut">
	<article>
		<h1>BONJOUR nom de l'éleve !</h1>
		<hr>
	</article>
</section>
<section class="partie1">
	<article class="connexion">
		<a role="button" href="../../Accueil/deconnexion.php" class="button">DÉCONNEXION</a>
	</article>
</section>
<section class="dispo1">
	<article>
		<img width="50" height="50" title="1" src="https://cdn-icons-png.flaticon.com/512/80/80942.png">
	</article>
	<article class="grossissement">
		<a role="button" href="depot.php" class="attributa">
		Cours PDF
		</a>
	</article>
</section>
<section class="dispo2">
	<article class="grossissement">
		<a role="button" href="synthese.php" class="attributa">
		<img width="50" height="50" title="8" src="https://cdn-icons-png.flaticon.com/512/722/722013.png">
		Synthèse / Progression
		</a>
	</article>
</section>
<section>
	<article class="grossissement">
		<a role="button" href="quizz.php" class="attributa">
		<img width="50" height="50" title="0" src="https://cdn-icons-png.flaticon.com/512/3400/3400784.png">
		Testez-Vous !
		</a>
	</article>
</section>
<section>
	<article class="grossissement">
		<a role="button" href="code.php" class="attributa">
		<img width="50" height="50" title="9" src="https://cdn-icons-png.flaticon.com/512/345/345535.png">
		Rentrer un code
		</a>
	</article>
</section>
<footer> 
	<p>Posté par Samuel, le <time datetime="2025-05-09">5 septembre 2025</time>
	<a href="https://lycee-serusier-carhaix.ac-rennes.fr/">Le site de notre merveilleux lycée !!!!!!</a>
	</p>
</footer>
</body>
</html>