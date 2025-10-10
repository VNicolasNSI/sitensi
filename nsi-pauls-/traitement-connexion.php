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

$verifmdp = $bdd->prepare('SELECT mdp FROM utilisateur WHERE mail=:mail');
$verifmdp->execute([
    'mail'=>$mail,
]);
$verificationmdp = $verifmdp->fetch();

$vcookie = $bdd->prepare('SELECT token FROM utilisateur WHERE mail=:mail');
$vcookie->execute([
    'mail'=>$mail,
]);
$vtoken = $vcookie->fetch();

$token = rand(10000000,99999999);

if ($vtoken!=$token) {
    if ($mdp==$verificationmdp[0]) {
        echo "Connexion réussie !";
        setcookie('token', $token);
        $ecriretoken = $bdd->prepare('UPDATE FROM utilisateur SET token=:token WHERE mail=:mail');
        $ecriretoken->execute([
            'token'=>$token,
            'mail'=>$mail,
        ]);
        header('Location: ../SiteNSISamuel/index.php');
        exit();
    }
    else {
        echo "Mauvais mdp ou mauvais mail";
    };
}
else {

}

?>