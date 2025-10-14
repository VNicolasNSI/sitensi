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

        <section class="casedash2">
            <section>
                <label> 
                    <iframe src="./stockage/LesbalisesHTML.pdf" width="200%" height="100%"> </iframe>
                </label>
            </section>    
        </section>

        

    </body>


</html>