


<html>

<?php 

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

<link rel="stylesheet" href="base.css">

</head>

<body>

<section>
	<header class="header"> 
		<section class="page1">
			<article>
				<h1 class="avantpage">Les projets de la spécilalité NSI</h1>
			<article>
			<nav>
				<a class="nav2" role="button" href="index.php">Acceuil</a></li>
				<a class="nav2" role="button" href="premiere.php">Première</a></li>
				<a class="nav2" role="button" href="terminale.php">Terminale</a></li>
				<a class="nav1" role="button" href="projet.php">Projet</a></li>
				<a class="nav2" role="button" href="defis.php">Défis</a></li>
			</nav>
			<article><hr></article>
		</section>
	</header>
</section>
<section>
	<section class="haut">
		<article>
			<img src="https://cdn.prod.website-files.com/680f3944d33b33445d655f6e/680f3944d33b33445d6566d2_gestion-stock-informatique.webp">
		</article>
	</section>
	<section class="partie2">
		<article>
			<h1>En NSi nous nous réalisons de nombreux projets avec des résulatats concrets</h1>
		</article>
		<br>
		<article>
			<p>Réalisation de site web
			<br>
			Cryptologie
			</p>
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