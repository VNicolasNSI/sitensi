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

<h1 class="text2">Fonction a venir, mais le concepte c'est de se tester grace a un petit quizz sur le cours puis recevoir un code pour acceder aux cours suivants</h1>


</body>
</html>