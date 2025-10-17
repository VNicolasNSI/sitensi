<html>

<?php 

try {
    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
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

<h1>pour pouvoir retrouver les cours en pdf</h1>


</body>
</html>