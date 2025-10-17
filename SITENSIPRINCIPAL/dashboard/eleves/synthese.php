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

<h1>Ca fonctionnerait un peu comme un jeu video, c'est plus interessant, chaque niveau correspond a un cours/synthese et le quizz correspond au boss du niveau, je pense que c'est une super idee pour avoir l'engagement des eleves, choisissez mon site svp madame !</h1>


</body>
</html>