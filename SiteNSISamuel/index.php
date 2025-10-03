


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

<link rel="stylesheet" href="BASE.css">

</head>

<body>

<section>
	<header class="header"> 
		<article></article>
		<article>
			<figure class="centre">
				<img src="file://///lise.kreizenn.bzh/pedagogique/290022S/CLASSES/290022S_T-C/Documents%20en%20consultation/NSI/LogoNSI.jpg"
				name="Le logo ne notre sainte spé, la meilleure de toutes, rejoingez nous !"
				alt="Logo NSI PS"
				width="200"
				height="200">
			</figure>
		</article>
	</header>
</section>
<section>
	<section class="haut">
		<article>
			<h1>BONJOUR !</h1>
			<hr>
		</article>
	</section>
	<section class="header">
		<section>
			<article class="connexion">
				<a role="button" href="..\nsi-pauls-\index.html" class="button">DÉCONNEXION</a>
			</article>
		</section>
		<section>
			<article class="attribut">
				<a role="button" href="depot.php" class="partie">Cours PDF</a>
			</article>
			<article class="attribut">
				<a role="button" href="synthese.php" class="partie">Synthèse / Progression</a>
			</article>
		</section>
		<section>
			<article class="attribut">
				<a role="button" href="quizz.php" class="partie">Testez-Vous ! </a>
			</article>
			<article class="attribut">
				<a role="button" href="code.php" class="partie">Rentrer un code</a>
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