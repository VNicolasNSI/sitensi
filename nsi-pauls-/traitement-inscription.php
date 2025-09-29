<!DOCTYPE html>

<?php 

try
{
       $bdd = new PDO('mysql:host=localhost;dbname=nsilps', 'root', 'root');
       $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
       $inscription = $bdd->prepare('INSERT INTO utilisateur(Nom, Prenom, mail, mdp, ddn, idclasse, type) VALUES(:Nom, :Prenom, :mail, :mdp, :ddn, :idclasse, :type)');
}
catch (Exception $e)
{
       die('Erreur : ' . $e->getMessage());
}

try
{
       if ($mdp==$verifmdp) {
       $inscription->execute(array(
              'Nom'=> $nom,
              'Prenom'=> $prenom,
              'mail'=> $mail,
              'mdp'=> $mdp,
              'ddn'=> $ddn,
              'idclasse' => '0',
              'type' => 'e'
       ));
       echo'Inscription réussie !';
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