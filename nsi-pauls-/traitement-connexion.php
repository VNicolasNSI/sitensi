<!DOCTYPE html>

<?php 

try {
    $bdd = new PDO('mysql:host=sql7.freesqldatabase.com;dbname=sql7800701', 'sql7800701', 'bfhPTiR56K');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$mail = $_POST['mail'];
$mdp = $_POST['mdp'];

?>