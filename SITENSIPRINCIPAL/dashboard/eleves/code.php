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

<body class="body2">
<section>
    <form method=post>
	    <label for="nom">Entrez un code : </label> 
	    <input id="nom" type="text" name="nom" placeholder="--Ici---" size=10 maxlength=4 minlenght=4>
	    <input type=submit value="Envoyer">
    </form>
</section>

</body>
</html>