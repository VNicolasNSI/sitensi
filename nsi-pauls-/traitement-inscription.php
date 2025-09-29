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


$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$ddn = $_POST['ddn'];
$mail = $_POST['mail'];
$mdp = $_POST['mdp'];
$verifmdp = $_POST['verifmdp'];

try
{
       $inscription = $bdd->prepare('INSERT INTO utilisateur VALUES(:id, :Nom, :Prenom, :ddn, :idclasse, :type)');
}
catch (Exception $e)
{
       die('Erreur : ' . $e->getMessage());
}

try
{
       if ($mdp==$verifmdp) {
       $inscription->execute(array(
              'id' => null,
              'Nom'=> $nom,
              'Prenom'=> $prenom,
              'ddn'=> $ddn,
              'idclasse' => 'sans_classe',
              'type' => 'e'
       ));
       echo'Les mdp correspondent';
       }
       else
              echo'les mdp ne correspondent pas';
}
catch (Exception $e)
{
       die('Erreur : ' . $e->getMessage());
}

$inscription->closeCursor();
?>