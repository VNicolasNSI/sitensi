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

<body class="body2">
<section>
	<header class="header"> 
		<section class="page1">
			<article>
				<h1 class="avantpage">Rentrer un code</h1>
			<article>
			<nav>
				<a class="nav2" role="button" href="index.php">Retour</a></li>
				<a class="nav2" role="button" href="depot.php">Dépot PDF</a></li>
                <a class="nav2" role="button" href="synthese.php">Synthèse/Progression</a></li>
				<a class="nav2" role="button" href="quizz.php">Quizz</a></li>
				<a class="nav1" role="button" href="code.php">Rentrer un code</a></li>
			</nav>
			<article><hr></article>
		</section>
	</header>
</section>
<section>
    <form method=post>
	    <label for="nom">Entrez un code : </label>
	    <input id="nom" type="text" name="nom" placeholder="--Ici---" size=10 maxlength=4 minlenght=4>
	    <input type=submit value="Envoyer">
    </form>
</section>

</body>
</html>