<!DOCTYPE html>

<?php 

session_start();

try {
    $bdd = new PDO('mysql:host=localhost;dbname=nsilps', 'root', 'root');
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
       $inscription = $bdd->prepare('INSERT INTO utilisateur(Nom, Prenom, mail, mdp, ddn, idclasse, type, token) VALUES(:Nom, :Prenom, :mail, :mdp, :ddn, :idclasse, :type, :token)');
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
              header('Location: ../erreur/101.html');
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
                            'type'     => 'e',
                            'token'    => $token
                     ]);
                     $_SESSION['token'] = $token;
                     echo 'Inscription réussie !';
                     header('Location: ../dashboard/eleves/index.php');
                     exit();
              } else {
                     echo 'Les mdp ne correspondent pas';
              }
       }
} catch (Exception $e) {
       die('Erreur SQL : ' . $e->getMessage());
}
?>