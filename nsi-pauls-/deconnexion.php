<?php 
session_start();

try {
    $bdd = new PDO('mysql:host=sql7.freesqldatabase.com;dbname=sql7800701', 'sql7800701', 'bfhPTiR56K');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$sessionstop = $bdd->prepare('UPDATE utilisateur SET token="0" WHERE token=:token');
$sessionstop->execute([
    'token'=> $_SESSION['token'],
]);

$_SESSION['token'] = 1;

header('Location: index.html');
exit();
?>