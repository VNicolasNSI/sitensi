<?php 

try {
    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$supp=$bdd->query('DELETE FROM utilisateur')

?>