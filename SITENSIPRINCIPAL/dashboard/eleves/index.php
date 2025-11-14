


<html>

<?php 

session_start();

try {
    $bdd = new PDO('mysql:host=localhost;dbname=nsilps', 'root', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

?>

<head>
<title>GoofyAhhSite</title>

<meta charset="utf-8">

<link rel="stylesheet" href="./base.css">

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
<section class="partie2">
	<section>
		<article class="dispo1">
			<img width="50" height="50" title="1" src="https://cdn-icons-png.flaticon.com/512/80/80942.png">
		</article>
		<article class="grossissement">
			<a role="button" href="depot.php" class="attributa">
			Cours PDF
			</a>
		</article>
	</section>
	<hr class="hr">
	<section>
		<article class="dispo1">
			<img width="50" height="50" title="1" src="https://cdn-icons-png.flaticon.com/512/722/722013.png">
		</article>
		<article class="grossissement">
			<a role="button" href="synthese.php" class="attributa">
			Synthèse / Progression
			</a>
		</article>
	</section>
	<hr class="hr">
	<section>
		<article class="dispo1">
			<img width="50" height="50" title="1" src="https://cdn-icons-png.flaticon.com/512/3400/3400784.png">
		</article>
		<article class="grossissement">
			<a role="button" href="quizz.php" class="attributa">
			Testez-Vous !
			</a>
		</article>
	</section>
	<hr class="hr">
	<section>
		<article class="dispo1">
			<img width="50" height="50" title="1" src="https://cdn-icons-png.flaticon.com/512/63/63489.png">
		</article>
		<article class="grossissement">
			<a role="button" href="code.php" class="attributa">
			Rentrer un code
			</a>
		</article>
	</section>
</section>
<footer> 
	<p>Posté par Samuel, le <time datetime="2025-05-09">5 septembre 2025</time>
	<a href="https://lycee-serusier-carhaix.ac-rennes.fr/">Le site de notre merveilleux lycée !!!!!!</a>
	</p>
</footer>
</body>
</html>