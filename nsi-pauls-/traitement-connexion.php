<!DOCTYPE html>

<?php 

session_start();

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

$token = rand(10000000,99999999);

if ($mdp==$verificationmdp[0]) {
    echo "Connexion réussie !";
    $ecriretoken = $bdd->prepare('UPDATE FROM utilisateur SET token=:token WHERE mail=:mail');
    $ecriretoken->execute([
        'token'=>$token,
        'mail'=>$mail,
    ]);
    $_SESSION['token'] = $token;
    header('Location: ../SiteNSISamuel/index.php');
    exit();
}
else {
    echo "Mauvais mdp ou mauvais mail";
};

?>