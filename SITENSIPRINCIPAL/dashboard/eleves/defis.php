<?php 

session_start();

try {
    $bdd = new PDO('mysql:host=149.56.45.233:3306;dbname=s8517_mirai', 'u8517_ne3b7zkKmC', 'Lq8Vx@A+BMOh5z50orUqY@rv');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$autorisation = $bdd->prepare("SELECT type, token FROM utilisateur WHERE token=:token");
$autorisation->execute([
    'token'=> $_SESSION['token'],
]);
$veriftoken = $autorisation->fetch();

if ($veriftoken['type'] != "p") {
    header('Location: ../../index.html');
    exit();
}

if ($veriftoken["token"] != $_SESSION["token"]) {
    header('Location: ../../Accueil/index.html');
    exit();
} 

?>


<html>

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
				<h1 class="avantpage">Releverez-vous le défi ?</h1>
			<article>
			<nav>
				<a class="nav2" role="button" href="index.php">Acceuil</a></li>
				<a class="nav2" role="button" href="premiere.php">Première</a></li>
				<a class="nav2" role="button" href="terminale.php">Terminale</a></li>
				<a class="nav2" role="button" href="projet.php">Projet</a></li>
				<a class="nav1" role="button" href="defis.php">Défis</a></li>
			</nav>
			<article><hr></article>
		</section>
	</header>
</section>
<section>
	<section class="haut">
		<article>
			<img src="https://www.nuitducode.net/img/open-graph.png" class="border">
		</article>
	</section>
	<section class="partie2">
		<article>
			<h1>
				Durant l'année, de nombreux défis vont nous être proposé.
				Chacun dans le but de nous tester dans certains domaines tout en s'amusant dans une abiance conviviale.
			</h1>
		</article>
		<br>
		<article>
			<p>
			<em>Le défi "Passe ton hack d'abord" pour la cybersécurité</em>
			<br>
			<em>Le défi "la nuit du code" pour la conception de jeux vidéos en python</em>
			</p>
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