<!DOCTYPE html>

<?php 

session_start();

try {
    $bdd = new PDO('mysql:host=149.56.45.233:3306;dbname=s8517_mirai', 'u8517_ne3b7zkKmC', 'Lq8Vx@A+BMOh5z50orUqY@rv');
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
    $ecriretoken = $bdd->prepare('UPDATE utilisateur SET token=:token WHERE mail=:mail');
    $ecriretoken->execute([
        'token'=>$token,
        'mail'=>$mail,
    ]);
    $_SESSION['token'] = $token;

    $type = $bdd->prepare('SELECT type FROM utilisateur WHERE mail=:mail');
    $type->execute([
        'mail'=>$mail,
    ]);
    $profeleve = $type->fetch();

    if ($profeleve['0'] == 'p') {
        header('Location: ../dashboard/profs/menu.php');
        exit();
    } else {
        header('Location: ../dashboard/eleves/index.php');
        exit();
    }
}
else {
    echo "Mauvais mdp ou mauvais mail";
};

?>