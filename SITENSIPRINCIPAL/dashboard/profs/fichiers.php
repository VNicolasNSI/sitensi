<?php 
session_start();

try {
    $bdd = new PDO('mysql:host=sql7.freesqldatabase.com;dbname=sql7800701', 'sql7800701', 'bfhPTiR56K');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
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
                        <a class="adash" href="../../index.html">Accueil</a>&emsp;&emsp;
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
                <a class="adash" href="fichiers.html">Fichiers</a>
            </article>    
            <article class="espaceaside">
                <a class="adash" href="quiz.html">Quiz</a>
            </article>
            <article class="espaceaside">
                <a class="adash" href="statistiques.html">Stats</a>
            </article>     
        </aside>

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