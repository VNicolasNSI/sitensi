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
       $verify_email = $bdd->prepare('SELECT mail FROM utilisateur WHERE mail=:mail');
}
catch (Exception $e)
{
       die('Erreur : ' . $e->getMessage());
}

$verify_email->execute(array(
       'mail'=> $mail
));

sleep(1);

$verifyemail = $verify_email->fetch()
    
if ($verify_email==$mail) {            
       echo "L'adresse mail existe déjà !";
       header('Location: erreur/101.html');
       exit();
};
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
       #header('Location: ../SiteNSISamuel/index.html');
       #exit();
}
else
       echo'les mdp ne correspondent pas';

$inscription->closeCursor();
?>