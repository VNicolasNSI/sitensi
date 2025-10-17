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

<body class="body2">

<h1 class="text2">Fonction a venir, mais le concepte c'est de se tester grace a un petit quizz sur le cours puis recevoir un code pour acceder aux cours suivants</h1>


</body>
</html>