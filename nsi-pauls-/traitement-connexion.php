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

$verifmail = $bdd->prepare('SELECT mail FROM utilisateur WHERE mail=:mail');
$verifmail->execute([
    'mail'=> $mail,
]);
$verification = $verifmail->fetch();
$verifmdp = $bdd->prepare('SELECT mdp FROM utilisateur WHERE mail=:mail');
$verifmdp->execute([
    'mail'=>$mail
]);
$verificationmdp = $verifmdp->fetch();

if ($mail==$verification) {
    if ($mdp==$verificationmdp) {
        echo "Connexion réussie !";
    }
}
?>