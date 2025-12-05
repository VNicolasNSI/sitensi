<?php 
session_start();

try {
    $bdd = new PDO('mysql:host=localhost;dbname=nsilps', 'root', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$autorisation = $bdd->prepare("SELECT type, token FROM utilisateur WHERE token=:token");
$autorisation->execute([
    'token'=> $_SESSION['token'],
]);
$veriftoken = $autorisation->fetch();

if ($veriftoken['type'] != "p") {
    header('Location: ../../index.html');
    exit();
}

if ($veriftoken["token"] != $_SESSION["token"]) {
    header('Location: ../../Accueil/index.html');
    exit();
} 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">    
        <link rel="stylesheet" href="../../Accueil/accueil.css">
        <title>NSILPS - Dashboard professeurs</title>
    </head>
    <body class="bodydash">
        <header>
            <nav class="navdash">
                <ul>
                    <label>
                        <img src="../../images/nsi.png" width="13%">
                    </label>
                    <label class="center">
                        NSILPS - Dashboard professeurs
                    </label>
                    <label>
                        <a class="adash" href="../../Accueil/index.html">Accueil</a>&emsp;&emsp;
                    </label>
                </ul>
            </nav>
        </header>
        <aside>
            <article class="espaceaside">
                <label>Navigation</label>
            </article>
            <article class="espaceaside">
                <a class="adash" href="menu.php">Menu</a>
                <hr>
                <a class="adash" href="classes.html">Mes classes</a>
            </article>
            <article class="espaceaside">
                <a class="adash" href="leçons.html">Mes leçons</a>
            </article>
            <article class="espaceaside">    
                <a class="adash" href="fichiers.php">Fichiers</a>
            </article>    
            <article class="espaceaside">
                <a class="adash" href="quiz.html">Quiz</a>
            </article>
            <article class="espaceaside">
                <a class="adash" href="statistiques.html">Stats</a>
            </article>     
        </aside>

        <section>
            <section class="casedash">
                <label class="titre2"> 
                    <?php
                        $nom = $bdd->prepare('SELECT Prenom, Nom FROM utilisateur WHERE token=:token');
                        $nom->execute([
                            'token'=> $_SESSION['token'],
                        ]);
                        $affichernom = $nom->fetch();

                        $bienvenue = rand(0,19);

                        switch ($bienvenue) {
                            case 0:
                                echo "Bienvenue, ";
                                break;
                            case 1:
                                echo "Ravis de vous revoir, ";
                                break;
                            case 2:
                                echo "Bon retour parmis nous, ";
                                break;
                            case 3:
                                echo "Heureux de vous accueillir, ";
                                break;
                            case 4:
                                echo "Vous nous aviez manqué, ";
                                break;
                            case 5:
                                echo "Quel plaisir de vous revoir, ";
                                break;
                            case 6:
                                echo "Bonjour, ";
                                break;
                            case 7:
                                echo "Bonsoir, ";
                                break;
                            case 8:
                                echo "Toutes nos salutations distinguées, ";
                                break;
                            case 9:
                                echo "On vous attendait avec impatience, ";
                                break;
                            case 10:
                                echo "Votre fidélité nous fait chaud au cœur, ";
                                break;
                            case 11:
                                echo "Heureux de vous avoir parmi nous une fois encore, ";
                                break;
                            case 12:
                                echo "Nous sommes honorés de votre retour, ";
                                break;
                            case 13:
                                echo "Re-bienvenue, ";
                                break;
                            case 14:
                                echo "Prêt pour un nouveau tour ? ";
                                break;
                            case 15:
                                echo "Toujours un plaisir de vous revoir ici, ";
                                break;
                            case 16:
                                echo "Le comeback tant attendu ! ";
                                break;
                            case 18:
                                echo "Voilà un visage familier qu’on adore revoir, ";
                                break;
                            case 19:
                                echo "Ça fait longtemps, mais pas trop, ";
                                break;
                        }

                        echo $affichernom['Prenom'],' ', $affichernom['Nom'], ' !';
                    ?>
                </label>
            </section>    
        </section>

        <section>
            <section class="casedash">
                <article class="intercasedash">
                    <label class="espacecase">Ma dernière leçon</label>
                    <label class="espacecase">1/3 vues (33.33%)</label>
                    <label class="classedash">Terminale B</label>
                </article>
                <article class="intercasedash2">
                    <label class="espacecase">Élèves n'ayant pas encore vue la leçon</label>
                    <label class="espacecase">Farell SELLA</label>
                    <label class="espacecase">Samuel</label>
                </article>
            </section>
            <article class="boutondash">
                <article>
                    <button role="button">+ Créer une leçon</button>
                </article>
            </article>
        </section>

        <section>
            <section class="casedash">
                <article class="intercasedash">
                    <label class="espacecase">Min dernier quiz</label>
                    <label class="espacecase">3/3 quiz terminale</label>
                    <label class="classedash">Terminale B</label>
                </article>
                <article class="intercasedash2">
                    <label class="espacecase">Score moyen : 15/20 (75%)</label>
                    <label class="espacecase">Farell SELLA : 15/20</label>
                    <label class="espacecase">Samuel ANJOT (Le Goat) : 15/20</label>
                    <label class="espacecase">Valentin NICOLAS : 15/20</label>
                </article>
            </section>
            <article class="boutondash">
                <article>
                    <button role="button">+ Créer un Quiz</button>
                </article>
            </article>
        </section>
        
        <section>
            <section class="casedash">
                <article class="intercasedash">
                    <label>Statistiques</label>
                </article>
                <article class="intercasedash2">
                    <label>Statistiques</label>
                </article>
            </section>
            <article  class="boutondash">
                <article>
                    <button role="button">+ Accéder à toutes les statistiques</button>
                </article>
            </article>
        </section>
        <section class="separation">
        </section>
        
        <footer>
            <article>
                <br>
                <p>&emsp;&emsp;Créé par Samuël, Farell SELLA et Valentin NICOLAS, élèves terminale du lycée Paul-Sérusier</p>
                <p>&emsp;&emsp;Maquette réalisée par Valentin NICOLAS</p>
                <p>&emsp;&emsp;Tout droit réservé</p>
            </article>
            <article>
                &emsp;&emsp;<a href="https://lycee-serusier-carhaix.ac-rennes.fr/">Lycée Paul-Sérusier</a>
                &emsp;<a href="plan.html">Plan du site</a>
            </article>
        </footer>

    </body>


</html>