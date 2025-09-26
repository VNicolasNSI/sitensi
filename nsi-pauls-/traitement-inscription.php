<!DOCTYPE html>

<?php 

try
{
       $bdd = new PDO('mysql:host=localhost;dbname=nsilps', 'root', 'root');
}
catch (Exception $e)
{
       die('Erreur : ' . $e->getMessage());
}

$bdd->exec('INSERT INTO Utilisateur(Nom, Prenom, ddn, idclasse, type) VALUES(:nom, :Prenom, :)');

?>