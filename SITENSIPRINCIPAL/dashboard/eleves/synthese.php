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

<head>
<title>GoofyAhhSite</title> 

<meta charset="utf-8">

<link rel="stylesheet" href="base.css">

</head>

<body class="body2">

<h1>Ca fonctionnerait un peu comme un jeu video, c'est plus interessant, chaque niveau correspond a un cours/synthese et le quizz correspond au boss du niveau, je pense que c'est une super idee pour avoir l'engagement des eleves, choisissez mon site svp madame !</h1>


</body>
</html>