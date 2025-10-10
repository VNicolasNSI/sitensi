<!DOCTYPE html>

<?php 

try {
    $bdd = new PDO('mysql:host=sql7.freesqldatabase.com;dbname=sql7800701', 'sql7800701', 'bfhPTiR56K');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$ddn = $_POST['ddn'];
$mailtext = $_POST['mail'];
$mdp = $_POST['mdp'];
$verifmdp = $_POST['verifmdp'];

$verifyemail = array();

try {
       $inscription = $bdd->prepare('INSERT INTO utilisateur(Nom, Prenom, mail, mdp, ddn, idclasse, type) VALUES(:Nom, :Prenom, :mail, :mdp, :ddn, :idclasse, :type)');
} catch (Exception $e) {
       die('Erreur : ' . $e->getMessage());
}

$token = rand(10000000,99999999);

try {
       $verify_email = $bdd->prepare('SELECT mail FROM utilisateur WHERE mail = :mail');
       $verify_email->execute([
              'mail' => $mailtext
       ]);
       $verifyemail = $verify_email->fetch();

       if ($verifyemail) {            
              echo "L'adresse mail existe déjà !";
              header('Location: erreur/101.html');
              exit();
       } else {
              if ($mdp == $verifmdp) {
                     $inscription->execute([
                            'Nom'      => $nom,
                            'Prenom'   => $prenom,
                            'mail'     => $mailtext,
                            'mdp'      => $mdp,
                            'ddn'      => $ddn,
                            'idclasse' => 0,
                            'type'     => 'e'
                     ]);

                     echo 'Inscription réussie !';
                     setcookie('token', $token);
                     $ecriretoken = $bdd->prepare('UPDATE FROM utilisateur SET token=:token WHERE mail=:mail');
                     $ecriretoken->execute([
                            'token'=>$token,
                            'mail'=>$mail,
                     ]);

                     header('Location: ../SiteNSISamuel/index.html');
                     exit();
              } else {
                     echo 'Les mdp ne correspondent pas';
              }
       }
} catch (Exception $e) {
       die('Erreur SQL : ' . $e->getMessage());
}
?>